<?php require_once("../vendor/autoload.php");
require_once('../helpers/classes/googleSheet.php');
$objSheet = New SHEET();
$getSheet = $objSheet->getFormById($_GET['ref']);

if($getSheet['status'] == 'error' || empty($getSheet['result'])){
  die('No form data found with this ref no.');
}
$formData = json_decode($getSheet['result'], true);
// echo"<pre>";print_r($formData);die;
$html = '<!DOCTYPE html>
<html>  
<body>
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;" cellpadding="1">
    <thead>
      <tr><td colspan="9" align="center"><b>Patient Information</b></td></tr>
      <tr>
        <td width="20%">Name</td>
        <td width="10%">Age</td>
        <td width="10%">DOB</td>
        <td width="10%">Sex</td>
        <td width="10%">Address</td>
        <td width="10%">City</td>
        <td width="10%">State</td>
        <td width="10%">Zip</td>
        <td width="10%">SS#</td>
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>'.$formData['step_1_input1'].'</td>
      <td>'.$formData['step_1_input2'].'</td>
      <td>'.$formData['step_2_input1'].'</td>
      <td>'.$formData['step_2_input2'].'</td>
      <td>'.$formData['step_3_input1'].'</td>
      <td>'.$formData['step_3_input2'].'</td>
      <td>'.$formData['step_3_input3'].'</td>
      <td>'.$formData['step_3_input4'].'</td>
      <td>'.$formData['step_4_input1'].'</td>     
    </tr>  
    </tbody>
  </table>

   <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;" cellpadding="1">
    <thead>
      <tr>
        <td width="10%">Driver\'s License#</td>
        <td width="10%">Marital status</td>
        <td width="10%">Home phone</td>
        <td width="10%">Cell</td>
        <td width="10%">Work</td>
        <td width="20%">Email address</td>
        <td width="10%">Emergency contact name</td>
        <td width="20%">Phone</td>  
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>'.$formData['step_4_input2'].'</td>
      <td>'.$formData['step_5_input1'].'</td>
      <td>'.$formData['step_6_input1'].'</td>
      <td>'.$formData['step_6_input2'].'</td>
      <td>'.$formData['step_6_input3'].'</td>
      <td>'.$formData['step_7_input1'].'</td>
      <td>'.$formData['step_7_input2'].'</td>
      <td>'.$formData['step_7_input3'].'</td>   
    </tr>  
    </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
      <thead>
       <tr><td colspan="7" align="center"><b>Referral Information</b></td></tr>
        <tr>
          <td width="10%">Date of injury</td>
          <td width="20%">Reson for visit</td>
          <td width="10%">Did a doctor refer you?</td>
          <td width="20%">Referring Doctor name</td>
          <td width="20%">Primary care physician</td>
          <td width="10%">Phone</td>
          <td width="10%">City</td>     
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_8_input1'].'</td>
        <td>'.$formData['step_8_input2'].'</td>
        <td>'.$formData['step_9_input1'].'</td>
        <td>'.$formData['step_9_input2'].'</td>
        <td>'.$formData['step_10_input1'].'</td>
        <td>'.$formData['step_10_input2'].'</td>
        <td>'.$formData['step_10_input3'].'</td>
      </tr>  
      </tbody>
  </table> 

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
      <thead>
      <tr><td colspan="6" align="center"><b>Mechanism of injury description</b></td></tr>
        <tr>
          <td width="20%">Brief overview</td>
          <td width="20%">Injured body part</td>
          <td width="10%">Private pay</td>
          <td width="20%">Parent/Guardian</td>
          <td width="20%">Date of birth</td>
          <td width="10%">SS#</td>          
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_11_input1'].'</td>
        <td>'.$formData['step_11_input2'].'</td>
        <td>'.$formData['step_12_input1'].'</td>
        <td>'.$formData['step_13_input1'].'</td>
        <td>'.$formData['step_13_input2'].'</td>
        <td>'.$formData['step_13_input3'].'</td>
      </tr>  
      </tbody>
  </table>
 
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
      <thead>
      <tr><td colspan="9" align="center"><b>Insured Information(Group Insurance)</b></td></tr>
        <tr>
          <td width="20%">Insurance company</td>
          <td width="10%">Address</td>
          <td width="10%">City</td>
          <td width="10%">State</td>
          <td width="10%">Zip</td>
          <td width="10%">Phone</td>  
          <td width="10%">Policy#</td> 
          <td width="10%">Member Id</td> 
          <td width="10%">Co-pay</td>          
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_14_input1'].'</td>
        <td>'.$formData['step_15_input1'].'</td>
        <td>'.$formData['step_15_input2'].'</td>
        <td>'.$formData['step_15_input3'].'</td>
        <td>'.$formData['step_15_input4'].'</td>
        <td>'.$formData['step_16_input1'].'</td>
        <td>'.$formData['step_16_input2'].'</td>
        <td>'.$formData['step_16_input3'].'</td>
        <td>'.$formData['step_16_input4'].'</td> 
      </tr>  
      </tbody>
  </table>


  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
      <thead>
      <tr><td colspan="10" align="center"><b>Primary Card Holder\'s Information</b></td></tr>
        <tr>
          <td width="10%">Name on card</td>
          <td width="10%">Spouse/parent/self(circle one) SS#</td>
          <td width="10%">DOB</td>
          <td width="10%">Age</td>
          <td width="10%">Employer</td>
          <td width="10%">Address</td>  
          <td width="10%">City</td> 
          <td width="10%">State</td> 
          <td width="10%">Zip</td>   
          <td width="10%">Work</td>       
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_17_input1'].'</td> 
        <td>'.$formData['step_17_input2'].'</td> 
        <td>'.$formData['step_18_input1'].'</td> 
        <td>'.$formData['step_18_input2'].'</td> 
        <td>'.$formData['step_19_input1'].'</td> 
        <td>'.$formData['step_20_input1'].'</td> 
        <td>'.$formData['step_20_input2'].'</td> 
        <td>'.$formData['step_20_input3'].'</td> 
        <td>'.$formData['step_20_input4'].'</td> 
        <td>'.$formData['step_20_input5'].'</td> 
      </tr>  
      </tbody>
  </table>
  
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1"  cellspacing="10">
      <thead>
      <tr><td colspan="2" align="center"><b>Medicare/Medicaid</b></td></tr>
        <tr>
          <td width="50%">Medicare</td>
          <td width="50%">Medicaid</td>                
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_21_input1'].'</td> 
        <td>'.$formData['step_21_input2'].'</td>        
      </tr>  
      </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
      <thead>
      <tr><td colspan="10" align="center"><b>Medicare Suppliment Insurance</b></td></tr>
        <tr>
          <td width="10%">Insurance Name</td>
          <td width="10%">Phone</td> 
          <td width="10%">Address</td> 
          <td width="10%">City</td> 
          <td width="10%">State</td>
          <td width="10%">Work</td> 
          <td width="10%">Case handled by attorney</td> 
          <td width="10%">Attorney name</td> 
          <td width="10%">Attorney Phone</td> 
          <td width="10%">Case manager name</td> 
        </tr>
      </thead>
      <tbody>
      <tr>
          <td>'.$formData['step_22_input1'].'</td> 
          <td>'.$formData['step_22_input2'].'</td>
          <td>'.$formData['step_23_input1'].'</td>         
          <td>'.$formData['step_23_input2'].'</td> 
          <td>'.$formData['step_23_input3'].'</td> 
          <td>'.$formData['step_23_input4'].'</td> 
          <td>'.$formData['step_24_input1'].'</td> 
          <td>'.$formData['step_25_input1'].'</td> 
          <td>'.$formData['step_25_input2'].'</td> 
          <td>'.$formData['step_25_input3'].'</td> 
      </tr>  
      </tbody>
  </table>

  <div class="rounded">    
    <b>WORKER’S COMPENSATION:</b>  
    <p>It is important that you make our office aware if this is a work comp injury prior to your visit. Please have all relevant information available in order to quickly complete your check-in process.<br><br>

    <b><u>EMPLOYER PAY:</u></b> If your employer is paying for your visit instead of filing worker’s comp, we must have payment up front or a signed contract in hand before your visit. We must be notified of any responsibility changes the employer makes within 80 days of first date of service.<br><br>

    By signing this you are acknowledging that all the above information is accurate and correct to the best of your knowledge.</p>

    <table class="sign" width="100%" style="border-collapse:collapse;"cellpadding="0">
      <tbody>
        <tr>
          <td width="40%"><b>PATIENT/GUARDIAN SIGNATURE:</b></td>
          <td width="10%" align="left" style="border-bottom: 0.1mm solid #000000;"><img width="100" src="'.$formData['step_85_input1'].'" alt="signature"> </td> 
          <td width="20%"></td> 
          <td width="10%"><b>DATE:</b></td> 
          <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_85_input2'].'</td>
        </tr>
      </tbody>      
    </table>
  </div>

  <div style="page-break-before:always"></div>

  <h4 style="text-align:center;">CONSENT FOR TREATMENT AND FINANCIAL AGREEMENT</h4>

  <div class="rounded">
      <table class="sign" width="100%" style="border-collapse:collapse;margin-top:10pt;"cellpadding="0">
        <tbody>
          <tr>
            <td width="20%"><b>Patient name:</b></td>
            <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_27_input1'].'</td> 
            <td width="10%"></td> 
            <td width="20%"><b>Date of birth:</b></td> 
            <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_27_input2'].'</td>
          </tr>
        </tbody>      
      </table>

    <p style="margin-top:10pt;">I authorize <b>IMED Physicians</b>, to examine me (or the patient I am legally responsible for) and to do any x-rays or other diagnostic tests that may be needed to make a diagnosis and to provide treatment. I consent to necessary office or other outpatient treatment after being properly informed of alternatives, benefits, and risks.</p>

    <b>AUTHORIZATION FOR RELEASE OF MEDICAL INFORMATION</b>
    <p>I authorize Specialty Care Clinics to release to any Insurance company, health plan, or governmental agency such medical information that may be required to process my claim for payment of this medical bill.<br><br>

    I also authorize Specialty Care Clinics to release appropriate medical information to any doctor, hospital, or other health care facility that has or will participate in my (the patient’s) care. I authorize a photocopy, facsimile, or other electronic transmission of the above Assignments, Authorizations, and Releases, to be used in place of the original until/unless I send written notice to the contrary to the offices of Specialty Care Clinics. I further authorize any other doctor, hospital, or health care facility to release to Specialty Care Clinics office any medical information concerning my (the patient’s) illness or injury.</p>

    <b>FINANCIAL AGREEMENT</b>
    <p>I agree to pay all professional fees charged by Specialty Care Clinics for my (the patient’s) care, irrespective of any insurance benefits to which I may be entitled, except if Specialty Care Clinics has agreed to accept insurance benefits as full payment for covered services in accordance with federal or state law (e.g. Medicare, Medicaid) or by contract with a prepaid health plan or managed-care plan, and provided such Insurance benefits are paid within 60 days of claims submission, and provided there is no recovery from a third-party negligence lawsuit (see Injuries and Third-Party Negligence, below). Ultimately, it is your responsibility to understand the coverage that you pay for in a monthly premium to your carrier. If an employer or its carrier denies a claim for payment for a work-related injury, or if a prepaid health plan, managed-care health plan, or Medicare, considers certain services ineligible or uncovered services, then you (patient) agree to pay for those services. It is understood that claims for services remaining unpaid 60 days after claims submission shall be presumed ineligible for insurance reimbursement, and you (patient) shall pay for those services. If patient is a minor — the parent/ guardian who requests treatment for a child will be responsible for all fees.</p>

    <b>INJURIES AND THRID-PARTY NEGLIGENCE</b>
    <p>I understand and agree that if Specialty Care Clinics has granted discounts from its usual fees for any reason, including its participation in prepaid or managed-care health plans, and if I (the patient) recover(s) any monies as the result of any judgment, award, or settlement of any lawsuit arising from treated injuries or illness, then I shall give a lien to Specialty Care Clinics against such monetary recovery in the full amount of such discounts.</p>

    <b>DELINQUENCY</b>
    <p>If my (the patient’s) account becomes delinquent, I understand that Specialty Care Clinics at its sole discretion, may refer to a collection agency or an attorney as allowed by law.</p>


    <b>INSURANCE ASSIGNMENT</b>
    <p>I authorize my insurance company or third-party payer to whom a claim for payment has been submitted to pay any eligible benefits directly to Specialty Care Clinics. I hereby authorize payment to go directly to Specialty Care Clinics for medical benefits payable by insurance company<span class="input-line">&nbsp;'.$formData['step_31_input1'].'&nbsp;</span> (and/or Medicare) and understand that I am responsible for any charge not covered by the terms of my insurance policy. I hereby assign Specialty Care Clinics full rights to represent my (the patient’s) interests in any complaints of appeals for denial of benefits or reimbursement to the Texas Department of Insurance (State Insurance Commissioner). I hereby authorize said assignee Specialty Care Clinics to furnish these agencies such information as may be necessary to support such complaints or appeals.<br><br>
    I agree I cannot revoke the FINANCIAL AGREEMENT or the INSURANCE ASSIGNMENT at any time while any portion of the medical bill remains unpaid. I have read, understand, and do hereby agree to the terms of the forgoing Assignments, Authorizations, and Releases. I also certify that the PATIENT INFORMATION I have provided is true and accurate to the best of my knowledge.</p>
  </div>

  <h4 style="text-align:center;">HIPAA Compliance Patient Consent Form</h4>

  <div class="rounded">
      <p>Our Notice of Privacy Practices provides information about how we may use or disclose protected health information.<br><br>
      The notice contains a patient’s rights section describing your rights under the law. You ascertain that by your signature that you have reviewed our notice before signing this consent.<br><br>
      The terms of the notice may change, if so, you will be notified at your next visit to update your signature/date.<br><br>
      You have the right to restrict how your protected health information is used and disclosed for treatment, payment or healthcare operations. We are not required to agree with this restriction, but if we do, we shall honor this agreement. The HIPAA (Health Insurance Portability and Accountability Act of 1996) law allow for the use of the information for treatment, payment or healthcare operations.<br><br>
      By signing this form, you consent to our use and disclosure of your protected healthcare information and potentially anonymous usage in a publication. You have the right to revoke this consent in writing, signed by you. However, such a revocation will not be retroactive.</p> 
      <ol>
        <li>By signing this form, I understand that:</li>
        <li>Protected health information may be disclosed or used for treatment, payment, or healthcare operations.</li>
        <li>The practice reserves the right to change the privacy policy as allowed by law</li>
        <li>The practice has the right to restrict the use of the information but the practice does not have to agree to those restrictions.</li>
        <li>The patient has the right to revoke this consent in writing at any time and all full disclosures will then cease.</li>
        <li>The practice may condition receipt of treatment upon execution of this consent.</li>
      </ol> 
  </div>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">May we phone, email, or send a text to you to confirm appointments?</td> <td width="40%">'.$formData['step_34_input1'].'</td></tr>
      <tr><td class="label" width="60%">May we leave a message on your answering machine at home or on your cell phone?</td> <td width="40%">'.$formData['step_34_input2'].'</td></tr>
      <tr><td class="label" width="60%">May we discuss your medical condition with any member of your family?</td> <td width="40%">'.$formData['step_34_input3'].'</td></tr>
      <tr><td class="label" width="60%">If YES, please name the members allowed:</td> <td width="40%">'.$formData['step_34_input4'].'</td></tr>
      <tr><td class="label" width="60%">This consent was signed by:</td> <td width="40%">'.$formData['step_35_input1'].'</td></tr>
      <tr><td class="label" width="60%">Witness:</td> <td width="40%">'.$formData['step_35_input2'].'</td></tr>
      <tr><td class="label" width="60%">Date</td> <td width="40%">'.$formData['step_35_input3'].'</td></tr>
    </tbody>
  </table>

  <div style="page-break-before:always"></div>

  <h4 style="text-align:center;">PRESCRIPTION REFILLS AND PHONE MESSAGES</h4>
  <div class="rounded">
    <b>PATIENT INSURANCE POLICY:</b>
    <ol>
      <li>It is your responsibility to know your insurance and bring your card with you to all appointments</li>
      <li>Is physician a CONTRACTED PROVIDER of your insurance?</li>
      <li>Do you need PRIOR AUTHORIZATION for procedures?</li>
      <li>Are X-Rays and Supplies included in your COPAY?</li>
      <li>How much is your COPAY for a Specialist?</li>
      <li>Do you have a YEARLY DEDUCTIBLE? If so, has it been met?</li>
    </ol>  
    <p>PLEASE HELP US HELP YOU. There are hundreds of insurance companies thereby making it almost impossible for our staff to know the specific requirements for each policy. Please call your insurance company prior to your appointment to obtain this needed information.</p>

    <b>PROTOCOL FOR PRESCRIPTION REFILLS:</b>
    <ol>
      <li>Please allow 48-72 hours on refill requests.</li>
      <li>Notify your Pharmacy directly on refills</li>
    </ol>
    <p>In order to be as efficient as possible these are the policies in effect regarding all prescriptions.</p>
  </div>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="3">
    <tbody>
      <tr><td colspan="2" class="label" align="center"><b>HIPAA EXCEPTIONS</b></td></tr>
      <tr><td class="label" width="60%">OK to have a message left on my answering machine</td> <td width="40%">'.$formData['step_38_input1'].'</td></tr>    
      <tr><td class="label" width="60%">OK to leave a message with spouse</td> <td width="40%">'.$formData['step_38_input2'].'</td></tr>
      <tr><td class="label" width="60%">Name Of Spouce</td> <td width="40%">'.$formData['step_38_input3'].'</td></tr>
      <tr><td class="label" width="60%">OK to leave a message with any adult who answers my phone</td> <td width="40%">'.$formData['step_38_input4'].'</td></tr>
      <tr><td class="label" width="60%">OK to leave a message regarding appointments ONLY</td> <td width="40%">'.$formData['step_38_input5'].'</td></tr>      
    </tbody>
  </table>

  <p>I have read and understand the above information regarding MY INSURANCE POLICY, PRESCRIPTION REFILLS, and the HIPAA EXCEPTIONS AUTHORIZATION for leaving messages.</p>

  <table class="sign" width="100%" style="border-collapse:collapse;"cellpadding="0">
      <tbody>
        <tr>
          <td width="40%"><b>PATIENT/GUARDIAN SIGNATURE:</b></td>
          <td width="10%" align="left" style="border-bottom: 0.1mm solid #000000;"><img width="100" src="'.$formData['step_85_input1'].'" alt="signature"> </td> 
          <td width="20%"></td> 
          <td width="10%"><b>DATE:</b></td> 
          <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_85_input2'].'</td>
        </tr>
      </tbody>      
  </table>

  <div style="page-break-before:always"></div>

  <h4 style="text-align:center;">MEDICAL RELEASE FORM</h4>
  <p>I hereby authorize <span style="color: #000;width:40px;text-decoration:underline;">'.$formData['step_39_input1'].' </span>to release to Specialty Care Clinics, located at 2600 W Pleasant Run Rd, Lancaster, TX 75146</p>   

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <thead>
    <tr><td colspan="3" class="label" align="center"><b>Information contained in the Medical Records of:</b></td></tr>
      <tr>
        <td width="33%">Name of Patient</td>
        <td width="33%">Date of Birth</td> 
        <td width="33%">Social Security #</td>          
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>'.$formData['step_39_input2'].'</td>
      <td>'.$formData['step_39_input3'].'</td>
      <td>'.$formData['step_39_input4'].'</td>          
    </tr>  
    </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
  <tr><td colspan="12" class="label" align="center"><b>Specific Information to be Disclosed:</b></td></tr>
    <tr>
      <td width="5%">History</td>
      <td width="5%">Physical</td> 
      <td width="5%">Therapy Reports</td>    
      <td width="5%">Operative Report</td>   
      <td width="5%">X-Rays</td>         
      <td width="5%">Care Plan</td>   
      <td width="5%">Lab Report</td>   
      <td width="5%">ERG</td>   
      <td width="5%">Office Notes</td>   
      <td width="5%">Psychological Reports</td>
      <td width="5%">Immunizations</td> 
      <td width="35%">Other</td>            
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_40_input1'].'</td>
    <td>'.$formData['step_40_input2'].'</td>
    <td>'.$formData['step_40_input3'].'</td>
    <td>'.$formData['step_40_input4'].'</td>
    <td>'.$formData['step_40_input5'].'</td>
    <td>'.$formData['step_40_input6'].'</td>
    <td>'.$formData['step_40_input7'].'</td>
    <td>'.$formData['step_40_input8'].'</td>
    <td>'.$formData['step_40_input9'].'</td>
    <td>'.$formData['step_40_input10'].'</td>
    <td>'.$formData['step_40_input11'].'</td>
    <td>'.$formData['step_40_input13'].'</td>
  </tr>  
  </tbody>
