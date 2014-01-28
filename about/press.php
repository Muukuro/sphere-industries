<?php 
	
	require '../blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 5";

	
	$result = mysql_query($query);	
	
	require '../blocks/prereqs.php'; 
	
	require $root.'blocks/si_submenu.php';
	
?>

	<div class="container">
		<div class="left half">
			<h1>Press</h1>
				<p>Sphere Industries stands for a transparent relationship with its customers, therefore the companies public relations department has given the most valued and prominent news agencies around the galaxy total access to our research projects and engineering advancements. This creates a better understanding of what we do and what we have done.</p>
				<ul class="articles">
					<?php while($row = mysql_fetch_array($result))
						{
						$ID = $row['ID'];
						echo "<li onclick=\"location.href='press.php?ID=" . $ID . "';\"  style=\"cursor:pointer;\""; 
						if ( isset($_GET['ID']) && $_GET['ID'] == $ID ) {echo "class=\"current\"";}
						echo ">" . $row['Date'] . "<a>" . $row['Title'] . "</a> (" . $row['Source_abbr'] . ")</li> \n"; 
						}
					?>
				</ul>
				<a href=archive.php>View archive &rarr;</a>
		</div>
		<div class="right half">
			<?php 
				if ( isset($_GET['ID'])) {
					$ID = $_GET['ID'];
					$queryArticle = "SELECT * FROM news WHERE ID='" . $ID . "'";
					$resultArticle = mysql_query($queryArticle);
					while($rowArticle = mysql_fetch_array($resultArticle))
					{
						echo "<article>";
						echo "<header><h2>" . $rowArticle['Title'] . "</h2></header>";
						echo "<p class=\"time\"><time datetime=\"" . $rowArticle['Date'] . "\" pubdate>" . $rowArticle['Date'] . "</time>, " . $rowArticle['Source'] . "</p>";
						echo "<img src=" . $root . "img/articles/" . $rowArticle['imgLocation'] . " width=100% >";
						echo "<p class=\"author\">By " . $rowArticle['Author'] . "</p>";
						$p = explode('&&', $rowArticle['Content']); 
						for ($i=0; $i<=count($p); $i++){echo "<p>".$p[$i]."</p>";}
						echo "</article>";
					}
					mysql_close($connection);
				} else {
					echo "<blockquote>&quot;For a good relationship between the customer and the company, there must be absolute trust.&quot;</blockquote>	<p>- Robert Voogt<br><font size=0.8>Founder, CEO</font></p>";
				}
			?>
		</div>
	</div>
		
<?php require $root.'blocks/footer.php'; ?>