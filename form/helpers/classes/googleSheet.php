<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);  
error_reporting(E_ALL);
use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets\SpreadSheet;
require_once($_SERVER['DOCUMENT_ROOT']."/sccforms/patient/library/vendor/autoload.php");

class SHEET {
   public static $data;  

    public static function getFormById($formId){ 
        try {   
            $resultSet = array();                   
            $client = new Client();
            // $client->setAuthConfig('../helpers/scc-patient-intake-902d24e045b5.json'); //kalpesh
            $client->setAuthConfig('../helpers/speciality-care-clinic-d383e97ab425.json'); //hiren
            $client->addScope(Drive::DRIVE);            
            $service = new Google_Service_Sheets($client);
            // $spreadsheetId = '19CYXopfdiEJkM5-qW9euG6GoRk41Jr9koTcwpcTsR1Q'; //kalpesh sheet
            $spreadsheetId = '18ktD0DnVb3uA0BgbhAKdmdvlIk8ZFm-pQEzh6Jp9bn4'; //hiren sheet
            
            $response = $service->spreadsheets_values->get($spreadsheetId, 'Sheet1!T:U');
           
            $rows = $response->getValues();          
            if(empty($rows)){
                throw new Exception("Sheet is empty");
            }
            $headers = array_shift($rows); 
            $key = array_search($formId, array_column($rows, 0));
            if(!$key){
                throw new Exception("Not found any form with this ref no.");
            }
            $resultSet = $rows[$key][1];
            $data = array('status'=>'success', 'msg'=>"Sheet fetch successfull", 'result'=>$resultSet);
       } catch (Exception $e) {
           $data = array('status'=>'error', 'msg'=>$e->getMessage());
       } finally {
           return $data;
       }        
    }


    public static function updateSheet($req){ 
		try {	
            //echo"<pre>";print_r();
            $formNo = uniqid().time();
            $patientInfo = array_slice(array_column($req, NULL), 0, 17);
            array_push($patientInfo, date('Y-m-d'));
            array_push($patientInfo, 'https://taleoftriumph.com/sccforms/patient/pdf?ref='.$formNo);
            array_push($patientInfo, $formNo);
            array_push($patientInfo, json_encode($req));         

            $client = new Client();
            // $client->setAuthConfig('../helpers/scc-patient-intake-902d24e045b5.json'); //kalpesh
            $client->setAuthConfig('../helpers/speciality-care-clinic-d383e97ab425.json'); //hiren
            $client->addScope(Drive::DRIVE);            
            $service = new Google_Service_Sheets($client);
            // $spreadsheetId = '19CYXopfdiEJkM5-qW9euG6GoRk41Jr9koTcwpcTsR1Q'; //kalpesh sheet
            $spreadsheetId = '18ktD0DnVb3uA0BgbhAKdmdvlIk8ZFm-pQEzh6Jp9bn4'; //hiren sheet


            $rows = [$patientInfo];
            $valueRange = new \Google_Service_Sheets_ValueRange();
            $valueRange->setValues($rows);
            
            $params = [
                'valueInputOption' => "RAW"
            ];
            $range = "Sheet1";

            $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, $params); 

		    $data = array('status'=>'success', 'msg'=>"Data append into sheet successfull", 'result'=>$formNo);
	    } catch (Exception $e) {
		   $data = array('status'=>'error', 'msg'=>$e->getMessage());
	    } finally {
		   return $data;
	    }		
	}

}