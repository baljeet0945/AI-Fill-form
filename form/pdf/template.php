<?php require_once('../helpers/classes/googleSheet.php');
$objSheet = New SHEET();
$getSheet = $objSheet->getFormById($_GET['ref']);
if($getSheet['status'] == 'error' || empty($getSheet['result'])){
  die('No form data found with this ref no.');
}
$formData = json_decode($getSheet['result'], true);
?>
<!DOCTYPE html>
<html>  
<body>
  <h1>SCC Patient Form</h1>
  <h3>Patient Information</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
    <thead>
      <tr>
        <td width="10%">Name</td>
        <td width="5%">Age</td>
        <td width="5%">DOB</td>
        <td width="5%">Sex</td>
        <td width="10%">Address</td>
        <td width="5%">City</td>
        <td width="5%">State</td>
        <td width="5%">Zip</td>
        <td width="5%">SS#</td>
        <td width="5%">Driver's License#</td>
        <td width="5%">Marital status</td>
        <td width="5%">Home phone</td>
        <td width="5%">Cell</td>
        <td width="5%">Work</td>
        <td width="10%">Email address</td>
        <td width="5%">Emergency contact name</td>
        <td width="5%">Phone</td>  
      </tr>
    </thead>
    <tbody>
    <tr>
      <td><?= $formData['step_1_input1']?></td>
      <td><?= $formData['step_1_input2']?></td>
      <td><?= $formData['step_2_input1']?></td>
      <td><?= $formData['step_2_input2']?></td>
      <td><?= $formData['step_3_input1']?></td>
      <td><?= $formData['step_3_input3']?></td>
      <td><?= $formData['step_3_input3']?></td>
      <td><?= $formData['step_3_input4']?></td>
      <td><?= $formData['step_4_input1']?></td>
      <td><?= $formData['step_4_input2']?></td>
      <td><?= $formData['step_1_input1']?></td>
    </tr>  
    </tbody>
  </table>

  <h3>Referral Information</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      </tbody>
  </table> 

  <h3>Mechanism of injury description</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      </tbody>
  </table>

  <h3>Insured Information(Group Insurance)</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      </tbody>
  </table>

  <h3>Primary Card Holder's Information</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
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
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      </tbody>
  </table>

  <h3>Medicare/Medicade</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
        <tr>
          <td width="50%">Medicare</td>
          <td width="50%">Medicade</td>                
        </tr>
      </thead>
      <tbody>
      <tr>
        <td></td>
        <td></td>        
      </tr>  
      </tbody>
  </table>

  <h3>Medicare Suppliment Insurance</h3>  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
      <thead>
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
        <td></td>
        <td></td>        
      </tr>  
      </tbody>
  </table>

  <h4>WORKER’S COMPENSATION:</h4>
  <p>It is important that you make our office aware if this is a work comp injury prior to your visit. Please have all relevant information available in order to quickly complete your check-in process.<br><br>
  
  <b><u>EMPLOYER PAY:</u></b> If your employer is paying for your visit instead of filing worker’s comp, we must have payment up front or a signed contract in hand before your visit. We must be notified of any responsibility changes the employer makes within 80 days of first date of service.<br><br>
  
  By signing this you are acknowledging that all the above information is accurate and correct to the best of your knowledge.</p>

  <h3>CONSENT FOR TREATMENT AND FINANCIAL AGREEMENT</h3>

  <table class="form" width="50%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">Patient name:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Date of birth:</td> <td width="40%"></td></tr>
    </tbody>
  </table>

  <p style="margin-top:10pt;">I authorize IMED Physicians, to examine me (or the patient I am legally responsible for) and to do any x-rays or other diagnostic tests that may be needed to make a diagnosis and to provide treatment. I consent to necessary office or other outpatient treatment after being properly informed of alternatives, benefits, and risks.</p>

  <h4>AUTHORIZATION FOR RELEASE OF MEDICAL INFORMATION</h4>
  <p>I authorize Specialty Care Clinics to release to any Insurance company, health plan, or governmental agency such medical information that may be required to process my claim for payment of this medical bill.<br><br>

  I also authorize Specialty Care Clinics to release appropriate medical information to any doctor, hospital, or other health care facility that has or will participate in my (the patient’s) care. I authorize a photocopy, facsimile, or other electronic transmission of the above Assignments, Authorizations, and Releases, to be used in place of the original until/unless I send written notice to the contrary to the offices of Specialty Care Clinics. I further authorize any other doctor, hospital, or health care facility to release to Specialty Care Clinics office any medical information concerning my (the patient’s) illness or injury.</p>

  <h4 style="page-break-before:always">FINANCIAL AGREEMENT</h4>
  <p>I agree to pay all professional fees charged by Specialty Care Clinics for my (the patient’s) care, irrespective of any insurance benefits to which I may be entitled, except if Specialty Care Clinics has agreed to accept insurance benefits as full payment for covered services in accordance with federal or state law (e.g. Medicare, Medicaid) or by contract with a prepaid health plan or managed-care plan, and provided such Insurance benefits are paid within 60 days of claims submission, and provided there is no recovery from a third-party negligence lawsuit (see Injuries and Third-Party Negligence, below). Ultimately, it is your responsibility to understand the coverage that you pay for in a monthly premium to your carrier. If an employer or its carrier denies a claim for payment for a work-related injury, or if a prepaid health plan, managed-care health plan, or Medicare, considers certain services ineligible or uncovered services, then you (patient) agree to pay for those services. It is understood that claims for services remaining unpaid 60 days after claims submission shall be presumed ineligible for insurance reimbursement, and you (patient) shall pay for those services. If patient is a minor — the parent/ guardian who requests treatment for a child will be responsible for all fees.</p>

  <h4>INJURIES AND THRID-PARTY NEGLIGENCE</h4>
  <p>I understand and agree that if Specialty Care Clinics has granted discounts from its usual fees for any reason, including its participation in prepaid or managed-care health plans, and if I (the patient) recover(s) any monies as the result of any judgment, award, or settlement of any lawsuit arising from treated injuries or illness, then I shall give a lien to Specialty Care Clinics against such monetary recovery in the full amount of such discounts.</p>

  <h4>DELINQUENCY</h4>
  <p>If my (the patient’s) account becomes delinquent, I understand that Specialty Care Clinics at its sole discretion, may refer to a collection agency or an attorney as allowed by law.</p>

  <h4>INSURANCE ASSIGNMENT</h4>
  <p>I authorize my insurance company or third-party payer to whom a claim for payment has been submitted to pay any eligible benefits directly to Specialty Care Clinics. I hereby authorize payment to go directly to Specialty Care Clinics for medical benefits payable by insurance company&nbsp;<span style="color: #000;width:40px;text-decoration: underline;">testts</span>&nbsp;
  (and/or Medicare) and understand that I am responsible for any charge not covered by the terms of my insurance policy. I hereby assign Specialty Care Clinics full rights to represent my (the patient’s) interests in any complaints of appeals for denial of benefits or reimbursement to the Texas Department of Insurance (State Insurance Commissioner). I hereby authorize said assignee Specialty Care Clinics to furnish these agencies such information as may be necessary to support such complaints or appeals.<br><br>
  I agree I cannot revoke the FINANCIAL AGREEMENT or the INSURANCE ASSIGNMENT at any time while any portion of the medical bill remains unpaid. I have read, understand, and do hereby agree to the terms of the forgoing Assignments, Authorizations, and Releases. I also certify that the PATIENT INFORMATION I have provided is true and accurate to the best of my knowledge.</p>

  <h4 style="page-break-before:always">HIPAA Compliance Patient Consent Form</h4>
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

  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">May we phone, email, or send a text to you to confirm appointments?</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">May we leave a message on your answering machine at home or on your cell phone?</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">May we discuss your medical condition with any member of your family?</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If YES, please name the members allowed:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">This consent was signed by:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Witness:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Date</td> <td width="40%"></td></tr>
    </tbody>
  </table>

  <h3 style="page-break-before:always">PRESCRIPTION REFILLS AND PHONE MESSAGES</h3>

  <h4>PATIENT INSURANCE POLICY:</h4>
  <ol>
    <li>It is your responsibility to know your insurance and bring your card with you to all appointments</li>
    <li>Is physician a CONTRACTED PROVIDER of your insurance?</li>
    <li>>Do you need PRIOR AUTHORIZATION for procedures?</li>
    <li>Are X-Rays and Supplies included in your COPAY?</li>
    <li>How much is your COPAY for a Specialist?</li>
    <li>Do you have a YEARLY DEDUCTIBLE? If so, has it been met?</li>
  </ol>  
  <p>PLEASE HELP US HELP YOU. There are hundreds of insurance companies thereby making it almost impossible for our staff to know the specific requirements for each policy. Please call your insurance company prior to your appointment to obtain this needed information.</p>

  <h4>PROTOCOL FOR PRESCRIPTION REFILLS:</h4>
  <ol>
    <li>Please allow 48-72 hours on refill requests.</li>
    <li>Notify your Pharmacy directly on refills</li>
  </ol>
  <p>In order to be as efficient as possible these are the policies in effect regarding all prescriptions.</p>

  <h4>HIPAA EXCEPTIONS</h4>
  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>
      <tr><td class="label">OK to have a message left on my answering machine</td> <td></td></tr>    
      <tr><td class="label" width="60%">OK to leave a message with spouse</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Name Of Spouce</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">OK to leave a message with any adult who answers my phone</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">OK to leave a message regarding appointments ONLY</td> <td width="40%"></td></tr>      
    </tbody>
  </table>
  <p>I have read and understand the above information regarding MY INSURANCE POLICY, PRESCRIPTION REFILLS, and the HIPAA EXCEPTIONS AUTHORIZATION for leaving messages.</p>
  <p>I hereby authorize <span style="color: #000;width:40px;text-decoration: underline;"> </span>to release to Specialty Care Clinics, located at 2600 W Pleasant Run Rd, Lancaster, TX 75146</p> 
  
  <h4>Information contained in the Medical Records of:</h4>
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
    <thead>
      <tr>
        <td width="33%">Name of Patient</td>
        <td width="33%">Date of Birth</td> 
        <td width="33%">Social Security #</td>          
      </tr>
    </thead>
    <tbody>
    <tr>
      <td></td>
      <td></td>        
    </tr>  
    </tbody>
