<?php
$conn = mysql_connect("localhost","veloxitis") or die('impossibile connettersi : ' . mysql_error());


$db = mysql_select_db("my_veloxitis") or die('impossibile connettersi al database : ' . mysql_error());

$str_sql = "SELECT time_1, time_2 FROM vi_speed WHERE detected=0";

$ris = mysql_query($str_sql, $conn);

if(! $ris )
{
	die('errore query: ' . mysql_error());
	
	
}

/*Inizializzo array vuoto*/
$velox = array();

while($riga = mysql_fetch_array($ris)){
	
// 	$temp_1 = $riga['time_1']/1000;
// 	$temp_2 = $riga['time_2']/1000;
// 	$t_speed = (10/ ($temp_2-$temp_1))/100;
	$diff = $riga['time_2']-$riga['time_1'];
		
	$t_speed = ((1/100) / ($diff/1000));
	/*Questo e` quello che hai scritto tu*/
	//$velox = array ($t_speed =>"km");
	
	/*Andrebbe fatto cosi*/
	$velox[] = array("speed"=>$t_speed, "speed_unit" => "m/s");
	
}

header('Content-Type: application/json');
echo json_encode($velox);
	
	
	
