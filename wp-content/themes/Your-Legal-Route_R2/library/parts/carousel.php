<!--This is the homepage carousel-->

<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <?php /*?>  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li><?php */?>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner" >
    <?php 
  
   $isFirst = true;

    $i=1; 
  ?>
    <?php 

// The Query
$query = new WP_Query(array(
	
	'post_status'		=> 'any',
	'orderby'			=>'post__in'
));
$i = 1;
// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		
		?>
    <div class="item  <?php if($i==1)  echo 'active';?>">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>"  class="img-responsive"/>
      <div class="carousel-caption">
        <h3> <?php echo the_title()?> </h3>
     
      </div>
    </div>
    <?php  $i++;
		
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();?>
  </div>
  <!-- Carousel nav --> 
  <a class="carousel-control fui-arrow-left left" href="#myCarousel" data-slide="prev"></a> 
  <a class="carousel-control fui-arrow-right right" href="#myCarousel" data-slide="next"></a> </div>

