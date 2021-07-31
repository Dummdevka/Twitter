
<?php if( empty($tweets) ) { ?>
    <small class="primary">No tweets to show!</small>
<?php } else { ?>
    <? foreach( $tweets as $tweet ){ ?>
        <div class="singleTweet">
            <p class="primary"><?php echo $tweet['tweet'] ?></p>
            <div class="left">
                <p class="grey"><?php echo $tweet['time'] ?></p>
                <button type="button" class=" btn btn-delete" value="<?php echo $tweet['id'] ?>" onclick="window.location='includes/delete-tweet.php'">Delete</button>
            </div>
        </div>
    <?php }
}
