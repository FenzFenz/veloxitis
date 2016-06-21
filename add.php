<?php
 	

if(array_key_exists("t1", $_REQUEST)){
   $t1 = $_REQUEST["t1"];
   echo "ok";

}
else {echo "no1";}
if(array_key_exists("t2", $_REQUEST)){
   $t2 = $_REQUEST["t2"];
   echo "ok1";

}




$conn = mysql_connect("localhost","veloxitis") or die('impossibile connettersi : ' . mysql_error());


$db = mysql_select_db("my_veloxitis") or die('impossibile connettersi al database : ' . mysql_error());







$str_sql = "INSERT INTO vi_speed(time_1,time_2) VALUES('$t1','$t2')";

$ris = mysql_query($str_sql, $conn);

if(! $ris )
{
	die('Could not insert: ' . mysql_error());
}


?>
