<?php
	$count = count(explode('/',dirname($_SERVER['PHP_SELF']))); $root = ""; for ($i=0;$i<$count-1;$i+=1) {$root=$root."../";}
	
	require $root.'blocks/prereqs.php';
	require $root.'blocks/products_submenu.php';
?>

<script src="<?php echo $root;?>js/galleria-1.2.8.min.js"></script>

	<div class="container">
	
		<div class="left wide">
			<h1>Amon</h1>
			<div id="galleria">
				<img src="SI scout.29.jpg">
				<img src="SI scout.30.jpg">
				<img src="SI scout.31.jpg">
				<img src="SI scout.33.jpg">
				<img src="SI scout.34.jpg">
				<img src="SI scout.36.jpg">
			</div>
			<script>
				Galleria.loadTheme('<?php echo $root;?>js/themes/classic/galleria.classic.min.js');
				Galleria.run('#galleria');
			</script>
		</div>
		<div class="right">
			<h2>Escape Class-1: "Amon"</h2><h3>A very lightweight deluxe escape ship, designed to move undetected and fast away from dangerous locations to the nearest safe-haven.</h3><p>The development of this ship started in 2935 and has seen many prototypes during the last four years. The biggest challenge encountered by our research team was to implement the new double fusion core (DFC-5) which makes this escape ship fly faster than any other one- or two-seater in the Sphere Industries Fleet (SIF).</p><p>Besides speed, the Amon is the most agile spacecraft of the complete SIF. Seven thrusters make sure that the Pilot of the Amon will be able to outmanoeuvre any other ship and thanks to our AstroSystems&trade; it can move quickly through an asteroid field without worring about collision with asteroids.<p>This escape ship is equipped with the latest long-range-radar SMk XI and with the best counter-radar-Systems such as SECm, RIS and GPS.</p><p>Because of the speed and the size of the Amon, no weapons can be mounted. There are slots for the installation of Shields and countermeasures</p>
			<h2>Technical Specifications</h2><p>Class: Escape</p><p>Designation: Amon</p><p>Role: Escape Pod</p><p>Number of seats: 1</p><p>Length (m): 6</p><p>Estimated Tonnage: 3</p><p>Estimated Load: N/A</p><p>Special Equipment: Standard Electronic Countermeasures (SECm), Radar Interference System (RIS), Ghost Projection System (GPS), HullCoat&trade; 3.0, AstroSystems&trade;</p><p>Energy Weapons: N/A</p><p>Ballistic Weapons: N/A</p><p>Maximum Engine Plant: Double Fusion Core Mk-5 (DFC-5)</p> 
		</div>
	</div>
		
<?php require $root.'blocks/footer.php'; ?>