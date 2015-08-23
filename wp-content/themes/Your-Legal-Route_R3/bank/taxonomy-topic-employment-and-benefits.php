<?php get_header(); ?>
<?php $tax_id = get_queried_object_id();?>
<?php // get value from a taxonomy (taxonomy = "events", id = 76)
	
$value = 'topic_'.$tax_id ;
$image = get_field('tax_image',$value); ?>

<!--Added code-->

<?php // Get Main Taxonomy for use in template file
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$termTaxonomy = $term->taxonomy;?>


<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-md-offset-5 col-lg-offset-6 img-rounded" >
          <p class="lead"><h2  class="pagetitle"2><?php echo apply_filters( 'the_title', $term->name ); ?><h2>
            <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>


<?php 
// Now get children terms, using get_term & 'child_of' get's us alphabetical order
$termchildren = get_terms( $termTaxonomy, array(
  'child_of'     => $term->term_id,
  'hierarchical' => 0,
  'fields'       => 'ids',
  'hide_empty'   => 0
) );

// Make an alphabetical linked list
echo '<div class="container"><div class="row">';
foreach ($termchildren as $child) {
  $term = get_term_by( 'id', $child, $termTaxonomy );?>
  
  <?php include "library/parts/repeater-item-tax.php" ?>


<?php }?>
<?php 
echo '</div></div>';?>

<!--Added code-->
<?php /*?><div class="container">

  <div class="row">
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
  </div>
</div><?php */?>
</div>
<?php get_footer(); ?>
