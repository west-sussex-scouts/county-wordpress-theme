<html lang="en">
  <?php /* Template Name: Front Page */ ?>
  <?php require 'template-parts/head/head.php';?>
  <body>
    <?php if (get_option('facebook_handle')): ?>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
    <?php endif ?>
    <?php require 'template-parts/header/header.php';?>
    <div class="content container">
      <div class="row">
        <div class="col-md">
          <h1><?php echo get_bloginfo( 'name', 'raw' )?></h1>
          <?= get_post_field('post_content', $post->ID) ?>
        </div>
        <div class="col-3">
        <?php require 'template-parts/social_bar/social_bar.php';?>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <?php get_footer(); ?>
        </div>
      </div>
    </div>
  </body>
</html>
