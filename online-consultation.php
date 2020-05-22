
<?php include 'header.php';?>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="form1.js"></script>
        </head>
			</div>

			<!-- header-container end -->
		
			

			<!-- main-container start -->
			<!-- ================ -->
			<div class="main-container dark-translucent-bg" style="background-image:url('images/online-consultation.jpg');">
				<div class="container" id="online-consultation-container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
							<div class="form-block center-block p-30 light-gray-bg border-clear">
								<div class="form-hed text-center">Online Consultation</div>
									<div class="text-center" id="targetLayer" ></div>
										<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
							<!--<form class="form-horizontal" role="form" id="online-consultation-form"  action="https://www.drniveditadadu.com/forms/online_consultaion_db.php" method="post" enctype="multipart/form-data" >-->
								 <form class="form-horizontal" role="form" method="post" id="reused_form" enctype=&quot;multipart/form-data&quot; >
								    
									<div class="form-group has-feedback">
										<label for="inputName" class="col-sm-3 control-label">Name <span class="text-danger small">*</span></label>
										 
										<div class="col-sm-8">
											<input type="text" class="form-control input-field" id="name" name="name" placeholder="Name" >
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="inputUserName" class="col-sm-3 control-label">Phone Number<span class="text-danger small">*</span></label>
									
										
										<div class="col-sm-8">
											<input type="tel" class="form-control input-field" minlength="10" autocomplete="off" id="mobile" name="mobile"  placeholder="Phone Number" >
											<i class="fa fa-phone form-control-feedback"></i>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label for="inputEmail" class="col-sm-3 control-label">Email<span class="text-danger small">*</span></label>
									
										<div class="col-sm-8">
											<input type="text" class="form-control input-field" id="email" name="email" placeholder="Email" >
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
									</div>
									
                                    <div class="form-group has-feedback">
										<label for="inputEmail" class="col-sm-3 control-label">Choose file<span class="text-danger small"></span></label>
										<div class="col-sm-8">
											<input type="file" name="image" id="image" class="form-control input-field">
										</div>
									</div>
								
                                    
                                    <div class="form-group has-feedback">
										<label for="inputPassword" class="col-sm-3 control-label">Message <span class="text-danger small">*</span></label>
									
										<div class="col-sm-8">
											<textarea class="form-control input-field" rows="6" id="message" name="message" placeholder="" require/></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
									</div>
									
									
									
								
									
									
									
									
                                    
									<div class="form-group">
										<div class="col-sm-offset-3 col-sm-8">
									
							
											<button type="submit" class="btn btn-group btn-default btn-animated btn btn-success" name="send">Submit  <i class="fa fa-check"></i></button>
														</div>
									</div>
					
                    </div>
								</form>
								
							
								</div>
							</div>
						</div>
						<!-- main end -->
					</div>
				</div>
			</div>
<?php include 'footer.php';?>
