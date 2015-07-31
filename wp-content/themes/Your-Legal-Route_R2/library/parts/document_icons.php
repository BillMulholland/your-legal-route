 <?php

if ( 'document' == get_post_type() ) {?>



<a class="document_type"data-toggle="tooltip" data-placement="top" data-html="1" title="<?php the_excerpt() ?>" href="<?php echo get_permalink();?>">
<span class="fui-info-circle"></span></a>

	<?php

} elseif ( 'guidance' == get_post_type() ) {

	echo '<div class="document_type">Guidance note</div>';
}

?>