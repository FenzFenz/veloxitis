<?php
//Recupero tempo sensore uno
if(array_key_exists("t1", $_REQUEST)){
   $t1 = $_REQUEST["t1"];
}
//Recupero tempo sensore 2
if(array_key_exists("t2", $_REQUEST)){
   $t2 = $_REQUEST["t2"];
}
//Se abbiamo i due tempi allora possiamo salvarli nel database
if($t1 && $t2){
	//Apriamo la connessione al db
	$conn = mysql_connect("localhost","veloxitis") or die('impossibile connettersi : ' . mysql_error());
	//Selezioniamo il database
	$db = mysql_select_db("my_veloxitis") or die('impossibile connettersi al database : ' . mysql_error());
	//Calcoliamo la velocit&agrave; in Km/h
	$diff = $t2-$t1;
	$t_speed = 0.0001 / (($diff/1000)/60/60);
	$t_speed = round($t_speed, 2);
	
	//Prepariamo la query per l`inserimento
	$str_sql = "INSERT INTO vi_speed(time_1,time_2,speed) VALUES('$t1','$t2',$t_speed)";
	
	$ris = mysql_query($str_sql, $conn);
	
	if(! $ris ){ die('Could not insert: ' . mysql_error());}	
}else{
	die("Dati incompleti.");
}

?>
