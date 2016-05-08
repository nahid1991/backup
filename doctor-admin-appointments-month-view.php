<?php

	/* draws a calendar */
	function draw_calendar($month,$year){

		/* draw table */
		$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

		/* table headings */
		$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

		/* days and weeks vars now ... */
		$running_day = date('w',mktime(0,0,0,$month,1,$year));
		$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
		$days_in_this_week = 1;
		$day_counter = 0;
		$dates_array = array();

		/* row for week one */
		$calendar.= '<tr class="calendar-row">';

		/* print "blank" days until the first of the current week */
		for($x = 0; $x < $running_day; $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
			$days_in_this_week++;
		endfor;

		/* keep going with days.... */
		for($list_day = 1; $list_day <= $days_in_month; $list_day++):
			$calendar.= '<td class="calendar-day">';
				/* add in the day number */
				$calendar.= '<div class="day-number">'.$list_day.'</div> <a href="doctor-admin-appointments-day-view.php"><div class="noof-apn"><h2>'.rand(5, 15).'</h2><span>Appoinments</span> </div></a> ';

				/** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
				$calendar.= str_repeat('<p> </p>',2);
				
			$calendar.= '</td>';
			if($running_day == 6):
				$calendar.= '</tr>';
				if(($day_counter+1) != $days_in_month):
					$calendar.= '<tr class="calendar-row">';
				endif;
				$running_day = -1;
				$days_in_this_week = 0;
			endif;
			$days_in_this_week++; $running_day++; $day_counter++;
		endfor;

		/* finish the rest of the days in the week */
		if($days_in_this_week < 8):
			for($x = 1; $x <= (8 - $days_in_this_week); $x++):
				$calendar.= '<td class="calendar-day-np"> </td>';
			endfor;
		endif;

		/* final row */
		$calendar.= '</tr>';

		/* end the table */
		$calendar.= '</table>';
		
		/* all done, return result */
		return $calendar;
	}

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
											<li><a href="doctor-admin-appointments-day-view.php" rel="tooltip" title="Day View"><img src="images/day-view.png" alt=""><span></span></a></li><li>
												<a href="doctor-admin-appointments-week-view.php" rel="tooltip" title="Week View"><img src="images/week-view.png" alt=""><span></span></a></li><li>
												<a class="current" href="doctor-admin-appointments-month-view.php" rel="tooltip" title="Month View"><img src="images/month-view.png" alt=""><span></span></a></li>
										</ul>
									</div>
								</div>								
							</div>

							<div class="pof-content">
								<div class="pof-header3">
									<div class="title">Appointments in February 2014</div>
								</div>
								<div class="pof-desc">
									<div class="clearfix"></div>

									<div class="monthview-cal-container">
										<?php 
											echo draw_calendar(2,2014);
										?>										
									</div>
								</div><!-- End .pof-desc -->
							</div><!-- End .pof-content -->

						</div><!-- End .col -->
					</div><!-- End .row -->
				</div><!-- End .conteiner -->
			</div><!-- End full-body-conteiner -->


							<script type="text/javascript">
							    $(function(){
							       $('[rel="tooltip"]').tooltip({placement: 'top'});
							    });
							</script>
<?php
	include 'includes/footer.php';
?>