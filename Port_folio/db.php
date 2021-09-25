<?php
$dsn = 'mysql:host=localhost;dbname=pseudo';
$username = 'root';
$password = 'narbonne12';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
echo $e->getMessage();
}
?>
