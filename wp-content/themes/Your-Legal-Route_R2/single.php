<?php get_header(); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

<div id="content">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image[0]; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-md-offset-5 col-lg-offset-5 img-rounded" >
          <p class="lead">
          <h2 class="pagetitle">
            <?php the_title(); ?>
          </h2>
          </p>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php     
if( get_field('post_pdf_document') ):
    ?>
          <a href="<?php the_field('post_pdf_document'); ?>" class="btn btn-default"  target="_blank" > Download this as PDF </a>
          <?php
endif;?>
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <main id="main" class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <div id="post_header" >
        <?php the_field('post_header', 'option'); ?>
      </div>
      <?php  the_content(); ?>
      <?php     
if( get_field('post_disclaimer') ):
    ?>
      <div id="disclaimer" class="img-rounded">
        <?php the_field('post_disclaimer', 'option'); ?>
      </div>
      
       <?php
endif;?>
      <?php     
if( get_field('post_pdf_document') ):
    ?>
      <?php /*?><div id="bottom_download">
      <a href="<?php the_field('post_pdf_document'); ?>" class="btn btn-default"  target="_blank" > Download this as word document </a>
       </div><?php */?>
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
<?php get_footer(); ?>
