<?php $content = get_sub_field('taxonomy');?>
<!-- Pull variables -->
<?php $tax_term = apply_filters( 'id', $term->term_id ); ?>
<?php $tax_taxonomy = $content[0]->taxonomy;?>
<?php $tax_name= $content[0]->name;?>
<?php $tax_description= apply_filters( 'description', $term->description );?>
<?php $tax_slug= $content[0]->slug;?>
<?php // get value from a taxonomy (taxonomy = "events", id = 76)
$value = 'topic_'.$tax_term; ?>
<?php /*?><?php var_dump($content);
?><?php */?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 " style="border-bottom:1px solid #ECECEC;">
  <?php /*?> <?php echo apply_filters( 'id', $term->term_id ); ?><?php */?>
  <?php 

$image = get_field('tax_image',$value);


if( !empty($image) ): ?>
  <?php /*?><img class="img-responsive img-rounded" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php */?>
  <?php endif; ?>
  <?php /*?><span style="text-transform: uppercase"><?php echo $content[0]->taxonomy;?> </span>/ <?php */?>
  <?php $itemhere = apply_filters( 'id', $term->term_id ); ?>
  <?php $itemhere = $term->slug ?>
  <a href="/topic/<?php echo apply_filters( 'the_slug', $term->slug ); ?>/">
  <h3><?php echo apply_filters( 'the_title', $term->name ); ?></h3>
  </a>
  <ul>
    <?php $posts = get_posts( array( 'topic' => $itemhere, ) );  

    
        foreach($posts as $post) { 
            setup_postdata($post);  
		

                echo '<li> '?>
                
                
               <?php 
                $terms = get_terms( 'resources' );
 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     echo '<ul>';
     foreach ( $terms as $term ) {
       echo '<li>' . $term->name . 'tax</li>';
        
     }
     echo '</ul>';
 }
      ?>          
    <a href="<?php echo get_permalink();?>">
    <?php  the_title();   echo '</a></li>';

                }
    




?>
  </ul>
</div>
