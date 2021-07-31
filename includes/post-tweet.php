<?php
//Db connection
include 'config.php';

//Checking whether there is something written
if(!strlen(trim($_POST['tweet']))){

    //Redirecting without saving the tweet

    header ("Location:http://localhost/twitter/submit.php?error=empty");
} else{

    //Save the tweet 

    $tweet = $_POST['tweet'];
    $sql = "INSERT INTO tweets (tweet) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tweet]);

    //Redirecting with success
    
    header ("Location:http://localhost/twitter/submit.php?success");
}