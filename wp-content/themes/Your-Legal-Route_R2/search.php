<?php get_header(); ?>

<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 " >


<h2 class="archive-title"><span>
  <?php _e( 'Search Results for:', 'bonestheme' ); ?>
  </span> <?php echo esc_attr(get_search_query()); ?></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
<header class="entry-header article-header">
<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
  <?php the_title(); ?>
  </a></h3>
<section class="entry-content">
 <div style="font-size:10px;text-transform:uppercase">
<?php echo get_post_type( $post ) ?></div>
  <?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs">Visit</a> 
 </section>

<!-- end article footer -->

</article>
<hr>
<?php endwhile; ?>
<?php bones_page_navi(); ?>
<?php else : ?>
s the error message in the search.php template.', 'bonestheme' ); ?>
</p>
</footer>
</article>
<?php endif; ?>


</div>
</div>
</div>
<?php get_footer(); ?>
