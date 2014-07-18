<?php 

	require '../blocks/db_connect.php';
	
	if ( isset($_GET['y']) == FALSE && isset($_GET['ID']) == FALSE ) {
	
	} elseif ( isset($_GET['y']) == FALSE ) {
		$archiveID = $_GET['ID'];
		$year = "all";
		$url= "Location: archive.php?y=" . $year . "&ID=" . $archiveID;
		header($url);
		exit;
	} elseif ( isset($_GET['ID']) == FALSE && $_GET['y'] != "all" ) {
		$year = $_GET['y'];
		$archive = mysql_fetch_array(mysql_query("SELECT ID FROM `news` WHERE YEAR(Date) = " . $year . " ORDER BY `news`.`Date` DESC LIMIT 1"));
		$archiveID = $archive['ID'];
		$url= "Location: archive.php?y=" . $year . "&ID=" . $archiveID;
		header($url);
		exit;
	} elseif ( isset($_GET['ID']) == FALSE && $_GET['y'] == "all" ) {
		$archive = mysql_fetch_array(mysql_query("SELECT ID FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1"));
		$archiveID = $archive['ID'];
		$year = $_GET['y'];
		$url= "Location: archive.php?y=" . $year . "&ID=" . $archiveID;
		header($url);
		exit;
	}
	
	if ( isset($_GET['y']) && $_GET['y'] != "all" ) {
		$YEAR = $_GET['y'];
		$query = "SELECT * FROM `news` WHERE YEAR(Date) = " . $YEAR . " ORDER BY `news`.`Date` DESC";
	} else {
		$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC";
	}

	$result = mysql_query($query);	
	
	require '../blocks/prereqs.php'; 
	
	require $root.'blocks/si_submenu.php'; 

?>

	<div class="container">
		<div class="left">
				<?php
					if ( isset($_GET['y']) && isset($_GET['ID']) ) {
						echo "<ul class=\"articles\">";
						echo "<li onclick=\"location.href='archive.php'\" style=\"cursor:pointer;\"><a>&larr; <span style=\"font-weight:normal;font-style:italic;\">Return to overview</span></a></li>";
						while($row = mysql_fetch_array($result)) {
							$ID = $row['ID'];
							echo "<li onclick=\"location.href='archive.php" . ( isset($_GET['y']) && $_GET['y'] != "all" ? "?y=" . $YEAR : "?y=all" ) . "&ID=" . $ID . "';\"  style=\"cursor:pointer;\"";
							if ( $_GET['ID'] == $ID) {echo "class=\"current\"";}
							echo ">" . $row['Date'] . "<a>" . $row['Title'] . "</a> (" . $row['Source_abbr'] . ")</li> \n					"; 
						}
						echo "</ul>";
					} else {
						echo "<h2>Archive</h2>";
						echo "<p>We take pride in what we do, therefore we have created an archive consisting of our most recent endeavours and our most importent moments throughout history.</p>";
						echo "<blockquote>\"Value the past, focus on today and thrive in the future.\"</blockquote>";
						echo "<p>- Robert Voogt<br><font size=0.8>Founder, CEO</font></p>";
					}
				?>				
		</div>
		<div class="right wide">
			<?php 
				if ( isset($_GET['y']) && isset($_GET['ID']) ) {
					$ID = $_GET['ID'];
					$queryArticle = "SELECT * FROM news WHERE ID='" . $ID . "'";
					$resultArticle = mysql_query($queryArticle);
					while($rowArticle = mysql_fetch_array($resultArticle))
					{
						echo "<article>";
						
						echo "<header><h2>" . $rowArticle['Title'] . "</h2></header>";
						echo "<p class=\"time\"><time datetime=\"" . $rowArticle['Date'] . "\" pubdate>" . $rowArticle['Date'] . "</time>, " . $rowArticle['Source'] . "</p>";
						echo "<img src=" . $root . "img/articles/" . $rowArticle['imgLocation'] . " width=\"100%\" >";
						echo "<p class=\"author\">By " . $rowArticle['Author'] . "</p>";
						$p = explode('&&', $rowArticle['Content']); 
						for ($i=0; $i<=count($p); $i++){echo "<p>".$p[$i]."</p>";}
						echo "</article>";
					}
					mysql_close($connect);
				} else {
					echo "<a href=\"archive.php?y=all\" style=\"margin-top:20px;border:0;\">Show all articles &rarr;</a>";
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
							$cell = "<td><a href=\"archive.php?y=" . $year . "\" class=\"hasArticle\">";
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
					echo "</table>";
				}
			?>
		</div>
	</div>
		
<?php require $root.'blocks/footer.php'; ?>