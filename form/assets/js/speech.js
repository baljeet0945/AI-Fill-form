const API_URL = "https://silmma.com/speechAI/api/";
const helpText = document.querySelector(".speak-text");
const textContent = document.querySelector(".text");
const infoBar = document.querySelector(".speech");
const infoContainer = document.querySelector(".speech-container");
const btnContainer = document.querySelector(".button-container");

let authToken = {};
let speechConfig;
let speechRecognizer;
let isHold = false;
let holdTimer;
let processTimer;
let noSpeechTimer;
let speakText = "";

async function getToken() {
  try {
    const response = await fetch(`${API_URL}botRoute.php?type=${btoa("get-token")}`);
    const data = await response.json();

    if (data.msg === 'error') {
      console.log('Failed or expired authentication!');
      return; // Handle the error here
    }

    authToken = data.result;
    speechConfig = SpeechSDK.SpeechConfig.fromAuthorizationToken(data.result.token, data.result.region);
    initializeSpeechRecognition();
    btnContainer.style.display = "block";
  } catch (error) {
    console.error("Error fetching authentication token:", error);
  }
}

async function sendVoice(voice) {
  try {
    const response = await $.ajax({
      url: 'helpers/apiRoute.php?type=fill-form',
      type: 'POST',
      data: { "voice": voice, "stepform": stepHtml },
      dataType: 'json'
    });    

    if (response.msg === 'success') {
      console.log(response.result);
      if (response.result.error) {
        $('.stpsform.transup .error').html('<i class="fas fa-exclamation-triangle"></i> ' + response.result.error).show();
      } else {
        $('.stpsform.transup .error').hide();
        $.each(response.result, function(key, value) {
          const inputType = $('input[name="'+key+'"]').attr('type');
          if(inputType == 'text'){
            $('input[name="'+key+'"]').val(value);
          }else if(inputType == 'date'){
            $('input[name="'+key+'"]').val(value);
          }else if(inputType == 'radio'){
            const firstChar = value.substring( 0, 1 );
            firstChar.toUpperCase();
            tail = value.substring( 1 );
            $('input[name="'+key+'"][value="'+firstChar + tail+'"]').prop('checked', true);
          }else if(inputType == 'checkbox'){
            const firstChar = value.substring( 0, 1 );
            firstChar.toUpperCase();
            tail = value.substring( 1 );
            $('input[name="'+key+'"][value="'+firstChar + tail+'"]').prop('checked', true);
            if(firstChar + tail == "No"){
              $('input[name="'+key+'"]').prop('checked', false);
            }
          }
        });
      }
    } else {
      console.error('Error in fetch response');
    }
  } catch (error) {
    throw new Error('Error sending voice data: ' + error.message);
  }
}

const microphone = {
  mediaStream: null,
  async initialize() {
    try {
      const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
      const constraints = { audio: true, video: false };
      const stream = isIOS ?
        await navigator.mediaDevices.getUserMedia(constraints) :
        await navigator.mediaDevices.getUserMedia(constraints);

      this.mediaStream = stream;
      return true;
    } catch (error) {
      console.error("Error initializing microphone:", error);
      return false;
    }
  },
  close() {
    if (this.mediaStream) {
      const tracks = this.mediaStream.getTracks();
      tracks.forEach(track => track.stop());
      this.mediaStream = null;
    }
  },
  isInitialized() {
    return !!this.mediaStream;
  }
};

async function connectMicrophone() {
  try {
    if (!microphone.isInitialized()) {
      const isInitialized = await microphone.initialize();
      if (!isInitialized) {
        alert('Microphone access is required to use the form fill with AI. Please grant microphone permission.');
        return false;
      }
    }
    return true;
  } catch (error) {
    console.error("Error initializing microphone:", error);
    return false;
  }
}

async function startSpeechRecognition() {
  try {
    await speechRecognizer.startContinuousRecognitionAsync();
    $('#micButton').prop('checked', true);
    helpText.style.display = "block";
    helpText.innerHTML = loaderContent();
    clearTimeout(processTimer);
    clearTimeout(noSpeechTimer);
  } catch (error) {
    console.error("Error:", error);
  }
}

window.onload = async () => {
  await connectMicrophone();
};

