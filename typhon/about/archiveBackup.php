<?php 

	require '../blocks/db_connect.php';
	
	if ( isset($_GET['ID']) == FALSE ) {
	$archive = mysql_fetch_array(mysql_query("SELECT ID FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1"));
	$archiveID = $archive['ID'];
	$url= "Location: archive.php?ID=" . $archiveID;
	header($url);
	exit;}
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC";

	$result = mysql_query($query);	
	
	require '../blocks/prereqs.php'; 
	
	require 'blocks/submenu.php'; 
		
?>

	<div class="container">
		<div class="left">
				<ul class="articles">
					<?php while($row = mysql_fetch_array($result))
						{
						$ID = $row['ID'];
						echo "<li onclick=\"location.href='archive.php?ID=" . $ID . "';\"  style=\"cursor:pointer;\""; 
						if ( $_GET['ID'] == $ID) {echo "class=\"current\"";}
						echo ">" . $row['Date'] . "<a>" . $row['Title'] . "</a> (" . $row['Source_abbr'] . ")</li> \n					"; 
						}
					?></ul>
		</div>
		<div class="right wide">
			<?php 
				$ID = $_GET['ID'];
				$YEAR = $_GET['Y'];
				if ( isset($_GET['ID']) && isset($GET['Y']) ) {
					$queryArticle = "SELECT * FROM news WHERE ID='" . $ID . "'";
					$resultArticle = mysql_query($queryArticle);
					while($rowArticle = mysql_fetch_array($resultArticle))
					{
						echo "<article>";
						echo "<header><h2>" . $rowArticle['Title'] . "</h2></header>";
						echo "<p class=\"time\"><time datetime=\"" . $rowArticle['Date'] . "\" pubdate>" . $rowArticle['Date'] . "</time>, " . $rowArticle['Source'] . "</p>";
						echo "<p class=\"author\">By " . $rowArticle['Author'] . "</p>";
						echo $rowArticle['Content'];
						echo "</article>";
					}
					mysql_close($connection);
				} elseif ( isset($_GET['ID'])) {
					$queryArticle = "SELECT * FROM news WHERE ID='" . $ID . "'";
					$resultArticle = mysql_query($queryArticle);
					while($rowArticle = mysql_fetch_array($resultArticle))
					{
						echo "<article>";
						echo "<header><h2>" . $rowArticle['Title'] . "</h2></header>";
						echo "<p class=\"time\"><time datetime=\"" . $rowArticle['Date'] . "\" pubdate>" . $rowArticle['Date'] . "</time>, " . $rowArticle['Source'] . "</p>";
						echo "<p class=\"author\">By " . $rowArticle['Author'] . "</p>";
						echo $rowArticle['Content'];
						echo "</article>";
					}
					mysql_close($connection);
				} else {
					
				}
			?>
		</div>
	</div>
		
<?php require '../blocks/footer.php'; ?>