<!--This is the homepage carousel-->
<?php wp_reset_postdata();?>
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 <?php /*?>   <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li><?php */?>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner" >
    <?php $counter = 0;//set counter
?>
    <?php 

// The Query
$query = new WP_Query(array(
	
	'post_status'		=> 'any',
	'orderby'			=>'post__in'
));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
    <div class="item" >
   
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <img src="<?php echo $image[0]; ?>" alt="" />

     
    
      <div class="carousel-caption">
        <h3>
          <?php echo the_title()?>
        </h3>
        <p><?php echo $feat_image ?></p>
      </div>
    </div>
    <?php
		
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
  </div>
  <!-- Carousel nav --> 
  <a class="carousel-control fui-arrow-left left" href="#myCarousel" data-slide="prev"></a> <a class="carousel-control fui-arrow-right right" href="#myCarousel" data-slide="next"></a> </div>
<div class="item "> <img src="<?php echo $feat_image ?>" >
  <div class="carousel-caption"> </div>
</div>
