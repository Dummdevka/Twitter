<?php
//Db connection
include_once 'config.php';
include_once 'dbCreate.php';
define("BASEURL", "Location:http://localhost/twitter/index.php");
//Checking whether there is something written
if(!strlen(trim($_POST['tweet']))){

    //Redirecting without saving the tweet

    header (BASEURL . "?tweets=submit&&error=empty");
} else{

    //Save the tweet 


    //Redirecting with success

    header (BASEURL . "?tweets=submit&&success");
}