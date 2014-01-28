<?php 
	
	require 'blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1";

	$result = mysql_query($query);	
	
	require 'blocks/prereqs.php'; 
	
?>
	
	<script src="js/s3Slider.js" type="text/javascript"></script>
	
		
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
						$loc[0] = "left bottom";
						$loc[1] = "right fullHeight";
						$loc[2] = "left top";
						$loc[3] = "right bottom";
						$loc[4] = "fullWidth bottom";
						$loc[5] = "right top";
						
						// Fill in the text for the headings
						$title[0] = "Reach the stars";
						$title[1] = "TerraSafe&trade;";
						$title[2] = "AstroShields&trade;";
						$title[3] = "GasFilterPlus&trade;";
						$title[4] = "Clean Air&trade;";
						$title[5] = "Riptide Class";
						
						// Fill in the body content for the slides. 
						// N.B.: Use full html formatting! Insert a backslash to escape double quotes (so use <a href=\"#\"> instead of <a href="#">)
						$content[0] = "<p>We are there for you.</p>";
						$content[1] = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur diam vel risus cursus eget adipiscing lectus suscipit. Proin venenatis porttitor ligula, eget facilisis tortor volutpat nec. Aliquam nec tellus nisi. Ut commodo, urna quis sagittis porttitor, urna mauris viverra lorem, vel mattis nunc velit eu lorem. </p><p>Etiam tellus neque, ullamcorper ut varius non, placerat eget tellus. Proin ornare rutrum nulla vitae tincidunt. Cras varius, nisi nec ultricies rutrum, lacus ipsum porttitor leo, sed dignissim elit tortor eget urna. Donec nibh velit, fringilla a lobortis ac, mollis vel lorem. Sed posuere, lectus at volutpat tempor, urna magna rhoncus metus, a adipiscing lectus dui sed quam. </p>";
						$content[2] = "<p>Protection against asteroids and high impact particles.</p><p>Lorem ipsum dolor sit amet, <a href=\"#\">consectetur</a> adipiscing elit. Mauris <a href=\"#\">consectetur diam</a> vel risus cursus eget <a href=\"#\">adipiscing</a> lectus suscipit. Proin venenatis porttitor ligula, eget facilisis tortor volutpat nec.</p><a href=\"#\">Full-width link</a>";
						$content[3] = "<p>No more limits of where you can go.</p><img src=\"img/front/SpaceVehicle.jpg\" />";
						$content[4] = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur diam vel risus cursus eget adipiscing lectus suscipit. Proin venenatis porttitor ligula, eget facilisis tortor volutpat nec. Aliquam nec tellus nisi. Ut commodo, urna quis sagittis porttitor, urna mauris viverra lorem, vel mattis nunc velit eu lorem. Duis vel porta nulla. Pellentesque nec nisl ante. Nullam luctus scelerisque urna eu aliquam. Praesent faucibus malesuada semper. Curabitur mollis magna sit amet mi tincidunt eu laoreet purus bibendum. Vestibulum ut orci lectus. </p>";
						$content[5] = "<p>Go fast in style.</p><p>In this example, the <strong>slide itself</strong> is clickable.</p>";
						
												
						for ($i=0; $i<$count; $i++) {
							echo "<li class=\"s3sliderImage\"><img src=\"img/front/" . $src[$i] . ".jpg\" width=\"890px\">";
							echo "<div class=\"" . $loc[$i] . "\">";
							echo "<h3>" . $title[$i] . "</h3>";
							echo $content[$i];
							echo "</div>";
							echo "<p class=\"slideNumber\">"; echo $i + 1 . " / " . $count . "</p></li>";
						}
					?>
				</ul>
			</div>
		
		

	<script type="text/javascript">
		$(document).ready(function() {
			$('#s3slider').s3Slider({
				timeOut: 4000
			});
		});
	</script>
<?php require 'blocks/footer.php'; ?>