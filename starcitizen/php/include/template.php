<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Event">
<?php 
	$baseLocation = dirname($_SERVER['PHP_SELF']); $array = explode('/',$baseLocation); $count = count($array); $root = "";
	for ( $i=1; $i<$count; $i+=1 ) { $root = $root . "../"; } 
	if ( $baseLocation == '/' ) { $root = ""; }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/starcitizen/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
<link href="/starcitizen/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/starcitizen/assets/img/favicon2.ico">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="/starcitizen/assets/js/jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="/starcitizen/assets/js/jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
<script src="/starcitizen/assets/js/jquery.mousewheel.min.js"></script>
<script src="/starcitizen/assets/js/jquery.mCustomScrollbar.js"></script>
<script src="/starcitizen/assets/js/initCustomScrollbar.js"></script>
<script src="/starcitizen/assets/js/scriptDumpStart.js"></script>

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

<ul class="topbar">
    <li><a href="/starcitizen/">Sphere Industries</a></li>
    <li><a href="http://typhon.sphere-industries.com">Typhon</a></li>
    <li><a href="http://paradigm.sphere-industries.com">Paradigm</a></li>
    <li><a href="/portfolio/">Portfolio</a></li>
    <script></script>
    <!--<script src="/starcitizen/assets/js/toggleSound.js"></script>-->
    <li id="sound-toggle"><img id="toggle" name="toggle" src="/starcitizen/assets/img/icons/s_<?= (isset($_SESSION['toggle']) && $_SESSION["toggle"] == 1) ? 'on' : 'off'; ?>.png"/></li>
</ul> 
<div class="header">
	<div class="logo"><a href="/starcitizen/"><img src="/starcitizen/assets/img/sphere_logosmall.png" width="350px" /></a></div>
</div>
<div class="body">
	<div class="mainmenu">
		<div class="arrow"> </div>
		<div class="arrow2"> </div>
		<ul>
			<li><a href="/starcitizen/" <?php if($baseLocation == '/'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[1].playclip()">Home</a></li>
			<li><a href="/starcitizen/products" <?php if($array[1] == 'products'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[2].playclip()">Products</a></li>
			<li><a href="/starcitizen/research" <?php if($array[1] == 'research'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[3].playclip()">Research</a></li>
			<li><a href="/starcitizen/history" <?php if($array[1] == 'history'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[4].playclip()">History</a></li>
			<li><a href="/starcitizen/about" <?php if($array[1] == 'about'): ?> class="current" <?php endif ?> onmouseover="mouseoversound[5].playclip()">About</a></li>
		</ul>
	</div>
	<div class="main">
    
    <?php
    $url = isset($_GET['url']) && $_GET['url'] != ''  ? trim($_GET['url']) : null;
    $sub = isset($_GET['sub']) && $_GET['sub'] != '' ? trim($_GET['sub']) : null;
    
    if ($url == 'about') {
        include_once 'php/include/si_submenu.php';
    }
    
    $_404 = false;
       
    do {
    
        if (!isset($url)) {
            include_once 'php/pages/index.php';
            break;
        } 
        if (!file_exists('php/pages/' . $url . '/index.php')) {
            //$_404 = true;
            break;
        } 
        if (!isset($sub)) {
            include_once 'php/pages/' . $url . '/index.php';
            break;
        }
        if (!file_exists('php/pages/' . $url . '/' . $sub . '.php')) {
        print_r('php/pages/' . $url . '/' . $sub . '.php');
            //$_404 = true;
            break;
        }
        include_once 'php/pages/' . $url . '/' . $sub . '.php';
    
    } while (0);

	if($_404 === true)
	{
		header('HTTP/1.0 404 Not Found');
		exit(header('Location: /404.html'));
	}
    
    ?>
    
    <!---
    
    
    CONTENT
    
    
    
    --->
    
    		<div class="footer"><p style="float: left;">&copy; 2943 Sphere Industries | <a href="/php/pages/about/contact.php">Contact</a></p><p class="slogan">"The future here today."</p></div>
	</div> <!-- .main -->
</div> <!-- .body -->

<!--</div>  #bg-container -->

<!-- 
</div> <!-- #crossC 
</div> <!-- #crossB 
</div> <!-- #crossA 
-->

<script src="/starcitizen/assets/js/scriptDumpEnd.js"></script>

</body>
</html>
    
    
    
    
    
    