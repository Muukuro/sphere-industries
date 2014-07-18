		<div class="submenu">
		<?php
			$page = basename($_SERVER['PHP_SELF'], '.php');
		?>
		
			<ul class="crumb">
				<li <?php if($page == 'pindex'): ?> class="current" <?php endif ?>>	<a href="../products/">Products</a></li>
				<li <?php if($page == 'whatwedo'): ?> class="current" <?php endif ?>>	<a href="#">Spacecraft</a></li>
				<li <?php if($page == 'press'): ?> class="current" <?php endif ?>>	<a href="#">Scout Class</a></li>
				<li <?php if($page == 'index'): ?> class="current" <?php endif ?>>	<a href="../products/">Amon</a></li>
			</ul>
		</div>