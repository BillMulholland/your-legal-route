<?php
/*
 Template Name: About Us
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
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
      <main id="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cf" > <a name="anchor"></a>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content();?>
        <?php endwhile; endif; ?>
      </main>
    </div>
  </div>
</div>

<?php get_footer(); ?>