</table>

<h4>Specific Information to be Disclosed:</h4>
<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
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
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td> 
    <td>-</td>        
    <td>-</td> 
    <td>-</td> 
    <td>-</td> 
    <td>-</td> 
    <td>-</td> 
    <td>-</td> 
    <td></td> 
  </tr>  
  </tbody>
</table>

<p style="page-break-before:always">I give permission for release of any information in my records, including information relevant to substance abuse, psychiatric mental health services or HIV (positive or negative) unless specifically excluded below.</p>

<p>Do Not Release Information Related To:</p>
<h4>Specific Information to be Disclosed:</h4>
<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
    <tr>
      <td width="20%">HIV</td>
      <td width="20%">Substance Abuse</td> 
      <td width="20%">Psychiatric/Mental Health</td>    
      <td width="40%">Other</td>         
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td></td>  
  </tr>  
  </tbody>
</table>

<p>THE ABOVE INFORMATION IS RELEASED FOR THE FOLLOWING PURPOSE AND THAT PURPOSE ONLY. PURPOSE OF RELEASE:</p>
<p>Do Not Release Information Related To:</p>
<h4>Specific Information to be Disclosed:</h4>
<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
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
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td></td>  
  </tr>  
  </tbody>
</table>
<p>I understand that I may revoke this authorization at any time except to the extent that action has been taken in reliance on it; and that in any event, this authorization automatically expires 90 days from the date of my signature or as otherwise specified by date, event, or condition as follows. I agree that a photocopy of this authorization may be considered valid:</p>
  <div class="input">
    <input type="radio" checked="checked"> Yes &nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="radio"> No 
  </div>
  <p>THIS INFORMATION IS PRIVILEGED AND CONFIDENTIAL. IT IS INTENDED FOR THE INDIVIDIUAL ENTITY DESIGNATED. YOU ARE HEREBY NOTIFIED THAT DISSEMINATION DISTRIBUTION, COPY OR OTHER USE OF THIS INFORMATION BY ANYONE OTHER THAN THE RECIPIENT DESIGNATED ABOVE IS AUTHORIZED AND STRICTLY PROHIBITED.</p>

  <h3>Narcotic Agreement</h3>
  <table class="form" width="50%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">Patient Name</td> <td width="40%"></td></tr>    
      <tr><td class="label" width="60%">Date</td> <td width="40%"></td></tr>      
    </tbody>
  </table>

  <p>I, <span style="color: #000;width:40px;text-decoration: underline;"></span>&nbsp;
    , understand that after acute operative pain has dissipated 4 to 6 weeks post operatively, Physician will no longer supply narcotics to me.<br><br>
    <span style="color: #000;width:40px;text-decoration: underline;">testts</span>&nbsp;Signed this <span style="color: #000;width:40px;text-decoration: underline;">testts</span>&nbsp; day of <span style="color: #000;width:40px;text-decoration: underline;">testts</span>&nbsp;,<?php echo date('Y');?> Patient Signature.<br><br>   
    I,<span style="color: #000;width:40px;text-decoration: underline;">testts</span>&nbsp;, understand that if I have not had any form of surgery I will be referred back to the Treating Physician or Pain Management Doctor for medication control. I further understand that the physician will not provide me any type of medication.</p>

    <h3>Form and Letter Fee Agreement</h3>
    <p>This is to notify you that Specialty Care Clinics, will apply a fee of $35.00 for patients, companies, family members, insurance carriers or other person requesting forms and/or letters (FMLA, STD, LTD, ETC.) to be completed. Please note that the form/letters will be filled out within 72 hours of the payment being made. If the paperwork is needing to be completed the day that it is brought in, there will be a $100 expedited fee.</p>
    <table class="form" width="50%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">Name</td> <td width="40%"></td></tr>    
    </tbody>
  </table>

  <h3>Specialty Care Clinics</h3>
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
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
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td></td>  
    <td></td>
    <td></td>
  </tr>  
  </tbody>
