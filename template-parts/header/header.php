<div id="header_container">
  <div id="header_content">
      <div id="header_logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();}?>
      </div>
      <div id="header_menu">
        <?php wp_nav_menu(
              array(
                  'theme_location' => 'header-menu',
                  'container_class' => 'header-menu'
                  )
        );?>
      </div>
  </div>
</div>
