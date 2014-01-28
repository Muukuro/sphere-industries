		<div class="submenu">
		<?php
			$page = basename($_SERVER['PHP_SELF'], '.php');
		?>
		
			<ul>
				<li <?php if($page == 'index'): ?> class="current" <?php endif ?>>	<a href="../about/">Sphere Industries</a></li>
				<li <?php if($page == 'whatwedo'): ?> class="current" <?php endif ?>>	<a href="whatwedo.php">What We Do</a></li>
				<li <?php if($page == 'press' || $page == 'archive'): ?> class="current" <?php endif ?>>	<a href="press.php">Press</a></li>
				<li <?php if($page == 'careers'): ?> class="current" <?php endif ?>>	<a href="careers.php">Careers</a></li>
				<li <?php if($page == 'contact'): ?> class="current" <?php endif ?>>	<a href="contact.php">Contact</a></li>
				<li <?php if($page == 'media'): ?> class="current" <?php endif ?>>	<a href="media.php">Media</a></li>
			</ul>
		</div>