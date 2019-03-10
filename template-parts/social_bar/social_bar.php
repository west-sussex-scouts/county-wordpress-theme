<h3>Find us on Social Media!</h3>
<ul class="nav nav-tabs">
    <?php if (get_option('twitter_handle')): ?><li class="active"><a data-toggle="tab" href="#twitter_feed">Twitter</a></li><?php endif ?>
    <?php if (get_option('facebook_handle')): ?><li><a data-toggle="tab" href="#facebook_feed">Facebook</a></li><?php endif ?>
</ul>
<div class="tab-content">
  <div id="twitter_feed" class="tab-pane fade in active">
  <?php if (get_option('twitter_handle')): ?><a class="twitter-timeline" data-dnt="true" data-link-color="#7413dc" data-tweet-limit="3" data-chrome="nofooter" href="https://twitter.com/<?php echo get_option('twitter_handle')?>?ref_src=twsrc%5Etfw">Tweets by <?php echo get_option('twitter_handle')?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><?php endif ?>
  </div>
  <div id="facebook_feed" class="tab-pane fade">
  <?php if (get_option('facebook_handle')): ?>
    <div class="fb-page" data-href="<?php echo get_option('facebook_handle')?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="<?php echo get_option('facebook_handle')?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_option('facebook_handle')?>">Facebook</a></blockquote></div>
  <?php endif ?>
  </div>
</div>
<!-- <?php if (get_option('twitter_handle')): ?><a class="twitter-timeline" data-dnt="true" data-link-color="#7413dc" data-tweet-limit="5" href="https://twitter.com/<?php echo get_option('twitter_handle')?>?ref_src=twsrc%5Etfw">Tweets by <?php echo get_option('twitter_handle')?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><?php endif ?> -->
