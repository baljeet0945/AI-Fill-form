<?php  
class CHATGPT {
   public static $data;

	public static function fillForm($req){      
		try {		
			$history[] = ['role' => 'system', 'content' => "You are an intelligent, helpful assistant helping user's to fill the form through voice input. The form has multiple steps and input fields, and the user's spoken responses need to be filled into the input fileds./n 
			
		      ".$req['stepform']." /n

		      Handling Steps:
		      Before moving to the subsequent step, you'll validate the current information gathered from the user's input based on the input fields within the form../n

		      Data Collection:
		      You'll actively listen to the user's spoken input and structure it to align with each section of the form. If any information seems unclear or incorrect, You'll prompt the user for clarification to guarantee accuracy./n

		      JSON Output:      
		      After gathering the required information for each step, You'll have to provide always structured JSON representation based on the input field attribute name used in that step. The JSON output will always correspond to the input field attribute name to maintain coherence and accuracy. In the event of incorrect information, You'll respond with an error JSON to signify the issue."];	
			$history[] = ['role' => 'user', 'content' => $req['voice']];
			
			$ch = curl_init();
			$headers = array(
			    'Content-Type: application/json',
			    'Authorization: Bearer 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'
			);

			$data = array(
				'model' => 'gpt-3.5-turbo-1106',
				'messages' => $history,
				'temperature' => 0,
				"response_format" => ["type" => "json_object"],
				"seed" => 1,				
			);			
			curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$response = curl_exec($ch);
			$output = json_decode($response, true);		

			if(!isset($output['choices'][0]['message']['content']) || empty($output['choices'][0]['message']['content'])){
				throw new Exception("Not get result");				
			}
			$result = json_decode($output['choices'][0]['message']['content'], true);
			curl_close($ch);
		  $data = array('status'=>'success', 'msg'=>"Chatbot execute successfully", 'result'=>$result);
	   } catch (Exception $e) {
		   $data = array('status'=>'error', 'msg'=>$e->getMessage());
	   } finally {
		   return $data;
	   }		
	}

}
