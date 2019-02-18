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
	
	$q =  mysql_query("SELECT `fio` FROM `autors` WHERE `aid`='$id'") or die(mysql_error());
	 
	 echo mysql_fetch_assoc($q)['fio'];
}

function setAutorName($id, $fio){ 	

	 $qw =  mysql_query("UPDATE `autors`  SET `fio` = '$fio' WHERE `aid`='$id'") or die(mysql_error());
	//echo $fio;
		getAutorName($id);
	
}

function getBook($bid){
	
	$q =  mysql_query("SELECT * FROM `books` WHERE `bid`='$bid'") or die(mysql_error());
	 
	$r = mysql_fetch_assoc($q);
	
	echo "<input class='form-control m-bot15' type='text' placeholder='Название книги' data-bookname=''>					
						<select class='form-control m-bot15' data-bookautor=''>
							<option>Выберите автора</option>
							getAutors($r[bid])
						</select>
						<input class='form-control m-bot15' id='number' type='number' placeholder='Цена' data-bookprice=''>";
	
}


if (isset($_GET["id"]))   getAutorName($_GET["id"]) ;  // read fio
elseif (isset($_GET["aid"])) setAutorName($_GET["aid"], $_GET['fio']); // write fio
elseif (isset($_GET['bid'])) getBook($_GET['bid']);
?>