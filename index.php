<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Twitter</title>
</head>
<body>
    <?php
        define("URL", "http://localhost/twitter/pages/");

        if(isset($_GET['tweets']) ){
            if($_GET['tweets']=="submit"){
                
                require "pages/submit.php";
            }
            if($_GET['tweets']=="show"){
                
                require "pages/tweets.php";
            }
        } else{
            
            require "pages/submit.php";
        }
        

        
    ?>
</body>
</html>