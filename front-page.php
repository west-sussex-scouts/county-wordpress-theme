<html lang="en">
  <?php /* Template Name: Front Page */ ?>
  <?php require 'template-parts/head/head.php';?>
  <body>
    <?php if (get_option('facebook_handle')): ?>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
    <?php endif ?>
    <?php require 'template-parts/header/header.php';?>
    <div class="content container-flex">
      <div class="row top-banner">
        <img width="2048" height="945" src="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?>" class="img-fluid" alt="" srcset="<?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-2048.jpg'; ?> 2048w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-300.jpg'; ?> 300w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-768.jpg'; ?> 768w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1024.jpg'; ?> 1024w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-1000.jpg'; ?> 1000w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-500.jpg'; ?> 500w, <?php echo get_template_directory_uri() . '/assets/images/stock/2-scouts-canoeing-600.jpg'; ?> 600w" sizes="(max-width: 2048px) 100vw, 2048px">
        <div class="col-md-6 offset-md-1 bg-scouts-purple pt-2 pb-2 pl-4 pr-4 pt-md-5 pb-md-3 pl-md-5 pr-md-5" id="top-banner-overlay">
          <h2>Skills for Life</h2>
          <p>As Scouts, we believe in preparing young people with Skills for Life. We encourage young people to do more, learn more and be more. Each week, we help over 460,000 young people across the UK enjoy fun and adventure while developing the skills they need to succeed, now and in the future. </p>
          <div class="btn_row">
            <a href="/about-us" class="btn outline">Find out more</a>
            <a href="/join" class="btn white">Join today</a>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center pt-md-4">
        <div class="col-lg-9">
          <h1><?php echo get_bloginfo( 'name', 'raw' )?></h1>
          <?= get_post_field('post_content', $post->ID) ?>
        </div>
      </div>
    </div>
    <div class="container-flex">
      <div class="row quote-row bg-scouts-blue justify-content-md-center pt-lg-5 pb-lg-5">
        <div class="pb-sm-5 col-lg-6 col-sm-8 bg-scouts-blue">
          <h6><span>‘</span>Put your phone down and what are you left with? Just teamwork, courage and the skills to succeed.’</h6>
          <span class="author">Bear Grylls, Chief Scout</span>
        </div>
        <div class="col-lg-3 col-sm-4">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/bear_grylls.png'; ?>">
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
  </body>
</html>
