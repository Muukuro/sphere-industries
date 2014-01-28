<?php 

	require '../blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC";

	$result = mysql_query($query);	
	
	require '../blocks/prereqs.php'; 
	
	require 'blocks/submenu.php'; 
		
?>

	<div class="container">
		<div class="left">
				<h2>Archive</h2>
				<p>We take pride in what we do, therefore we have created an archive consisting of our most recent endeavours and our most importent moments throughout history.</p>
				<blockquote>"Value the past, focus on today and thrive in the future."</blockquote>
				<p>- Robert Voogt<br><font size=0.8>Founder, CEO</font></p>					
		</div>
		<div class="right wide">
			<?php 
				echo "<a href=\"archive2.php?y=all\" style=\"margin-top:20px;border:0;\">Show all articles</a>";
				echo "<table class=\"years\" border=\"0\">";
								
				$start = 2686; $current = 2942;
				
				$year = $current;
				$check = FALSE;
				
				$result = mysql_query("SELECT Date FROM news");
				$index = 0;
				while ($dateArray = mysql_fetch_array($result)) {
					$yearArray[$index] = date('Y', strtotime($dateArray[0]));
					$index += 1;
				}
				
				$cellEnd = "</a></td> ";
				
				for ( $i = 0; $i <= $current - $start; $i += 1 ) {
					if ( in_array($year, $yearArray) && $check == TRUE ) {
						$cell = "<td><a href=\"archive2.php?y=" . $year . "\" class=\"hasArticle\">";
					} else {
						$cell = "<td><a href=\"https://www.robertsspaceindustries.com\">";
					}
					if ( $year == $current && $check == FALSE ) {
						$check = TRUE;
						$year = $year - ($current % 10) + 1 ;
						echo "<tr>" . $cell . $year . $cellEnd;
						$year += 1;
					} elseif ( $year == $current && $check == TRUE ) {
						echo $cell . $year . $cellEnd;
						echo "</tr><tr>";
						$year -= $current % 10 + 9;						
					} elseif ( $year % 10 == 0 ) {
						if ( $year - $start < 20 && $year - $start > 10 ) {
							echo $cell . $year . "</a></td> ";
							echo "</tr><tr>";
							$laststep = 10 - ($start % 10);
							for ( $k = 0; $k <= $laststep; $k += 1 ) {
								echo "<td>&nbsp;</td>";
							}
							$year -= $laststep + 10;
						} else {
							echo $cell . $year . "</a></td> ";
							echo "</tr><tr>";
							$year -= 19;
						}
					} else {
						echo $cell . $year . $cellEnd;
						$year += 1;
					}
				}
				echo "</table>"
			?>
		</div>
	</div>
		
<?php require '../blocks/footer.php'; ?>