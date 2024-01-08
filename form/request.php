<?php
// var_dump($_FILES);
// die();

include "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

// $a = trim($_POST["app_fname"]);

// if($a != NULL){
	/*---------*/

	 $f1patnme = $_POST["f1patnme"];
	 $f1age = $_POST["f1age"];

	 $f2dob = $_POST["f2dob"];
	 $f2sex = $_POST["f2gender"];

	 $f3add = $_POST["f3add"];

	 $f4city = $_POST["f4city"];
	 $f4state = $_POST["f4state"];
	 $f4zip = $_POST["f4zip"];

	 $f5ss = $_POST["f5ss"];
	 $f5driverlic = $_POST["f5driverlic"];

	 $rd1 = $_POST["rd1"];

	 $f7hmephn = $_POST["f7hmephn"];
	 $f7cell = $_POST["f7cell"];
	 $f7work = $_POST["f7work"];

	 $f8eml = $_POST["f8eml"];
	 $f8emercon = $_POST["f8emercon"];
	 $f8phone = $_POST["f8phone"];

	 $f9doinj = $_POST["f9doinj"];
	 $f9resforvis = $_POST["f9resforvis"];

	 $rd2 = $_POST["rd2"];	 
	 $f10refdocnme = $_POST["f10refdocnme"];

	 $f11primcare = $_POST["f11primcare"];
	 $f11phone = $_POST["f11phone"];
	 $f11city = $_POST["f11city"];

	 $f12brifover = $_POST["f12brifover"];
	 $f12injbodyprt = $_POST["f12injbodyprt"];

	 $f13privpy = $_POST["f13privpy"];

	 $f14parentguard = $_POST["f14parentguard"];
	 $f14dob = $_POST["f14dob"];
	 $f14ss = $_POST["f14ss"];

	 $f15inscomp = $_POST["f15inscomp"];
	 $f15address = $_POST["f15address"];

	 $f16city = $_POST["f16city"];
	 $f16state = $_POST["f16state"];
	 $f16zip = $_POST["f16zip"];
	 $f16phone = $_POST["f16phone"];

	 $f17policy = $_POST["f17policy"];
	 $f17memid = $_POST["f17memid"];
	 $f17copay = $_POST["f17copay"];

	 $f18nmeoncrd = $_POST["f18nmeoncrd"];
	 $f18spousepar = $_POST["f18spousepar"];

	 $f19dob = $_POST["f19dob"];
	 $f19age = $_POST["f19age"];

	 $f20employer = $_POST["f20employer"];
	 $f20address = $_POST["f20address"];

	 $f21city = $_POST["f21city"];
	 $f21state = $_POST["f21state"];
	 $f21zip = $_POST["f21zip"];
	 $f21work = $_POST["f21work"];

	 $f22medicare = $_POST["f22medicare"];
	 $f22medicade = $_POST["f22medicade"];

	 $f23insunme = $_POST["f23insunme"];
	 $f23phone = $_POST["f23phone"];

	 $f24add = $_POST["f24add"];
	 $f24city = $_POST["f24city"];
	 $f24state = $_POST["f24state"];
	 $f24work = $_POST["f24work"];

	 $f25medsuppins = $_POST["f25medsuppins"];

	 $f26attnme = $_POST["f26attnme"];
	 $f26phone = $_POST["f26phone"];
	 $f26csemangnme = $_POST["f26csemangnme"];


	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];
	 // $p_specialties_pain_management = $_POST["p_specialties_pain_management"];


	
	
	$from_mail = "cvo@specialtycareclinics.com";
	$doc_mail = "Specialty Care Clinic";

	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

				  	<tr><td style='font-size:1.3em;' colspan='2'><strong>Patient Information</strong></td></tr>
				   	<tr>
					   <td align='left' width='35%'><strong>Patient Name :</strong></td>
					   <td align='left' width='60%'>
					   ". $f1patnme  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Age :</strong></td>
					   <td align='left' width='60%'>
					   ". $f1age  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Date of birth :</strong></td>
					   <td align='left' width='60%'>
					   ". $f2dob  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Sex :</strong></td>
					   <td align='left' width='60%'>
					   ". $f2sex  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Address :</strong></td>
					   <td align='left' width='60%'>
					   ". $f3add  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>City :</strong></td>
					   <td align='left' width='60%'>
					   ". $f4city  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>State :</strong></td>
					   <td align='left' width='60%'>
					   ". $f4state  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Zip :</strong></td>
					   <td align='left' width='60%'>
					   ". $f4zip  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>SS :</strong></td>
					   <td align='left' width='60%'>
					   ". $f5ss  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Driver's License :</strong></td>
					   <td align='left' width='60%'>
					   ". $f5driverlic  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Marital status :</strong></td>
					   <td align='left' width='60%'>
					   ". $rd1  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Home phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f7hmephn  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Cell :</strong></td>
					   <td align='left' width='60%'>
					   ". $f7cell  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Work :</strong></td>
					   <td align='left' width='60%'>
					   ". $f7work  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Email address :</strong></td>
					   <td align='left' width='60%'>
					   ". $f8eml  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Emergency contact :</strong></td>
					   <td align='left' width='60%'>
					   ". $f8emercon  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f8phone  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Date of injury :</strong></td>
					   <td align='left' width='60%'>
					   ". $f9doinj  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Reson for visit :</strong></td>
					   <td align='left' width='60%'>
					   ". $f9resforvis  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Did a doctor refer you? :</strong></td>
					   <td align='left' width='60%'>
					   ". $rd2  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Referring Doctor name :</strong></td>
					   <td align='left' width='60%'>
					   ". $f10refdocnme  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Primary care physician :</strong></td>
					   <td align='left' width='60%'>
					   ". $f11primcare  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f11phone  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>City :</strong></td>
					   <td align='left' width='60%'>
					   ". $f11city  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Brief overview :</strong></td>
					   <td align='left' width='60%'>
					   ". $f12brifover  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Injured body part :</strong></td>
					   <td align='left' width='60%'>
					   ". $f12injbodyprt  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Private pay :</strong></td>
					   <td align='left' width='60%'>
					   ". $f13privpy  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Parent/Guardian :</strong></td>
					   <td align='left' width='60%'>
					   ". $f14parentguard  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Date of birth :</strong></td>
					   <td align='left' width='60%'>
					   ". $f14dob  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>SS :</strong></td>
					   <td align='left' width='60%'>
					   ". $f14ss  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Insurance company :</strong></td>
					   <td align='left' width='60%'>
					   ". $f15inscomp  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Address :</strong></td>
					   <td align='left' width='60%'>
					   ". $f15address  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>City :</strong></td>
					   <td align='left' width='60%'>
					   ". $f16city  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>State :</strong></td>
					   <td align='left' width='60%'>
					   ". $f16state  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Zip :</strong></td>
					   <td align='left' width='60%'>
					   ". $f16zip  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f16phone  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Policy :</strong></td>
					   <td align='left' width='60%'>
					   ". $f17policy  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Member Id :</strong></td>
					   <td align='left' width='60%'>
					   ". $f17memid  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Co-pay :</strong></td>
					   <td align='left' width='60%'>
					   ". $f17copay  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Name on card :</strong></td>
					   <td align='left' width='60%'>
					   ". $f18nmeoncrd  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Spouse/parent/self(circle one) SS :</strong></td>
					   <td align='left' width='60%'>
					   ". $f18spousepar  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Date of birth :</strong></td>
					   <td align='left' width='60%'>
					   ". $f19dob  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Age :</strong></td>
					   <td align='left' width='60%'>
					   ". $f19age  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Employer :</strong></td>
					   <td align='left' width='60%'>
					   ". $f20employer  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Address :</strong></td>
					   <td align='left' width='60%'>
					   ". $f20address  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>City :</strong></td>
					   <td align='left' width='60%'>
					   ". $f21city  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>State :</strong></td>
					   <td align='left' width='60%'>
					   ". $f21state  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Zip :</strong></td>
					   <td align='left' width='60%'>
					   ". $f21zip  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Work :</strong></td>
					   <td align='left' width='60%'>
					   ". $f21work  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Medicare :</strong></td>
					   <td align='left' width='60%'>
					   ". $f22medicare  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Medicade :</strong></td>
					   <td align='left' width='60%'>
					   ". $f22medicade  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Insurance Name :</strong></td>
					   <td align='left' width='60%'>
					   ". $f23insunme  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f23phone  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Address :</strong></td>
					   <td align='left' width='60%'>
					   ". $f24add  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>City :</strong></td>
					   <td align='left' width='60%'>
					   ". $f24city  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>State :</strong></td>
					   <td align='left' width='60%'>
					   ". $f24state  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Work :</strong></td>
					   <td align='left' width='60%'>
					   ". $f24work  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Case handled by attorney :</strong></td>
					   <td align='left' width='60%'>
					   ". $f25medsuppins  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Attorney name :</strong></td>
					   <td align='left' width='60%'>
					   ". $f26attnme  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Phone :</strong></td>
					   <td align='left' width='60%'>
					   ". $f26phone  ."</td>
					</tr>
					<tr>
					   <td align='left' width='35%'><strong>Case manager name :</strong></td>
					   <td align='left' width='60%'>
					   ". $f26csemangnme  ."</td>
					</tr>					

				   </table>";


				   

$mail = new PHPMailer(true);

try {
//From email address and name
$mail->From = $from_mail;
$mail->FromName = $doc_mail;

//To address and name
// $mail->addAddress("fe@gmicro.us", "User Details");
$mail->addAddress("phpdevgmicro@gmail.com", "User Details");


// var_dump($_POST);
	// exit();
$mail->isSMTP();                                            // Send using SMTP
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; 
$mail->SMTPSecure = 'tls';         							// Enable TLS encryption; 
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->Port       = 587;
$mail->isHTML(true);
$mail->CharSet = 'UTF-8';                              // SMTP password
$mail->Username   = 'cvo@specialtycareclinics.com';                     // SMTP username
$mail->Password   = 'SCC!@345';                               // SMTP password`PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->setFrom('cvo@specialtycareclinics.com');

$mail->Subject = "Appointment Form";
$mail->Body = $message;

	$mail->send();
	 // $location = $_POST["location"];

	
		 
				  
		//if(mail("content@gmicro.us, fe@gmicro.us", $subject, $message, $headers))
		echo "Your enquiry has been sent successfully..";
	} catch (Exception $e) {
		echo $e;
		echo "Something went wrong";	 
		}

		
		//$msg = "Your enquiry has been sent successfully.";
		
	
?>