</table>

<h4>Chief Complaint</h4>
<div class="input">
    <input type="radio" checked="checked"> Back Pain&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="radio"> Neck Pain&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"> Leg Pain&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"> Arm Pain 
</div>
<h4>History of Illness:</h4>
<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
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
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>  
    <td>-</td>
    <td></td>
  </tr>  
  </tbody>
</table>
<h4>Please indicate the distribution of your pain/symptoms on the diagram below:</h4>

<h3>Limitations from the Pain:</h3>

<table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
    <tbody>       
      <tr><td class="label" >Sitting</td><td ></td></tr>
      <tr><td class="label" >Limited to</td><td ></td></tr>
      <tr><td class="label" >Walking</td><td ></td></tr>
      <tr><td class="label" >Limited to</td><td ></td></tr>    
      <tr><td class="label" >Standing</td> <td ></td></tr>   
      <tr><td class="label" >Limited to</td> <td ></td></tr> 
      <tr><td class="label" >Does the pain interfere with sleeping?</td> <td ></td></tr> 
      <tr><td class="label" >Does the pain interfere with work or play?</td> <td ></td></tr> 
      <tr>
        <td class="label" >What makes the pain worse?</td> 
        <td >
          <input type="checkbox">Sitting &nbsp; 
          <input type="checkbox">Standing  &nbsp; 
          <input type="checkbox" checked="checked">Coughing&nbsp;
          <input type="checkbox" checked="checked">Leaning backward &nbsp;
          <input type="checkbox" checked="checked">Other
        </td>
      </tr> 
      <tr>
        <td class="label" >What makes the pain worse? (Other)</td> 
        <td > </td>
      </tr> 
      <tr>
        <td class="label">What makes the pain better?</td> 
        <td>
          <input type="checkbox">Sitting &nbsp; 
          <input type="checkbox">Standing  &nbsp;        
          <input type="checkbox" checked="checked">Leaning Forward &nbsp;
          <input type="checkbox" checked="checked">Other
        </td>
      </tr> 
      <tr>
        <td class="label">What makes the pain better? (Other)</td> 
        <td > </td>
      </tr> 
      <tr>
        <td class="label" colspan="2" align="center"><b>Which of these tests have you had before and when?</b></td>         
      </tr> 
      <tr><td class="label">MRI</td> <td></td> </tr> 
      <tr><td class="label">CT Myelogram</td> <td></td> </tr> 
      <tr><td class="label">EMG/NCS</td> <td></td> </tr> 
      <tr><td class="label">Discogram</td> <td></td> </tr> 
      <tr>
        <td class="label" colspan="2" align="center"><b>What have you tried for the pain so far?</b></td>         
      </tr> 
      <tr><td class="label">Physical Therapy:</td> <td></td> </tr> 
      <tr><td class="label">Are you satisfied with the effort given:</td> <td></td> </tr> 
      <tr><td class="label">Did therapy help:</td> <td></td> </tr> 
      <tr><td class="label">NSAIDs (Ibuprofen, Naprosyn, Mobic, Celebrex, Relafen, etc.)</td> <td></td> </tr> 
      <tr><td class="label">Did the medicine help: (NSAIDs)</td> <td></td> </tr> 
      <tr><td class="label">Oral Steroids (Medrol Dose Pack, Prednisone, Methylprednisilone)</td> <td></td> </tr> 
      <tr><td class="label">Did the medicine help: (Oral Steroids)</td> <td></td> </tr> 
      <tr><td class="label">Pain Meds (Vicodin, Norco, Lortab, Darvocet, Oxycontin, Percocet, Morphine)</td> <td></td> </tr> 
      <tr><td class="label">Injections (Epidural Injections, ESIs, Facet Injections, Nerve Root Blocks)</td> <td></td> </tr> 
      <tr><td class="label">Did injections help: (Pain Meds) </td> <td></td> </tr> 
      <tr><td class="label">Back/Neck Surgery (Include dates): </td> <td></td> </tr>
      <tr><td class="label">Did surgery help: </td> <td></td> </tr>
    </tbody>
  </table>

  <h3>Patient Medical History:</h3>
  
  <table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
    <tr><td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td></tr>
    <tr>
      <td width="10%">Psychiatric/Depression</td>
      <td width="10%">Stroke</td> 
      <td width="10%">Anemia</td>    
      <td width="10%">Abdominal pain</td>  
      <td width="10%">Balance Problems</td>
      <td width="10%">Bleeding Problems</td> 
      <td width="10%">Bloody Stool</td>   
      <td width="10%">Bloody Urine</td>   
      <td width="10%">Blood Clots</td> 
      <td width="10%">Chest Pain/Angina</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>  
    <td>-</td>
    <td></td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
    <tr>
      <td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr>   
      <td width="10%">Constipation</td>
      <td width="10%">Cough</td>
      <td width="10%">Diabetes</td>
      <td width="10%">Diarrhea</td>
      <td width="10%">Fainting</td>
      <td width="10%">Female organs/Menstrual</td>
      <td width="10%">Fever</td>
      <td width="10%">Hearing changes</td>
      <td width="10%">Heat/Cold Intolerance</td>
      <td width="10%">Hair/Nail changes</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>  
    <td>-</td>
    <td></td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
    <tr>
      <td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr>      
      <td width="10%">High Blood Pressure</td>
      <td width="10%">MuscleSpasms</td>
      <td width="10%">Nausea</td>
      <td width="10%">Osteoarthritis</td>
      <td width="10%">Palpitations</td>
      <td width="10%">Rash</td>
      <td width="10%">ShortnessofBreath</td>
      <td width="10%">Speechchanges</td>
      <td width="10%">Swelling</td>
      <td width="10%">SwollenGlands</td>     
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>  
    <td>-</td>
    <td></td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="3">
  <thead>
    <tr>
      <td colspan="10"><b>Please report if you have had or are currently experiencing any of the following:</b></td>
    </tr>
    <tr> 
      <td width="10%">Stomach Ulcers</td>
      <td width="10%">Seizure/Epilepsy</td>
      <td width="10%">Thyroid Disease</td>
      <td width="10%">Tremor</td>
      <td width="10%">UrineRetention</td>
      <td width="10%">Visionchanges</td>
      <td width="10%">Weight Loss</td>
      <td width="30%">Other</td>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>  
    <td>-</td>
    <td></td>
  </tr>  
  </tbody>
