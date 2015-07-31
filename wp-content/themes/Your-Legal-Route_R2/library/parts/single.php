<!--Single item for homepage-->

<?php 

$image = get_field('single_image');?>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
      <div class=" img-rounded" style=" background-image:url(<?php echo $image['url']; ?>);height:460px; margin-bottom:50px">
        <div id="cta" class="col-xs-12 col-sm-12 col-md-6 col-lg-7 col-md-offset-1 col-lg-offset-1 img-rounded" >
          <p class="lead"> <?php the_field('single_image_text'); ?>
        <?php /*?> <?php
							the_archive_title( '<h2 class="pagetitle">', '</h2>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?><?php */?>
          </p>
        </div>
      </div>
    </div>
  </div>