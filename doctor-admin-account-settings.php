<?php
	include 'includes/header.php';
?>
		<div id="full-body">
			<div class="full-body-conteiner">
				<div class="container">
					<div class="row">
						<?php
							$side_link7 = 'class="current"';
							include 'includes/doctor-admin-sidebar.php';
						?>

						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="pof-content">
								<div class="pof-header2">
									<div class="title"><h2>Dr. Alla Dorfman</h2><p>DDS  &nbsp;  |  &nbsp; Dentist</p></div>
									<div class="clearfix"></div>
								</div>
								<div class="pof-desc padding">									
									<div class="pofeidt">
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