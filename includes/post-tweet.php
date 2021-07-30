<?php
include 'config.php';

if(!strlen(trim($_POST['tweet']))){
    header ("Location:http://localhost/twitter/submit.php?error=empty");
} else{
    $tweet = $_POST['tweet'];
    $sql = "INSERT INTO tweets (tweet) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tweet]);
    header ("Location:http://localhost/twitter/submit.php?success");
}