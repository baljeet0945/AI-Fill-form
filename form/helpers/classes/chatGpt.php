<?php  
class CHATGPT {
   public static $data;

	public static function fillForm($req){      
		try {		
			$form = self::getForm();
			//Specify the current form step information. You'r here to assist in completing the form. If someone wishes to go back to a previous step, allow them. If someone wants to proceed to the next step, ensure the step's validity before moving forward. Only fill form according provided information. Don't fill dummy data. Give me the json for an object that represents filled step.


			$example = [
					'step1' => [
						'field_label'=> [
							'Patient Name', 
							'Age'
						],
						'field_type'=> [
							'text', 
							'text'
						],
						'field_name'=> [
							'step_1_input1', 
							'step_1_input2'
						],
						'field_value'=> ['david test', 40],
						'validation_rule' => [
							'required',
							'required'
						]
					]
				];
			$history[] = ['role' => 'system', 'content' => "You are an intelligent, helpful assistant helping users complete a form through voice input. The form has multiple steps, and the user's spoken responses need to be translated into structured JSON data. Fill out the form using the provided structure object ".json_encode($form['result'])."/n

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
				Example json:".json_encode($example)
			];	
			$history[] = ['role' => 'user', 'content' => "step ".$req['step'].": ".$req['voice']];
			
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
				// "tools"=> [
				// 	[
				// 		"type"=> "function",
				// 		"function"=> self::getCurrentStep(), 
				// 	]
				// ],
				// "tool_choice"=> "auto"
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

	 public static function getCurrentStep(){      
		return $function = 
			[
				"name" => "get_current_step",
				"description" => "Get the current step inforamtion in a given detail",
				"parameters" => [
					"type" => "object",
					"properties" => [					
						"fieldsValue" => [
							"type" => "object",
							"description" => "Fields Value",
						],						
						"stepId"	=> [
							"type"=> "number",
							"description"=> "Step Id"
						]
					],
					"required" => ["fieldValue", "stepId"],
				],
			];		
    }


	public static function getForm(){      
		try {
			$form = [
				'step1' => [
					'field_label'=> [
						'Patient Name', 
						'Age'
					],
					'field_type'=> [
						'text', 
						'text'
					],
					'field_name'=> [
						'step_1_input1', 
						'step_1_input2'
					],
					'field_value'=> [],
					'validation_rule' => [
						'required',
						'required'
					]
				],
				'step2' => [
					'field_label'=> [
						'Date of birth', 
						'Sex'
					],
					'field_type'=> [
						'date', 
						'radio'
					],
					'field_name'=> [
						'step_2_input1', 
						'step_2_input2'
					],
					'field_value'=> [],
					'validation_rule' => [
						'required and must be 6 year old',
						'required'
					]
				],
				'step3' => [
					'field_label'=> [
						'Address', 
						'City',
						'State',
						'Zip'
					],
					'field_type'=> [
						'text', 
						'text',
						'text',
						'text'
					],
					'field_name'=> [
						'step_3_input1', 
						'step_3_input2',
						'step_3_input3',
						'step_3_input4'
					],
					'field_value'=> [],
					'validation_rule' => [
						'required',
						'required',
						'required',
						'required'
					]					
				]
			];
		  $data = array('status'=>'success', 'msg'=>"Form structure", 'result'=>json_encode($form));
	   } catch (Exception $e) {
		   $data = array('status'=>'error', 'msg'=>$e->getMessage());
	   } finally {
		   return $data;
	   }		
	}
}
