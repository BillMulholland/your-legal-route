<div class="footer" style="margin-top:20px">
<div class="bottom-menu">
  <div class="container"> 
 
      <?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'bottom-menu-list',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
 
    
  </div>
</div>
</div>
<?php // all js scripts are loaded in library/bones.php ?>

<script src="//cdn-static.formisimo.com/tracking/js/tracking.js"></script>
<?php wp_footer(); ?>
</body></html>