</table>

<p>I give permission for release of any information in my records, including information relevant to substance abuse, psychiatric mental health services or HIV (positive or negative) unless specifically excluded below.</p>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr><td colspan="4" class="label" align="center"><b>Do Not Release Information Related To::</b></td></tr>
    <tr>
      <td width="20%">HIV</td>
      <td width="20%">Substance Abuse</td> 
      <td width="20%">Psychiatric/Mental Health</td>    
      <td width="40%">Other</td>         
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_41_input1'].'</td>
    <td>'.$formData['step_41_input2'].'</td>
    <td>'.$formData['step_41_input3'].'</td>
    <td>'.$formData['step_41_input5'].'</td> 
  </tr>  
  </tbody>
</table>

<p>THE ABOVE INFORMATION IS RELEASED FOR THE FOLLOWING PURPOSE AND THAT PURPOSE ONLY. PURPOSE OF RELEASE:</p>
<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr>
      <td width="20%">Medical</td>
      <td width="20%">Attorney</td> 
      <td width="20%">Insurance</td>    
      <td width="40%">Other</td>         
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_42_input1'].'</td>
    <td>'.$formData['step_42_input2'].'</td>
    <td>'.$formData['step_42_input3'].'</td>
    <td>'.$formData['step_42_input5'].'</td> 
  </tr>  
  </tbody>