</table>

<table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
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
    <td>-</td>
    <td>-</td> 
    <td>-</td> 
    <td>-</td>     
  </tr>  
  </tbody>
  </table> 
  
  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;margin-top:10pt;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">Have you ever had general anesthesia? (Being put to sleep for an operation)</td> <td width="40%"></td></tr>    
      <tr><td class="label" width="60%">Have you ever had problems with anesthesia?</td> <td width="40%"></td></tr>   
      <tr><td class="label" width="60%">Are your immunizations up to date?</td> <td width="40%"></td></tr>
    </tbody>
  </table>
  
  <h3>Your Social History</h3>
  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;margin-top:10pt;" cellpadding="3">
    <tbody>
      <tr><td class="label" width="60%">Work in the home</td> <td width="40%"></td></tr>    
      <tr><td class="label" width="60%">Employed</td> <td width="40%"></td></tr> 
      <tr><td class="label" width="60%">If employed then occupation:</td> <td width="40%"></td></tr>     
      <tr><td class="label" width="60%">Student</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Retired</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Other</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Children</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If children then age:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Live Alone?</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If live alone, do you have help or family nearby?:</td> <td width="40%"></td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Exercise</b></td></tr>
      <tr><td class="label" width="60%">Exercise?</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Daily</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Weekly</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Monthly</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Rarely</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Never</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">What type of exercise?</td> <td width="40%"></td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Smoking</b></td></tr>
      <tr><td class="label" width="60%">Smoker</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If smoker, packs per day:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">For how long</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Quit Smoking</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Within the last year</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">2 to 4 years</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">5 to 10 years</td> <td width="40%"></td></tr>
      <tr><td colspan="2" align="center" class="label"><b> About Tobacco</b></td></tr>
      <tr><td class="label" width="60%">Chew Tobacco:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If chew tobacco, how much</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">For how long</td> <td width="40%"></td></tr>
    </tbody>
  </table>
  <div style="page-break-before:always;"></div>
  <table class="form" width="100%" style="font-size:9pt; border-collapse:collapse;" cellpadding="3">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b> About Alcohol</b></td></tr>
      <tr><td class="label" width="60%">Drink Alcohol:</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Daily</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">1-2x/week</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">1-2x/month</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">1-2x/year</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">Alcohol preference:</td> <td width="40%"></td></tr>
      <tr><td colspan="2" align="center" class="label"><b>About Drug</b></td></tr>
      <tr><td class="label" width="60%">Drugs (Marijuana, Cocaine, etc)</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">If drugs, then which</td> <td width="40%"></td></tr>
      <tr><td colspan="2" align="center" class="label"><b>Comments regarding any health issues not covered on this form:</b></td></tr>
      <tr><td colspan="2"></td></tr>  
    </tbody>
  </table>
  
  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
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
      <td>-</td>
      <td>-</td> 
      <td>-</td> 
      <td>-</td>     
    </tr>  
    </tbody>
  </table>
  <table class="form" width="100%" style="font-size:9pt; border-collapse:collapse;" cellpadding="3">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b> List any allergies with current medications</b></td></tr>
      <tr><td colspan="2"></td></tr>  
    </tbody>
  </table>

  <table class="form" width="100%" style="font-size:9pt; border-collapse: collapse;" cellpadding="3">
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
      <td>-</td>
      <td>-</td> 
      <td>-</td> 
      <td>-</td>     
    </tr>  
    </tbody>
  </table>
  <table class="form" width="100%" style="font-size:9pt; border-collapse:collapse;" cellpadding="3">
    <tbody>
      <tr><td colspan="2" align="center" class="label"><b>Family Member History of</b></td></tr>
      <tr><td class="label" width="60%">Cardiac Disease</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%"></td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Stroke</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%"></td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Diabetes</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%"></td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Neurologic Problems</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%"></td></tr>
      <tr><td colspan="2"></td></tr>      
      <tr><td class="label" width="60%">Spine Problems</td> <td width="40%"></td></tr>
      <tr><td class="label" width="60%">if yes, Who?</td> <td width="40%"></td></tr>
    </tbody>
  </table>

  <div class="sign">
    <div class="input">
      <p class="mb-0">Patient signature</p>
      <span>Baljeet S</span>
      <hr class="input"/>
    </div>
    <div class="input">
      <p class="mb-0">Date</p>
      <span>12-30-2023</span>
      <hr class="input"/>
    </div> 
  </div>
</body>
</html>
