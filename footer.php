<footer id="footer" class="pt-2" itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="row">
      <?php
        $menu_name = 'footer-menu';
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuID = $menuLocations[$menu_name];
        $menu_items = wp_get_nav_menu_items($menuID);
        foreach( $menu_items as $menu_item ) {
          if( $menu_item->menu_item_parent == 0 ) {
            $parent = $menu_item->ID;
            $menu_array = array();
            foreach( $menu_items as $submenu ) {
              if( $submenu->menu_item_parent == $parent ) {
                $bool = true;
                if (count($menu_array) < 8){
                  $menu_array[] = '<li><a href="' . htmlspecialchars($submenu->url) . '">' . htmlspecialchars($submenu->title) . '</a></li>' ."\n";
                }
              }
            }
            if( $bool == true && count( $menu_array ) > 0 ) {
            $menu_list[] = [
              "name" => htmlspecialchars($menu_item->title),
              "content" => '<ul>' ."\n".implode( "\n", $menu_array ).'</ul>' ."\n"
            ];
            }
          }
        }
        ?>
      <div class="col col-6 col-md-3 scouts-purple footer-box pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
        <h6><?php echo $menu_list[0]['name'] ?></h6>
        <?php echo $menu_list[0]['content'] ?>
        <!-- <a href="https://www.scouts.org.uk/" class="footer-link"><p>Official Scouts Website</p></a> -->
      </div>
      <div class="col col-6 col-md-3 scouts-blue footer-box pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
      <h6><?php echo $menu_list[1]['name'] ?></h6>
        <?php echo $menu_list[1]['content'] ?>
        <!-- <a href="https://members.scouts.org.uk/supportresources/search/?cat=299,304">Young People First: Safeguarding</a>
        <br /><a href="https://worthing-scouts.org.uk/district/privacy-data-protection/">Privacy &amp; Data Protection</a>
        <br /><a href="https://worthing-scouts.org.uk/scout-shop/">Scout Shop</a> -->
      </div>
      <div class="col col-6 col-md-3 scouts-green pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
        <h6><?php echo $menu_list[2]['name'] ?></h6>
        <?php echo $menu_list[2]['content'] ?>
        <!-- <a href="https://worthing-scouts.org.uk/get-involved/">Get Involved</a>
        <br /><a href="https://worthing-scouts.org.uk/get-involved/volunteer/">Volunteer</a>
        <br /><a href="https://worthing-scouts.org.uk/contact-us/">Contact Us</a> -->
      </div>
      <div class="col col-6 col-md-3 scouts-red pt-2 pb-2 pl-2 pr-2 pt-md-5 pb-md-5 pl-md-4 pr-md-4">
        <h6>Contact Us</h6>
        <span>&copy; <?php echo get_bloginfo( 'name', 'raw' )?> <?php echo date('Y')?><br /><?php if (get_option('charity_number')): ?> Registered Charity Number <span id="charity_number"><?php echo get_option('charity_number')?></span><?php endif ?></span>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo get_bloginfo('template_directory'); ?>/dist/index.packed.js"></script>
<?php wp_footer(); ?>
