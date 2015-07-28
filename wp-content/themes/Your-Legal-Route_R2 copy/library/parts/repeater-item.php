<?php $content = get_sub_field('taxonomy');?>
<!-- Pull variables -->
<?php $tax_term = $content[0]->term_id;?>
<?php $tax_taxonomy = $content[0]->taxonomy;?>
<?php $tax_name= $content[0]->name;?>
<?php $tax_description= $content[0]->description;?>
<?php $tax_slug= $content[0]->slug;?>
<?php // get value from a taxonomy (taxonomy = "events", id = 76)
$value = 'topic_'.$tax_term; ?>
<?php /*?><?php var_dump($content);
?><?php */?>
<?php 

$image = get_field('tax_image',$value);


if( !empty($image) ): ?>

<img class="img-responsive img-rounded" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
<h6 style="margin-bottom:20px">
  <?php /*?><span style="text-transform: uppercase"><?php echo $content[0]->taxonomy;?> </span>/ <?php */?>
  <a href="/topic/<?php echo $tax_slug?>"> <?php echo $tax_name?></a></h6>
<?php echo $tax_description?>

<div style="clear:both"> <sub style="text-transform: uppercase; color:#919191"><a href="/topic/<?php echo $tax_slug ?>">Show all from <?php echo $content[0]->name;?></a></sub></div>
<hr/>
<?php wp_reset_postdata();?>
