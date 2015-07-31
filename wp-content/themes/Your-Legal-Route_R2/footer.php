<div id="footer_crumbs">
<div class="container">
<div class="row">
  
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
    
    <? if (!is_front_page()) 
    
	yoast_breadcrumb();
?>

 </div>
  </div>
</div>
</div>
<div class="footer" >
  <div class="bottom-menu">
    <div class="container"> 
    <div class="row">
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
    </div></div>
  </div>
</div>
<?php // all js scripts are loaded in library/bones.php ?>
<script type="text/javascript">
        var _mfq = _mfq || [];
        (function () {
        var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
        mf.src = "//cdn.mouseflow.com/projects/fd1847c5-053f-46c9-a836-b13cddf2d502.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script>
<?php wp_footer(); ?>
<a href="#0" class="cd-top img-rounded">Top</a>
</body>


</html>