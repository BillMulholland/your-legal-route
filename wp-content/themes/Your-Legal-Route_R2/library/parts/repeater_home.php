<!--Repeater Area-->
<?php if( have_rows('home_repeater') ): ?>
<?php while( have_rows('home_repeater') ): the_row();?>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 " style="margin-top:20px">
<?php include "repeater-item.php" ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
