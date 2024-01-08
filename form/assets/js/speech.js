const API_URL = "https://silmma.com/speechAI/api/";
var socket = io('http://localhost:3000');
const helpText = document.querySelector(".speech");
const micBtn = document.getElementById("micButton");

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
    
  } catch (error) {
    console.error("Error fetching authentication token:", error);
  }
}

async function sendVoice(text) {   
  speechRecognizer.stopContinuousRecognitionAsync(); 
  const step = $('.transup').data('id');  
   $.ajax({
      url:'helpers/apiRoute.php?type=fill-form',
      type:'POST',
      data:{"voice": text, "step":step},
      dataType:'json',
      success:function(response){
        speechRecognizer.startContinuousRecognitionAsync();
        if(response.msg == 'success'){
          if(response.result){
            $.each(response.result['step'+step].field_name, function(key, value) {
              if(response.result['step'+step].field_type[key] == 'text'){
                $('input[name="'+value+'"]').val(response.result['step'+step].field_value[key]);
              }else if(response.result['step'+step].field_type[key] == 'date'){
                $('input[name="'+value+'"]').val(response.result['step'+step].field_value[key]);
              }else if(response.result['step'+step].field_type[key] == 'radio'){
                $('input[name="'+value+'"][value="'+response.result['step'+step].field_value[key].toLowerCase()+'"]').prop('checked', true);
              }              
            });      
            setTimeout(function() {
              nextStp(+step +1); 
            }, 1000);
            
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
  speechConfig.speechRecognitionLanguage = "en-US";
  speechConfig.enableDictation();
  speechConfig.setProfanity(SpeechSDK.ProfanityOption.Removed);

  speechConfig.setProperty(SpeechSDK.PropertyId[SpeechSDK.PropertyId.Speech_SegmentationSilenceTimeoutMs], "2000");

  speechRecognizer = new SpeechSDK.SpeechRecognizer(speechConfig, audioConfig);

  speechRecognizer.startContinuousRecognitionAsync();  

  speechRecognizer.recognizing = (s, e) => {  
   helpText.textContent = e.result.text;     
  };

  speechRecognizer.recognized = (s, e) => {
    if (e.result.reason == SpeechSDK.ResultReason.RecognizedSpeech) {    
      helpText.textContent = e.result.text;  
      if(e.result.text)    {
        speechRecognizer.stopContinuousRecognitionAsync();
        socket.emit('voice-process', e.result.text);
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
    helpText.textContent = "Speak..."
    const micInitialized = await initializeMicrophone();
    if (!micInitialized) {
      alert('Microphone access is required to use the form fill with AI. Please grant microphone permission.');
      return;
    }
    socket.connect();  
    intializeSpeechRecognition();     
  } catch (error) {
    console.error("Error starting chatbot:", error);
  }
}

function closeMic() {
  socket.disconnect();
  microphone.close();
  speechRecognizer.stopContinuousRecognitionAsync();
}

socket.on('connect', function() {
  console.log("connected from the client side");
});

socket.on('voice-end', function (data) {
  console.log(data);   
  speechRecognizer.startContinuousRecognitionAsync();   
});

socket.on("disconnect", function(){
  console.log("client disconnected from server");
});

$('#micButton').on('click', function(){
  if($(this).prop('checked')){
    connectMicrophone();
  }else{
    closeMic();
  }
}); 

// Initialize the speech token ..
getToken();
