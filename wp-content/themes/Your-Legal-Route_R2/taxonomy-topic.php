<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <?php

$args=array(
'post_type'                => 'post',
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

echo '<h2>' . $category->name . '</h2>';

    $querystr = "SELECT $wpdb->posts.*
                  FROM $wpdb->posts, $wpdb->term_relationships, $wpdb->terms
                  WHERE term_id = (" . $category->cat_ID . ")
                  AND term_taxonomy_id = (" . $category->term_taxonomy_id . ")
                  AND ID = object_id
                  AND post_type = 'post'
                  AND post_status = 'publish'
                  ORDER BY post_date DESC";
    $posts = $wpdb->get_results($querystr, OBJECT);

    echo '<ul>';
        foreach ( $posts as $post ) {
            setup_postdata($post);  

                echo '<li style="color:red; border:1px solid blue">'; the_title();   echo '</li>';

                }
    echo '</ul>';

$categories2 = get_terms('topic',array('parent' => $category->term_id , 'hide_empty'=> '0' ));

foreach ( $categories2 as $category ) {

echo '<h3>' . $category->name . '</h3>';

$posts = get_posts( array( 'topic' => $category->name, 'post_type' => 'post' ) );  

    echo '<ul>';
        foreach($posts as $post) { 
            setup_postdata($post);  

                echo '<li style="color:blue">'; the_title();   echo '</li>';

                }
    echo '</ul>';

}
}

?>
    </div>
  </div>
  <?php /*?>  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
    </div>
  </div><?php */?>
</div>
<?php get_footer(); ?>
