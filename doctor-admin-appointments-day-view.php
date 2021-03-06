<?php
	include 'includes/header.php';
?>
		<div id="full-body">
			<div class="full-body-conteiner">
				<div class="container">
					<div class="row">
						<?php
							$side_link1 = 'class="current"';
							include 'includes/doctor-admin-sidebar.php';
						?>

						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="top-pof-head">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="title mt-7px">View Appointments</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<ul class="view-type-link">
											<li><a class="current" href="doctor-admin-appointments-day-view.php" rel="tooltip" title="Day View"><img src="images/day-view.png" alt=""><span></span></a></li><li>
												<a href="doctor-admin-appointments-week-view.php" rel="tooltip" title="Week View"><img src="images/week-view.png" alt=""><span></span></a></li><li>
												<a href="doctor-admin-appointments-month-view.php" rel="tooltip" title="Month View"><img src="images/month-view.png" alt=""><span></span></a></li>
										</ul>
									</div>
								</div>								
							</div>
							

							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="pof-content">
										<div class="pof-header3">
											<div class="title">Today's Appointment</div>
										</div>
										<div class="pof-desc">
											<ul class="appoin-list">
												<li>
													<div class="s-left">
														<h2>Denial Leo</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">10 AM  - 10:30 AM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left current"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li><li>
													<div class="s-left">
														<h2>Bismith Jonh</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">10:30 AM - 11:00 AM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left current"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li><li>
													<div class="s-left">
														<h2>Bismith Jonh</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">11:00 AM  - 12:00 PM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times current"></i></a></li>
														</ul>
													</div>
												</li><li class="current">
													<div class="s-left">
														<h2>Mic A Ting</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">12 PM  - 12:30 PM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right current"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li><li>
													<div class="s-left">
														<h2>Bismith Jonh</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">2:00 PM  - 2:30 PM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li><li>
													<div class="s-left">
														<h2>Bismith Jonh</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">2:30 PM  - 3:30 PM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li><li>
													<div class="s-left">
														<h2>Bismith Jonh</h2>
														<p>Diabetic Issues</p>
													</div><div class="s-right">
														<div class="time">3:30 PM - 4:00 PM</div>
														<ul class="action">
															<li><a href="#" rel="tooltip" title="Check In"><i class="icon icon-arrow-right"></i></a></li>
															<li><a href="#" rel="tooltip" title="Check Out"><i class="icon icon-arrow-left"></i></a></li>
															<li><a href="#" rel="tooltip" title="Cancel"><i class="icon icon-times"></i></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div><!-- End .pof-desc -->
									</div><!-- End .pof-content -->
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="patient-details">
										<div class="single-pof-pic">
											<img src="images/patient-pof-pic.jpg" alt=""/>
										</div>
										<div class="single-pof-dsc">
											<h2>Mic A Ting</h2>
											<h3>Blood Pressure Issues</h3>
											<p>
												DOB: 12 -  25 - 1945
												<br>
												Age: 68 Years
												<br>
												Tel.: 2514- 2541-2516
											</p>											
										</div>
									</div>
								</div>
							</div>

						</div><!-- End .col -->
					</div><!-- End .row -->
				</div><!-- End .conteiner -->
			</div><!-- End full-body-conteiner -->


							<script type="text/javascript">
							    $(function(){
							       $('[rel="tooltip"]').tooltip({placement: 'top', html: true});
							    });
							</script>
<?php
	include 'includes/footer.php';
?>