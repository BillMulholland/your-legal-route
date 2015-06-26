<?php
/*
 Template Name: Health check  thank you
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>

<div id="content">
  <div class="container">
  
    <div class="row">
      <main id="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cf" >
      <a name="anchor"></a>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; endif; ?>
      </main>
    </div>
  </div>
</div>
<script src="//cdn-static.formisimo.com/tracking/js/conversion.js"></script>
<?php get_footer(); ?>
