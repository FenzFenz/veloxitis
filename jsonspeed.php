<?php
/*Inizializzo array vuoto*/
$velox = array("id"=>0,"speed"=>0, "time_1"=>0, "time_2"=>0);

if(array_key_exists("last_id", $_REQUEST)){
	$conn = mysql_connect("localhost","veloxitis") or die('impossibile connettersi : ' . mysql_error());
	$db = mysql_select_db("my_veloxitis") or die('impossibile connettersi al database : ' . mysql_error());
	$str_sql = "SELECT * FROM vi_speed WHERE id > {$_REQUEST['last_id']} order by id desc limit 1";
	$ris = mysql_query($str_sql, $conn);
	
	if(! $ris ){die('errore query: ' . mysql_error());	}
	
	while($riga = mysql_fetch_array($ris)){
		$date = new DateTime($riga['data_inserimento']);
		$velox = array("id"=>$riga['id'],"speed"=>$riga['speed'], "time_1"=>$riga['time_1'], "time_2"=>$riga['time_2'], "date"=>$date->format('d-m-Y H:i:s'));
	}
}

header('Content-Type: application/json');
echo json_encode($velox);
	
	
	
