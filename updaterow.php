<?php
if(array_key_exists("id", $_REQUEST)){
	$conn = mysql_connect("localhost","veloxitis") or die('impossibile connettersi : ' . mysql_error());
	$db = mysql_select_db("my_veloxitis") or die('impossibile connettersi al database : ' . mysql_error());
	$str_sql = "update vi_speed set detected=1 where id = {$_REQUEST['id']}";
	$ris = mysql_query($str_sql, $conn);
	if(! $ris )
	{
		die('errore query: ' . mysql_error());
	}	
}
header('Content-Type: application/json');
echo json_encode("");
	
	
	
