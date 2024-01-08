const API_URL = "https://silmma.com/speechAI/api/";
// var socket = io('http://localhost:3000');
const helpText = document.getElementById("typed-text");
const cursor = document.getElementById("cursor");
const formContainer = document.querySelector('.transup');
const speechTextContainer = document.querySelector(".speech");
const speechContainer = document.querySelector(".speech-container");
const speakText = document.querySelector(".speak-text");


let authToken = {};
let speechConfig;
var speechRecognizer;

// Function to update the position of the form
function updateFormPosition() {
  let offset;

  if (window.innerWidth <= 480) {
    // For phones
    offset = 80;
  } else {
    // For devices wider than phones
    offset = 60;
  }

  const newFormTop = helpText.offsetHeight + offset;
  console.log(newFormTop);
  formContainer.style.top = `${newFormTop}px`;
}


// Function to simulate typing effect
function typeEffect(text, index = 0, lineIndex = 0) {
  const lines = text.split('\n');

  if (lineIndex < lines.length) {
    const currentLine = lines[lineIndex];
    if (index < currentLine.length) {
      helpText.innerHTML += currentLine.charAt(index);
      index++;
      setTimeout(() => typeEffect(text, index, lineIndex), 50); // Adjust the delay for typing speed
    } else {
      lineIndex++;
      helpText.innerHTML += '<br>'; // Move to the next line
      index = 0;
      setTimeout(() => {
        typeEffect(text, index, lineIndex), 50
  updateFormPosition();

      });
    }
  } else {
    cursor.style.display = "none"; // Hide the cursor when typing is complete
  }
}

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
                $('input[name="'+key+'"][value="'+value.toLowerCase()+'"]').prop('checked', true);
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
  speakText.style.display = 'block';
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
  speechConfig.speechRecognitionLanguage = "en-US";
  speechConfig.enableDictation();
  speechConfig.setProfanity(SpeechSDK.ProfanityOption.Removed);

  speechConfig.setProperty(SpeechSDK.PropertyId[SpeechSDK.PropertyId.Speech_SegmentationSilenceTimeoutMs], "2000");

  speechRecognizer = new SpeechSDK.SpeechRecognizer(speechConfig, audioConfig);

  speechRecognizer.startContinuousRecognitionAsync();



  speechRecognizer.recognized = (s, e) => {
  speakText.style.display = 'none';
    speechTextContainer.classList.add("below-animation")
    if (e.result.reason == SpeechSDK.ResultReason.RecognizedSpeech) {
      // helpText.textContent = ""; // Clear existing text
    cursor.style.display = "inline"; // Show the cursor
    typeEffect(e.result.text);
      if(e.result.text) {
        speechRecognizer.stopContinuousRecognitionAsync();
        sendVoice(e.result.text);
        //socket.emit('voice-process', e.result.text, stepHtml);
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
    stopTypingEffect();
    speechRecognizer.stopContinuousRecognitionAsync();
  };

  speechRecognizer.sessionStarted = (s, e) => {
    console.log("\nSession start event.");
  };
}

// check microphone connection
async function connectMicrophone() {
  try {
    // helpText.textContent = "Speak..."
    const micInitialized = await initializeMicrophone();
    if (!micInitialized) {
      alert('Microphone access is required to use the form fill with AI. Please grant microphone permission.');
      return;
    }
    //socket.connect();
    intializeSpeechRecognition();
  } catch (error) {
    console.error("Error starting chatbot:", error);
  }
}

function closeMic() {
  //socket.disconnect();
  microphone.close();
  speechRecognizer.stopContinuousRecognitionAsync();
}

// socket.on('connect', function() {
//   console.log("connected from the client side");
// });

// socket.on('voice-end', function (status, response) {
//   console.log(status)
//   console.log(response)
//   const result = jQuery.parseJSON(response);
//   if(status == 'success'){
//     if(result.error){
//       $('.stpsform.transup .error').html('<i class="fas fa-exclamation-triangle"></i> '+result.error).show();
//     } else{
//       $.each(result, function(key, value) {
//         const inputType = $('input[name="'+key+'"]').attr('type');
//         if(inputType == 'text'){
//           $('input[name="'+key+'"]').val(value);
//         }else if(inputType == 'date'){
//           $('input[name="'+key+'"]').val(value);
//         }else if(inputType == 'radio'){
//           $('input[name="'+key+'"][value="'+value.toLowerCase()+'"]').prop('checked', true);
//         }
//       });
//     }
//   }else{
//     console.warn(result)
//   }
//   speechRecognizer.startContinuousRecognitionAsync();
// });

// socket.on("disconnect", function(){
//   console.log("client disconnected from server");
// });

$('.button-container').on('mousedown touchstart keydown ', function(){
    $('#micButton').prop('checked', true);
    $('.stpsform.transup .error').hide();
    connectMicrophone();
});

$('.button-container').on('mouseup touchend keyup', function(){
   setTimeout(function() {
         $('#micButton').prop('checked', false);
    },200);
  closeMic();
});

// Initialize the speech token ..
getToken();


// Add a function to stop the typing effect
function stopTypingEffect() {
  cursor.style.display = "none"; // Hide the cursor
}