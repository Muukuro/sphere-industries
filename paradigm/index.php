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
				<?php 
						
						// Set the total number of slides to be displayed. 
						// N.B.: May be less than total amount. The number provided is the number of slides shown.
						$count = 6; 
						
						// Insert the titles of the images, in the right order
						$src = array("SimpleStar","Atmosless","Asteroidbelt","NebulaSystem","SunsetPeak","SpaceVehicle");
						
						// Define the location for each slide
						// You may combine   left/right/fullWidth   with   top/bottom/fullHeight
						$loc[0] = "left top";
						$loc[1] = "right top";
						$loc[2] = "left top";
						$loc[3] = "right top";
						$loc[4] = "left top";
						$loc[5] = "right top";
						
						// Fill in the text for the headings
						$title[0] = "Reach the stars";
						$title[1] = "TerraSafe&trade;";
						$title[2] = "AstroSystems&trade;";
						$title[3] = "GasFilterPlus&trade;";
						$title[4] = "Clean Air&trade;";
						$title[5] = "Riptide Class";
						
						// Fill in the body content for the slides. 
						// N.B.: Use full html formatting! Insert a backslash \ to escape double quotes (so use <a href=\"#\"> instead of <a href="#">)
						$content[0] = "<p>We are there for you.</p>";
						$content[1] = "<p>Live wherever you want.</p>";
						$content[2] = "<p>Your guide through asteroid fields.</p>";
						$content[3] = "<p>No more limits of where you can go.</p>";
						$content[4] = "<p>For a safer, healthier future.</p>";
						$content[5] = "<p>Go fast in style.</p>";
						
												
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