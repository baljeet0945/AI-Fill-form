<?php
require_once('classes/googleSheet.php');
require_once('classes/chatGpt.php');
$type = $_GET['type'];

if($type == "process-data"){
	// echo"<pre>";print_r($_POST);die;
	$call = SHEET::updateSheet($_POST);	
	if($call['status'] == 'error'){		
		$show = array("msg" => 'error', 'notice'=>$call['msg']);
	}else{
		$show = array("msg" => 'success', 'notice'=>$call['msg'], 'from'=>$call['result']);	
	}
	echo json_encode($show);
}

else if($type == "fill-form"){
	$call = CHATGPT::fillForm($_POST);	
	if($call['status'] == 'error'){		
		$show = array("msg" => 'error', 'notice'=>$call['msg']);
	}else{
		$show = array("msg" => 'success', 'notice'=>$call['msg'], 'result'=>$call['result']);	
	}
	echo json_encode($show);
}

else{
	$show = array("msg" => 'error', 'notice'=>'Invalid request...');
	echo json_encode($show);
}
?>