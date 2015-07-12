<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div  id="main_intro" class="col-xs-12 col-sm-9 col-md-12 col-lg12 img-rounded" style=" background-image:url(<?php echo $image[0]; ?>);height:460px; margin-bottom:50px">
        <p class="lead">
        <h2 class="pagetitle">
          <?php the_title(); ?>
        </h2>
        </p>
      </div>
      <main id="main" class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php  the_content(); ?>
        <?php     
if( get_field('post_pdf_document') ):
    ?>
        <hr class="spacer"/>
        <a href="<?php the_field('post_pdf_document'); ?>" class="btn btn-default"  target="_blank" > <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Download this as PDF </a>
        <?php
endif;?>
        <?php endwhile; ?>
        <?php else : ?>
        <article id="post-not-found" class="hentry cf">
          <header class="article-header">
            <h1>
              <?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?>
            </h1>
          </header>
          <section class="entry-content">
            <p>
              <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
            </p>
          </section>
          <footer class="article-footer">
            <p>
              <?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?>
            </p>
          </footer>
        </article>
        <?php endif; ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
