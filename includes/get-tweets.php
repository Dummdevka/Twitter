<?php
//Db connection 
include_once 'config.php';
include_once 'dbCreate.php';

//Query to the Db
$select = "SELECT * FROM tweets";
$stmt = $pdo->prepare($select);
$response = $stmt->execute();

//Fetch the results

$res = $stmt->fetchAll();