</table>
<p>I understand that I may revoke this authorization at any time except to the extent that action has been taken in reliance on it; and that in any event, this authorization automatically expires 90 days from the date of my signature or as otherwise specified by date, event, or condition as follows. I agree that a photocopy of this authorization may be considered valid:</p>
  <div class="input">';
    if($formData['step_43_input1'] == 'yes'){
      $html .= '<input type="radio" checked="checked"> Yes &nbsp;&nbsp;&nbsp;&nbsp; 
        <input type="radio"> No';
    }else{
      $html .= '<input type="radio"> Yes &nbsp;&nbsp;&nbsp;&nbsp; 
        <input type="radio" checked="checked"> No';
    }    
  $html .= '</div>
  <p>THIS INFORMATION IS PRIVILEGED AND CONFIDENTIAL. IT IS INTENDED FOR THE INDIVIDIUAL ENTITY DESIGNATED. YOU ARE HEREBY NOTIFIED THAT DISSEMINATION DISTRIBUTION, COPY OR OTHER USE OF THIS INFORMATION BY ANYONE OTHER THAN THE RECIPIENT DESIGNATED ABOVE IS AUTHORIZED AND STRICTLY PROHIBITED.</p>

    <table class="sign" width="100%" style="border-collapse:collapse;"cellpadding="0">
      <tbody>
        <tr>
          <td width="40%"><b>PATIENT/LEGAL REPRESENTATIVE SIGNATURE:</b></td>
          <td width="10%" align="left" style="border-bottom: 0.1mm solid #000000;"><img width="100" src="'.$formData['step_85_input1'].'" alt="signature"> </td> 
          <td width="20%"></td> 
          <td width="10%"><b>DATE:</b></td> 
          <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_85_input2'].'</td>
        </tr>
      </tbody>      
  </table>

  <div style="page-break-before:always"></div>
  
  <h4 style="text-align:center;">NARCOTIC AGREEMENT</h4>

  <div class="rounded">
    <table class="sign" width="100%" style="border-collapse:collapse;margin-top:10pt;"cellpadding="0">
      <tbody>
        <tr>
          <td width="20%"><b>Patient name</b></td>
          <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_44_input1'].'</td> 
          <td width="10%"></td> 
          <td width="20%"><b>Date</b></td> 
          <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_44_input2'].'</td>
        </tr>
      </tbody>      
    </table>
  

      <p>I, <span class="input-line">&nbsp;'.$formData['step_45_input1'].'&nbsp;</span>&nbsp;
      , understand that after acute operative pain has dissipated 4 to 6 weeks post operatively, Physician will no longer supply narcotics to me.<br><br>
      <span class="input-line">&nbsp;'.$formData['step_45_input2'].'&nbsp;</span>&nbsp;Signed this <span class="input-line">&nbsp;'.$formData['step_45_input3'].'&nbsp;</span>&nbsp; day of <span class="input-line">&nbsp;'.$formData['step_45_input4'].'&nbsp;</span>&nbsp;,'. date('Y').' Patient Signature.<br><br>   
      I,<span class="input-line">&nbsp;'.$formData['step_45_input5'].'&nbsp;</span>&nbsp;, understand that if I have not had any form of surgery I will be referred back to the Treating Physician or Pain Management Doctor for medication control. I further understand that the physician will not provide me any type of medication.</p>
    </div>

    <h4 style="text-align:center;">Form and Letter Fee Agreement</h4>

    <div class="rounded">
      <p>This is to notify you that Specialty Care Clinics, will apply a fee of $35.00 for patients, companies, family members, insurance carriers or other person requesting forms and/or letters (FMLA, STD, LTD, ETC.) to be completed. Please note that the form/letters will be filled out within 72 hours of the payment being made. If the paperwork is needing to be completed the day that it is brought in, there will be a $100 expedited fee.</p>    

      <table class="sign" width="50%" style="border-collapse:collapse;margin-top:10pt;"cellpadding="0">
        <tbody>
          <tr>
            <td width="20%"><b>Name</b></td>
            <td width="80%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_46_input1'].'</td> 
          </tr>
        </tbody>      
      </table>
  </div>

  <h4 style="text-align:center;">Specialty Care Clinics</h4>
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr>
      <td width="20%">Patient Name</td>
      <td width="20%">Primary Care Doctor</td> 
      <td width="20%">Referred By</td>    
      <td width="20%">Pharmacy</td>  
      <td width="10%">HT</td>
      <td width="10%">WT</td>    
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_47_input1'].'</td>
    <td>'.$formData['step_47_input2'].'</td>
    <td>'.$formData['step_47_input3'].'</td> 
    <td>'.$formData['step_48_input1'].'</td> 
    <td>'.$formData['step_48_input2'].'</td>
    <td>'.$formData['step_48_input3'].'</td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr><td class="label" colspan="4" align="center"><b>Chief Complaint</b></td></tr> 
    <tr>
      <td width="25%">Back Pain</td>
      <td width="25%">Neck Pain</td> 
      <td width="25%">Leg Pain</td>    
      <td width="25%">Arm Pain</td>          
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_49_input1'].'</td>
    <td>'.$formData['step_49_input2'].'</td>
    <td>'.$formData['step_49_input3'].'</td> 
    <td>'.$formData['step_49_input4'].'</td>    
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr><td class="label" colspan="16" align="center"><b>History of Illness</b></td></tr> 
    <tr>
      <td colspan="8"></td>
      <td colspan="6">Please rate the severity of your pain (10 is the greatest pain):</td>
      <td colspan="2"></td>
    </tr>
    <tr>
      <td width="5%">Age</td>
      <td width="5%">Gender</td> 
      <td width="10%">Injury</td>    
      <td width="10%">Date of injury</td>  
      <td width="10%">Work Related Injury?</td>
      <td width="10%">How long have you had this problem/pain:</td> 
      <td width="5%">Has it gotten worse recently:</td>   
      <td width="5%">If yes, when did it get worse?</td>   
      <td width="5%">Back Pain</td> 
      <td width="5%">Neck Pain</td>     
      <td width="5%">Leg(s) Pain</td>
      <td width="5%">Which leg is worse?</td>
      <td width="5%">Arm(s) Pain</td>
      <td width="5%">Which arm is worse?</td>
      <td width="5%">Bowel Problems</td>
      <td width="5%">How long:</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_50_input1'].'</td> 
    <td>'.$formData['step_50_input2'].'</td> 
    <td>'.$formData['step_51_input1'].'</td> 
    <td>'.$formData['step_51_input2'].'</td> 
    <td>'.$formData['step_51_input3'].'</td> 
    <td>'.$formData['step_52_input1'].'</td> 
    <td>'.$formData['step_52_input2'].'</td> 
    <td>'.$formData['step_52_input3'].'</td> 
    <td>'.$formData['step_53_input1'].'</td> 
    <td>'.$formData['step_53_input2'].'</td> 
    <td>'.$formData['step_53_input3'].'</td> 
    <td>'.$formData['step_53_input4'].' '.$formData['step_53_input4_2'].'</td> 
    <td>'.$formData['step_53_input5'].'</td> 
    <td>'.$formData['step_53_input6'].' '.$formData['step_53_input6_2'].'</td> 
    <td>'.$formData['step_54_input1'].' '.$formData['step_54_input1_2'].'</td> 
    <td>'.$formData['step_54_input2'].'</td>  
  </tr>  
  </tbody>
