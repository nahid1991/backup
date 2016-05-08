<?php
	include 'includes/header.php';
?>
		<div id="full-body">
			<div class="full-body-conteiner">
				<div class="container">
					<div class="row">
						<?php
							$side_link2 = 'class="current"';
							include 'includes/entity-admin-sidebar.php';
						?>

						<div class="col-xs-12 col-sm-8 col-md-9">
							<div class="top-epof-head">
								<div class="row">
									<div class="col-xs-12 col-sm-5 col-md-5">
										<div class="edpof-left">
											<div class="doctorsignup-holder edit-holder epof-editholder">
												<label for="">Select Doctor</label>
												 <select>	
													<option value="">Dr. Alla Dorfman</option>											
												</select>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-7 edpof-right">
											<div  class="edshedule-left">
												<div class="epof-title"><h5>Dr. Alla Dorfman</h5><p>DDS  &nbsp;  |  &nbsp; Dentist</p></div>
												<div class="epof-shedule">
													<div class="shedule edshedule">
														MON - WED<br>
														9:30 AM - 9:30 PM
													</div>
													<div class="shedule">
														SAT - SUN<br>
														9:30 AM - 9:30 PM
													</div>
												</div>
											</div>
											<div class="edpof-image"><img src="images/entity-doctor-profile.jpg"></div>
									</div>
								</div>								
							</div>
							<script type="text/javascript">
							    $(function(){
							       $('[rel="tooltip"]').tooltip({html: true});
							    });
							</script>


							<div class="top-pof-head">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-6">
										<div class="title mt-7px">View Appointments</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6">
										<ul class="view-type-link">
											<li><a href="entity-admin-appointments-view.php" rel="tooltip" title="Day View"><img src="images/day-view.png" alt=""><span></span></a></li><li>
												<a class="current" href="entity-admin-appointments-week-view.php" rel="tooltip" title="Week View"><img src="images/week-view.png" alt=""><span></span></a></li><li>
												<a href="entity-admin-appointments-month-view.php" rel="tooltip" title="Month View"><img src="images/month-view.png" alt=""><span></span></a></li>
										</ul>
									</div>
								</div>								
							</div>


							<div class="pof-content">
								<div class="pof-header3">
									<div class="title">Appointments</div>
								</div>
								<div class="pof-desc">
									<div id="appoinment-admin">
										<div id="appoinment-admin-slides">
										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Mon</div>
											                <div class="header-tile-date-value">10 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.K. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Tue</div>
											                <div class="header-tile-date-value">11 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Wed</div>
											                <div class="header-tile-date-value">12 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.K. Mic<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Thu</div>
											                <div class="header-tile-date-value">13 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Fri</div>
											                <div class="header-tile-date-value">14 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Sat</div>
											                <div class="header-tile-date-value">15 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Sun</div>
											                <div class="header-tile-date-value">16 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Mon</div>
											                <div class="header-tile-date-value">17 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="right" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Tue</div>
											                <div class="header-tile-date-value">18 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										  <div class="slide">
										  	<div class="dradmin-appoinment">
										  		<table>
										  			<tr>
										  				<th>
											                <div class="header-tile-date-name">Wed</div>
											                <div class="header-tile-date-value">19 FEB</div>
										  				</th>
										  			</tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  			<tr><td><a href="#" rel="tooltip" data-placement="left" title="<h5>A.K. Mill</h5><p>Blood Pressure Issues</p>">A.J. Mill<br/><span>10:30 am</span></a></td></tr>										  			
										  		</table>
										  	</div>
										  </div><!-- End Slide Item -->

										</div>	
										<div class="clearfix"></div>		
									</div><!-- End #doctor-appoinment Appoinment Section -->

									<script type="text/javascript">
										$(document).ready(function(){
										  $('#appoinment-admin-slides').bxSlider({
										    mode: 'horizontal',
										    slideWidth: 100,
										    infiniteLoop: false,
										    pager: false,
										    minSlides: 5,
										    maxSlides: 7,
										    moveSlides: 7,
										    slideMargin: 0
										  });
										});
									</script>
								</div>
							</div><!-- End .pof-content -->

							</div><!-- End .pof-content -->
						</div><!-- End .col -->
					</div><!-- End .row -->
				</div><!-- End .conteiner -->
			</div><!-- End full-body-conteiner -->
<?php
	include 'includes/footer.php';
?>