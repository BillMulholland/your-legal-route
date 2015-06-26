<?php
/*
 Template Name: Blank For Form
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
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "  >
        <div class="img-responsive img-rounded" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/sea.jpg);margin-bottom:20px;height:460px">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 " >
            <h3 style="color:white; margin-top:100px!important"> Take your free business Healthcheck today</h3>
            <p style="color:white;font-size:13px!important;line-height:1.5!important">Keeping ahead of changes to business law can be time consuming and a bit relentless. So why not leave it to the experts and let us do the hard work for you?</p>
            <p style="color:white;font-size:13px!important;line-height:1.5!important">Just answer a few simple questions and we'll tell you everything you need to know. It really is that easy.</p>
            <p><a data-scroll class="btn btn-hg btn-primary" href="#anchor"> Just take our health check today </a></p>
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
<script src="//cdn-static.formisimo.com/tracking/js/tracking.js"></script>
<?php get_footer(); ?>
