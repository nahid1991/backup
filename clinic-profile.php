<?php
	include 'includes/header.php';
?>
	
		<div id="full-body">
			<div id="doctor-profile">
				<div class="container">	
					<div class="clinic-profile-top">					
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<img src="images/clinic-profile.jpg">
							</div>
							<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
								<div class="profile-pic">
										<img src="images/profile-pic.jpg">
								</div>
								<div class="clinic-desc">
									<h5>Callen-Lorde Community Health Center</h5>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="clinic-desc-right">
										<div class="clinic-established">
											<h2>1988</h2>
											<p>Established in</p>
										</div>
										<div class="clinic-established">
											<h2>25</h2>
											<p>Doctors</p>
										</div>
										<div class="clinic-established">
											<h2>256</h2>
											<p>Likes</p>
										</div>
										<div class="addthis-clinic">
											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style addthis_16x16_style">
											<a class="addthis_button_facebook"></a>
											<a class="addthis_button_twitter"></a>
											<a class="addthis_button_email"></a>
											<a class="addthis_button_pinterest_share"></a>
											<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
											</div>
											<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f0a8fe75767d6e"></script>
											<!-- AddThis Button END -->
											​<script type="text/javascript">
												var addthis_config = addthis_config||{};
												addthis_config.data_track_addressbar = false;
												addthis_config.data_track_clickback = false;
											</script>
										</div>
								</div>
							</div>
						</div>
					</div><!--clinic-profile-top!-->
					<div class="doctor-profile-location">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="doctor-adress-panel">
									<div class="doctor-address">
										<h2>Ridgewood, New York</h2>
									</div>
									<div class="doctor-place">
										<h2>Tribeca Dental Care</h2>
										<p>#A-102, Marve Link Apartment, Marve Road Forest Ave Ridgewood<br/> NY 11385</p>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<div class="doctor-shedule">
									<div class="shedule">
										MON - WED<br/>
										9:30 AM - 9:30 PM
									</div>
									<div class="shedule">
										SAT - SUN<br/>
										9:30 AM - 9:30 PM
									</div>
								</div>
							</div>
							<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<div class="area-map">
									<h2>62-97 Forest Ave, Ridgewood, NY</h2>
								<div id="googlemap"></div>
									    <script>
									      jQuery(window).load(function(){
									        loadGoogleMaps();  
									      });

									      function initGoogleMaps() {
									        /* Google Maps Init */
									        var myLatlng = new google.maps.LatLng(40.710977,-73.904860);
									        var myOptions = {
									          zoom: 16,
									          center: myLatlng,
									          popup: true,
									          mapTypeId: google.maps.MapTypeId.ROADMAP
									        }
									        var map = new google.maps.Map(document.getElementById("googlemap"), myOptions);
									        
									        var marker = new google.maps.Marker({
									          position: myLatlng, 
									          map: map,
									          title:"Forest Ave, Ridgewood"
									        });
									        google.maps.event.addListener(marker, 'click', function() {
									          map.setZoom(17);
									        });
									      }
									        
									      function loadGoogleMaps() {
									        /* Google Maps Load */
									        if(jQuery('#googlemap').length != 0){
									          var script = document.createElement("script");
									          script.type = "text/javascript";
									          script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initGoogleMaps";
									          document.body.appendChild(script);
									        }
									      }
    							</script>
								</div>
							</div>
						</div>
					</div>
					<div class="doctor-profile-details">
						<div class="row">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="membership specilaztion">
									<h2>Specializiations</h2>
									<ul class="qualification-list">
										<li>Dentist</li>
										<li>Cosmetic Dentist</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="membership language">
									<h2>Services</h2>
									<ul class="qualification-list">
										<li>Immunizations</li>
										<li>TB Skin Tests</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div class="membership awards">
									<h2>Award and Recognitions</h2>
									<ul class="qualification-list">
										<li>Award By the President Of India For excepational work in Raising Dental Units and as a Commending Officer</li>
									</ul>
								</div>
							</div>
						</div>
					</div> <!-- End #doctor-profile details-->
					<div class="doctor-caresoul">
						<div class="row">
							<h5>DOCTORS</h5>
							<div class="doctor-profile-caresoul">
							<div class="doctor-caresoul-box">	
								<div class="slide doctor_profile_img">
										<div class="doctor_profile_img">
										<img src="images/doctor-profile1.jpg"/>
										<div class="doctor-profile-title">
											<h2>Dr.Fedrick Solomon</h2>
											<p>Dermotologist/Cosmotologist</p>
										</div>
										</div>
									</div>
								</div>
							<div class="doctor-caresoul-box">	
								<div class="slide doctor_profile_img">
										<img src="images/doctor-profile2.jpg"/>
										<div class="doctor-profile-title">
											<h2>Dr.Alla Dorman</h2>
											<p>Dentist</p>
										</div>
									</div>
								</div>
							<div class="cdoctor-caresoul-box">	
								<div class="slide doctor_profile_img">
										<img src="images/doctor-profile3.jpg"/>
										<div class="doctor-profile-title">
											<h2>Dr.Eugene Khaytsin</h2>
											<p>Alergist</p>
										</div>
									</div>
								</div>
							<div class="doctor-caresoul-box">	
								<div class="slide doctor_profile_img">
									<img src="images/doctor-profile4.jpg"/>
										<div class="doctor-profile-title">
											<h2>Dr.Azar Boujaran-Ghomi</h2>
											<p>Gynocologist</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End #doctor-caresoul-->
					<div class="doctor-profile-prefooter">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="doctor-profile-tab">
									<ul class="doctor-tab" id="myTab">
									  <li class="active"><a href="#home" data-toggle="tab"><i class="icon icon-picture-o icon-2x img-icon"></i> IMAGES</a></li>
									  <li><a href="#profile" data-toggle="tab"><i class="icon icon-video-camera icon-2x img-icon"></i>  VIDEOS</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active " id="home">
											<ul class ="images-pane image-overlay">
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
												<li><a href="images/dummy-photo-gallery/dummy.jpg" data-rel="gallery['photo']" title=""><img src="images/images-demo2.jpg"></a></li>
											</ul>
										</div>
										<div class="tab-pane" id="profile">
											<ul class ="images-pane video-overlay">
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
												<li><a href="http://vimeo.com/7874398&width=600" data-rel="gallery['video']" title=""><img src="images/video-demo.jpg"></a></li>
											</ul>
										</div>
									</div>
								</div><!-- End #doctor-profile-tab-->
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="comments">
									<div class="viewcomments"><a id="view-all" href="#">view all</a></div>
									<h5>24 COMMENTS</h5>
									<div class="comments-box">
										 <div class="commenter-img"><img src="images/avatar.jpg"></div>
										 <div class="comment-details">
										 		<h2>ALBERT MCCANE</h2><span>6 days ago</span>
										 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										 </div>
									</div>
									<div class="comments-box">
										 <div class="commenter-img"><img src="images/avatar.jpg"></div>
										 <div class="comment-details">
										 		<h2>ALBERT MCCANE</h2><span>6 days ago</span>
										 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
										 </div>
									</div>
										<div id="viewallcomments">
											<div class="comments-box">
												 <div class="commenter-img"><img src="images/avatar.jpg"></div>
												 <div class="comment-details">
												 		<h2>NICOOLA MCCANE</h2><span>3 days ago</span>
												 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												 </div>
											</div>
											<div class="comments-box">
												 <div class="commenter-img"><img src="images/avatar.jpg"></div>
												 <div class="comment-details">
												 		<h2>JHON NACSON</h2><span>2 days ago</span>
												 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												 </div>
											</div>
											<div class="comments-box">
												 <div class="commenter-img"><img src="images/avatar.jpg"></div>
												 <div class="comment-details">
												 		<h2>ALLA JHON</h2><span>1 days ago</span>
												 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
												 </div>
											</div>
											<div class="comments-box">
											 <div class="commenter-img"><img src="images/avatar.jpg"></div>
											 <div class="comment-details">
											 		<h2>ALBERT MCCANE</h2><span>6 days ago</span>
											 		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
											 </div>
											</div>
										</div> <!-- End #viewallcomments Section -->

											<div class="comments-button">
												<a href="#">LEAVE A COMMENT</a>
											</div>
									</div>
	
									<script type="text/javascript">
									$(document).ready(function(){
									  	$('#viewallcomments').slideUp();
									});
									    $('#view-all').click(function() {
									    	if ($(this).hasClass("active")) {
												$(this).removeClass("active");
									    	}
									    	else {$(this).addClass("active");}
									    	$('#viewallcomments').slideToggle(500);
									    	return false;
									    });
								</script
							</div>
						</div>
					</div><!-- End #doctor-profile Prefooter-->
				</div>
			</div><!-- End #doctor-profile-->
<?php
	include 'includes/footer.php';
?>