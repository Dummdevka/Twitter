<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    
    <title>My tweets</title>
</head>
<body>
   <?php
    require "./includes/get-tweets.php";
    if(empty($res)){
        ?>
        <small class="primary">No tweets to show!</small>
        <?php
    } else{
        foreach($res as $tweet){
            ?>
            <div class="singleTweet"><p class="primary"><?php echo $tweet['tweet'] ?></p> <div class="left"><p class="grey"><?php echo $tweet['time'] ?></p> <button type="button" class=" btn btn-delete" value="<?php echo $tweet['id'] ?>" onclick="window.location='includes/delete-tweet.php'">Delete</button></div></div>
            <?php
        }
    }
   ?>
</body>
</html>