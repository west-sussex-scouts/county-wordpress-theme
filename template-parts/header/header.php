<div id="header_container">
  <div id="header_content">
    <?php if(function_exists('the_custom_logo')): ?>
    <div id="header_logo">
      <span class="helper"></span>
      <?php the_custom_logo() ?>
    </div>
    <?php endif ?>
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
