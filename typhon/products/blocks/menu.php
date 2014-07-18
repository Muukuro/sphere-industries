</head>

<body>
<div class="header">
	<div class="logo"><a href="http://www.sphere-industries.com/"><img src="http://www.sphere-industries.com/img/sphere_logosmall.png" width="350px" /></a></div>
</div>
<div class="body">
	<div class="mainmenu">
	<?
		$path = $_SERVER['PHP_SELF'];
		$page = basename($path);
		$page = basename($path, '.php');
	?>
	
		<ul>
			<li><a href="http://www.sphere-industries.com/" <? if($path == '/index.php'): ?> class="current" <? endif ?>>News</a></li>
			<li><a href="#">History</a></li>
			<li><a href="#">Products</a></li>
			<li><a href="http://www.sphere-industries.com/si/" <? if($path == '/si/index.php'): ?> class="current" <? endif ?>>Sphere Industries</a></li>
		</ul>
	</div>
	<div class="main">
