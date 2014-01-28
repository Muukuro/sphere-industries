		<div class="submenu">
			<ul class="crumb">
				<?php 
					for ( $i = 1; $i < $count; $i += 1 ) {
						if($i == $count - 1) {$current = " class=\"current\"";} else {$current = "";}
						echo "<li" . $current . "><a href=\"" . $root;
						$url = ""; $class = ""; if ( $i == 3 ) { $class = " Class"; }
						for ( $j = 1; $j <= $i; $j += 1 ) { $url = $url . $array[$j] . "/"; } echo $url . "\">";
						echo ucfirst($array[$i]) . $class . "</a></li>";
					} 
				?>
			</ul>
		</div>