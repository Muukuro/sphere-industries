<?php 
	
	require 'blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1";

	$result = mysql_query($query);	
	
	require 'blocks/prereqs.php'; 
	
?>
	<div class="container">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/s3Slider.js" type="text/javascript"></script>
	
<div class="left full">
			<h1>Sphere Industries</h1>
			<div id="s3slider">
    <ul id="s3sliderContent">
        <li class="s3sliderImage">
            <img src="../img/front/SpaceVehicle.jpg">
            <span>Your text comes here</span>
        </li>
        <li class="s3sliderImage">
            <img src="../img/front/SpaceVehicle.jpg">
            <span>Your text comes here</span>
        </li>
        <div class="clear s3sliderImage"></div>
    </ul>
</div>
			
			<div id="thumbs" style="display: none;">
				<a href="#" class="thumb-start">Start</a> <a href="#" class="thumb-stop">Stop</a>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					var accordion = $(".front-slider").zAccordion({
						slideWidth: 600,
						width: 850,
						height: 350,
						timeout: 6000,
						slideClass: "frame",
						slideOpenClass: "frame-open",
						slideClosedClass: "frame-closed",
						easing: "easeOutCirc",
						pause: false
					});
					$("#thumbs .thumb-start").click(function(){
						accordion.start();
						return false;
					});
					$("#thumbs .thumb-stop").click(function(){
						accordion.stop();
						return false;
					});
				});
				
			</script>
			<h2>Latest news</h2>
				<ul class="articles">
					<?php while($row = mysql_fetch_array($result))
						{
						$ID = $row['ID'];
						echo "<li onclick=\"location.href='si/press.php?ID=" . $ID . "';\"  style=\"cursor:pointer;\""; 
						if ( $_GET['ID'] == $ID) {echo "class=\"current\"";}
						echo ">" . $row['Date'] . "<a>" . $row['Title'] . "</a> (" . $row['Source_abbr'] . ")</li> \n"; 
						}
					?>
				</ul>	
			<!--<h2>Star Citizen</h2>
			<p>We at Sphere Industries strongly encourage you to support the <em>Star Citizen / Squadron 42</em> project by Chris Roberts.</p>
			<iframe width="100%" height="281" src="http://www.youtube.com/embed/WpgUuGunU0o" frameborder="0" allowfullscreen style="margin-bottom: 10px;"></iframe>
			<a href="http://www.robertsspaceindustries.com/star-citizen/?rid=32782">Roberts' Space Industries official website</a>-->
		</div>
		
	</div>
	
<?php require 'blocks/footer.php'; ?>