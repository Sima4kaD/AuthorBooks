<?php

// connect to DB

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bookshop";



$db=mysql_connect($db_host,$db_user,$db_pass) or die(mysql_error());
mysql_select_db($db_name,$db) or die (mysql_error());

 // connect to DB completed
function getAutorName($id){
	
	$q =  mysql_query("SELECT `fio` FROM autors WHERE `aid`='$id'") or die(mysql_error());
	 
	 return $r=mysql_fetch_assoc($q);
}

if (isset($_GET["id"])) { 
	$v = getAutorName($_GET["id"]);
	// Формируем массив для JSON ответа
    $result = array('name' => $v["id"]); 

    
    echo $v['fio']; 
}

?>