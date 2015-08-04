<?php get_header(); ?>
<?php 

$image = get_field('guidance_notes_image', 'option');

?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-md-offset-5 col-lg-offset-6 img-rounded" >
          <p class="lead">
          <h2  class="pagetitle">
            <?php post_type_archive_title(); ?>
            
             <?php
							the_archive_title( '<h2 class="pagetitle">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
          </h2>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <?php

$args=array(
'post_type'                => 'guidance',
'child_of'                 => 0,
'parent'                   => '',
'orderby'                  => 'name',
'order'                    => 'ASC',
'hide_empty'               => 0,
'hierarchical'             => 0,
'exclude'                  => '',
'include'                  => '',
'number'                   => '',
'taxonomy'                 => 'topic',
'pad_counts'               => false
);

$categories=get_categories($args);

foreach ( $categories as $category ) {

if ( $category->parent > 0 ) {
    continue;   
}
 $new_urlh2 = sanitize_title($category->name);

echo '<hr style="clear:both"><h2> <a href="/topic/'. $new_urlh2.'">' . $category->name . '</a></h2>';
echo category_description( $category->term_taxonomy_id ); 

    $querystr = "SELECT $wpdb->posts.*
                  FROM $wpdb->posts, $wpdb->term_relationships, $wpdb->terms
                  WHERE term_id = (" . $category->cat_ID . ")
                  AND term_taxonomy_id = (" . $category->term_taxonomy_id . ")
                  AND ID = object_id
                  AND post_type = 'guidance'
                  AND post_status = 'publish'
                  ORDER BY post_date DESC";
    $posts = $wpdb->get_results($querystr, OBJECT);




	







  echo '<ul >';
       foreach ( $posts as $post ) {
           setup_postdata($post);  

               echo '<li>';?>
			    <a href="<?php echo get_permalink();?>">
                <?php the_title();?>
                </a> 
                <?php include "library/parts/document_icons.php";  echo '</li>';

                }
   echo '</ul>';

$categories2 = get_terms('topic',array('parent' => $category->term_id ));

foreach ( $categories2 as $category ) {
	
	
  $new_url = sanitize_title($category->name);
 

	

echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 article_archive_root" ><h3> <a href="/topic/'. $new_url.'">' . $category->name . '</a></h3>';

$posts = get_posts( array( 'topic' => $category->name, 'post_type' => 'guidance' ) );  

    echo '<ul>';
        foreach($posts as $post) { 
            setup_postdata($post);  
		

                echo '<li> '?>
      <a href="<?php echo get_permalink();?>">
      <?php  the_title(); 
	  include "library/parts/document_icons.php";
	   echo '</a></li>';

                }
    echo '</ul></div>';

}
}

?>
    </div>
  </div>
 
</div>
</div>
<?php get_footer(); ?>
