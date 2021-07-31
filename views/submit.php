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
    <form action="index.php?page=submit" method="post">
        <h1>Submit your Tweet!</h1>
        <textarea name="tweet" id="tweet" cols="30" rows="10" placeholder="Write your tweet here..."></textarea><!-- No spaces between the open and close on textboxes! -->
        <button type="submit" name="tweet-submit" class="btn btn-submit">Submit!</button>
    </form>
    <button type="button" class="btn btn-redirect" onclick="window.location='index.php?tweets=view'">See my tweets</button>
