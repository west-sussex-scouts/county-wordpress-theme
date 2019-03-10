<div id="footer_container">
  <div id="footer_content">
    <a href="https://www.scouts.org.uk/" class="footer-link"><p>Official Scouts Website - www.scouts.org.uk</p></a>
    <a href="http://www.ceop.police.uk/safety-centre/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/CEOPReportBtn.gif'; ?>" width="143" height="51" alt="Child Exploitation and Online Protection Centre" title="Child Exploitation and Online Protection Centre"></a>
		<div id="copyWriteNotice">&copy;Copyright <?php echo date('Y')?> <?php echo get_bloginfo( 'name', 'raw' )?>. All Rights Reserved.<?php if (get_option('charity_number')): ?> Registered Charity Number <?php echo get_option('charity_number')?><?php endif ?></div>
  </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
