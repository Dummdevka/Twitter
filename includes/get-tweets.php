<?php
include "config.php";
include "data.php";
$sql = "USE Twitter";
$pdo->exec($sql);
$select = "SELECT * FROM tweets WHERE id = 1";
$stmt = $pdo->exec($select);
print_r($stmt);
