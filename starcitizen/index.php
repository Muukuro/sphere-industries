<?php    
    
    /*require '../blocks/db_connect.php';
	
	$query = "SELECT * FROM `news` ORDER BY `news`.`Date` DESC LIMIT 1";

	$result = mysql_query($query);*/
    
    //var_dump($_GET);
    
    if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    
        $connect = mysql_connect("sphere-industries.com:3306", "sphereindu_query", "southpark");
    
    } else {
    
        $connect = mysql_connect("localhost", "sphereindu_query", "southpark");
    
    }

	if (!$connect) {
		die('Could not connect: ' . mysql_error());
	} 

	mysql_select_db("sphereindu_articles", $connect);

	require_once 'php/include/template.php';
    
?>