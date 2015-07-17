<?php $content = get_sub_field('taxonomy');?>
<!-- Pull variables -->
<?php $tax_term = apply_filters( 'id', $term->term_id ); ?>
<?php $tax_taxonomy = $content[0]->taxonomy;?>
<?php $tax_name= $content[0]->name;?>
<?php $tax_description= apply_filters( 'description', $term->description );?>
<?php $tax_slug= $content[0]->slug;?>
<?php // get value from a taxonomy (taxonomy = "events", id = 76)
$value = 'topic_'.$tax_term; ?>
<?php /*?><?php var_dump($content);
?><?php */?>

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 " >

  
  

 <?php /*?> <?php echo apply_filters( 'id', $term->term_id ); ?><?php */?>
<?php 

$image = get_field('tax_image',$value);


if( !empty($image) ): ?>

<img class="img-responsive img-rounded" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?> 

<h6 style="margin-bottom:20px">
  <?php /*?><span style="text-transform: uppercase"><?php echo $content[0]->taxonomy;?> </span>/ <?php */?>
  <a href="/topic/<?php echo $tax_slug?>"> <h3><?php echo apply_filters( 'the_title', $term->name ); ?></h3></a></h6>
<?php echo $tax_description?>





</div>