function initializeSpeechRecognition() {
  const audioConfig = SpeechSDK.AudioConfig.fromDefaultMicrophoneInput();
  speechConfig.speechRecognitionLanguage = "en-US";
  speechConfig.enableDictation();
  speechConfig.setProfanity(SpeechSDK.ProfanityOption.Removed);
  speechConfig.setProperty(SpeechSDK.PropertyId.SpeechServiceResponse_StablePartialResultThreshold, "0");
  speechConfig.setProperty(SpeechSDK.PropertyId.Speech_SegmentationSilenceTimeoutMs, "5000");

  speechRecognizer = new SpeechSDK.SpeechRecognizer(speechConfig, audioConfig);

  speechRecognizer.recognizing = (s, e) => {     
      helpText.textContent = speakText+" "+e.result.text; 
      // Automatically scroll to the bottom
      helpText.scrollTop = helpText.scrollHeight;
  };

  speechRecognizer.recognized = (s, e) => {
    if (e.result.reason == SpeechSDK.ResultReason.RecognizedSpeech && e.result.text) {     
       speakText += " "+ e.result.text; 
    } else if (e.result.reason == SpeechSDK.ResultReason.NoMatch) {
       console.log("NOMATCH: Speech could not be recognized.");
    }
  };

  speechRecognizer.canceled = (s, e) => {
    console.log(`CANCELED: Reason=${e.reason}`);
    if (e.reason == SpeechSDK.CancellationReason.Error) {
      console.log(`"CANCELED: ErrorCode=${e.errorCode}`);
      console.log(`"CANCELED: ErrorDetails=${e.errorDetails}`);
      console.log("CANCELED: Did you set the speech resource key and region values?");
    }
    speechRecognizer.stopContinuousRecognitionAsync();
  };  

  speechRecognizer.sessionStopped = (s, e) => {
    processTimer = setTimeout(() => {
      if (speakText) {
        helpText.textContent = "";
        helpText.style.display = "none";
        infoContainer.classList.add("below-animation");
        btnContainer.style.display = "none";      
        sendVoice(speakText)
          .then(() => {
            speakText = '';
            infoContainer.classList.remove("below-animation");
            btnContainer.style.display = "block";
          })
          .catch((error) => {
            console.error('Error in sendVoice:', error);
          });
      } else {
        helpText.textContent = "No speech could be recognized.";
        noSpeechTimer = setTimeout(() => {
          helpText.textContent = "";
          helpText.style.display = "none";
        }, 1000);
      }
    }, 1000);
  }
}

$('.button-container').on('mousedown touchstart', async function(event) {
  event.stopPropagation();
  event.preventDefault();
  if (microphone.isInitialized()) {
     holdTimer = setTimeout(() => {
        isHold = true;
        startSpeechRecognition();
      }, 300); // Example: 500ms for a hold
  } else {
    const micPermissionGranted = await connectMicrophone();
    if (!micPermissionGranted) {
      alert('Microphone access is required to use the form fill with AI. Please grant microphone permission.');
    }
  }
});

$('.button-container').on('mouseup touchend mouseleave', async function(event) {
    clearTimeout(holdTimer);
    if (!isHold) {
      $('#micButton').prop('checked', false); 
      return false;
    } else {
      try {
        await speechRecognizer.stopContinuousRecognitionAsync();         
      } catch (error) {
        console.error("Error stopping speech recognition:", error);
      }
      setTimeout(function() {
        $('#micButton').prop('checked', false); // Reset button state after a short delay
      }, 300);
    }    
    isHold = false;
});

// close mic after leaving page
// Check for browser support
if (typeof document.hidden !== "undefined") {
    // Add a listener for visibility change
    document.addEventListener("visibilitychange", handleVisibilityChange);
}

function handleVisibilityChange() {
    if (document.hidden) {
        // Page is hidden, try to close the microphone stream
        try {
            // Close the microphone stream or release resources
            if (microphone.isInitialized()) {
                microphone.close(); // Assuming a method to close the microphone stream
            }
        } catch (error) {
            // Handle any errors while closing the microphone
            console.error("Error while closing the microphone:", error);
        }
    }
}

function loaderContent(){
  return `<div class="loader-speak">
        <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>`;
}

getToken();