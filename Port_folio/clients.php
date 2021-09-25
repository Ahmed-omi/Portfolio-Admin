<?php

$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'narbonne12';
$db_name     = 'pseudo';

try{
	$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
	$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sth = $dataBaseConection->prepare($sql);
	$sth->execute();
	$clients = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
	echo "Erreur : " . $e->getMessage();
}


?>
