<?php 
	
	require 'blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1";

	$result = mysql_query($query);	
	
	require 'blocks/prereqs.php'; 
	
?>
	<!--<div class="container">-->
	<script src="js/s3Slider.js" type="text/javascript"></script>
	
		<!--<div class="full nopadding">-->
			<div id="s3slider">
				<ul id="s3sliderContent">
					<!--<li class="s3sliderImage">
						<img src="img/front/announcement1.jpg" width="890px">
						<div class="left top">
							<h3>Announcement</h3>
							<p>Soon to be revealed.</p>
						</div>
						<p class="slideNumber">1 / 7</p>
					</li>
					<!--<li class="s3sliderImage">
						<img src="img/front/SimpleStar.jpg" width="890px">
						<div class="left top">
							<h3>Reach the stars.</h3>
							<p>We are there for you.</p>
						</div>
						<p class="slideNumber">2 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="img/front/Atmosless.jpg" width="890px">
						<div class="right top">
							<h3>TerraSafe&trade;</h3>
							<p>Live wherever you want.</p>
						</div>
						<p class="slideNumber">3 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="img/front/Asteroidbelt.jpg" width="890px">
						<div class="left top">
							<h3>AstroSystems&trade;</h3>
							<p>Protection against asteroids and high impact particles.</p>
						</div>
						<p class="slideNumber">4 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="img/front/NebulaSystem.jpg" width="890px">
						<div class="right top">
							<h3>GasFilterPlus&trade;</h3>
							<p>No more limits of where you can go.</p>
						</div>
						<p class="slideNumber">5 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="img/front/SunsetPeak.jpg" width="890px">
						<div class="left top">
							<h3>Clean Air&trade;</h3>
							<p>For a safer, healthier future.</p>
						</div>
						<p class="slideNumber">6 / 7</p>
					</li>
					<li class="s3sliderImage">
						<img src="img/front/SpaceVehicle.jpg" width="890px">
						<div class="right top">
							<h3>Riptide Class</h3>
							<p>Go fast in style.</p>
						</div>
						<p class="slideNumber">7 / 7</p>
					</li>
					<div class="clear s3sliderImage"></div>
				</ul>-->
				<?php 
						
						// Set the total number of slides to be displayed. 
						// N.B.: May be less than total amount. The number provided is the number of slides shown.
						$count = 8; 
						
						// Insert the titles of the images, in the right order
						$src = array("Announcement1","SimpleStar","EarlyRedGiant","Atmosless","Asteroidbelt","NebulaSystem","SunsetPeak","SpaceVehicle");
						
						// Define the location for each slide
						// You may combine   left/right/fullWidth   with   top/bottom/fullHeight
						$loc[0] = "left bottom";
						$loc[1] = "left top";
						$loc[2] = "right top";
						$loc[3] = " top";
						$loc[4] = "left top";
						$loc[5] = "right top";
						$loc[6] = "left top";
						$loc[7] = "right top";
						
						// Fill in the text for the headings
						$title[0] = "Ship Announcement";
						$title[1] = "Reach the stars";
						$title[2] = "SphereTours&trade;";
						$title[3] = "TerraSafe&trade;";
						$title[4] = "AstroSystems&trade;";
						$title[5] = "GasFilterPlus&trade;";
						$title[6] = "Clean Air&trade;";
						$title[7] = "Riptide Class";
						
						// Fill in the body content for the slides. 
						// N.B.: Use full html formatting! Insert a backslash \ to escape double quotes (so use <a href=\"#\"> instead of <a href="#">)
						$content[0] = "<p>Soon to be revealed.</p>";
						$content[1] = "<p>We are there for you.</p>";
						$content[2] = "<p>Witness the space events <i>you</i> want to experience.</p>";
						$content[3] = "<p>Live wherever you want.</p>";
						$content[4] = "<p>Your guide through asteroid fields.</p>";
						$content[5] = "<p>No more limits of where you can go.</p>";
						$content[6] = "<p>For a safer, healthier future.</p>";
						$content[7] = "<p>Go fast in style.</p>";
						
												
						for ($i=0; $i<$count; $i++) {
							echo "<li class=\"s3sliderImage\"><img src=\"img/front/" . $src[$i] . ".jpg\" width=\"890px\">";
							echo "<div class=\"" . $loc[$i] . "\">";
							echo "<h3>" . $title[$i] . "</h3>";
							echo $content[$i];
							echo "</div>";
							echo "<p class=\"slideNumber\">"; echo $i + 1 . " / " . $count . "</p></li>";
						}
					?>
			</div>
		<!--</div>
		
	</div>-->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#s3slider').s3Slider({
				timeOut: 6000
			});
		});
	</script>
<?php require 'blocks/footer.php'; ?>