<div class="header clearfix">
	<h3 class="text-muted">
		<i class="fa fa-twitter font-blue"></i> Tweets <small><?php echo $hashtag?></small>
	</h3>
</div>

<?php if( !empty( $tweets ) && is_array( $tweets ) ): ?>
<?php foreach( $tweets as $tweet ):?>
<div class="bubble row">
    <div class="col-lg-12 clearfix">
        <div class="tweet-wrap">
            <ul class="tweet-header">
                <li class="avatar"><img src="<?php echo $tweet->user->profile_image_url?>" alt="user" /></li>
                <li>
                    <?php if( !empty( $tweet->user->url ) ):?>
                    <strong><a href="<?php echo $tweet->user->url?>" target="_blank"><?php echo $tweet->user->name?></a></strong>
                    <?php else:?>
                    <strong><?php echo $tweet->user->name?></strong>
                    <?php endif;?>
                    <span class="username"><?php echo ' @' . $tweet->user->screen_name?></span>
                </li>
                <li class="time"><i class="fa fa-calendar"></i> <?php echo date( 'd M Y', strtotime($tweet->created_at))?></li>
                <?php if( !empty( $tweet->retweet_count ) ):?>
                <li class="retweets" title="Retweets"><i class="fa fa-retweet"></i> <?php echo $tweet->retweet_count?></li>
                <?php endif;?>
            </ul>
            <p class="tweet-text">
                <i class="fa fa-twitter twitter-icon"></i> <?php echo $tweet->text?>
            </p>
        </div>
    </div>
</div>
<br />
<?php endforeach;?>
<?php else:?>
<div class="alert alert-danger" role="alert"><?php echo $error?></div>
<?php endif;?>

<footer class="footer">
	<p>&copy; Company <?php echo date('Y')?></p>
</footer>