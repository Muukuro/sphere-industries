<?php 
	
	if ( isset($_GET['y']) == FALSE && isset($_GET['ID']) == FALSE ) {
	
	} else if ( isset($_GET['y']) == FALSE ) {
		$archiveID = $_GET['ID'];
		$year = "all";
		$url = "Location: archive?y=" . $year . "&ID=" . $archiveID;
		header($url);
		exit;
	} else if ( isset($_GET['ID']) == FALSE && $_GET['y'] != "all" ) {
		$year = $_GET['y'];
		$archive = mysql_fetch_array(mysql_query("SELECT ID FROM `news` WHERE YEAR(Date) = " . $year . " ORDER BY `news`.`Date` DESC LIMIT 1"));
		$archiveID = $archive['ID'];
		$url = "Location: archive?y=" . $year . "&ID=" . $archiveID;
		header($url);
		exit;
	} else if ( isset($_GET['ID']) == FALSE && $_GET['y'] == "all" ) {
		$archive = mysql_fetch_array(mysql_query("SELECT ID FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1"));
		$archiveID = $archive['ID'];
		$year = $_GET['y'];
		$url = "Location: archive?y=" . $year . "&ID=" . $archiveID;
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
	
?>

	<div class="container">
		<div class="left">
				<?php
					if ( isset($_GET['y']) && isset($_GET['ID']) ) { ?>
						<ul class="articles">
						<li onclick="location.href='archive'" style="cursor:pointer;"><a>&larr; <span style="font-weight:normal;font-style:italic;">Return to overview</span></a></li>
						<?php while($row = mysql_fetch_array($result)) {
							$ID = $row['ID'];
							echo "<li onclick=\"location.href='archive" . ( isset($_GET['y']) && $_GET['y'] != "all" ? "?y=" . $YEAR : "?y=all" ) . "&ID=" . $ID . "';\"  style=\"cursor:pointer;\"";
							if ( $_GET['ID'] == $ID) {echo "class=\"current\"";}
							echo ">" . $row['Date'] . "<a>" . $row['Title'] . "</a> (" . $row['Source_abbr'] . ")</li> \n					"; 
						} ?>
						</ul>
					<?php } else { ?>
						<h2>Archive</h2>
						<p>We take pride in what we do, therefore we have created an archive consisting of our most recent endeavours and our most importent moments throughout history.</p>
						<blockquote>"Value the past, focus on today and thrive in the future."</blockquote>
						<p>- Robert Voogt<br><font size=0.8>Founder, CEO</font></p>
					<?php }
				?>				
		</div>
		<div class="right wide">
			<?php 
				if ( isset($_GET['y']) && isset($_GET['ID']) ) {
					$ID = $_GET['ID'];
					$queryArticle = "SELECT * FROM news WHERE ID='" . $ID . "'";
					$resultArticle = mysql_query($queryArticle);
					while($rowArticle = mysql_fetch_array($resultArticle)) { 
                    ?>
						<article>                            
                            <header><h2><?= $rowArticle['Title']; ?></h2></header>
                            <p class="time"><time datetime="<?= $rowArticle['Date']; ?>" pubdate><?= $rowArticle['Date']; ?></time> <?= $rowArticle['Source']; ?></p>
                            <?php if ($rowArticle['imgLocation'] != '') { ?>
                                <img src="/starcitizen/assets/img/articles/<?= $rowArticle['imgLocation']; ?>" width="100%" />
                            <?php } ?>
                            <p class="author">By <?= $rowArticle['Author']; ?></p>
                            <?php $paragraph = explode('&&', $rowArticle['Content']); 
                            foreach ($paragraph as $p) { ?>
                                <p><?= $p ;?></p>
                            <?php } ?>
						</article>
					<?php }
				} else { ?>
					<a href="archive?y=all" style="margin-top:20px;border:0;">Show all articles &rarr;</a>
					<table class="years" border="0">
                    
                    <?php
								
					$start = 2686; $current = 2942;
				
					$year = $current;
					$check = FALSE;
                    
                    $sql = "SELECT * FROM news";
					$query = mysql_query($sql) or die(mysql_error());
                    while ($row = mysql_fetch_assoc($query)) {
                        $yearArray[] = substr(($row['Date']),0,4);
                    }
				
					$cellEnd = "</a></td> ";
					
					for ( $i = 0; $i <= $current - $start; $i += 1 ) {
						if ( in_array($year, $yearArray) && $check == TRUE ) {
							$cell = "<td><a href=\"archive?y=" . $year . "\" class=\"hasArticle\">";
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