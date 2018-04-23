<?php 

$DBHOST = 'localhost';
$DBNAME = 'php';
$DBUSER = 'root';
$DBPASS = '';

// Variable de Menu Bandera



try
{
$pdo = new PDO("mysql:host=$DBHOST;dbname=$DBNAME",$DBUSER,$DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	echo $e->getMessage();
}

 ?>

 