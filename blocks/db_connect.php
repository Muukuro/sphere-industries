<? $connect = mysql_connect("localhost", "sphereindu_query", "southpark");

	if (!$connect) {
		die('Could not connect: ' . mysql_error());
	} 

	mysql_select_db("sphereindu_articles", $connect); ?>