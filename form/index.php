<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient intake form</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/frmstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="progBar">
		<div class="Barwid"></div>
	</div>	
	<div class="frmbox">					
		<form id="form_refer">
			<div class="speech"></div>					
			<div class="frm_stp_1 stpsform transup" data-id="1"> <!-- transup -->
				<div class="home-btn">
					<a onclick="window.location.href='/'"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Back to home</a>
				</div>	
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Patient Name *</h3>
					<input type="text" name="step_1_input1" id="step_1_input1" class="inputfild" placeholder="Type your name here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Age *</h3>
					<input type="text" name="step_1_input2" id="step_1_input2" maxlength="3" class="inputfild" placeholder="Type your age here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsok" onclick="nextStp(2)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>					
				</div>
			</div>
			<div class="frm_stp_2 stpsform" data-id="2">
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of birth *</h3>
					<input type="date" id="step_2_input1" name="step_2_input1" class="inputfild" placeholder="Type your date of birth here..." autocomplete="off">
					<h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Sex *</h3>
					<div class="disflx">
						<div class="inputGroup">
						   <input id="f2mle" name="step_2_input2" type="radio" class="rd4" value="male" />
						   <label for="f2mle"><span class="bxopt">A</span> Male</label>
						</div>
						<div class="inputGroup">
						   <input id="f2fmle" name="step_2_input2" type="radio" class="rd4" value="female" />
						   <label for="f2fmle"><span class="bxopt">B</span> Female</label>
						</div>
						<div class="inputGroup">
						   <input id="f2oth" name="step_2_input2" type="radio" class="rd4" value="other" />
						   <label for="f2oth"><span class="bxopt">C</span> Other</label>
						</div>
					</div>
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(1)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(3)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_3 stpsform" data-id="3">
				<h2>Patient Information</h2>
				<div class="quesalign hetsrl hetmobsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Address *</h3>
					<input type="text" name="step_3_input1" id="step_3_input1" class="inputfild" placeholder="Type your address here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> City *</h3>
					<input type="text" name="step_3_input2" id="step_3_input2" class="inputfild" placeholder="Type your city here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> State *</h3>
					<input type="text" name="step_3_input3" id="step_3_input3" class="inputfild" placeholder="Type your state here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Zip *</h3>
					<input type="text" name="step_3_input4" id="step_3_input4" class="inputfild" placeholder="Type your zip here..." autocomplete="off">

					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(2)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(4)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_4 stpsform" data-id="4">
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> SS#</h3>
					<input type="text" name="step_4_input1" id="step_4_input1" class="inputfild" placeholder="Type your SS here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Driver's License#</h3>
					<input type="text" name="step_4_input2" id="step_4_input2" class="inputfild" placeholder="Type your driver's license here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(3)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(5)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_5 stpsform">
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Marital status</h3>
					<div class="disflx">
						<div class="inputGroup">
						   <input id="f6rd1" name="step_5_input1" type="radio" class="myRd" value="Single" />
						   <label for="f6rd1"><span class="bxopt">A</span> Single</label>
						</div>
						<div class="inputGroup">
						   <input id="f6rd2" name="step_5_input1" type="radio" class="myRd" value="Married" />
						   <label for="f6rd2"><span class="bxopt">B</span> Married</label>
						</div>
						<div class="inputGroup">
						   <input id="f6rd3" name="step_5_input1" type="radio" class="myRd" value="Divorced" />
						   <label for="f6rd3"><span class="bxopt">C</span> Divorced</label>
						</div>
						<div class="inputGroup">
						   <input id="f6rd4" name="step_5_input1" type="radio" class="myRd" value="Widowed" />
						   <label for="f6rd4"><span class="bxopt">D</span> Widowed</label>
						</div>
					</div>
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(4)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(6)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_6 stpsform">
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Home phone</h3>
					<input type="text" name="step_6_input1" maxlength="11" id="step_6_input1" class="inputfild" placeholder="Type your home phone here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Cell *</h3>
					<input type="text" name="step_6_input2" maxlength="11" id="step_6_input2" class="inputfild" placeholder="Type your Cell number here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Work</h3>
					<input type="text" name="step_6_input3" maxlength="11" id="step_6_input3" class="inputfild" placeholder="Type your work here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(5)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(7)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_7 stpsform">
				<h2>Patient Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Email address</h3>
					<input type="email" name="step_7_input1" id="step_7_input1" class="inputfild" placeholder="Type your email here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Emergency contact name</h3>
					<input type="text" name="step_7_input2" id="step_7_input2" class="inputfild" placeholder="Type your emergency contact name here..." autocomplete="off" >
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Phone</h3>
					<input type="text" name="step_7_input3" maxlength="11" id="step_7_input3" class="inputfild" placeholder="Type your phone here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(6)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(8)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_8 stpsform">
				<h2>Referral Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of injury</h3>
					<input type="date" name="step_8_input1" id="step_8_input1" class="inputfild" placeholder="Type your date here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Reson for visit</h3>
					<input type="text" name="step_8_input2" id="step_8_input2" class="inputfild" placeholder="Type your reson here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(7)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(9)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>

			<div class="frm_stp_9 stpsform">
				<h2>Referral Information</h2>
				<div class="quesalign">
					<h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Did a doctor refer you? </h3>
					<div class="disflx">
						<div class="inputGroup">
						   <input id="f10diddocref" name="step_9_input1" type="radio" class="myRd" value="Yes" />
						   <label for="f10diddocref"><span class="bxopt">A</span> Yes</label>
						</div>
						<div class="inputGroup">
						   <input id="f10diddoc" name="step_9_input1" type="radio" class="myRd" value="No" />
						   <label for="f10diddoc"><span class="bxopt">B</span> No</label>
						</div>
					</div>
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Referring Doctor name</h3>
					<input type="text" name="step_9_input2" id="step_9_input2" class="inputfild" placeholder="Type your name here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(8)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(10)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_10 stpsform">
				<h2>Referral Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Primary care physician</h3>
					<input type="text" name="step_10_input1" id="step_10_input1" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Phone</h3>
					<input type="text" name="step_10_input2" id="step_10_input2" class="inputfild" placeholder="Type your phone here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> City</h3>
					<input type="text" name="step_10_input3" id="step_10_input3" class="inputfild" placeholder="Type your city here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(9)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(11)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_11 stpsform">
				<h2>Mechanism of injury description</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Brief overview</h3>
					<input type="text" name="step_11_input1" id="step_11_input1" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Injured body part</h3>
					<input type="text" name="step_11_input2" id="step_11_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(10)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(12)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_12 stpsform">
				<h2>Mechanism of injury description</h2>
				<div class="quesalign">
					<h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Private pay</h3>
					<div class="disflx">
						<div class="inputGroup">
						   <input id="f13priv" name="step_12_input1" class="" value="Yes" type="radio"/>
						   <label for="f13priv"><span class="bxopt">A</span> Yes</label>
						 </div>
						 <div class="inputGroup">
						   <input id="f13pay" name="step_12_input1" class="" value="No" type="radio"/>
						   <label for="f13pay"><span class="bxopt">B</span> No</label>
						 </div>
					</div>
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(11)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(13)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_13 stpsform">
				<h2>Mechanism of injury description</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Parent/Guardian</h3>
					<input type="text" name="step_13_input1" id="step_13_input1" class="inputfild" placeholder="Type your parent/guardian name here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of birth</h3>
					<input type="date" name="step_13_input2" id="step_13_input2" class="inputfild" placeholder="Type your date here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> SS#</h3>
					<input type="text" name="step_13_input3" id="step_13_input3" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(12)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(14)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_14 stpsform">
				<h2>Insured Information(Group Insurance)</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Insurance company</h3>
					<input type="text" name="step_14_input1" id="step_14_input1" class="inputfild" placeholder="Type your company here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(13)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(15)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_15 stpsform">
				<h2>Insured Information(Group Insurance)</h2>
				<div class="quesalign hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Address</h3>
					<input type="text" name="step_15_input1" id="step_15_input1" class="inputfild" placeholder="Type your address here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> City</h3>
					<input type="text" name="step_15_input2" id="step_15_input2" class="inputfild" placeholder="Type your city here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> State</h3>
					<input type="text" name="step_15_input3" id="step_15_input3" class="inputfild" placeholder="Type your state here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Zip</h3>
					<input type="text" name="step_15_input4" id="step_15_input4" class="inputfild" placeholder="Type your zip here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(14)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(16)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_16 stpsform">
				<h2>Insured Information(Group Insurance)</h2>
				<div class="quesalign hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Phone</h3>
					<input type="text" name="step_16_input1" id="step_16_input1" class="inputfild" placeholder="Type your phone here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Policy#</h3>
					<input type="text" name="step_16_input2" id="step_16_input2" class="inputfild" placeholder="Type your policy here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Member Id</h3>
					<input type="text" name="step_16_input3" id="step_16_input3" class="inputfild" placeholder="Type your member id here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Co-pay</h3>
					<input type="text" name="step_16_input4" id="step_16_input4" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(15)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(17)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_17 stpsform">
				<h2>Primary Card Holder's Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Name on card</h3>
					<input type="text" name="step_17_input1" id="step_17_input1" class="inputfild" placeholder="Type your name here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Spouse/parent/self(circle one) SS#</h3>
					<input type="text" name="step_17_input2" id="step_17_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
				    <a class="btnsfrmsokprev" onclick="prevStp(16)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(18)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_18 stpsform">
				<h2>Primary Card Holder's Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of birth</h3>
					<input type="date" name="step_18_input1" id="step_18_input1" class="inputfild" placeholder="Type your date here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Age</h3>
					<input type="text" name="step_18_input2" id="step_18_input2" class="inputfild" placeholder="Type your age here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(17)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(19)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_19 stpsform">
				<h2>Primary Card Holder's Information</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Employer</h3>
					<input type="text" name="step_19_input1" id="step_19_input1" class="inputfild" placeholder="Type your text here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(18)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(20)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<button type="submit" id="subbtn">Submit</button>
				</div>
			</div>
			<div class="frm_stp_20 stpsform">
				<h2>Primary Card Holder's Information</h2>
				<div class="quesalign hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Address</h3>
					<input type="text" name="step_20_input1" id="step_20_input1" class="inputfild" placeholder="Type your address here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> City</h3>
					<input type="text" name="step_20_input2" id="step_20_input2" class="inputfild" placeholder="Type your city here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> State</h3>
					<input type="text" name="step_20_input3" id="step_20_input3" class="inputfild" placeholder="Type your state here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Zip</h3>
					<input type="text" name="step_20_input4" id="step_20_input4" class="inputfild" placeholder="Type your zip here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Work#</h3>
					<input type="text" name="step_20_input5" id="step_20_input5" class="inputfild" placeholder="Type your work here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(19)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(21)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<button type="submit" id="subbtn">Submit</button>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_21 stpsform">
				<h2>Medicare/Medicaid</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Medicare#</h3>
					<input type="text" name="step_21_input1" id="step_21_input1" class="inputfild" placeholder="Type your medicare here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Medicaid#</h3>
					<input type="text" name="step_21_input2" id="step_21_input2" class="inputfild" placeholder="Type your medicaid here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(20)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(22)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<button type="submit" id="subbtn">Submit</button>
				</div>
			</div>
			<div class="frm_stp_22 stpsform">
				<h2>Medicare Suppliment Insurance</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Insurance Name</h3>
					<input type="text" name="step_22_input1" id="step_22_input1" class="inputfild" placeholder="Type your medicare here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Phone</h3>
					<input type="text" name="step_22_input2" id="step_22_input2" class="inputfild" placeholder="Type your medicaid here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(21)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(23)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<button type="submit" id="subbtn">Submit</button>
				</div>
			</div>
			<div class="frm_stp_23 stpsform">
				<h2>Medicare Suppliment Insurance</h2>
				<div class="quesalign hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Address</h3>
					<input type="text" name="step_23_input1" id="step_23_input1" class="inputfild" placeholder="Type your address here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> City</h3>
					<input type="text" name="step_23_input2" id="step_23_input2" class="inputfild" placeholder="Type your city here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> State</h3>
					<input type="text" name="step_23_input3" id="step_23_input3" class="inputfild" placeholder="Type your state here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Work#</h3>
					<input type="text" name="step_23_input4" id="step_23_input4" class="inputfild" placeholder="Type your work here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(22)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(24)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<button type="submit" id="subbtn">Submit</button>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_24 stpsform">
				<h2>Medicare Suppliment Insurance</h2>
				<div class="quesalign">
					<h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Case handled by attorney</h3>
					<div class="disflx">
						<div class="inputGroup">
						   <input id="f25cseh1" name="step_24_input1" class="rd3" value="Yes" type="radio"/>
						   <label for="f25cseh1"><span class="bxopt">A</span> Yes</label>
						 </div>
						 <div class="inputGroup">
						   <input id="f25cseh2" name="step_24_input1" class="rd3" value="No" type="radio"/>
						   <label for="f25cseh2"><span class="bxopt">B</span> No</label>
						 </div>
					</div>
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(23)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(25)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
			</div>
			<div class="frm_stp_25 stpsform">
				<h2>Medicare Suppliment Insurance</h2>
				<div class="quesalign">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Attorney name</h3>
					<input type="text" name="step_25_input1" id="step_25_input1" class="inputfild" placeholder="Type your address here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Phone</h3>
					<input type="text" name="step_25_input2" maxlength="11" id="step_25_input2" class="inputfild" placeholder="Type your phone here..." autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Case manager name</h3>
					<input type="text" name="step_25_input3" id="step_25_input3" class="inputfild" placeholder="Type your name here..." autocomplete="off">
					<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
					<a class="btnsfrmsokprev" onclick="prevStp(24)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(26)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
					<!-- <button type="submit" id="subbtn">Submit</button> -->
				</div>
			</div>
			<div class="frm_stp_26 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> WORKER’S COMPENSATION:</h3>
					<p class="frmp">It is important that you make our office aware if this is a work comp injury prior to your visit. Please have all relevant information available in order to quickly complete your check-in process.</p>
					<p class="frmp"><b>EMPLOYER PAY:</b> If your employer is paying for your visit instead of filing worker’s comp, we must have payment up front or a signed contract in hand before your visit. We must be notified of any responsibility changes the employer makes within 80 days of first date of service.</p>
					<p class="frmp">By signing this you are acknowledging that all the above information is accurate and correct to the best of your knowledge.</p>
					<a class="btnsfrmsokprev" onclick="prevStp(25)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(27)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_27 stpsform">
				<h2>CONSENT FOR TREATMENT AND FINANCIAL AGREEMENT</h2>
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Patient name</h3>
					<input type="text" name="step_27_input1" id="step_27_input1" class="inputfild" placeholder="Type your name here..." autocomplete="off">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of birth</h3>
					<input type="date" name="step_27_input2" id="step_27_input2" class="inputfild" placeholder="Type your date here..." autocomplete="off">
					<p class="frmp">I authorize IMED Physicians, to examine me (or the patient I am legally responsible for) and to do any x-rays or other diagnostic tests that may be needed to make a diagnosis and to provide treatment. I consent to necessary office or other outpatient treatment after being properly informed of alternatives, benefits, and risks.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(26)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(28)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_28 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> AUTHORIZATION FOR RELEASE OF MEDICAL INFORMATION</h3>
					<p class="frmp">I authorize Specialty Care Clinics to release to any Insurance company, health plan, or governmental agency such medical information that may be required to process my claim for payment of this medical bill.</p>
					<p class="frmp">I also authorize Specialty Care Clinics to release appropriate medical information to any doctor, hospital, or other health care facility that has or will participate in my (the patient’s) care. I authorize a photocopy, facsimile, or other electronic transmission of the above Assignments, Authorizations, and Releases, to be used in place of the original until/unless I send written notice to the contrary to the offices of Specialty Care Clinics. I further authorize any other doctor, hospital, or health care facility to release to Specialty Care Clinics office any medical information concerning my (the patient’s) illness or injury.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(27)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(29)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_29 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> FINANCIAL AGREEMENT</h3>
					<p class="frmp">I agree to pay all professional fees charged by Specialty Care Clinics for my (the patient’s) care, irrespective of any insurance benefits to which I may be entitled, except if Specialty Care Clinics has agreed to accept insurance benefits as full payment for covered services in accordance with federal or state law (e.g. Medicare, Medicaid) or by contract with a prepaid health plan or managed-care plan, and provided such Insurance benefits are paid within 60 days of claims submission, and provided there is no recovery from a third-party negligence lawsuit (see Injuries and Third-Party Negligence, below). Ultimately, it is your responsibility to understand the coverage that you pay for in a monthly premium to your carrier. If an employer or its carrier denies a claim for payment for a work-related injury, or if a prepaid health plan, managed-care health plan, or Medicare, considers certain services ineligible or uncovered services, then you (patient) agree to pay for those services. It is understood that claims for services remaining unpaid 60 days after claims submission shall be presumed ineligible for insurance reimbursement, and you (patient) shall pay for those services. If patient is a minor — the parent/ guardian who requests treatment for a child will be responsible for all fees.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(28)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(30)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_30 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> INJURIES AND THRID-PARTY NEGLIGENCE</h3>
					<p class="frmp">I understand and agree that if Specialty Care Clinics has granted discounts from its usual fees for any reason, including its participation in prepaid or managed-care health plans, and if I (the patient) recover(s) any monies as the result of any judgment, award, or settlement of any lawsuit arising from treated injuries or illness, then I shall give a lien to Specialty Care Clinics against such monetary recovery in the full amount of such discounts.</p>
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>  DELINQUENCY</h3>
					<p class="frmp">If my (the patient’s) account becomes delinquent, I understand that Specialty Care Clinics at its sole discretion, may refer to a collection agency or an attorney as allowed by law.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(29)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(31)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_31 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> INSURANCE ASSIGNMENT</h3>
					<p class="frmp">I authorize my insurance company or third-party payer to whom a claim for payment has been submitted to pay any eligible benefits directly  to Specialty Care Clinics.  I  hereby  authorize  payment  to  go  directly  to  Specialty Care Clinics   for medical benefits payable  by insurance company <input type="text" name="step_31_input1" class="inputsmall"> (and/or Medicare) and understand that I am responsible for any charge not covered by the terms of my insurance policy. I hereby assign Specialty Care Clinics full rights to represent my (the patient’s) interests in any complaints of appeals for denial of benefits or reimbursement  to  the  Texas  Department  of  Insurance (State Insurance Commissioner). I hereby authorize said assignee Specialty Care Clinics to furnish these agencies such information as may be necessary to support such complaints or appeals.</p>
					<p class="frmp">I agree I cannot revoke the FINANCIAL AGREEMENT or the INSURANCE ASSIGNMENT at any time while any portion of the medical bill remains unpaid. I have read, understand, and do hereby agree to the terms of the forgoing Assignments, Authorizations, and Releases. I also certify that the PATIENT INFORMATION I have provided is true and accurate to the best of my knowledge.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(30)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(32)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
			<div class="frm_stp_32 stpsform">
				<div class="quesalign hetmobsrl hetsrl">
					<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> HIPAA Compliance Patient Consent Form</h3>
					<p class="frmp">Our Notice of Privacy Practices provides information about how we may use or disclose protected health information.</p>
					<p class="frmp">The notice contains a patient’s rights section describing your rights under the law. You ascertain that by your signature that you have reviewed our notice before signing this consent.</p>
					<p class="frmp">The terms of the notice may change, if so, you will be notified at your next visit to update your signature/date.</p>
					<p class="frmp">You have the right to restrict how your protected health information is used and disclosed for treatment, payment or healthcare operations. We are not required to agree with this restriction, but if we do, we shall honor this agreement. The HIPAA (Health Insurance Portability and Accountability Act of 1996) law allow for the use of the information for treatment, payment or healthcare operations.</p>
					<p class="frmp">By signing this form, you consent to our use and disclosure of your protected healthcare information and potentially anonymous usage in a publication. You have the right to revoke this consent in writing, signed by you. However, such a revocation will not be retroactive.</p>

					<a class="btnsfrmsokprev" onclick="prevStp(31)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
					<a class="btnsfrmsok" onclick="nextStp(33)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
				</div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
			</div>
      <div class="frm_stp_33 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
          <ul>
            <li><p class="frmp">By signing this form, I understand that:</p></li>
            <li><p class="frmp">Protected health information may be disclosed or used for treatment, payment, or healthcare operations.</p></li>
            <li><p class="frmp">The practice reserves the right to change the privacy policy as allowed by law</p></li>
            <li><p class="frmp">The practice has the right to restrict the use of the information but the practice does not have to agree to those restrictions.</p></li>
            <li><p class="frmp">The patient has the right to revoke this consent in writing at any time and all full disclosures will then cease.</p></li>
            <li><p class="frmp">The practice may condition receipt of treatment upon execution of this consent.</p></li>
          </ul>

          <a class="btnsfrmsokprev" onclick="prevStp(32)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(34)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_34 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> May we phone, email, or send a text to you to confirm appointments?</h3>
          <div class="disflx">
            <div class="inputGroup">
               <input id="step_34_input1_yes" name="step_34_input1" class="rd3" value="Yes" type="radio"/>
               <label for="step_34_input1_yes"><span class="bxopt">A</span> Yes</label>
             </div>
             <div class="inputGroup">
               <input id="step_34_input1_no" name="step_34_input1" class="rd3" value="No" type="radio"/>
               <label for="step_34_input1_no"><span class="bxopt">B</span> No</label>
             </div>
          </div>

          <h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> May we leave a message on your answering machine at home or on your cell phone?</h3>
          <div class="disflx">
            <div class="inputGroup">
               <input id="step_34_input2_yes" name="step_34_input2" class="rd3" value="Yes" type="radio"/>
               <label for="step_34_input2_yes"><span class="bxopt">A</span> Yes</label>
             </div>
             <div class="inputGroup">
               <input id="step_34_input2_no" name="step_34_input2" class="rd3" value="No" type="radio"/>
               <label for="step_34_input2_no"><span class="bxopt">B</span> No</label>
             </div>
          </div>

          <h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> May we discuss your medical condition with any member of your family?</h3>
          <div class="disflx">
            <div class="inputGroup">
               <input id="step_34_input3_yes" name="step_34_input3" class="rd3" value="Yes" type="radio"/>
               <label for="step_34_input3_yes"><span class="bxopt">A</span> Yes</label>
             </div>
             <div class="inputGroup">
               <input id="step_34_input3_no" name="step_34_input3" class="rd3" value="No" type="radio"/>
               <label for="step_34_input3_no"><span class="bxopt">B</span> No</label>
             </div>
          </div>
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> If YES, please name the members allowed:</h3>
          <input type="text" name="step_34_input4" id="step_34_input4" class="inputfild" placeholder="Type your answer here..." autocomplete="off">

          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(33)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(35)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_35 stpsform">
        <div class="quesalign">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> This consent was signed by:</h3>
          <input type="text" name="step_35_input1" id="step_35_input1" class="inputfild" placeholder="Print name please..." autocomplete="off">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Witness:</h3>
          <input type="text" name="step_35_input2" id="step_35_input2" class="inputfild" placeholder="Type your witness here..." autocomplete="off">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date</h3>
          <input type="date" name="step_35_input3" id="step_35_input3" class="inputfild" placeholder="Type your date here..." autocomplete="off">

          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(34)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(36)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
      </div>
      <div class="frm_stp_36 stpsform">
        <h2>PRESCRIPTION REFILLS AND PHONE MESSAGES</h2>
        <div class="quesalign hetmobsrl hetsrl">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> PATIENT INSURANCE POLICY:</h3>
          <ul>
            <li><p class="frmp">It is your responsibility to know your insurance and bring your card with you to all appointments</p></li>
            <li><p class="frmp">Is physician a CONTRACTED PROVIDER of your insurance?</p></li>
            <li><p class="frmp">Do you need PRIOR AUTHORIZATION for procedures?</p></li>
            <li><p class="frmp">Are X-Rays and Supplies included in your COPAY?</p></li>
            <li><p class="frmp">How much is your COPAY for a Specialist?</p></li>
            <li><p class="frmp">Do you have a YEARLY DEDUCTIBLE? If so, has it been met?</p></li>
          </ul>
          <p class="frmp">PLEASE HELP US HELP YOU. There are hundreds of insurance companies thereby making it almost impossible for our staff to know the specific requirements for each policy. Please call your insurance company prior to your appointment to obtain this needed information.</p>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(35)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(37)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_37 stpsform">
        <div class="quesalign">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> PROTOCOL FOR PRESCRIPTION REFILLS:</h3>
          <ul>
            <li><p class="frmp">Please allow 48-72 hours on refill requests.</p></li>
            <li><p class="frmp">Notify your Pharmacy directly on refills</p></li>
          </ul>
          <p class="frmp">In order to be as efficient as possible these are the policies in effect regarding all prescriptions.</p>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(36)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(38)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
      </div>
      <div class="frm_stp_38 stpsform">
        <div class="quesalign chkfull hetmobsrl hetsrl">
          <h3 class="marbh3"><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> HIPAA EXCEPTIONS (Please check all that apply):</h3>
          <div class="inputGroup">
              <input id="step_38_input1" class="ourspecchk" name="step_38_input1" value="Yes" type="checkbox"/>
              <label for="step_38_input1"><span class="bxopt">A</span> OK to have a message left on my answering machine</label>
          </div>
          <div class="inputGroup">
             <input id="step_38_input2" class="ourspecchk" name="step_38_input2" value="Yes" type="checkbox"/>
             <label for="step_38_input2"><span class="bxopt">B</span> OK to leave a message with spouse; name of spouse:</label>
          </div>
          <input type="text" name="step_38_input3" id="step_38_input3" class="inputfild" placeholder="Name of spouse..." autocomplete="off">
          <div class="inputGroup">
             <input id="step_38_input4" class="ourspecchk" name="step_38_input4" value="Yes" type="checkbox"/>
             <label for="step_38_input4"><span class="bxopt">C</span> OK to leave a message with any adult who answers my phone</label>
          </div>
          <div class="inputGroup">
             <input id="step_38_input5" class="ourspecchk" name="step_38_input5" value="Yes" type="checkbox"/>
             <label for="step_38_input5"><span class="bxopt">D</span> OK to leave a message regarding appointments ONLY</label>
          </div>
          <p class="frmp">I have read and understand the above information regarding MY INSURANCE POLICY, PRESCRIPTION REFILLS, and the HIPAA EXCEPTIONS AUTHORIZATION for leaving messages.</p>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(37)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(39)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_39 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
          <p class="frmp">I hereby authorize <input type="text" class="inputsmall" name="step_39_input1">  to release to Specialty Care Clinics, located at 2600 W Pleasant Run Rd, Lancaster, TX 75146</p>
          <p class="frmp"> Information contained in the Medical Records of:</p>
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Name of Patient:</h3>
          <input type="text" name="step_39_input2" id="step_39_input2" class="inputfild" placeholder="Type patient name here ..." autocomplete="off">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of Birth:</h3>
          <input type="text" name="step_39_input3" id="step_39_input3" class="inputfild" placeholder="Type date of birth here ..." autocomplete="off">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Social Security #:</h3>
          <input type="text" name="step_39_input4" id="step_39_input4" class="inputfild" placeholder="Type social security here ..." autocomplete="off">
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(38)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(40)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_40 stpsform ">
        <h3 class="marbh3"><span class="clrpur">41</span><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Specific Information to be Disclosed:</h3>
        <div class="quesalign hetmobsrl hetsrl">
          <p class="suggestxt">Choose as many as you like</p>
          <div class="disflx disflxCol">
             <div class="inputGroup">
               <input id="step_40_input1" name="step_40_input1" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_40_input1"><span class="bxopt">A</span> History</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input2" name="step_40_input2" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_40_input2"><span class="bxopt">B</span> Physical</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input3" name="step_40_input3" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_40_input3"><span class="bxopt">C</span> Therapy Reports</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input4" name="step_40_input4" class="ourspecchk" value="Yes" type="checkbox"/>
               <label for="step_40_input4"><span class="bxopt">D</span> Operative Report</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input5" class="ourspecchk" name="step_40_input5" value="Yes" type="checkbox"/>
               <label for="step_40_input5"><span class="bxopt">E</span> X-Rays</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input6" class="ourspecchk" name="step_40_input6" value="Yes" type="checkbox"/>
               <label for="step_40_input6"><span class="bxopt">F</span> Care Plan</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input7" class="ourspecchk" name="step_40_input7" value="Yes" type="checkbox"/>
               <label for="step_40_input7"><span class="bxopt">G</span> Lab Report</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input8" class="ourspecchk" name="step_40_input8" value="Yes" type="checkbox"/>
               <label for="step_40_input8"><span class="bxopt">H</span> ERG</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input9" class="ourspecchk" name="step_40_input9" value="Yes" type="checkbox"/>
               <label for="step_40_input9"><span class="bxopt">I</span> Office Notes</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input10" class="ourspecchk" name="step_40_input10" value="Yes" type="checkbox"/>
               <label for="step_40_input10"><span class="bxopt">J</span> Immunizations</label>
            </div>
            <div class="inputGroup">
               <input id="step_40_input11" class="ourspecchk" name="step_40_input11" value="Yes" type="checkbox"/>
               <label for="step_40_input11"><span class="bxopt">K</span> Psychological Reports</label>
            </div>
            <div class="inputGroup">
             <input id="step_40_input12" class="ourspecchk" name="step_40_input12" value="Yes" type="checkbox"/>
             <label for="step_40_input12"><span class="bxopt">L</span> Other: (specify)</label>
          	</div>
          </div>       
          <input type="text" name="step_40_input13" id="step_40_input13" class="inputfild" placeholder="Other: (specify)" autocomplete="off">
          <div class="inputGroup chkallbtn">
              <input id="step_40_input14" class="chkall" name="step_40_input14" value="Check all" type="checkbox"/>
              <label for="step_40_input14">Select All</label>
          </div>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill this in</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(39)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(41)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_41 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
        <p class="frmp">I give permission for release of any information in my records, including information relevant to substance abuse, psychiatric mental health services or HIV (positive or negative) unless specifically excluded below.</p>
        <p class="frmp">Do Not Release Information Related To:</p>
        <h3 class="marbh3"><span class="clrpur">42</span><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Specific Information to be Disclosed:</h3>
          <p class="suggestxt">Choose as many as you like</p>
          <div class="disflx disflxCol">
             <div class="inputGroup">
               <input id="step_41_input1" name="step_41_input1" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_41_input1"><span class="bxopt">A</span> HIV</label>
            </div>
            <div class="inputGroup">
               <input id="step_41_input2" name="step_41_input2" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_41_input2"><span class="bxopt">B</span> Substance Abuse</label>
            </div>
            <div class="inputGroup">
               <input id="step_41_input3" name="step_41_input3" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_41_input3"><span class="bxopt">C</span> Psychiatric/Mental Health</label>
            </div>
            <div class="inputGroup">
             <input id="step_41_input4" class="ourspecchk" name="step_41_input4" value="Yes" type="checkbox"/>
             <label for="step_41_input4"><span class="bxopt">D</span> Other: (specify)</label>
            </div>
          </div>         
          <input type="text" name="step_41_input5" id="step_41_input5" class="inputfild" placeholder="Other: (specify)" autocomplete="off">
          <div class="inputGroup chkallbtn">
              <input id="step_41_input6" class="chkall" name="step_41_input6" value="Check all" type="checkbox"/>
              <label for="step_41_input6">Select All</label>
          </div>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill this in</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(40)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(42)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_42 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
        <p class="frmp">THE ABOVE INFORMATION IS RELEASED FOR THE FOLLOWING PURPOSE AND THAT PURPOSE ONLY. PURPOSE OF RELEASE:</p>
        <p class="frmp">Do Not Release Information Related To:</p>
        <h3 class="marbh3"><span class="clrpur">42</span><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Specific Information to be Disclosed:</h3>
          <p class="suggestxt">Choose as many as you like</p>
          <div class="disflx disflxCol">
             <div class="inputGroup">
               <input id="step_42_input1" name="step_42_input1" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_42_input1"><span class="bxopt">A</span> Medical</label>
            </div>
            <div class="inputGroup">
               <input id="step_42_input2" name="step_42_input2" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_42_input2"><span class="bxopt">B</span> Attorney</label>
            </div>
            <div class="inputGroup">
               <input id="step_42_input3" name="step_42_input3" value="Yes" class="ourspecchk" type="checkbox"/>
               <label for="step_42_input3"><span class="bxopt">C</span> Insurance</label>
            </div>
            <div class="inputGroup">
	             <input id="step_42_input4" class="ourspecchk" name="step_42_input4" value="Yes" type="checkbox"/>
	             <label for="step_42_input4"><span class="bxopt">D</span> Other: (specify)</label>
	          </div>
          </div>          
          <input type="text" name="step_42_input5" id="step_42_input5" class="inputfild" placeholder="Other: (specify)" autocomplete="off">
          <div class="inputGroup chkallbtn">
              <input id="step_42_input6" class="chkall" name="step_42_input6" value="Check all" type="checkbox"/>
              <label for="step_42_input6">Select All</label>
          </div>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill this in</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(41)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(43)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_43 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
          <p class="frmp">I understand that I may revoke this authorization at any time except to the extent that action has been taken in reliance on it; and that in any event, this authorization automatically expires 90 days from the date of my signature or as otherwise specified by date, event, or condition as follows. I agree that a photocopy of this authorization may be considered valid:</p>
          <div class="disflx">
            <div class="inputGroup">
               <input id="step_43_input1_yes" name="step_43_input1" class="rd3" value="Yes" type="radio"/>
               <label for="step_43_input1_yes"><span class="bxopt">A</span> Yes</label>
             </div>
             <div class="inputGroup">
               <input id="step_43_input1_no" name="step_43_input1" class="rd3" value="No" type="radio"/>
               <label for="step_43_input1_no"><span class="bxopt">B</span> No</label>
             </div>
          </div>
          <p class="frmp">THIS INFORMATION IS PRIVILEGED AND CONFIDENTIAL. IT IS INTENDED FOR THE INDIVIDIUAL ENTITY DESIGNATED. YOU ARE HEREBY NOTIFIED THAT DISSEMINATION DISTRIBUTION, COPY OR OTHER USE OF THIS INFORMATION BY ANYONE OTHER THAN THE RECIPIENT DESIGNATED ABOVE IS AUTHORIZED AND STRICTLY PROHIBITED.</p>
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(42)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(44)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_44 stpsform">
        <h2>Narcotic Agreement</h2>
        <div class="quesalign">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Patient Name:</h3>
          <input type="text" name="step_44_input1" id="step_44_input1" class="inputfild" placeholder="Type your patient name here..." autocomplete="off">
          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date:</h3>
          <input type="date" name="step_44_input2" id="step_44_input2" class="inputfild" placeholder="Type date here..." autocomplete="off">
          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(43)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(45)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
      </div>
      <div class="frm_stp_45 stpsform">
        <div class="quesalign hetmobsrl hetsrl">
          <p class="frmp">I, <input type="text" class="inputsmall" name="step_45_input1">  , understand that after acute operative pain has dissipated 4 to 6 weeks post operatively, Physician will no longer supply narcotics to me.</p>

          <p class="frmp"> <input type="text" class="inputsmall" name="step_45_input2">  Signed this <input type="text" class="inputsmall" name="step_45_input3"> day of <input type="text" class="inputsmall" name="step_45_input4"> ,<?= date('Y')?> Patient Signature.</p>

          <p class="frmp">I, <input type="text" class="inputsmall" name="step_45_input5"> , understand that if I have not had any form of surgery I will be referred back to the Treating Physician or Pain Management Doctor for medication control. I further understand that the physician will not provide me any type of medication.</p>


          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(44)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(46)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      <div class="frm_stp_46 stpsform">
        <h2>Form and Letter Fee Agreement</h2>
        <div class="quesalign hetmobsrl hetsrl">
          <p class="frmp">This is to notify you that Specialty Care Clinics, will apply a fee of $35.00 for patients, companies, family members, insurance carriers or other person requesting forms and/or letters (FMLA, STD, LTD, ETC.) to be completed. Please note that the form/letters will be filled out within 72 hours of the payment being made. If the paperwork is needing to be completed the day that it is brought in, there will be a $100 expedited fee.</p>

          <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>  Name:</h3>
          <input type="text" name="step_46_input1" id="step_46_input1" class="inputfild" placeholder="Type your name here..." autocomplete="off">

          <div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
          <a class="btnsfrmsokprev" onclick="prevStp(45)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
          <a class="btnsfrmsok" onclick="nextStp(47)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
        </div>
				<div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
      </div>
      	<div class="frm_stp_47 stpsform">
      		<h2>Specialty Care Clinics</h2>
	        <div class="quesalign">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Patient Name:</h3>
	          	<input type="text" name="step_47_input1" id="step_47_input1" class="inputfild" placeholder="Type patient name here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Primary Care Doctor:</h3>
	          	<input type="text" name="step_47_input2" id="step_47_input2" class="inputfild" placeholder="Type your doctor name here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Referred By:</h3>
	          	<input type="text" name="step_47_input3" id="step_47_input3" class="inputfild" placeholder="Type referred by here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(46)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(48)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_48 stpsform">
	        <div class="quesalign">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Pharmacy:</h3>
	          	<input type="text" name="step_48_input1" id="step_48_input1" class="inputfild" placeholder="Type pharmacy here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> HT:</h3>
	          	<input type="text" name="step_48_input2" id="step_48_input2" class="inputfild" placeholder="Type your HT here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> WT:</h3>
	          	<input type="text" name="step_48_input3" id="step_48_input3" class="inputfild" placeholder="Type your WT here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(47)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(49)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_49 stpsform">
	        <div class="quesalign">
	        	<p class="frmp">Chief Complaint (Check all that apply):</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               <input id="step_49_input1" name="step_49_input1" value="Yes" class="ourspecchk" type="checkbox"/>
		               <label for="step_49_input1"><span class="bxopt">A</span> Back Pain</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_49_input2" name="step_49_input2" value="Yes" class="ourspecchk" type="checkbox"/>
		               <label for="step_49_input2"><span class="bxopt">B</span> Neck Pain</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_49_input3" name="step_49_input3" value="Yes" class="ourspecchk" type="checkbox"/>
		               <label for="step_49_input3"><span class="bxopt">C</span> Leg Pain</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_49_input4" name="step_49_input4" value="Yes" class="ourspecchk" type="checkbox"/>
		               <label for="step_49_input4"><span class="bxopt">C</span> Arm Pain</label>
		            </div>
		        </div>

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(48)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(50)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_50 stpsform">
	    	<p class="frmp"> History of Illness:</p>
	        <div class="quesalign">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Age:</h3>
	          	<input type="text" name="step_50_input1" id="step_50_input1" class="inputfild" placeholder="Type your WT here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Gender:</h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_50_male" name="step_50_input2" class="rd3" value="Male" type="radio"/>
		               	<label for="step_50_male"><span class="bxopt">A</span> Male</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_50_female" name="step_50_input2" class="rd3" value="Female" type="radio"/>
		               	<label for="step_50_female"><span class="bxopt">B</span> Female</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(49)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(51)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_51 stpsform">
	    	<p class="frmp"> History of Illness:</p>
	        <div class="quesalign">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Injury:</h3>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_51_input1_yes" name="step_51_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_51_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_51_input1_no" name="step_51_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_51_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date of injury:</h3>
	          	<input type="text" name="step_51_input2" id="step_51_input2" class="inputfild" placeholder="Type your WT here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Work Related Injury?</h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_51_input3_yes" name="step_51_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_51_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_51_input3_no" name="step_51_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_51_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(50)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(52)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_52 stpsform">
	    	<p class="frmp"> History of Illness:</p>
	        <div class="quesalign">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> How long have you had this problem/pain:</h3>
	        	<input type="text" name="step_52_input1" id="step_52_input1" class="inputfild" placeholder="Type your WT here..." autocomplete="off">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Has it gotten worse recently:</h3>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_52_input2_yes" name="step_52_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_52_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_52_input2_no" name="step_52_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_52_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> If yes, when did it get worse?</h3>
	          	<input type="text" name="step_52_input3" id="step_52_input3" class="inputfild" placeholder="Type your text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(51)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(53)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_53 stpsform">
	    	<p class="frmp"> History of Illness:</p>
	    	<p class="frmp">Please rate the severity of your pain (10 is the greatest pain):</p>
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Back	N/A 1 2 3 4 5 6 7 8 9 10</h3>
	        	<input type="text" name="step_53_input1" id="step_53_input1" class="inputfild" placeholder="Type your rating here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Neck	N/A 1 2 3 4 5 6 7 8 9 10</h3>
	          	<input type="text" name="step_53_input2" id="step_53_input2" class="inputfild" placeholder="Type your rating here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Leg(s)	N/A 1 2 3 4 5 6 7 8 9 10</h3>
	          	<input type="text" name="step_53_input3" id="step_53_input3" class="inputfild" placeholder="Type your rating here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Which leg is worse?</h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               <input id="step_53_leg_right" name="step_53_input4" value="Right" class="ourspecchk" type="checkbox"/>
		               <label for="step_53_leg_right"><span class="bxopt">A</span> Right</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_53_leg_left" name="step_53_input4_2" value="Left" class="ourspecchk" type="checkbox"/>
		               <label for="step_53_leg_left"><span class="bxopt">B</span> Left</label>
		            </div>
		        </div>
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Arm(s)	N/A 1 2 3 4 5 6 7 8 9 10</h3>
	          	<input type="text" name="step_53_input5" id="step_53_input5" class="inputfild" placeholder="Type your rating here..." autocomplete="off">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Which arm is worse?</h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               <input id="step_53_arm_right" name="step_53_input6" value="Right" class="ourspecchk" type="checkbox"/>
		               <label for="step_53_arm_right"><span class="bxopt">A</span> Right</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_53_arm_left" name="step_53_input6_2" value="Left" class="ourspecchk" type="checkbox"/>
		               <label for="step_53_arm_left"><span class="bxopt">B</span> Left</label>
		            </div>
		        </div>

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(52)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(54)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_54 stpsform">
	    	<p class="frmp"> History of Illness:</p>
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Bowel Problems</h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               <input id="step_54_bowel_right" name="step_54_input1" value="Right" class="ourspecchk" type="checkbox"/>
		               <label for="step_54_bowel_right"><span class="bxopt">A</span> Right</label>
		            </div>
		            <div class="inputGroup">
		               <input id="step_54_bowel_left" name="step_54_input1_2" value="Left" class="ourspecchk" type="checkbox"/>
		               <label for="step_54_bowel_left"><span class="bxopt">B</span> Left</label>
		            </div>
		        </div>
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> How long:</h3>
	          	<input type="text" name="step_54_input2" id="step_54_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(53)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(56)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	   <!--  <div class="frm_stp_55 stpsform">
	    	<p class="frmp"> Please indicate the distribution of your pain/symptoms on the diagram below: </p>
	        <div class="quesalign">
	        	<img src="bodyprt.png" class="body-img">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(54)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(56)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div> -->
	    <div class="frm_stp_56 stpsform">
	    	<h2>Limitations from the Pain:</h2>
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Sitting:</h3>
	        	<div class="inputGroup">
	               <input id="step_56_input1" name="step_56_input1" value="Yes" class="ourspecchk" type="checkbox"/>
	               <label for="step_56_input1"><span class="bxopt">A</span> Unlimited</label>
	            </div>
	            <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Limited to</h3>
	            <input type="text" name="step_56_input2" id="step_56_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">
	            <div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_56_limit_min" name="step_56_input3" class="rd3" value="Min" type="radio"/>
		               	<label for="step_56_limit_min"><span class="bxopt">A</span> Min</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_56_limit_hrs" name="step_56_input3" class="rd3" value="Hrs" type="radio"/>
		               	<label for="step_56_limit_hrs"><span class="bxopt">B</span> Hrs</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(54)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(57)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_57 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Walking:</h3>
	        	<div class="inputGroup">
	               <input id="step_57_input1" name="step_57_input1" value="Yes" class="ourspecchk" type="checkbox"/>
	               <label for="step_57_input1"><span class="bxopt">A</span> Unlimited</label>
	            </div>
	            <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Limited to</h3>
	            <input type="text" name="step_57_input2" id="step_57_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">
	            <div class="inputGroup">
	               	<input id="step_57_input3" name="step_57_input3" class="rd3" value="Feet" type="radio"/>
	               	<label for="step_57_input3"><span class="bxopt">A</span> Feet</label>
             	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(56)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(58)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_58 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Standing:</h3>
	        	<div class="inputGroup">
	               <input id="step_58_input1" name="step_58_input1" value="Yes" class="ourspecchk" type="checkbox"/>
	               <label for="step_58_input1"><span class="bxopt">A</span> Unlimited</label>
	            </div>
	            <h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Limited to</h3>
	            <input type="text" name="step_58_input2" id="step_58_input2" class="inputfild" placeholder="Type your text here..." autocomplete="off">
	            <div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_58_limit_min" name="step_58_input3" class="rd3" value="Min" type="radio"/>
		               	<label for="step_58_limit_min"><span class="bxopt">A</span> Min</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_58_limit_hrs" name="step_58_input3" class="rd3" value="Hrs" type="radio"/>
		               	<label for="step_58_limit_hrs"><span class="bxopt">B</span> Hrs</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(57)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(59)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_59 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Does the pain interfere with sleeping?</h3>
	            <div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_59_input1_yes" name="step_59_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_59_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_59_input1_no" name="step_59_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_59_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Does the pain interfere with work or play?</h3>
	            <div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_59_input2_yes" name="step_59_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_59_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_59_input2_no" name="step_59_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_59_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(58)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(60)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_60 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> What makes the pain worse (check all that apply): </h3>
	        	<div class="disflx">
		            <div class="inputGroup">
	               		<input id="step_60_input1" name="step_60_input1" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_60_input1"><span class="bxopt">A</span> Sitting</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_60_input2" name="step_60_input2" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_60_input2"><span class="bxopt">B</span> Standing</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_60_input3" name="step_60_input3" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_60_input3"><span class="bxopt">C</span> Coughing</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_60_input4" name="step_60_input4" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_60_input4"><span class="bxopt">D</span> Leaning backward</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_60_input5" name="step_60_input5" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_60_input5"><span class="bxopt">E</span> Other</label>
	            	</div>
	          	</div>
	          	<input type="text" name="step_60_input6" id="step_60_input6" class="inputfild" placeholder="Other" autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(59)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(61)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_61 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> What makes the pain better (check all that apply): </h3>
	        	<div class="disflx">
		            <div class="inputGroup">
	               		<input id="step_61_input1" name="step_61_input1" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_61_input1"><span class="bxopt">A</span> Sitting</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_61_input2" name="step_61_input2" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_61_input2"><span class="bxopt">B</span> Standing</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_61_input3" name="step_61_input3" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_61_input3"><span class="bxopt">C</span> Leaning forward</label>
	            	</div>
	            	<div class="inputGroup">
	               		<input id="step_61_input4" name="step_61_input4" value="Yes" class="ourspecchk" type="checkbox"/>
	               		<label for="step_61_input4"><span class="bxopt">D</span> Other</label>
	            	</div>
	          	</div>
	          	<input type="text" name="step_61_input5" id="step_61_input5" class="inputfild" placeholder="Other" autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(60)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(62)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_62 stpsform">
	    	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Which of these tests have you had before and when? </h3>
	        <div class="quesalign hetsrl">
	        	<p class="frmp">1. MRI</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_62_input1_yes" name="step_62_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_62_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_62_input1_no" name="step_62_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_62_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="date" id="step_62_input1_date" name="step_62_input1_date" class="inputfild" placeholder="Type your date here..." autocomplete="off">
	          	<p class="frmp">2. CT Myelogram</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_62_input2_yes" name="step_62_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_62_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_62_input2_no" name="step_62_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_62_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="date" id="step_62_input2_date" name="step_62_input2_date" class="inputfild" placeholder="Type your date here..." autocomplete="off">
	          	<p class="frmp">3. EMG/NCS</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_62_input3_yes" name="step_62_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_62_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_62_input3_no" name="step_62_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_62_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="date" id="step_62_input3_date" name="step_62_input3_date" class="inputfild" placeholder="Type your date here..." autocomplete="off">
	          	<p class="frmp">4. Discogram</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_62_input4_yes" name="step_62_input4" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_62_input4_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_62_input4_no" name="step_62_input4" class="rd3" value="No" type="radio"/>
		               	<label for="step_62_input4_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="date" id="step_62_input4_date" name="step_62_input4_date" class="inputfild" placeholder="Type your date here..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(61)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(63)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_63 stpsform">
	    	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> What have you tried for the pain so far? </h3>
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Physical Therapy:</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_63_input1_yes" name="step_63_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_63_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_63_input1_no" name="step_63_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_63_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_63_input2" name="step_63_input2" class="inputfild" placeholder="How long ago..." autocomplete="off">
	          	<p class="frmp">Are you satisfied with the effort given:</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_63_input3_yes" name="step_63_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_63_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_63_input3_no" name="step_63_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_63_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<p class="frmp">Did therapy help:</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_63_input4_yes" name="step_63_input4" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_63_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_63_input4_no" name="step_63_input4" class="rd3" value="No" type="radio"/>
		               	<label for="step_63_input4_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(62)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(64)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_64 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">NSAIDs (Ibuprofen, Naprosyn, Mobic, Celebrex, Relafen, etc.) </p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_64_input1_yes" name="step_64_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_64_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_64_input1_no" name="step_64_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_64_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<p class="frmp">Did the medicine help:</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_64_input2_yes" name="step_64_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_64_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_64_input2_no" name="step_64_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_64_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(63)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(65)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_65 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Oral Steroids (Medrol Dose Pack, Prednisone, Methylprednisilone) </p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_65_input1_yes" name="step_65_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_65_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_65_input1_no" name="step_65_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_65_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<p class="frmp">Did the medicine help:</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_65_input2_yes" name="step_65_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_65_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_65_input2_no" name="step_65_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_65_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(64)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(66)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_66 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Pain Meds (Vicodin, Norco, Lortab, Darvocet, Oxycontin, Percocet, Morphine) </p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_66_input1_yes" name="step_66_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_66_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_66_input1_no" name="step_66_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_66_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_66_input2" name="step_66_input2" class="inputfild" placeholder="How much..." autocomplete="off">
	          	<input type="text" id="step_66_input3" name="step_66_input3" class="inputfild" placeholder="For How long..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(65)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(67)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_67 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Injections (Epidural Injections, ESIs, Facet Injections, Nerve Root Blocks)</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_67_input1_yes" name="step_67_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_67_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_67_input1_no" name="step_67_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_67_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<p class="frmp">Did injections help:</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_67_input2_yes" name="step_67_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_67_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_67_input2_no" name="step_67_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_67_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_67_input3" name="step_67_input3" class="inputfild" placeholder="How much..." autocomplete="off">
	          	<input type="text" id="step_67_input4" name="step_67_input4" class="inputfild" placeholder="For How long..." autocomplete="off">
	          	<input type="text" id="step_67_input5" name="step_67_input5" class="inputfild" placeholder="Last injection..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(66)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(68)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_68 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Back/Neck Surgery (Include dates):</p>
	        	<input type="text" id="step_68_input4" name="step_68_input4" class="inputfild" placeholder="Dates..." autocomplete="off">
	          	<p class="frmp">Did surgery help:</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_68_input1_yes" name="step_68_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_68_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_68_input1_no" name="step_68_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_68_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_68_input2" name="step_68_input2" class="inputfild" placeholder="How much..." autocomplete="off">
	          	<input type="text" id="step_68_input3" name="step_68_input3" class="inputfild" placeholder="For How long..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(67)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(69)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_69 stpsform">
	    	<h2>Patient Medical History:</h2>
	    	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Please report if you have had or are currently experiencing any of the following:</h3>
	        <div class="quesalign hetsrl">
	          	<p class="frmp">Heart Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input1_yes" name="step_69_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input1_no" name="step_69_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input2" name="step_69_input2" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Lung Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input3_yes" name="step_69_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input3_no" name="step_69_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input4" name="step_69_input4" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Kidney Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input5_yes" name="step_69_input5" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input5_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input5_no" name="step_69_input5" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input5_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input6" name="step_69_input6" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Neurologic Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input7_yes" name="step_69_input7" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input7_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input7_no" name="step_69_input7" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input7_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input8" name="step_69_input8" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Cancer</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input9_yes" name="step_69_input9" class="rd3" value="Min" type="radio"/>
		               	<label for="step_69_input9_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input9_no" name="step_69_input9" class="rd3" value="Hrs" type="radio"/>
		               	<label for="step_69_input9_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input10" name="step_69_input10" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Liver Disease/Hepatitis</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input11_yes" name="step_69_input11" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input11_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input11_no" name="step_69_input11" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input11_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input12" name="step_69_input12" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Prostrate Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input13_yes" name="step_69_input13" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input13_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input13_no" name="step_69_input13" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input13_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input14" name="step_69_input14" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Psychiatric/Depression</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input15_yes" name="step_69_input15" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input15_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input15_no" name="step_69_input15" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input15_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input16" name="step_69_input16" class="inputfild" placeholder="Specify..." autocomplete="off">

	          	<p class="frmp">Stroke</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_69_input17_yes" name="step_69_input17" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_69_input17_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_69_input17_no" name="step_69_input17" class="rd3" value="No" type="radio"/>
		               	<label for="step_69_input17_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_69_input18" name="step_69_input18" class="inputfild" placeholder="Specify..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(68)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(70)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_70 stpsform">
	        <div class="quesalign hetsrl">
	          	<p class="frmp">Anemia</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input1_yes" name="step_70_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input1_no" name="step_70_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Abdominal pain</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input2_yes" name="step_70_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input2_no" name="step_70_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Balance Problems</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input3_yes" name="step_70_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input3_no" name="step_70_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Bleeding Problems</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input4_yes" name="step_70_input4" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input4_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input4_no" name="step_70_input4" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input4_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Bloody Stool</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input5_yes" name="step_70_input5" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input5_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input5_no" name="step_70_input5" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input5_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Bloody Urine</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input6_yes" name="step_70_input6" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input6_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input6_no" name="step_70_input6" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input6_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Blood Clots</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input7_yes" name="step_70_input7" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input7_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input7_no" name="step_70_input7" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input7_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Chest Pain/Angina</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input8_yes" name="step_70_input8" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input8_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input8_no" name="step_70_input8" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input8_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Constipation</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input9_yes" name="step_70_input9" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input9_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input9_no" name="step_70_input9" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input9_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Cough</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input10_yes" name="step_70_input10" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input10_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input10_no" name="step_70_input10" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input10_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Diabetes</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input11_yes" name="step_70_input11" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input11_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input11_no" name="step_70_input11" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input11_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Diarrhea</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input12_yes" name="step_70_input12" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input12_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input12_no" name="step_70_input12" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input12_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Fainting</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input13_yes" name="step_70_input13" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input13_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input13_no" name="step_70_input13" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input13_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Female organs/Menstrual</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input14_yes" name="step_70_input14" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input14_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input14_no" name="step_70_input14" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input14_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Fever</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input15_yes" name="step_70_input15" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input15_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input15_no" name="step_70_input15" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input15_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Hearing changes</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input16_yes" name="step_70_input16" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input16_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input16_no" name="step_70_input16" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input16_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Heat/Cold Intolerance</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input17_yes" name="step_70_input17" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input17_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input17_no" name="step_70_input17" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input17_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Hair/Nail changes</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input18_yes" name="step_70_input18" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input18_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input18_no" name="step_70_input18" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input18_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">High Blood Pressure</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_70_input19_yes" name="step_70_input19" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_70_input19_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_70_input19_no" name="step_70_input19" class="rd3" value="No" type="radio"/>
		               	<label for="step_70_input19_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(69)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(71)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_71 stpsform">
	        <div class="quesalign hetsrl">
	        	<p class="frmp">MuscleSpasms</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input1_yes" name="step_71_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input1_no" name="step_71_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Nausea</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input2_yes" name="step_71_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input2_no" name="step_71_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Osteoarthritis</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input3_yes" name="step_71_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input3_no" name="step_71_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Palpitations</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input4_yes" name="step_71_input4" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input4_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input4_no" name="step_71_input4" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input4_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Rash</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input5_yes" name="step_71_input5" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input5_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input5_no" name="step_71_input5" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input5_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">ShortnessofBreath</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input6_yes" name="step_71_input6" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input6_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input6_no" name="step_71_input6" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input6_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Speechchanges</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input7_yes" name="step_71_input7" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input7_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input7_no" name="step_71_input7" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input7_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Swelling</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input8_yes" name="step_71_input8" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input8_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input8_no" name="step_71_input8" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input8_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">SwollenGlands</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input9_yes" name="step_71_input9" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input9_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input9_no" name="step_71_input9" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input9_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Stomach Ulcers</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input10_yes" name="step_71_input10" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input10_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input10_no" name="step_71_input10" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input10_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Seizure/Epilepsy</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input11_yes" name="step_71_input11" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input11_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input11_no" name="step_71_input11" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input11_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Thyroid Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input12_yes" name="step_71_input12" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input12_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input12_no" name="step_71_input12" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input12_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Tremor</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input13_yes" name="step_71_input13" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input13_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input13_no" name="step_71_input13" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input13_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">UrineRetention</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input14_yes" name="step_71_input14" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input14_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input14_no" name="step_71_input14" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input14_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Visionchanges</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input15_yes" name="step_71_input15" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input15_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input15_no" name="step_71_input15" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input15_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<p class="frmp">Weight Loss</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_71_input16_yes" name="step_71_input16" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_71_input16_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_71_input16_no" name="step_71_input16" class="rd3" value="No" type="radio"/>
		               	<label for="step_71_input16_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_71_input17" name="step_71_input17" class="inputfild" placeholder="Other" autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(70)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(72)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>

	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_72 stpsform">
	    	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Past Surgical/ Hospitalization History: </h3>
	        <div class="quesalign hetsrl">
	          	<input type="text" id="step_72_input1" name="step_72_input1" class="inputfild" placeholder="Surgeries/Hospitalizations" autocomplete="off">
	          	<input type="text" id="step_72_input2" name="step_72_input2" class="inputfild" placeholder="Year" autocomplete="off">
	          	<input type="text" id="step_72_input3" name="step_72_input3" class="inputfild" placeholder="Complications" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_72_input4" name="step_72_input4" class="inputfild" placeholder="Surgeries/Hospitalizations" autocomplete="off">
	          	<input type="text" id="step_72_input5" name="step_72_input5" class="inputfild" placeholder="Year" autocomplete="off">
	          	<input type="text" id="step_72_input6" name="step_72_input6" class="inputfild" placeholder="Complications" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_72_input7" name="step_72_input7" class="inputfild" placeholder="Surgeries/Hospitalizations" autocomplete="off">
	          	<input type="text" id="step_72_input8" name="step_72_input8" class="inputfild" placeholder="Year" autocomplete="off">
	          	<input type="text" id="step_72_input9" name="step_72_input9" class="inputfild" placeholder="Complications" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_72_input10" name="step_72_input10" class="inputfild" placeholder="Surgeries/Hospitalizations" autocomplete="off">
	          	<input type="text" id="step_72_input11" name="step_72_input11" class="inputfild" placeholder="Year" autocomplete="off">
	          	<input type="text" id="step_72_input12" name="step_72_input12" class="inputfild" placeholder="Complications" autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(71)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(73)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>

	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_73 stpsform">
	        <div class="quesalign hetmobsrl hetsrl">
	        	<p class="frmp">Have you ever had general anesthesia? (Being put to sleep for an operation)</p>
	        	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_73_input1_yes" name="step_73_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_73_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_73_input1_no" name="step_73_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_73_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<p class="frmp">Have you ever had problems with anesthesia?</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_73_input2_yes" name="step_73_input2" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_73_input2_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_73_input2_no" name="step_73_input2" class="rd3" value="No" type="radio"/>
		               	<label for="step_73_input2_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_73_input3" name="step_73_input3" class="inputfild" placeholder="Describe..." autocomplete="off">

	          	<p class="frmp">Are your immunizations up to date?</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_73_input4_yes" name="step_73_input4" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_73_input4_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_73_input4_no" name="step_73_input4" class="rd3" value="No" type="radio"/>
		               	<label for="step_73_input4_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_73_input5" name="step_73_input5" class="inputfild" placeholder="If no, which ones..." autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(72)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(74)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_74 stpsform">
	    	<h2>Your Social History</h2>
	        <div class="quesalign hetsrl">
	        	<p class="frmp">Choose multiple options.</p>
	        	<div class="disflx">
		        	<div class="inputGroup">
			            <input id="step_74_input1_home" class="ourspecchk" name="step_74_input1" value="Yes" type="checkbox"/>
			            <label for="step_74_input1_home"><span class="bxopt">A</span> Work in the home</label>
			        </div>
			        <div class="inputGroup">
			            <input id="step_74_input1_employee" class="ourspecchk" name="step_74_input2" value="Yes" type="checkbox"/>
			            <label for="step_74_input1_employee"><span class="bxopt">B</span> Employed</label>
			        </div>
			    </div>
	          	<input type="text" id="step_74_input3" name="step_74_input3" class="inputfild" placeholder="Employed (occupation)..." autocomplete="off">

	          	<div class="disflx">
		          	<div class="inputGroup">
			            <input id="step_74_input3_student" class="ourspecchk" name="step_74_input4" value="Yes" type="checkbox"/>
			            <label for="step_74_input3_student"><span class="bxopt">A</span> Student</label>
			        </div>
			        <div class="inputGroup">
			            <input id="step_74_input3_retired" class="ourspecchk" name="step_74_input5" value="Yes" type="checkbox"/>
			            <label for="step_74_input3_retired"><span class="bxopt">B</span> Retired</label>
			        </div>
			        <div class="inputGroup">
			            <input id="step_74_input3_other" class="ourspecchk" name="step_74_input6" value="Yes" type="checkbox"/>
			            <label for="step_74_input3_other"><span class="bxopt">C</span> Other</label>
			        </div>
			    </div>
	          	<input type="text" id="step_74_input4" name="step_74_input7" class="inputfild" placeholder="Other..." autocomplete="off">

	          	<p class="frmp">Children</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_74_input5_yes" name="step_74_input8" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_74_input5_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_74_input5_no" name="step_74_input8" class="rd3" value="No" type="radio"/>
		               	<label for="step_74_input5_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_74_input6" name="step_74_input9" class="inputfild" placeholder="If so, ages..." autocomplete="off">

	          	<div class="disflx">
		          	<div class="inputGroup">
			            <input id="step_74_input10" class="ourspecchk" name="step_74_input10" value="Yes" type="checkbox"/>
			            <label for="step_74_input10"><span class="bxopt">A</span> Live Alone?</label>
			        </div>
			    </div>
	          	<input type="text" id="step_74_input11" name="step_74_input11" class="inputfild" placeholder="If yes, do you have help or family nearby?" autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(73)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(75)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>

	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_75 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Exercise? </h3>
	          	<input type="text" id="step_75_input1" name="step_75_input1" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Daily </h3>
	          	<input type="text" id="step_75_input2" name="step_75_input2" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Weekly </h3>
	          	<input type="text" id="step_75_input3" name="step_75_input3" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Monthly </h3>
	          	<input type="text" id="step_75_input4" name="step_75_input4" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Rarely </h3>
	          	<input type="text" id="step_75_input5" name="step_75_input5" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Never </h3>
	          	<input type="text" id="step_75_input6" name="step_75_input6" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> What type of exercise? </h3>
	          	<input type="text" id="step_75_input7" name="step_75_input7" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(74)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(76)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_76 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Smoker: </h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_76_input1_yes" name="step_76_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_76_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_76_input1_no" name="step_76_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_76_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> If so, packs per day:  </h3>
	          	<input type="text" id="step_76_input2" name="step_76_input2" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> For how long </h3>
	          	<input type="text" id="step_76_input3" name="step_76_input3" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>Quit Smoking </h3>
	          	<input type="text" id="step_76_input4" name="step_76_input4" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> within the last year </h3>
	          	<input type="text" id="step_76_input5" name="step_76_input5" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> 2 to 4 years </h3>
	          	<input type="text" id="step_76_input6" name="step_76_input6" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> 5 to 10 years </h3>
	          	<input type="text" id="step_76_input7" name="step_76_input7" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(75)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(77)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_77 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Chew Tobacco: </h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_77_input1_yes" name="step_77_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_77_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_77_input1_no" name="step_77_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_77_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>If so, how much </h3>
	          	<input type="text" id="step_77_input2" name="step_77_input2" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> For how long </h3>
	          	<input type="text" id="step_77_input3" name="step_77_input3" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(76)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(78)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_78 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>Drink Alcohol: </h3>
	          	<input type="text" id="step_78_input1" name="step_78_input1" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> daily </h3>
	          	<input type="text" id="step_78_input2" name="step_78_input2" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> 1-2x/week </h3>
	          	<input type="text" id="step_78_input3" name="step_78_input3" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> 1-2x/month </h3>
	          	<input type="text" id="step_78_input4" name="step_78_input4" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> 1-2x/year </h3>
	          	<input type="text" id="step_78_input5" name="step_78_input5" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Alcohol preference: </h3>
	          	<input type="text" id="step_78_input6" name="step_78_input6" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(77)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(79)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_79 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Drugs (Marijuana, Cocaine, etc) </h3>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_79_input1_yes" name="step_79_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_79_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_79_input1_no" name="step_79_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_79_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>

	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>If yes, what </h3>
	          	<input type="text" id="step_79_input2" name="step_79_input2" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(78)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(80)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_80 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>Comments regarding any health issues not covered on this form: </h3>
	          	<input type="text" id="step_80_input1" name="step_80_input1" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(79)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(81)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_81 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>Medications: Please list all medications you currently take with doses and schedule.</h3>
	          	<input type="text" id="step_81_input1" name="step_81_input1" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input2" name="step_81_input2" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input3" name="step_81_input3" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input4" name="step_81_input4" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input5" name="step_81_input5" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input6" name="step_81_input6" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input7" name="step_81_input7" class="inputfild" placeholder="Reason for Medication" autocomplete="off"><input type="text" id="step_81_input8" name="step_81_input8" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input9" name="step_81_input9" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input10" name="step_81_input10" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input11" name="step_81_input11" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input12" name="step_81_input12" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input13" name="step_81_input13" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input14" name="step_81_input14" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input15" name="step_81_input15" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input16" name="step_81_input16" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input17" name="step_81_input17" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input18" name="step_81_input18" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input19" name="step_81_input19" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input20" name="step_81_input20" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input21" name="step_81_input21" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input22" name="step_81_input22" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input23" name="step_81_input23" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input24" name="step_81_input24" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input25" name="step_81_input25" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input26" name="step_81_input26" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input27" name="step_81_input27" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input28" name="step_81_input28" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<input type="text" id="step_81_input29" name="step_81_input29" class="inputfild" placeholder="Current Medication" autocomplete="off">
	          	<input type="text" id="step_81_input30" name="step_81_input30" class="inputfild" placeholder="Dose/Schedule" autocomplete="off">
	          	<input type="text" id="step_81_input31" name="step_81_input31" class="inputfild" placeholder="Reason for Medication" autocomplete="off">
	          	<input type="text" id="step_81_input32" name="step_81_input32" class="inputfild" placeholder="Side Effects" autocomplete="off">
	          	<hr>

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(80)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(82)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_82 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>List any allergies with current medications </h3>
	          	<input type="text" id="step_82_input1" name="step_82_input1" class="inputfild" placeholder="Type text here..." autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(81)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(83)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	    </div>
	    <div class="frm_stp_83 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg>Family History: </h3>

	          	<p class="frmp">Father</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input1_alive" name="step_83_input1" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input1_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input1_deceased" name="step_83_input1" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input1_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input2" name="step_83_input2" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input3" name="step_83_input3" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">
	          	<hr>

	          	<p class="frmp">Mother</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input4_alive" name="step_83_input4" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input4_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input4_deceased" name="step_83_input4" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input4_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input5" name="step_83_input5" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input6" name="step_83_input6" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">

	          	<hr>

	          	<p class="frmp">Sister/Brother</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input7_alive" name="step_83_input7" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input7_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input7_deceased" name="step_83_input7" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input7_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input8" name="step_83_input8" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input9" name="step_83_input9" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">

	          	<hr>

	          	<p class="frmp">Sister/Brother</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input10_alive" name="step_83_input10" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input10_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input10_deceased" name="step_83_input10" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input10_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input11" name="step_83_input11" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input12" name="step_83_input12" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">

	          	<hr>

	          	<p class="frmp">Sister/Brother</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input13_alive" name="step_83_input13" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input13_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input13_deceased" name="step_83_input13" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input13_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input14" name="step_83_input14" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input15" name="step_83_input15" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">

	          	<hr>

	          	<p class="frmp">Sister/Brother</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_83_input16_alive" name="step_83_input16" class="rd3" value="Alive" type="radio"/>
		               	<label for="step_83_input16_alive"><span class="bxopt">A</span> Alive</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_83_input16_deceased" name="step_83_input16" class="rd3" value="Deceased" type="radio"/>
		               	<label for="step_83_input16_deceased"><span class="bxopt">B</span> Deceased</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_83_input18" name="step_83_input17" class="inputfild" placeholder="Age" autocomplete="off">
	          	<input type="text" id="step_83_input18" name="step_83_input18" class="inputfild" placeholder="Health Status/Cause of Death" autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(82)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(84)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
				</div>
	    </div>
	    <div class="frm_stp_84 stpsform">
	        <div class="quesalign hetsrl">
	          	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Family Member History of: </h3>

	          	<p class="frmp">Cardiac Disease</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_84_input1_yes" name="step_84_input1" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_84_input1_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_84_input1_no" name="step_84_input1" class="rd3" value="No" type="radio"/>
		               	<label for="step_84_input1_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_84_input2" name="step_84_input2" class="inputfild" placeholder="Who:" autocomplete="off">


	          	<p class="frmp">Stroke</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_84_input3_yes" name="step_84_input3" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_84_input3_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_84_input3_no" name="step_84_input3" class="rd3" value="No" type="radio"/>
		               	<label for="step_84_input3_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_84_input4" name="step_84_input4" class="inputfild" placeholder="Who:" autocomplete="off">

	          	<p class="frmp">Diabetes</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_84_input5_yes" name="step_84_input5" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_84_input5_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_84_input5_no" name="step_84_input5" class="rd3" value="No" type="radio"/>
		               	<label for="step_84_input5_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_84_input6" name="step_84_input6" class="inputfild" placeholder="Who:" autocomplete="off">


	          	<p class="frmp">Neurologic Problems</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_84_input7_yes" name="step_84_input7" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_84_input7_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_84_input7_no" name="step_84_input7" class="rd3" value="No" type="radio"/>
		               	<label for="step_84_input7_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_84_input8" name="step_84_input8" class="inputfild" placeholder="Who:" autocomplete="off">

	          	<p class="frmp">Spine Problems</p>
	          	<div class="disflx">
		            <div class="inputGroup">
		               	<input id="step_84_input9_yes" name="step_84_input9" class="rd3" value="Yes" type="radio"/>
		               	<label for="step_84_input9_yes"><span class="bxopt">A</span> Yes</label>
	             	</div>
		            <div class="inputGroup">
		               	<input id="step_84_input9_no" name="step_84_input9" class="rd3" value="No" type="radio"/>
		               	<label for="step_84_input9_no"><span class="bxopt">B</span> No</label>
		            </div>
	          	</div>
	          	<input type="text" id="step_84_input10" name="step_84_input10" class="inputfild" placeholder="Who:" autocomplete="off">

	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<a class="btnsfrmsokprev" onclick="prevStp(83)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
	          	<a class="btnsfrmsok" onclick="nextStp(85)">OK <span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a> <span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
			</div>
	    </div>
	    <div class="frm_stp_85 stpsform">
	        <div class="quesalign hetsrl">
	        	<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Patient Signature *</h3>
	        	<canvas id="sig-canvas" width="320" height="200">
		 			Get a better browser, bro.
		 		</canvas><br>
		 		<a href="javascript:void(0)" class="btnsfrmsokprev signbtn" id="sig-submitBtn">Save</a>
				<a href="javascript:void(0)" class="btnsfrmsokprev signbtn" id="sig-clearBtn">Clear</a>
				<input type="text" id="sig-dataUrl" name="step_85_input1" class="inputfild" style="display: none;">

				<br><br>
				<div class="martop25img"><img id="sig-image" src="" alt="Your signature will go here!"/><span>Sign Preview</span></div>
				<h3><svg height="10" width="11" fill="rgb(255, 112, 67)"><path d="M7.586 5L4.293 1.707 5.707.293 10.414 5 5.707 9.707 4.293 8.293z"></path><path d="M8 4v2H0V4z"></path></svg> Date *</h3>
	        	<input type="date" id="step_85_input2" name="step_85_input2" class="inputfild" placeholder="Date" autocomplete="off">
	          	<div><span class="error"><i class="fas fa-exclamation-triangle"></i> Please fill required field</span></div>
	          	<div class="submit-box">
		          	<a class="btnsfrmsokprev" onclick="prevStp(84)"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Prev</a>
		          	<a class="btnsfrmsok" onclick="nextStp(86)">OK<span class="icon"><img src="assets/images/chevron-right.svg" class=" arr" alt="chevron-right"></span></a>
		          	<span class="pressEnter">press Enter <span class="fontxs">↵</span></span>
		        </div>
	          	<div class="loading-box"></div>
	          	<div><span class="submit-error"><i class="fas fa-exclamation-triangle"></i> Oops! It seems like there was an issue submitting your details.</span></div>
	        </div>
	        <div class="posrelmos scrolltosee">
					<img src="assets/images/scr.gif">
					<p>( Scroll to see more field )</p>
			</div>
	    </div>
		<div class="frm_stp_100 stpsform">
			<div class="txtcenthed"><img src="assets/images/tick.png" class="imgtick"></div>
			<h2 class="txtcenthed">Thank you we will contact you soon ...</h2>
			<div class="txtcenthed"><a class="btnsfrmsokprev" onclick="window.location.href='/'"><span class="icon"><img src="assets/images/chevron-right.svg" class=" arrreverse" alt="chevron-right"></span> Home</a></div>
		</div>
		</form>
	</div>

	<div class="content">
		<div class="button-container">
			<input type="checkbox" id="micButton" class="mic-checkbox">
			<label for="micButton" class="mic-button">
				<div class='mic'>
					<div class='mic-button-loader'></div>
					<div class="mic-base"></div>
				</div>
				<div class="button-message">
					<span>
						PRESS TO TALK
					</span>
				</div>
			</label>
		</div>
	</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/microsoft-cognitiveservices-speech-sdk@latest/distrib/browser/microsoft.cognitiveservices.speech.sdk.bundle-min.js"></script>
	<script src="https://unpkg.com/socket.io-client@4.7.2/dist/socket.io.min.js"></script>
	<script type="text/javascript" src="assets/js/sign.js"></script>
	<script type="text/javascript" src="assets/js/frm.js"></script>
	<script type="text/javascript" src="assets/js/speech.js"></script>
</body>
</html>