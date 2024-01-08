import fs from 'fs';
import express from 'express';
import cors from 'cors';
import http from 'http';
import OpenAI from 'openai';
import { Server } from 'socket.io';

const app = express();
const server = http.createServer();
const io = new Server(server, {
    cors: {
        origin: "*"
    }
});
  
app.use(cors());

io.on('connection', (socket) => { 
    socket.on('connected', () => {
        console.log('A user connected');        
    });

    socket.on('disconnect', () => {
        console.log('A user disconnected');
    });

    socket.on('voice-process', (prompt) => { 
      console.log(prompt);
      io.to(socket.id).emit('voice-end', prompt); 
      return false;
      const openai = new OpenAI({
          apiKey: "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",
      });
      const history = [{"role": "system", "content": `You are an intelligent, helpful assistant helping users complete a form through voice input. The form has multiple steps, and the user's spoken responses need to be translated into structured JSON data. Fill out the form using the provided structure object/n 

      Following this steps to fill out the form:/n

      Initiation:
      Begin by greeting the user and informing them that you're here to assist in filling out a form./n

      Handling Steps:
      If the user wants to move to the next step, ensure the current step's validity before proceeding./n
      If the user wishes to go back to a previous step, allow them to do so./n

      Data Collection:
      Listen to the user's spoken input and translate it into the appropriate format based on the current form step./n
      If the user provides incorrect or unclear information, do not fill out the form. Instead, ask for clarification or prompt the user to provide the correct details./n

      JSON Output:
      Provide JSON output for each filled step only if the information provided is accurate and clear./n
      Ensure accuracy and coherence in the generated JSON./n
      Provided JSON output are always into the step structure.
      Example json:`}];  
      history.push({"role": "user", "content": prompt});  

      (async () => { 
        try {
          const completion = await openai.chat.completions.create({
            model: "gpt-3.5-turbo-1106",
            response_format: { "type": "json_object" },
            seed:1,
            messages: history,           
          });     
          const completionResponse = completion.choices[0].message; 
          if(!completionResponse.content) {            
            const completion_text = completion.choices[0].message.content;           
            io.to(socket.id).emit('voice-end', completion_text); 
          }
        } catch (error) {
          if (error.response) {
            console.log(error.response.status);
            console.log(error.response.data);
          } else {
            console.log(error.message);
          }
        }    
      })();  
    });    
});  

const port = process.env.PORT || 3000;
server.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
