<?php
	include 'includes/header.php';
?>


  <!-- summernote with less and requirejs -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
  <link rel="stylesheet/less" type="text/css" href="summernote/less/summernote.less" /> 
  <script data-main="src/js/app" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.9/require.min.js"></script>

		<div id="full-body">
			<div class="full-body-conteiner">
				<div class="container">
					<div class="row">
						<?php
							$side_link5 = 'class="current"';
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
											<h5>New Blog</h5>
										</div>
										<div class="doctorsignup-holder edit-holder">
											<label>Blog Title</label>
											<input name="" required="" type="text" class="form-control"  value="">
											<label>Blog Image</label>
											<div class="upload-photo">
												<input name="" type="file">
												<button type="button" class="btn btn-default" data-toggle="button">UPLOAD</button>												
											</div>
											<label>Blog</label>											
  											<div class="summernote"></div>
											<button type="button" class="btn btn-default" data-toggle="button">POST</button>
										</div>

										<div class="doctorsignup-holder edit-holder">
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