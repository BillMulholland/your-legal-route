<?php
/*
 Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
        <?php include "library/parts/carousel.php" ?>
      </div>
    </div>
    <div class="row">
      <?php include "library/parts/repeater_home.php" ?>
    </div>
    <div class="row">
      <main id="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cf" > <a name="anchor"></a>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; endif; ?>
      </main>
    </div>
  </div>
</div>
<?php get_footer(); ?>
