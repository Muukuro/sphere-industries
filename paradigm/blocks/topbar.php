<ul class="topbar">
		<li><a href="http://www.sphere-industries.com">Sphere Industries</a></li>
		<li><a href="http://typhon.sphere-industries.com">Typhon</a></li>
		<li><a href="http://paradigm.sphere-industries.com">Paradigm</a></li>
		<script></script>
		<script src="<?php echo $root; ?>js/toggleSound.js"></script>
		<li id="sound-toggle"><img id="toggle" name="toggle" src="<?php echo $root; ?>img/icons/s_<?php if ($_COOKIE["toggle"]==1){echo "on";}else{echo"off";}?>.png" onclick="toggleSound();"/></li>
</ul> 