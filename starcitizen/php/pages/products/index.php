<?php
	$count = count(explode('/',dirname($_SERVER['PHP_SELF']))); $root = ""; for ($i=0;$i<$count-1;$i+=1) {$root=$root."../";}
	
	require $root.'blocks/prereqs.php';
	require $root.'blocks/products_submenu.php';
?>

<div class="container">
	<div class="full nopadding">
		<div class="viewport-container">
		<div class="viewport">
			<a href="./spacecraft">
				<span class="dark-background">Spacecraft</span>
				<img src="<?php echo $root; ?>img/front/SpaceVehicle.jpg" alt="Spacecraft" />
			</a>
		</div>
		<div class="viewport no-margin">
			<a href="./spacecraft">
				<span class="dark-background">Weaponry</span>
				<img src="<?php echo $root; ?>img/front/Asteroidbelt.jpg" alt="Spacecraft" />
			</a>
		</div>
		<div class="viewport">
			<a href="./spacecraft">
				<span class="dark-background">Defense</span>
				<img src="<?php echo $root; ?>img/front/SunsetPeak.jpg" alt="Spacecraft" />
			</a>
		</div>
		<div class="viewport no-margin">
			<a href="./spacecraft">
				<span class="dark-background">Miscellaneous</span>
				<img src="<?php echo $root; ?>img/front/NebulaSystem.jpg" alt="Spacecraft" />
			</a>
		</div>
		</div>
	</div>
</div>
<?php require $root.'blocks/footer.php'; ?>