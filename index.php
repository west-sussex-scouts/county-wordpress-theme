<html lang="en">
  <?php /* Template Name: Default Template */ ?>
  <?php require 'template-parts/head/head.php';?>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php require 'template-parts/header/header.php';?>
        </div>
      </div>
      <div class="row">
        <div id="page_container">
          <div id="page_content">
            <?php
              if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content/content', 'single' );
              endwhile;
              else:
                get_template_part( 'template-parts/content/content', 'single' );
              endif;
              ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <?php get_footer(); ?>
        </div>
      </div>
    </div>
  </body>
</html>
