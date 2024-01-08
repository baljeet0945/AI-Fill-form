const API_URL = "https://silmma.com/speechAI/api/";
const helpText = document.getElementById("speak-text");
let authToken = {};
let speechConfig;
var speechRecognizer;

// Function to fetch authentication token
async function getToken() {
  try {
    const response = await fetch(API_URL + "botRoute.php?type=" + btoa("get-token"));
    const data = await response.json();
    if(data.msg == 'error'){
        console.log('Failed or expire authentication!');
    }
    authToken = data.result;
    speechConfig = SpeechSDK.SpeechConfig.fromAuthorizationToken(data.result.token, data.result.region);
    intializeSpeechRecognition();
  } catch (error) {
    console.error("Error fetching authentication token:", error);
  }
}

async function sendVoice(voice) {
   $.ajax({
      url:'https://taleoftriumph.com/sccforms/patient/helpers/apiRoute.php?type=fill-form',
      type:'POST',
      data:{"voice": voice, "stepform":stepHtml},
      dataType:'json',
      success:function(response){
        if(response.msg == 'success'){
          if(response.result.error){
            $('.stpsform.transup .error').html('<i class="fas fa-exclamation-triangle"></i> '+response.result.error).show();
          } else{
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
                console.log(firstChar + tail);
                $('input[name="'+key+'"][value="'+firstChar + tail+'"]').prop('checked', true);
              }
            });
          }
        }else{
          alert('Error');
        }
       console.log(response);
      }
  });
}

const microphone = {
  mediaStream: null,
  async initialize() {
      try {
          // Request microphone access using getUserMedia
          const stream = await navigator.mediaDevices.getUserMedia({ audio: true });

          // Store the microphone media stream in the object
          this.mediaStream = stream;
      } catch (error) {
          throw error; // Re-throw the error if there's a problem accessing the microphone
      }
  },
  close() {
    if (this.mediaStream) {
        const tracks = this.mediaStream.getTracks();
        tracks.forEach(track => track.stop());
        this.mediaStream = null;
    }
  }
};

const initializeMicrophone = async () => {
  try {
      if (!microphone.mediaStream) {
          await microphone.initialize();
      }
      return !!microphone.mediaStream;
  } catch (error) {
      console.error("Error initializing microphone:", error);
      return false;
  }
};

// Function to start speech recognition
function intializeSpeechRecognition() {
  const audioConfig = SpeechSDK.AudioConfig.fromDefaultMicrophoneInput();

  speechRecognizer = new SpeechSDK.SpeechRecognizer(speechConfig, audioConfig);
  speechConfig.speechRecognitionLanguage = "en-US";
  speechConfig.enableDictation();
  speechConfig.setProfanity(SpeechSDK.ProfanityOption.Removed);
  // speechConfig.setProperty(SpeechSDK.PropertyId[SpeechSDK.PropertyId.Speech_SegmentationSilenceTimeoutMs], "0");

  // speechRecognizer.recognizing = (s, e) => {
  //   helpText.textContent =  e.result.text;
  // };

  speechRecognizer.recognized = (s, e) => {
    if (e.result.reason == SpeechSDK.ResultReason.RecognizedSpeech) {
      if(e.result.text) {
        helpText.textContent += e.result.text;
      }
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
    console.log("\nSession stopped event.");
    speechRecognizer.stopContinuousRecognitionAsync();
  };

  speechRecognizer.sessionStarted = (s, e) => {
    console.log("\nSession start event.");
  };
}

// check microphone connection
async function connectMicrophone() {
  try {
    const micInitialized = await initializeMicrophone();
    if (!micInitialized) {
      alert('Microphone access is required to use the form fill with AI. Please grant microphone permission.');
      return false;
    }
    const micStatus = $('#micButton').val();
    if(micStatus == 0){
      microphone.close();
      $('#micButton').val(1);
    }
    return true;
  } catch (error) {
    return false;
    //console.error("Error starting chatbot:", error);
  }
}


$('.button-container').bind('mousedown touchstart', function(event){
    $('.stpsform.transup .error').hide();
    connectMicrophone();
    const micStatus = $('#micButton').val();
    if(micStatus == 1){
      $('#micButton').prop('checked', true);
      speechRecognizer.startContinuousRecognitionAsync();
    }
    event.stopPropagation();
    event.preventDefault();
      // document.body.appendChild(document.createTextNode("mousedown "));
});

$('.button-container').bind('mouseup touchend mouseleave', function(event){
    speechRecognizer.stopContinuousRecognitionAsync();
    microphone.close();
    if(helpText.textContent){
      sendVoice(helpText.textContent);
      helpText.textContent = "";
    }
    setTimeout(function() {
      $('#micButton').prop('checked', false);
    }, 200);
});

// Initialize the speech token ..
getToken();