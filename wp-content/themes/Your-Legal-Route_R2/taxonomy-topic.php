<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
    </div>
  </div>
  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <img src="<?php echo $image[0]; ?>" alt="" class="img-responsive img-rounded"/>
      <h3> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a></h3>
      <?php the_field('post_summary'); ?>
    </div>
    <?php endwhile; ?>
    <?php bones_page_navi(); ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
