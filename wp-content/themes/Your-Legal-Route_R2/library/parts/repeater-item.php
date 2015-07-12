<?php $content = get_sub_field('taxonomy');?>
<!-- Pull variables -->
<?php $tax_term = $content[0]->term_id;?>
<?php $tax_taxonomy = $content[0]->taxonomy;?>
<?php $tax_name= $content[0]->name;?>
<?php /*?><?php var_dump($content);
?><?php */?>

<h6 style="margin-bottom:20px"><?php /*?><span style="text-transform: uppercase"><?php echo $content[0]->taxonomy;?> </span>/ <?php */?><?php echo $content[0]->name;?></h6>
<?php $i = 1;
$query = new WP_Query(array(
'taxonomy' => $tax_taxonomy,
'term' => $tax_name,
'posts_per_page' =>'4',

	
));

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>
<?php if( $i  == 1) { ?>
<div class="First" style="border-bottom:1px solid #C7C7C7;margin-bottom:10px; clear:both;padding:10px 0px">
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bones-thumb-800' ); ?>
 <a href="<?php echo get_permalink(); ?>" ><img src="<?php echo $image[0]; ?>" alt="" class="img-responsive img-rounded"/> </a>
 <a href="<?php echo get_permalink(); ?>" > <?php echo the_title()?></a><br/>
</div>
<?php } else { ?>
<div class="All" style="margin-bottom:10px; clear:both;padding:10px 0px; display:block;position:relative">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" >
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bones-thumb-800' ); ?>
    <img src="<?php echo $image[0]; ?>" alt="" class="img-responsive img-rounded"/> 
    </div>
  
  <a href="<?php echo get_permalink(); ?>" > <?php echo the_title()?></a>
 
</div>
<?php } ?>
<?php
		$i++; 
	}
} else { echo "Sorry no items found";
	// no posts found
};?>
<div style="clear:both"> 

<hr/><sub style="text-transform: uppercase">Show all from <?php echo $content[0]->name;?></sub></div>
<?php wp_reset_postdata();?>
