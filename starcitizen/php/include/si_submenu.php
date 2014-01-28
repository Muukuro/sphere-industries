		<div class="submenu">		
			<ul>
				<li <?php if($sub === null) { ?> class="current" <?php } ?>>	
                    <a href="/starcitizen/about">Sphere Industries</a>
                </li>
				<li <?php if($sub == 'whatwedo') { ?> class="current" <?php } ?>>	
                    <a href="/starcitizen/about/whatwedo">What We Do</a>
                </li>
				<li <?php if($sub == 'press' || $page == 'archive') { ?> class="current" <?php } ?>>	
                    <a href="/starcitizen/about/press">Press</a>
                </li>
				<li <?php if($sub == 'careers') { ?> class="current" <?php } ?>>	
                    <a href="/starcitizen/about/careers">Careers</a>
                </li>
				<li <?php if($sub == 'contact') { ?> class="current" <?php } ?>>
                    <a href="/starcitizen/about/contact">Contact</a>
                </li>
				<li <?php if($sub == 'media') { ?> class="current" <?php } ?>>	
                    <a href="/starcitizen/about/media">Media</a>
                </li>
			</ul>
		</div>