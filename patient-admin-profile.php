<?php
	include 'includes/header.php';
?>
		<div id="full-body">
			<div class="full-body-conteiner">
				<div class="container">
					<div class="row">
						<?php
							$side_link3 = 'class="current"';
							include 'includes/patient-admin-sidebar.php';
						?>

						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="pof-content">
								<div class="pof-header2">
									<div class="title"><h2>P. R. Nichol Mendel</h2></div>
									<div class="clearfix"></div>
								</div>
								<div class="pof-desc padding">									
									<div class="pofeidt">
										
										<div class="pof-edittitle">
											<h5>Patient Profile</h5>
										</div>

										<div class="doctorsignup-holder edit-holder">
											<label>Profile Picture</label>
											<div class="upload-photo">
												<input name="" type="file">
												<button type="button" class="btn btn-default" data-toggle="button">UPLOAD</button>												
											</div>
										</div>
										<div class="doctorsignup-holder edit-holder">
											<label>Full Name</label>
											<input name="" required="" type="text" class="form-control"  value="P. R. Nichol Mendel">
											<label>Location / Zip</label>
											<input name="" required="" type="text" class="form-control"  value="ZT8765">
											<label>Email</label>
											<input name="" required="" type="text" class="form-control"  value="nichol@gmail.com">
											<button type="button" class="btn btn-default" data-toggle="button">SUBMIT</button>
										</div>
										<br>
										<div class="pof-edittitle">
											<h5>Change Password</h5>
										</div>
										<div class="doctorsignup-holder edit-holder">
											<label>Current Password</label>
											<input name="" required="" type="password" class="form-control"  value="">
											<label>New Password</label>
											<input name="" required="" type="password" class="form-control"  value="">
											<label>Retype New Password</label>
											<input name="" required="" type="password" class="form-control"  value="">
											<button type="button" class="btn btn-default" data-toggle="button">SUBMIT</button>
										</div>

									</div><!-- End .pofedit -->
								</div>
							</div><!-- End .pof-content -->
						</div><!-- End .col -->

					</div><!-- End .row -->
				</div><!-- End .conteiner -->
			</div><!-- End full-body-conteiner -->
<?php
	include 'includes/footer.php';
?>