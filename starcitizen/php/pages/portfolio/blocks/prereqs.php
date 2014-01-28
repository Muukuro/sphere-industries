<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Event">
<?php 
	$baseLocation = dirname($_SERVER['PHP_SELF']); $array = explode('/',$baseLocation); $count = count($array); $root = "";
	for ( $i=1; $i<$count; $i+=1 ) { $root = $root . "../"; } 
	if ( $baseLocation == '/' ) { $root = ""; }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $root; ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $root; ?>css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $root; ?>img/favicon2.ico">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $root; ?>js/jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="<?php echo $root; ?>js/jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
<script src="<?php echo $root; ?>js/jquery.mousewheel.min.js"></script>
<script src="<?php echo $root; ?>js/jquery.mCustomScrollbar.js"></script>
<script src="<?php echo $root; ?>js/initCustomScrollbar.js"></script>
<script src="<?php echo $root; ?>js/scriptDumpStart.js"></script>

<title><?php
	$page = basename($_SERVER["PHP_SELF"]);
	$page = str_replace(".php","",$page);
	$page = ucwords($page);
	$base = "Sphere Industries :: ";
	if(dirname($_SERVER['PHP_SELF']) != '/'):
		$base = "SI :: ";
	endif;
	switch($page) {
		case "Index":
			if($array[1] == 'about'):
				$page = "About Us";
			elseif($array[1] == 'research'):
				$page = "Research";
			elseif($array[1] == 'history'):
				$page = "History";
			elseif($array[1] == 'products'):
				$page = ucwords($array[1]);
				for( $i = 2; $i < $count; $i += 1){
					$class = ''; if ( $i == 3 ) { $class = " Class"; }
					$page = ucwords($array[1]) . " > " . ucwords($array[$i]) . $class;
				}
			else:
				$base = "Sphere Industries";
				$page = "";
			endif;
			break;
		case "Whatwedo":
			$page = "What We Do";
			break;
		}
	$ptitle = $base . $page;
	echo $ptitle; ?></title>

</head>

<body>
<!--
<div id="crossA">
<div id="crossB">
<div id="crossC">

-- Also edits present in footer.php! --
-->

<div id="bg-container"></div>

<?php include $root.'blocks/topbar.php';?>
<div class="header">
	<div class="logo"><a href="http://www.sphere-industries.com/"><img src="<?php echo $root;?>img/sphere_logosmall.png" width="350px" /></a></div>
</div>
<div class="body">
	<div class="mainmenu">
		<div class="arrow"> </div>
		<div class="arrow2"> </div>
		<ul>
			<li><a href="http://www.sphere-industries.com/" <?php if($baseLocation == '/'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[1].playclip()">Home</a></li>
			<li><a href="http://www.sphere-industries.com/products" <?php if($array[1] == 'products'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[2].playclip()">Products</a></li>
			<li><a href="http://www.sphere-industries.com/research" <?php if($array[1] == 'research'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[3].playclip()">Research</a></li>
			<li><a href="http://www.sphere-industries.com/history" <?php if($array[1] == 'history'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[4].playclip()">History</a></li>
			<li><a href="http://www.sphere-industries.com/about" <?php if($array[1] == 'about'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[5].playclip()">About</a></li>
		</ul>
	</div>
	<div class="main">