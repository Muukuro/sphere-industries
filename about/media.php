<?php 
	
	require '../blocks/prereqs.php'; 
	

	require $root.'blocks/si_submenu.php';
	
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=187238481363182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">	
	<div class="left">
			<h1>Media</h1>
			<p>Here you can download wallpapers and much more</p>
			
			<h3>Wallpapers</h3>
			
			<h3>Windows Startbutton</h3>
			
			<blockquote>"People knowing your company is silver, people freely supporting your company is gold."</blockquote>
			<p>- Robert Voogt<br><font size=0.8>Founder, CEO</font></p>
	</div>
			
	<div class="right wide">
			<h2>Under Construction</h2>
	
	</div>

</div>
<?php require $root.'blocks/footer.php'; ?>