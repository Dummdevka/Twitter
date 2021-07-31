<?php
//Db connection
include 'config.php';
define("BASEURL", "Location:http://localhost/twitter/index.php");
//Checking whether there is something written
if(!strlen(trim($_POST['tweet']))){

    //Redirecting without saving the tweet

    header (BASEURL . "?tweets=submit&&error=empty");
} else{

    //Save the tweet 

    $tweet = $_POST['tweet'];
    $sql = "INSERT INTO tweets (tweet) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tweet]);

    //Redirecting with success
    
    header (BASEURL . "?tweets=submit&&success");
}