</table>

  <div style="page-break-before:always"></div>

<h4>Limitations from the Pain</h4>

 <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <thead>  
      <tr>
        <td colspan="2" align="center"><b>Sitting</b></td>
        <td colspan="2" align="center"><b>Walking</b></td>
        <td colspan="2" align="center"><b>Standing</b></td>
      </tr>  
      <tr>
        <td width="10%">Unlimited</td>
        <td width="10%">Limited to</td> 
        <td width="10%">Unlimited</td>    
        <td width="10%">Limited to</td>  
        <td width="10%">Unlimited</td>
        <td width="10%">Limited to</td> 
        <td width="20%">Does the pain interfere with sleeping?</td>   
        <td width="20%">Does the pain interfere with work or play?</td> 
      </tr>
    </thead>
    <tbody>
    <tr>
      <td>'.$formData['step_56_input1'].'</td> 
      <td>'.$formData['step_56_input2'].' '.$formData['step_56_input3'].'</td>
      <td>'.$formData['step_57_input1'].'</td><
      <td>'.$formData['step_57_input2'].' '.$formData['step_57_input3'].'</td>
      <td>'.$formData['step_58_input1'].'</td>
      <td>'.$formData['step_58_input2'].' '.$formData['step_58_input3'].'</td>
      <td>'.$formData['step_59_input1'].'</td>
      <td>'.$formData['step_59_input2'].'</td>
    </tr>  
  </tbody>  
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1"> 
     <thead>    
        <tr><td colspan="5" align="center"><b>What makes the pain worse?</b></td></tr>
        <tr>
          <td width="15%">Sitting</td>
          <td width="15%">Standing</td> 
          <td width="15%">Coughing</td>    
          <td width="15%">Leaning backward</td>  
          <td width="40%">Other</td>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_60_input1'].'</td> 
        <td>'.$formData['step_60_input2'].'</td>
        <td>'.$formData['step_60_input3'].'</td>
        <td>'.$formData['step_60_input4'].'</td>
        <td>'.$formData['step_60_input6'].'</td>      
      </tr>  
    </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">  
     <thead>    
        <tr><td colspan="4" align="center"><b>What makes the pain better?</b></td></tr>
        <tr>
          <td width="20%">Sitting</td>
          <td width="20%">Standing</td>         
          <td width="20%">Leaning Forward</td>  
          <td width="40%">Other</td>
        </tr>
      </thead>
      <tbody>
      <tr>
        <td>'.$formData['step_61_input1'].'</td> 
        <td>'.$formData['step_61_input2'].'</td>
        <td>'.$formData['step_61_input3'].'</td>    
        <td>'.$formData['step_61_input5'].'</td>      
      </tr>  
    </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody> 
      <tr>
        <td class="label" colspan="2" align="center"><b>Which of these tests have you had before and when?</b></td>         
      </tr> 
      <tr><td class="label" width="60%">MRI</td> <td width="40%"><p>'.$formData['step_62_input1'].'</td></tr> 
      <tr><td class="label" width="60%">CT Myelogram</td> <td width="40%">'.$formData['step_62_input1'].'</td></tr> 
      <tr><td class="label" width="60%">EMG/NCS</td> <td width="40%">'.$formData['step_62_input3'].'</td></tr> 
      <tr><td class="label" width="60%">Discogram</td> <td  width="40%">'.$formData['step_62_input3'].'</td></tr> 
      <tr>
        <td class="label" colspan="2" align="center"><b>What have you tried for the pain so far?</b></td>         
      </tr> 
      <tr><td class="label" width="60%">Physical Therapy:</td> <td width="40%">'.$formData['step_63_input1'].'</td></tr> 
      <tr><td class="label" width="60%">Are you satisfied with the effort given:</td> <td width="40%">'.$formData['step_63_input3'].'</td> </tr> 
      <tr><td class="label" width="60%">Did therapy help:</td> <td width="40%">'.$formData['step_63_input4'].'</td> </tr> 
      <tr><td class="label" width="60%">NSAIDs (Ibuprofen, Naprosyn, Mobic, Celebrex, Relafen, etc.)</td> <td width="40%">'.$formData['step_64_input1'].'</td> </tr> 
      <tr><td class="label" width="60%">Did the medicine help: (NSAIDs)</td> <td width="40%">'.$formData['step_64_input2'].'</td> </tr> 
      <tr><td class="label" width="60%">Oral Steroids (Medrol Dose Pack, Prednisone, Methylprednisilone)</td> <td width="40%">'.$formData['step_65_input1'].'</td> </tr> 
      <tr><td class="label" width="60%">Did the medicine help: (Oral Steroids)</td> <td width="40%">'.$formData['step_65_input2'].'</td> </tr> 
      <tr><td class="label" width="60%">Pain Meds (Vicodin, Norco, Lortab, Darvocet, Oxycontin, Percocet, Morphine)</td> <td width="40%">'.$formData['step_66_input1'].'</td> </tr> 
      <tr><td class="label" width="60%">Injections (Epidural Injections, ESIs, Facet Injections, Nerve Root Blocks)</td> <td width="40%">'.$formData['step_67_input1'].'</td> </tr> 
      <tr><td class="label" width="60%">Did injections help: (Pain Meds) </td> <td width="40%">'.$formData['step_67_input2'].'</td> </tr> 
      <tr><td class="label" width="60%">Back/Neck Surgery (Include dates): </td> <td width="40%">'.$formData['step_62_input1'].'</td> </tr>
      <tr><td class="label" width="60%">Did surgery help: </td> <td width="40%">'.$formData['step_62_input1'].'</td> </tr>
    </tbody>
  </table>


  <h4>Patient Medical History</h4>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <thead> 
      <tr>
        <td class="label" colspan="3" align="center"><b>Please report if you have had or are currently experiencing any of the following:</b></td>         
      </tr> 
      <tr><td class="label">Experience</td><td class="label">YES/NO</td><td class="label">Specify</td></tr>
    </thead> 
    <tbody>
      <tr><td class="label" width="20%">Heart Disease</td> <td width="20%"><p>'.$formData['step_69_input1'].'</td><td width="40%"><p>'.$formData['step_69_input2'].'</td></tr>  
      <tr><td class="label" width="20%">Lung Disease</td> <td width="20%"><p>'.$formData['step_69_input3'].'</td><td width="40%"><p>'.$formData['step_69_input4'].'</td></tr>   
      <tr><td class="label" width="20%">Kidney Disease</td> <td width="20%"><p>'.$formData['step_69_input5'].'</td><td width="40%"><p>'.$formData['step_69_input6'].'</td></tr> 
      <tr><td class="label" width="20%">Neurologic Disease</td> <td width="20%"><p>'.$formData['step_69_input7'].'</td><td width="40%"><p>'.$formData['step_69_input8'].'</td></tr> 
      <tr><td class="label" width="20%">Cancer</td> <td width="20%"><p>'.$formData['step_69_input9'].'</td><td width="40%"><p>'.$formData['step_69_input10'].'</td></tr> 
      <tr><td class="label" width="20%">Liver Disease/Hepatitis</td> <td width="20%"><p>'.$formData['step_69_input11'].'</td><td width="40%"><p>'.$formData['step_69_input12'].'</td></tr> 
      <tr><td class="label" width="20%">Prostrate Disease</td> <td width="20%"><p>'.$formData['step_69_input13'].'</td><td width="40%"><p>'.$formData['step_69_input14'].'</td></tr> 
      <tr><td class="label" width="20%">Psychiatric/Depression</td> <td width="20%"><p>'.$formData['step_69_input15'].'</td><td width="40%"><p>'.$formData['step_69_input16'].'</td></tr> 
      <tr><td class="label" width="20%">Stroke</td> <td width="20%"><p>'.$formData['step_69_input17'].'</td><td width="40%"><p>'.$formData['step_69_input18'].'</td></tr>     
    </tbody>
  </table>
    
  
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr><td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td></tr>
    <tr>
      <td width="10%">Anemia</td>    
      <td width="10%">Abdominal pain</td>  
      <td width="10%">Balance Problems</td>
      <td width="10%">Bleeding Problems</td> 
      <td width="10%">Bloody Stool</td>   
      <td width="10%">Bloody Urine</td>   
      <td width="10%">Blood Clots</td> 
      <td width="10%">Chest Pain/Angina</td>
      <td width="10%">Constipation</td>
      <td width="10%">Cough</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_70_input1'].'</td>
    <td>'.$formData['step_70_input2'].'</td>
    <td>'.$formData['step_70_input3'].'</td>
    <td>'.$formData['step_70_input5'].'</td>
    <td>'.$formData['step_70_input5'].'</td>
    <td>'.$formData['step_70_input6'].'</td>
    <td>'.$formData['step_70_input7'].'</td>
    <td>'.$formData['step_70_input8'].'</td>
    <td>'.$formData['step_70_input9'].'</td>
    <td>'.$formData['step_70_input10'].'</td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr>
      <td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr> 
      <td width="10%">Diabetes</td>
      <td width="10%">Diarrhea</td>
      <td width="10%">Fainting</td>
      <td width="10%">Female organs/Menstrual</td>
      <td width="10%">Fever</td>
      <td width="10%">Hearing changes</td>
      <td width="10%">Heat/Cold Intolerance</td>
      <td width="10%">Hair/Nail changes</td>
      <td width="10%">High Blood Pressure</td>
      <td width="10%">MuscleSpasms</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_70_input11'].'</td>
    <td>'.$formData['step_70_input12'].'</td>
    <td>'.$formData['step_70_input13'].'</td>
    <td>'.$formData['step_70_input14'].'</td>
    <td>'.$formData['step_70_input15'].'</td>
    <td>'.$formData['step_70_input16'].'</td>
    <td>'.$formData['step_70_input17'].'</td>
    <td>'.$formData['step_70_input18'].'</td>
    <td>'.$formData['step_70_input19'].'</td>
    <td>'.$formData['step_71_input1'].'</td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr>
      <td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr> 
      <td width="10%">Nausea</td>
      <td width="10%">Osteoarthritis</td>
      <td width="10%">Palpitations</td>
      <td width="10%">Rash</td>
      <td width="10%">ShortnessofBreath</td>
      <td width="10%">Speechchanges</td>
      <td width="10%">Swelling</td>
      <td width="10%">SwollenGlands</td> 
      <td width="10%">Stomach Ulcers</td>
      <td width="10%">Seizure/Epilepsy</td>    
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_71_input2'].'</td>
    <td>'.$formData['step_71_input3'].'</td>
    <td>'.$formData['step_71_input4'].'</td>
    <td>'.$formData['step_71_input5'].'</td>
    <td>'.$formData['step_71_input6'].'</td>
    <td>'.$formData['step_71_input7'].'</td>
    <td>'.$formData['step_71_input8'].'</td>
    <td>'.$formData['step_71_input9'].'</td>
    <td>'.$formData['step_71_input10'].'</td>
    <td>'.$formData['step_71_input11'].'</td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
  <thead>
    <tr>
      <td colspan="6"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr> 
      <td width="10%">Thyroid Disease</td>
      <td width="10%">Tremor</td>
      <td width="10%">UrineRetention</td>
      <td width="10%">Visionchanges</td>
      <td width="10%">Weight Loss</td>
      <td width="50%">Other</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>'.$formData['step_71_input12'].'</td>
    <td>'.$formData['step_71_input13'].'</td>
    <td>'.$formData['step_71_input14'].'</td>
    <td>'.$formData['step_71_input15'].'</td>
    <td>'.$formData['step_71_input16'].'</td>
    <td>'.$formData['step_71_input17'].'</td>  
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
<thead>
    <tr>
      <td colspan="4"><b>Past Surgical/ Hospitalization History:</b></td>
    </tr>
    <tr> 
      <td width="5%">SR NO.</td>
      <td width="40%">Surgeries/Hospitalizations</td>
      <td width="5%">Year</td>
      <td width="50%">Complications</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>'.$formData['step_72_input1'].'</td>
      <td>'.$formData['step_72_input2'].'</td>
      <td>'.$formData['step_72_input3'].'</td>
    </tr>
    <tr>
      <td>2</td>
      <td>'.$formData['step_72_input4'].'</td>
      <td>'.$formData['step_72_input5'].'</td>
      <td>'.$formData['step_72_input6'].'</td>
    </tr>
    <tr>
      <td>3</td>
      <td>'.$formData['step_72_input7'].'</td>
      <td>'.$formData['step_72_input8'].'</td>
      <td>'.$formData['step_72_input9'].'</td>
    </tr>
    <tr>
      <td>4</td>
      <td>'.$formData['step_72_input10'].'</td>
      <td>'.$formData['step_72_input11'].'</td>
      <td>'.$formData['step_72_input12'].'</td>
    </tr>
  </tbody>
  </table> 
  
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody>
      <tr><td class="label" width="60%">Have you ever had general anesthesia? (Being put to sleep for an operation)</td> <td width="40%">'.$formData['step_73_input1'].'</td></tr>    
      <tr><td class="label" width="60%">Have you ever had problems with anesthesia?</td> <td width="40%">'.$formData['step_73_input2'].'</td></tr>   
      <tr><td class="label" width="60%">Are your immunizations up to date?</td> <td width="40%">'.$formData['step_73_input4'].'</td></tr>
    </tbody>
  </table>
  
  <h4>Your Social History</h4>
 <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody>
      <tr><td class="label" width="60%">Work in the home</td> <td width="40%">'.$formData['step_74_input1'].'</td></tr>    
      <tr><td class="label" width="60%">Employed</td> <td width="40%">'.$formData['step_74_input2'].'</td></tr> 
      <tr><td class="label" width="60%">If employed then occupation:</td> <td width="40%">'.$formData['step_74_input3'].'</td></tr>     
      <tr><td class="label" width="60%">Student</td> <td width="40%">'.$formData['step_74_input4'].'</td></tr>
      <tr><td class="label" width="60%">Retired</td> <td width="40%">'.$formData['step_74_input5'].'</td></tr>
      <tr><td class="label" width="60%">Other</td> <td width="40%">'.$formData['step_74_input6'].', '.$formData['step_74_input7'].'</td></tr>
      <tr><td class="label" width="60%">Children</td> <td width="40%">'.$formData['step_74_input8'].'</td></tr>
      <tr><td class="label" width="60%">If children then age:</td> <td width="40%">'.$formData['step_74_input9'].'</td></tr>
      <tr><td class="label" width="60%">Live Alone?</td> <td width="40%">'.$formData['step_74_input10'].'</td></tr>
      <tr><td class="label" width="60%">If live alone, do you have help or family nearby?:</td> <td width="40%">'.$formData['step_74_input11'].'</td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Exercise</b></td></tr>
      <tr><td class="label" width="60%">Exercise?</td> <td width="40%">'.$formData['step_75_input1'].'</td></tr>
      <tr><td class="label" width="60%">Daily</td> <td width="40%">'.$formData['step_75_input2'].'</td></tr>
      <tr><td class="label" width="60%">Weekly</td> <td width="40%">'.$formData['step_75_input3'].'</td></tr>
      <tr><td class="label" width="60%">Monthly</td> <td width="40%">'.$formData['step_75_input4'].'</td></tr>
      <tr><td class="label" width="60%">Rarely</td> <td width="40%">'.$formData['step_75_input5'].'</td></tr>
      <tr><td class="label" width="60%">Never</td> <td width="40%">'.$formData['step_75_input6'].'</td></tr>
      <tr><td class="label" width="60%">What type of exercise?</td> <td width="40%">'.$formData['step_75_input7'].'</td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Smoking</b></td></tr>
      <tr><td class="label" width="60%">Smoker</td> <td width="40%"></td>'.$formData['step_76_input1'].'</tr>
      <tr><td class="label" width="60%">If smoker, packs per day:</td> <td width="40%">'.$formData['step_76_input2'].'</td></tr>
      <tr><td class="label" width="60%">For how long</td> <td width="40%">'.$formData['step_76_input3'].'</td></tr>
      <tr><td class="label" width="60%">Quit Smoking</td> <td width="40%">'.$formData['step_76_input4'].'</td></tr>
      <tr><td class="label" width="60%">Within the last year</td> <td width="40%">'.$formData['step_76_input5'].'</td></tr>
      <tr><td class="label" width="60%">2 to 4 years</td> <td width="40%">'.$formData['step_76_input6'].'</td></tr>
      <tr><td class="label" width="60%">5 to 10 years</td> <td width="40%">'.$formData['step_76_input7'].'</td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Tobacco</b></td></tr>
      <tr><td class="label" width="60%">Chew Tobacco:</td> <td width="40%">'.$formData['step_77_input1'].'</td></tr>
      <tr><td class="label" width="60%">If chew tobacco, how much</td> <td width="40%">'.$formData['step_77_input2'].'</td></tr>
      <tr><td class="label" width="60%">For how long</td> <td width="40%">'.$formData['step_77_input3'].'</td></tr>
    </tbody>
  </table>
  
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b> About Alcohol</b></td></tr>
      <tr><td class="label" width="60%">Drink Alcohol:</td> <td width="40%">'.$formData['step_78_input1'].'</td></tr>
      <tr><td class="label" width="60%">Daily</td> <td width="40%">'.$formData['step_78_input2'].'</td></tr>
      <tr><td class="label" width="60%">1-2x/week</td> <td width="40%">'.$formData['step_78_input3'].'</td></tr>
      <tr><td class="label" width="60%">1-2x/month</td> <td width="40%">'.$formData['step_78_input4'].'</td></tr>
      <tr><td class="label" width="60%">1-2x/year</td> <td width="40%">'.$formData['step_73_input5'].'</td></tr>
      <tr><td class="label" width="60%">Alcohol preference:</td> <td width="40%">'.$formData['step_78_input6'].'</td></tr>
      <tr><td colspan="2" align="center" class="label"><b>About Drug</b></td></tr>
      <tr><td class="label" width="60%">Drugs (Marijuana, Cocaine, etc)</td> <td width="40%">'.$formData['step_79_input1'].'</td></tr>
      <tr><td class="label" width="60%">If drugs, then which</td> <td width="40%">'.$formData['step_79_input2'].'</td></tr>
      <tr><td colspan="2" align="center" class="label"><b>Comments regarding any health issues not covered on this form:</b></td></tr>
      <tr><td colspan="2">'.$formData['step_80_input1'].'</td></tr>  
    </tbody>
  </table>
  
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <thead>
      <tr>
        <td colspan="5"><b>Medications: Please list all medications you currently take with doses and schedule.</b></td>
      </tr>
      <tr> 
        <td width="5%">SR NO.</td>
        <td width="30%">Current Medication</td>
        <td width="15%">Dose/Schedule</td>
        <td width="25%">Reason for Medication</td>
        <td width="25%">Side Effects</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>'.$formData['step_81_input1'].'</td>
        <td>'.$formData['step_81_input2'].'</td>
        <td>'.$formData['step_81_input3'].'</td>
        <td>'.$formData['step_81_input4'].'</td> 
      </tr>
      <tr> 
        <td>2</td>
        <td>'.$formData['step_81_input5'].'</td>
        <td>'.$formData['step_81_input6'].'</td>
        <td>'.$formData['step_81_input7'].'</td>
        <td>'.$formData['step_81_input8'].'</td> 
      </tr>
      <tr> 
        <td>3</td>
        <td>'.$formData['step_81_input9'].'</td>
        <td>'.$formData['step_81_input10'].'</td>
        <td>'.$formData['step_81_input11'].'</td>
        <td>'.$formData['step_81_input12'].'</td> 
      </tr>
      <tr> 
        <td>4</td>
        <td>'.$formData['step_81_input13'].'</td>
        <td>'.$formData['step_81_input14'].'</td>
        <td>'.$formData['step_81_input15'].'</td>
        <td>'.$formData['step_81_input16'].'</td> 
      </tr>
      <tr>   
        <td>5</td> 
        <td>'.$formData['step_81_input17'].'</td>
        <td>'.$formData['step_81_input18'].'</td>
        <td>'.$formData['step_81_input19'].'</td>
        <td>'.$formData['step_81_input20'].'</td>
      </tr>
      <tr>  
        <td>6</td>  
        <td>'.$formData['step_81_input21'].'</td>
        <td>'.$formData['step_81_input22'].'</td>
        <td>'.$formData['step_81_input23'].'</td>
        <td>'.$formData['step_81_input24'].'</td> 
      </tr>
      <tr> 
        <td>7</td>
        <td>'.$formData['step_81_input25'].'</td>
        <td>'.$formData['step_81_input26'].'</td>
        <td>'.$formData['step_81_input27'].'</td>
        <td>'.$formData['step_81_input28'].'</td>
      </tr>
      <tr>   
        <td>8</td>
        <td>'.$formData['step_81_input29'].'</td>
        <td>'.$formData['step_81_input30'].'</td>
        <td>'.$formData['step_81_input31'].'</td>
        <td>'.$formData['step_81_input32'].'</td>
      </tr>
    </tbody>
  </table>
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b> List any allergies with current medications</b></td></tr>
      <tr><td colspan="2">'.$formData['step_82_input1'].'</td></tr>  
    </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <thead>
      <tr>
        <td colspan="4"><b>Family History</b></td>
      </tr>
      <tr> 
        <td width="30%">Relation</td>
        <td width="10%">Life status</td>
        <td width="10%">Age</td>
        <td width="50%">Health Status/Cause of Death</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Father</td>
        <td>'.$formData['step_83_input1'].'</td>
        <td>'.$formData['step_83_input2'].'</td>
        <td>'.$formData['step_83_input3'].'</td>        
      </tr>
      <tr> 
        <td>Mother</td>
        <td>'.$formData['step_83_input4'].'</td>
        <td>'.$formData['step_83_input5'].'</td>
        <td>'.$formData['step_83_input6'].'</td>
    </tr>
    <tr> 
      <td>Sister/Brother</td>
      <td>'.$formData['step_83_input7'].'</td>
      <td>'.$formData['step_83_input8'].'</td>
      <td>'.$formData['step_83_input9'].'</td>
    </tr>
    <tr> 
      <td>Sister/Brother</td>
      <td>'.$formData['step_83_input10'].'</td>
      <td>'.$formData['step_83_input11'].'</td>
      <td>'.$formData['step_83_input12'].'</td>
    </tr>
    <tr> 
      <td>Sister/Brother</td>
      <td>'.$formData['step_83_input13'].'</td>
      <td>'.$formData['step_83_input14'].'</td>
      <td>'.$formData['step_83_input15'].'</td>
    </tr>
    <tr> 
      <td>Sister/Brother</td>
      <td>'.$formData['step_83_input16'].'</td>
      <td>'.$formData['step_83_input17'].'</td>
      <td>'.$formData['step_83_input18'].'</td>
    </tr>  
    </tbody>
  </table>
  <table class="form" width="100%" style="font-size:9pt;border-collapse:collapse;margin-top:20pt;"cellpadding="1">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b>Family Member History of</b></td></tr>
      <tr><td class="label" width="60%">Cardiac Disease</td> <td width="40%">'.$formData['step_84_input1'].'</td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%">'.$formData['step_84_input2'].'</td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Stroke</td> <td width="40%">'.$formData['step_84_input3'].'</td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%">'.$formData['step_84_input4'].'</td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Diabetes</td> <td width="40%">'.$formData['step_84_input5'].'</td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%">'.$formData['step_84_input6'].'</td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Neurologic Problems</td> <td width="40%">'.$formData['step_84_input7'].'</td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%">'.$formData['step_84_input8'].'</td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Spine Problems</td> <td width="40%">'.$formData['step_84_input9'].'</td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%">'.$formData['step_84_input10'].'</td></tr>
    </tbody>
  </table>


  <table class="sign" width="100%" style="border-collapse:collapse;"cellpadding="0">
    <tbody>
      <tr>
        <td width="40%"><b>PATIENT SIGNATURE:</b></td>
        <td width="10%" align="left" style="border-bottom: 0.1mm solid #000000;"><img width="100" src="'.$formData['step_85_input1'].'" alt="signature"> </td> 
        <td width="20%"></td> 
        <td width="10%"><b>DATE:</b></td> 
        <td width="20%" align="left" style="border-bottom: 0.1mm solid #000000;">'.$formData['step_85_input2'].'</td>
      </tr>
    </tbody>      
  </table>
</body>
</html>';



set_time_limit(600);
$mpdf = new \Mpdf\Mpdf([
	'margin_top' => 20,
	'margin_bottom' => 10,
  'margin_left' => 5,
  'margin_right' => 5,
	'margin_header' => 5,
	'margin_footer' => 0,
  'debug' => true
]);

$header = array (
    'L' => array (
      'content' => '<img width="100" src="../assets/images/scc_logo.png" alt="logo">',    
      'font-style' => 'B',      
      'color'=>'#147ec2'
    ),    
    'R' => array (
      'content' => 'Patient Form',
      'font-size' => 12,
      'font-style' => 'B',
      'font-family' => 'Oxygen',
      'color'=>'#147ec2'
    ),
    'line' => 1,
);
$mpdf->SetHeader($header, 'O');
// $mpdf->setFooter($f);
$mpdf->SetTitle('Patient Form');
$mpdf->SetAuthor('SCC');   
$mpdf->SetDisplayMode('fullpage');
$mpdf->shrink_tables_to_fit = 1;
// LOAD a stylesheet

$stylesheet = file_get_contents('../assets/css/pdf.css');
$mpdf->WriteHTML($stylesheet,1);

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
