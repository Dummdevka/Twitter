<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Submit</title>
</head>
<body>
<?php

// Show an error/success notification 

        if(isset ($_GET['success'])){
            ?>
            <small class="green">Successfully posted!</small>
            <?php
        } 
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if(preg_match('/empty/', $error)){
                ?>
                <small class="red">It seems like you have typed nothing :(</small>
                <?php
            }
        }
    ?>

    
    <form action="includes/post-tweet.php" method="post">
        <h1>Submit your Tweet!</h1>
        <textarea name="tweet" id="tweet" cols="30" rows="10" placeholder="Write your tweet here...">
        </textarea>
        <button type="submit" name="tweet-submit" class="btn btn-submit">Submit!</button>
    </form>
   <button type="button" class="btn btn-redirect" onclick="window.location='index.php?tweets=show'">See my twits</button>
</body>
</html>