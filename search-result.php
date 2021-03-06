<?php
	include 'includes/header.php';
?>
	
		<div id="full-body">
			<div class="doctor-list">
				<div class="container">
					<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 ">
						<div class="search-box">
							<span>Refine Your Search</span>
							<div class="search-area">
								<div class="dropdown-holder">
									<select class="select_box" name="roomtype">	
										<option value="">Dentists</option>										
									</select>						  
								</div>
								<div class="dropdown-holder">
									<input type="text" name="lastname" placeholder="New York"/>						  
								</div>
								<div class="dropdown-holder">
									<select class="select_box" name="roomtype">	
										<option value="">Reason for Visit</option>										
									</select>						  
								</div>
								<div class="dropdown-holder">
									<select class="select_box" name="roomtype">	
										<option value="">Gender</option>										
									</select>						  
								</div>
								<div class="dropdown-holder">
									<select class="select_box" name="roomtype">	
										<option value="">Insurance</option>										
									</select>						  
								</div>
								<div class="dropdown-holder">
									<select class="select_box" name="roomtype">	
										<option value="">Language</option>										
									</select>						  
								</div>
								<div class="availability" data-type="availability" id="availabilityFilters">
									<p>Availability</p>
									<div class="btn-group" data-toggle="buttons">
										<label class="btn btn-primary"><input type="radio" name="options" id="option1">Any</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option2">S</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option3">M</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option4">T</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option5">W</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option6">T</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option7">F</label>
										<label class="btn btn-primary"><input type="radio" name="options" id="option8">S</label>
									</div>
									<div class="clearfix"></div>
								</div>
							<div class="search"><a href="">Search</a></div>
						</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-10 col-lg-10 ">
						<div class="doctor-holder">
							<div class="page-title"><span>Dentists in New York</sapn></div>
							<ul class="doctor-details">
								<li>
										<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>										
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a id="get-an-appoinment" href="#">Get An Appointment</a></div>
										</div>

										<div class="clearfix"></div>										

										<div id="doctor-appoinment" class="search-page">
											<h4>Book an Appointment</h4>
											<p class="ds">Click a time below to book an appointment.</p>					
													
											<div id="doctor-appoinment-slides">
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Sun</div>
												                <div class="header-tile-date-value">09 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">10:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">11:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Mon</div>
												                <div class="header-tile-date-value">10 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Tue</div>
												                <div class="header-tile-date-value">11 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">10:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">11 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Wed</div>
												                <div class="header-tile-date-value">12 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4:30 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Thu</div>
												                <div class="header-tile-date-value">13 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4:15 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Fri</div>
												                <div class="header-tile-date-value">14 FEB</div>
											  				</th>
											  			</tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Sat</div>
												                <div class="header-tile-date-value">15 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->

											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Sun</div>
												                <div class="header-tile-date-value">16 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">10:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">11:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Mon</div>
												                <div class="header-tile-date-value">17 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Tue</div>
												                <div class="header-tile-date-value">18 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">10:30 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">11 am</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Wed</div>
												                <div class="header-tile-date-value">19 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">1:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">3:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4:30 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Thu</div>
												                <div class="header-tile-date-value">20 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">12:30 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">2 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4:15 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Fri</div>
												                <div class="header-tile-date-value">21 FEB</div>
											  				</th>
											  			</tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->
											  
											  <div class="slide">
											  	<div class="appoinment-day">
											  		<table>
											  			<tr>
											  				<th>
												                <div class="header-tile-date-name">Sat</div>
												                <div class="header-tile-date-value">22 FEB</div>
											  				</th>
											  			</tr>
											  			<tr><td><a href="get-an-appoinment.php">3 pm</a></td></tr>
											  			<tr><td><a href="get-an-appoinment.php">4 pm</a></td></tr>
											  		</table>
											  	</div>
											  </div><!-- End Slide Item -->

											</div>	
											<div class="clearfix"></div>		
										</div><!-- End #doctor-appoinment Appoinment Section -->

										<script type="text/javascript">
											$(document).ready(function(){
											  	$('#doctor-appoinment').slideUp();
											  $('#doctor-appoinment-slides').bxSlider({
											    mode: 'horizontal',
											    slideWidth: 105,
											    infiniteLoop: false,
											    pager: false,
											    minSlides: 5,
											    maxSlides: 5,
											    moveSlides: 1,
											    slideMargin: 8
											  });

											});

											    $('#get-an-appoinment').click(function() {
											    	if ($(this).hasClass("active")) {
														$(this).removeClass("active");
											    	}
											    	else {$(this).addClass("active");}
											    	
											    	$('#doctor-appoinment').slideToggle(500);
											    });
										</script>
										<div class="clearfix"></div>
								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>

								</li>	
								<li>
								<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>

								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>
								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>
								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>
								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
									<div class="clearfix"></div>
								</li>	
								<li>
									<div class="doctor-img"><img src="images/doctor.jpg" alt=""/></div>
										<div class="doctor-name">
											<a href="doctor-profile.php"><h2>Dr. Jaklin Farnish</h2></a>
											<div class="specialist">BDS, MDS - Periodontics, Dip Skin Aesthetics</div>
											<div class="city">217 centre.<br/>New York,NY 10013</div>
										</div>
										<div class="right-area">
											<div class="ratings">
												<h2>Dentist</h2>
												<ul>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
													<li><img src="images/ratings.png" alt=""/></li>
												</ul>
											</div>
											<div class="booking"><a href="">Get An Appointment</a></div>
										</div>
										<div class="clearfix"></div>
								</li>					
							</ul>
							<div class="search-pagination">
								<div id="paginate"></div>
								<script src="js/jquery.paginate.js" type="text/javascript"></script>
								<script type="text/javascript">
								$(function() {
									$("#paginate").paginate({
										count 		: 100,
										start 		: 1,
										display     : 8,
										border					: true,
										border_color			: '#e0e0e0',
										text_color  			: '#208589',
										background_color    	: '#f2f2f2',	
										border_hover_color		: '#e0e0e0',
										text_hover_color  		: '#fff',
										background_hover_color	: '#14bac1', 
										images					: false,
										mouse					: 'press'
									});
								});
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
<?php
	include 'includes/footer.php';
?>