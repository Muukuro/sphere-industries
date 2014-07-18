<?php 
	
	require 'blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1";

	$result = mysql_query($query);	
	
	require 'blocks/prereqs.php'; 
	
?>
	<div class="container">
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.zaccordion.js"></script>
	
<div class="left full">
			<h1>Sphere Industries</h1>
			<div class="front-slider">
				<div class="frame0 frame1">
					<div class="content left">
						<h3>Reach the stars</h3>
						<p>We are there for you.</p>
					</div>
				</div>
				<div class="frame0 frame2">
					<div class="content right">
						<h3>TerraLife&trade;</h3>
						<p>Live wherever you want.</p>
					</div>
				</div>
				<div class="frame0 frame3">
					<div class="content left">
						<h3>AstroShields&trade;</h3>
						<p>Protection against asteroids and high impact particles.</p>
					</div>
				</div>
				<div class="frame0 frame4">
					<div class="content right">
						<h3>GasFilterPlus&trade;</h3>
						<p>No more limits of where you can go.</p>
					</div>
				</div>
				<div class="frame0 frame5">
					<div class="content left">
						<h3>Clean Air&trade;</h3>
						<p>For a safer, healthier future.</p>
					</div>
				</div>
				<div class="frame0 frame6">
					<div class="content right">
						<h3>Riptide Class</h3>
						<p>Go fast in style.</p>
					</div>
				</div>
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