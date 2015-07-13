<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<img src="<?php echo $image[0]; ?>" alt="" />
<div class="carousel-caption">
  <a href="<?php echo get_permalink(); ?>" ><h3> <?php echo the_title()?></h3></a>
 
</div>
