<header id="home" class="header" itemtype="http://schema.org/WPHeader" style="min-height: 90px;">
  <nav class="navbar navbar-expand-md navbar-light" id="main-nav"  style="min-height: 90px;">
    <div class="container">
      <a class="navbar-brand" href="/">
            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' )?>">
      </a><!-- /.navbar-brand -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => false,
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'navbar-nav mr-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
    </div>
  </nav>
</header>
