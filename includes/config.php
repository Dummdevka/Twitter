<?php

$host = 'localhost';
$user = 'root';
$pass = '';
//$dbname = 'mytwitter';

$dsn = "mysql:host;" . $host;

$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function dbCall($pdo, $sql){
    $dbh = $pdo->exec($sql) 
    or die (print_r($pdo->errorInfo(), true));
};

$schema = file_get_contents("../data/schema.sql");
$db = file_get_contents ("../data/database.sql");


dbCall($pdo, $schema);
dbCall($pdo, $schema);