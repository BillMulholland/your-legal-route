<!--This is the homepage carousel-->
<?php $ids = get_field('slider_select', false, false); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $c = 1;
$query = new WP_Query(array(
'post__in'		=> $ids,
	
	'post_status'		=> 'any',
	'orderby'			=>'post__in'
));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
    <?php if( $c  == 1) { ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $c ?>" class="active"></li>
    <?php } else { ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $c ?>" ></li>
    <?php } ?>
    <?php
		$c++; 
	}
} 


wp_reset_postdata();?>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner" >
    <?php $i = 1;

// The Query
$query = new WP_Query(array(
'post__in'		=> $ids,
	
	'post_status'		=> 'any',
	'orderby'			=>'post__in'
));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
    <?php if( $i  == 1) { ?>
    <div class="item active" >
      <?php include "carousel-item.php" ?>
    </div>
    <?php } else { ?>
    <div class="item" >
      <?php include "carousel-item.php" ?>
    </div>
    <?php } ?>
    <?php
		$i++; 
	}
} else { echo "Please select slider items";
	// no posts found
};
wp_reset_postdata();?>
  </div>
  <!-- Carousel nav --> 
  <a class="carousel-control fui-arrow-left left" href="#myCarousel" data-slide="prev"></a> 
  <a class="carousel-control fui-arrow-right right" href="#myCarousel" data-slide="next"></a> 
  </div>
  

