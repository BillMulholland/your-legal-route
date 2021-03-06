<?php get_header(); ?>
<?php $tax_id = get_queried_object_id();?>
<?php // get value from a taxonomy (taxonomy = "events", id = 76)
	
$value = 'topic_'.$tax_id ;
$image = get_field('tax_image',$value); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-10 col-sm-10 col-md-6 col-lg-7 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 img-rounded" >
          <p class="lead"> 
         <?php
							the_archive_title( '<h2 class="pagetitle">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  
  
 <?php query_posts($query_string . '&orderby=title&order=ASC'); ?>
  
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 article_archive" >
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
        <header class="entry-header article-header">
       <?php /*?> <img class=" img-responsive img-rounded" src="<?php echo $image[0]; ?>"/><?php */?>
        
      
          <h3 ><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h3>
        </header>
        <section class="entry-content cf">
          <?php /*?><?php the_post_thumbnail( 'bones-thumb-300' ); ?><?php */?>
         <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs">More</a> 
          
           <div style="font-size:10px;text-transform:uppercase; float:right">
<?php echo get_post_type( $post ) ?></div>


         


 </section>
        <hr/>
        <?php wp_reset_postdata(); ?>
      </article>
    </div>
    <?php endwhile; ?>
    
   <div style="clear:both">
    <?php bones_page_navi(); ?>
    </div>
    <?php else : ?>
    <?php endif; ?>
    </main>
  </div>
</div>
</div>
<?php get_footer(); ?>
