<?php get_header(); ?>
<?php 

$image = get_field('documents_image', 'option');

?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-md-offset-5 col-lg-offset-6 img-rounded" >
          <p class="lead">
          <h2  class="pagetitle">
            <?php post_type_archive_title(); ?>
          </h2>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
    <div class="row">
      <?php

$args=array(
'post_type'                => 'document',
'child_of'                 => 0,
'parent'                   => '',
'orderby'                  => 'name',
'order'                    => 'ASC',
'hide_empty'               => 1,
'hierarchical'             => 1,
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
//echo '<hr style="clear:both"/><h2>' . $category->name . '</h2>';
echo '<hr style="clear:both"><h2> <a href="/topic/'. $new_urlh2.'">' . $category->name . '</a></h2>';
echo category_description(  ); 

    $querystr = "SELECT $wpdb->posts.*
                  FROM $wpdb->posts, $wpdb->term_relationships, $wpdb->terms
                  WHERE term_id = (" . $category->cat_ID . ")
                  AND term_taxonomy_id = (" . $category->term_taxonomy_id . ")
                  AND ID = object_id
                  AND post_type = 'document'
                  AND post_status = 'publish'
                  ORDER BY post_date DESC";
    $posts = $wpdb->get_results($querystr, OBJECT);

  echo '<ul><ul>';
       foreach ( $posts as $post ) {
           setup_postdata($post);  

               echo '<li>'; the_title(); include "library/parts/document_icons.php";  echo '</li>';

                }
   echo '</ul></ul>';

$categories2 = get_terms('topic',array('parent' => $category->term_id , 'hide_empty'=> '0' ));

foreach ( $categories2 as $category ) {
	
	
  $new_url = sanitize_title($category->name);
 

	

echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" ><h3> <a href="/topic/'. $new_url.'">' . $category->name . '</a></h3>';

$posts = get_posts( array( 'topic' => $category->name, 'post_type' => 'document' ) );  

     echo '<ul>';
        foreach($posts as $post) { 
            setup_postdata($post);  
		

                echo '<li> '?>
      <a  title="<?php the_title() ?>" href="<?php echo get_permalink();?>">
      <?php  the_title(); 
	  include "library/parts/document_icons.php";
	   echo '</a></li>';

                }
    echo '</ul></div>';

}
}

?>
    </div>
  </div></div>
 
</div>
</div>
<?php get_footer(); ?>