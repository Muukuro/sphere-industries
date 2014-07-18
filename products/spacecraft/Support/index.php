<?php
	$count = count(explode('/',dirname($_SERVER['PHP_SELF']))); $root = ""; for ($i=0;$i<$count-1;$i+=1) {$root=$root."../";}
	
	require $root.'blocks/prereqs.php';
	require $root.'blocks/products_submenu.php';
?>

<div class="container">
	<div class="full">
		<h1>Support Class</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque leo auctor lorem varius sed ornare lacus porta. Vestibulum ut nunc sem. Duis condimentum tempor viverra. Donec aliquet consequat diam, blandit hendrerit eros faucibus non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis purus nulla, ut rutrum augue. Aenean ornare eleifend ligula, non venenatis ipsum luctus id. </p>
		<!---><a href="./"></a><--->
	</div>
</div>
		
<?php require $root.'blocks/footer.php'; ?>