<?php 
	require '../blocks/prereqs.php'; 
	
	require $root.'blocks/db_connect.php';
	$query = "SELECT * FROM `news` WHERE isNews = 1 ORDER BY `news`.`Date` DESC";
	$result = mysql_query($query);
	
	$queryYears = "SELECT Date FROM `news` WHERE isNews = 1 ORDER BY `news`.`Date` DESC";
	$resultYears = mysql_query($queryYears);
	
	require $root.'blocks/history.php';
	
?>

	<div class="container">
		
		<div class="full nopadding">
			<h1>History</h1>
			<?php
				echo "<ol id=\"history\" style=\"height:" . $histHeight . "px;\">\n";
				while($row = mysql_fetch_array($result)) {
					$j++;
					echo "<!-- ".$dotPos[$j]." --><li style=\"top: ". $top[$j] . "px;\"><span class=\"corner\" style=\"margin-top:" . $topMargin[$j] . "px;\"></span>";
					echo "<h2>" . substr($row['Date'],0,4) . ": " . $row['Title'] . "</h2>";
					$p = explode('&&', $row['Content']);
					echo "<img src=" . $root . "img/articles/" . $rowArticle['imgLocation'] . " width=100% >";
					if (strlen($p[0])==0){echo "<p>";} else {echo "<p>". substr($p[0],0,160);} if (strlen($p[0])>150){echo "...";};
					echo " <a href=\"". $root . "about/archive.php?y=all&ID=" . $row['ID'] . "\">Read more</a></p>";
					echo "</li>\n";					
				}
				echo "</ol>";
			?>
		</div>
	</div>

<?php require '../blocks/footer.php'; ?>