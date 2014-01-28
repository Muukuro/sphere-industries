<?php
	$count = count(explode('/',dirname($_SERVER['PHP_SELF']))); $root = ""; for ($i=0;$i<$count-1;$i+=1) {$root=$root."../";}
	
	require $root.'blocks/prereqs.php';
	require $root.'blocks/products_submenu.php';
?>

<div class="container">
	<div class="full">
		<h1>Spacecraft</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo auctor lorem varius sed ornare lacus porta. Vestibulum ut nunc sem. Duis condimentum tempor viverra. Donec aliquet consequat diam, blandit hendrerit eros faucibus non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis purus nulla, ut rutrum augue. Aenean ornare eleifend ligula, non venenatis ipsum luctus id. </p>
		<a href="./Escape">Escape Class</a>
		<a href="./Reconnaissance">Reconnaissance Class</a>
		<a href="./MPF">Multi Purpose Fighter Class</a>
		<a href="./SSF">Space Superiority Fighter Class</a>
		<a href="./Bomber">Bomber Class</a>
		<a href="./Storm">Storm Class</a>
		<a href="./Ghost">Ghost Class</a>
		<a href="./Gunship">Gunship Class</a>
		<a href="./Corvette">Corvette Class</a>
		<a href="./Frigate">Frigate Class</a>
		<a href="./Destroyer">Destroyer Class</a>
		<a href="./Cruiser">Cruiser Class</a>
		<a href="./Carrier">Carrier Class</a>
		<a href="./Support">Support Class</a>
		<a href="./FS">Fire Support Class</a>
		<a href="./Battleship">Battleship Class</a>
		
	</div>
</div>
		
<?php require $root.'blocks/footer.php'; ?>