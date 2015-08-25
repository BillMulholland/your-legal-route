<?php
/*
 Template Name: Match Page
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

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
        <div class=" img-rounded" style=" background-image:url(http://yourlegalroute.staging.wpengine.com/wp-content/uploads/2015/08/guide.jpg);height:460px; margin-bottom:50px">
          <div id="cta" class="col-xs-10 col-sm-10 col-md-6 col-lg-7 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 img-rounded" >
            <p class="lead">
            <h2 class="pagetitle">Match</h2>
            
            


            <p style="color:white">Answer the following questions to enable us to serve you with the best legal professionals to meet your needs.</p>
          </div>
        </div>
      </div>
      <a name="anchor"></a>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content();?>
      <?php endwhile; endif; ?>
   
      
    </div>
  </div>
</div>

 <?php echo maincontroller::get_form_shortcode_popup(array('id' => '110', 'desc'=>'', 'type'=>'link', 'height'=>'540', 'width'=>'800')); ?>
<?php get_footer(); ?>
