<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
      </div>
      <div class="modal-body">
      <?php     
if( get_field('post_pdf_document') ):
    ?>
    
   
          <a href="<?php the_field('post_pdf_document'); ?>" class="btn btn-default"  target="_blank" > Click here to download this as a word document. </a>
          
          <?php else: // field_name returned false ?>
          
          
   
   Thank you for requesting this document. We are really sorry: it isn't quite ready for downloading. Enter your email address below and we will let you know as soon as it is.
   <?php echo do_shortcode('[ARForms id=107]'); ?>
   
          <?php
endif;?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>