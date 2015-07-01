<?php
/*
 Template Name: Home Page
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
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cf" >
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
<?php  // WP_Query arguments
$args = array ('pagination'             => false,
	'posts_per_archive_page' => '3',
	'ignore_sticky_posts'    => true,
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
        
        <div class="item ">
      <img src="..." alt="...">
      <div class="carousel-caption">
       <?php the_title()?>
      </div>
    </div>
        
        
        <?php
		
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
  
  
  
    
    <
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div></div>
  
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
<?php get_footer(); ?>
