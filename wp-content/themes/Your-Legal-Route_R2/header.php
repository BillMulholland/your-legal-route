<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>

<!-- start marketizator.com code -->
<link rel="dns-prefetch" href="//app.marketizator.com"/>    
<script type="text/javascript" src="//d2tgfbvjf3q6hn.cloudfront.net/js/45c418.js"></script>
<!-- end marketizator.com code -->
<meta charset="utf-8">
<?php // force Internet Explorer to use the latest rendering engine available ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
<?php wp_title(''); ?>
</title>
<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
<?php // or, set /favicon.ico for IE10 win ?>
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<meta name="theme-color" content="#121212">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php // wordpress head functions ?>
<?php wp_head(); ?>
<?php // end of wordpress head ?>
<?php // drop Google Analytics Here ?>
<?php // end analytics ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="row"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php /*?>  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <?php /*?>  <a class="navbar-brand" href="<?php echo home_url(); ?>">
             <?php /*?>   <?php bloginfo('name'); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Your Legal Route" width="250" height="45" id="logo"/>            </a
<?php */?>
        <?php
            wp_nav_menu( array(
                'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                 'theme_location' => 'main-nav',  
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div>
    </div>
 
 </nav>
</header>
 <div class="strapline" >
  <div class="container">
    <div class="row" >
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <h4 class="strap"> The only place to go for reliable legal support for your business</h4>
      </div>
    </div>
    </div>
    </div> 
    <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div id="header_crumbs">
          <? if (!is_front_page()) 
	yoast_breadcrumb();
?>
        </div>
      </div>
    </div>
  </div>
  
<div id="slideout">
 <?php echo maincontroller::get_form_shortcode_popup(array('id' => '108', 'desc'=>'Feedback', 'type'=>'link', 'height'=>'640', 'width'=>'800')); ?>

</div>

