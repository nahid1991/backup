<?php
	include 'includes/header.php';
?>
	
		<div id="banner-holder">
			<div class="page-heading signup-page">
				 create an account
			</div>
			<img src="images/banner.jpg"/>
		</div><!-- End #banner-holder -->
		<div id="full-body">
			<div class="doctor-signup">
				<div class="container">
					<div class="row">
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="signup-text">
								<h5>Doctor Sign Up</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat laoreet dolore magna aliquam erat volutpat.</p>
							</div>
							<form name="" id="contact-form" action="search.html" method="get">
								<div class="doctorsignup-holder">
									 <input name="country" required type="text" class="form-control"   placeholder="FULL NAME"/>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" required type="text" class="form-control"   placeholder="EMAIL"/>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" required type="text" class="form-control"   placeholder="CONFIRM EMAIL"/>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" required type="password" class="form-control"   placeholder="PASSWORD"/>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" required type="password" class="form-control"   placeholder="CONFIRM PASSWORD"/>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" required type="text" class="form-control"   placeholder="PHONE NUMBER"/>
								</div>
								<div class="doctorsignup-holder">
								<select>	
										<option value="">YOUR SPECIALITY</option>	
										<option value="">Cardiologist</option>	
										<option value="">Opthalmist</option>										
										<option value="">Pediatrist</option>	
										<option value="">Dentist</option>										
								</select>
								</div>
								<div class="doctorsignup-holder">
									 <input name="country" type="text"  class="form-control"   placeholder="YOUT ENTIY OR PRACTICE NAME "/>
								</div>
								<div class="doctorsignup-holder">
									<input type="checkbox" name="vehicle" value="Bike"><p>I am the Provider</p><br/>
								</div>
								<div class="doctorsignup-holder">
									<input type="checkbox" name="vehicle" value="Bike"><p>I am authorized to manage the provider's profile</p><br/>
								</div>
								<div class="doctorsignup-holder captcha-code">
										<img src="includes/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg'>
								</div>
								<div class="doctorsignup-holder captcha-code-box">
									 <input name="country" required type="text" class="form-control"   placeholder="ENTER THE ABOVE CHARACTERS HERE"/>
								</div>
								<div class="doctorsignup-holder refresh-captcha">
									<p>Can't read the image? click <a href='javascript:refreshCaptcha();'><span>here</span></a> to refresh.</p>
								</div>
								<script language='JavaScript' type='text/javascript'>
									function refreshCaptcha()
									{
										var img = document.images['captchaimg'];
										img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
									}
								</script>
								<div class="doctorsignup-holder checkbox-condition">
									<input type="checkbox" name="vehicle" value="Bike"><p>I agree <a href="#">term &amp; condition</a> of the site</p><br/>
								</div>
							
								<div class="doctorsignup-button">
										<a href="signin-signup.php">SIGN UP</a>
								</div>
							</form>
						</div>
						<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="doctor-login-right">
									<h5>Doctor Login</h5>
									<p>If You have an account with us, please log in.</p>
								<form name="" id="contact-form" action="search.html" method="get">
								<div class="doctorsignup-holder doctor-login">
									 <input name="country" required type="text" class="form-control"   placeholder="Username"/>
								</div>
								<div class="doctorsignup-holder doctor-login">
									 <input name="country" required type="text" class="form-control"   placeholder="Password"/>
								</div>
								<div class="doctorslogin-button">
										<a href="doctor-admin-appointments-day-view.php">LOGIN</a>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End #doctor-signup -->
<?php
	include 'includes/footer.php';
?>