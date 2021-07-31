<?php
define("BASEDIR", __DIR__ . "/../");
// Connection data
$host = 'localhost';
$user = 'root';
$pass = '';

//Connection
$dsn = "mysql:host;" . $host ;

$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


