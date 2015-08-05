<?php get_header(); ?>
<?php $tax_id = get_queried_object_id();?>
<?php
  
    if ( is_tax( 'resource' ) ) {
       $value = 'resource_'.$tax_id ;
    }
	
	 if ( is_tax( 'topic' ) ) {
        $value = 'topic_'.$tax_id ;
    }
   
	

$image = get_field('tax_image',$value); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-md-offset-5 col-lg-offset-6 img-rounded" >
          <p class="lead">
            <?php
						
							//the_archive_description( '<div class="taxonomy-description">', '</div>' );
						
                            
                            echo '<h2 class="pagetitle">' . single_cat_title( '', false ) . '</h2>';	?>
          </p>
        </div>
      </div>
    </div>
  </div>
  
  
  


  
  
  
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <?php

$args=array(
'post_type'                => 'post',
'child_of'                 => 0,
'parent'                   => '',
'orderby'                  => 'name',
'order'                    => 'ASC',
'hide_empty'               => 0,
'hierarchical'             => 1,
'exclude'                  => '',
'include'                  => '',
'number'                   => '',
'taxonomy'                 => 'topic',
'pad_counts'               => false
);

$categories=get_categories($args);

foreach ( $categories as $category ) {

if ( $category->parent > 1 ) {
    continue;   
}

echo '<hr style="clear:both; border:1px red solid"/><h2>' . $category->name . '</h2>';

    $querystr = "SELECT $wpdb->posts.*
                  FROM $wpdb->posts, $wpdb->term_relationships, $wpdb->terms
                  WHERE term_id = (" . $category->cat_ID . ")
                  AND term_taxonomy_id = (" . $category->term_taxonomy_id . ")
                  AND ID = object_id
                  AND post_type = 'post'
                  AND post_status = 'publish'
                  ORDER BY post_date DESC";
    $posts = $wpdb->get_results($querystr, OBJECT);

  //  echo '<ul>';
//        foreach ( $posts as $post ) {
//            setup_postdata($post);  
//
//                echo '<li style="color:red">'; the_title();   echo '</li>';
//
//                }
//    echo '</ul>';


//this is the sub
$categories2 = get_terms('topic',array('parent' => $category->term_id , 'hide_empty'=> '1' ));

foreach ( $categories2 as $category ) {

echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 " ><h3>' . $category->name . '</h3>';

$posts = get_posts( array( 'topic' => $category->name, 'post_type' => 'post' ) );  

    echo '<ul>';
        foreach($posts as $post) { 
            setup_postdata($post);  
		

                echo '<li> '?>
				<a href="<?php echo get_permalink();?>">
				<?php  the_title();   echo '</a></li>';

                }
    echo '</ul></div>';

}
}

?>
    </div>
  </div>
  
  
  
 

 
  
  
  
  
  
  <?php /*?><div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 article_archive" >
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <header class="entry-header article-header"> <img class=" img-responsive img-rounded" src="<?php echo $image[0]; ?>"/>
          <h3 ><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h3>
        </header>
        <section class="entry-content cf">
          <?php /*?><?php the_post_thumbnail( 'bones-thumb-300' ); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs">Visit</a> </section>
        <hr/>
        <?php wp_reset_postdata(); ?>
      </article>
    </div>
    <?php endwhile; ?>
    <?php bones_page_navi(); ?>
    <?php else : ?>
    <?php endif; ?>
    </main>
  </div><?php */?>
</div>
<?php get_footer(); ?>
