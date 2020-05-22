<?php include 'header.php';?>
	

			</div>

			<!-- header-container end -->
		    <div class="banner border-clear service-innerbanner">
				<img src="images/legal-disclaimer.jpg" alt="Legal Disclaimer - ClinicGen.Next™" title="Legal Disclaimer - ClinicGen.Next™">
			    </div>
			<!-- breadcrumb start -->
			<!-- ================ -->
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.php">Home</a></li>
						<li class="active">Legal Disclaimer</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">
						<h1 class="page-title">Legal Disclaimer</h1>
                        <div class="separator-2"></div>
							<p align="justify">As per the governing laws of India, we are not permitted to solicit work and advertise. By clicking on the "I agree" button, the user acknowledges the following:</p>
                            <ul>
                            	<li>There has been no advertisement, personal communication, solicitation, invitation or inducement of any sort whatsoever from us or any of our team to solicit any work through this website; the user wishes to gain more information about us for his/her own general information and use.</li>
                                <li>The information provided under this website is solely at your request for information purposes only and should not be interpreted as soliciting or advertisement.
</li>
                            	<li>We are not liable for any consequence of any action taken by the user relying on material / information provided under this website.</li>
                            </ul>
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							 
 
   
  <div class="sidebar">
                            <div class="block clearfix">
									<div class="sidehed3">Request a Callback</div>
									<div class="separator-2"></div>
									<p id="responsed"></p>
									<form role="form" id="sidebar-form" class="margin-clear" action="../forms/contact-us-mail.php" method="post">
										<div class="form-group has-feedback">
											<label for="name3">Name*</label>
											<input type="text" class="form-control" id="name3" placeholder="Name*" name="name">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label for="email3">Email address*</label>
											<input type="email" class="form-control" id="email3" placeholder="Email*" name="email">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
                                        
                                        <div class="form-group has-feedback">
											<label for="phone3">Phone*</label>
											<input type="text" class="form-control" id="phone3" placeholder="Phone*" name="phone">
											<i class="fa fa-phone form-control-feedback"></i>
										</div>
											<div class="form-group has-feedback">
												<label for="subject">Subject*</label>
												<input type="text" class="form-control" id="subject" name="subject" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
										
										<div class="form-group has-feedback">
											<label for="message3">Message</label>
											<textarea class="form-control" rows="4" id="message3" placeholder="" name="message"></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
										<div class="g-recaptcha"></div>
										<input type="submit" value="Submit" class="submit-button btn btn-default">
									</form>
								</div>
                            								
									
                                
																
							</div>
							
							</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
<?php include 'footer.php';?>
<script language="JavaScript">
var frmvalidator  = new Validator("sidebar-form");
frmvalidator.addValidation("phone","req","Please provide your phone number");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("subject","req","Please provide your subject");
frmvalidator.addValidation("message","req","Please provide your message");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
  "Please enter a valid email address");
</script>
	