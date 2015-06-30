<?php
global $wpdb, $arf_dig_pro_user_products_class;
$actions['bulk_delete'] = __('Delete', ARF_DP_TEXT_DOMAIN);

if (isset($_REQUEST['err']) and $_REQUEST['err'] == 1) {
    $errors[] = __('This form is already deleted.', ARF_DP_TEXT_DOMAIN);
    ?>
    <script type="text/javascript">
        var pageurl = removeVariableFromURL(document.URL, 'err');
        if (window.history.pushState)
            window.history.pushState({path: pageurl}, '', pageurl);
    </script>
<?php } ?>
<style type="text/css" title="currentStyle">
    @import "<?php echo ARFURL; ?>/datatables/media/css/demo_page.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/demo_table_jui.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/jquery-ui-1.8.4.custom.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/ColVis.css";
</style>

<div class="wrap paypal_page">
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
            <div class="inside">
                <form name="arf_dig_pro_user_product_forms" method="get" id="arf_dig_pro_user_product_forms" onsubmit="return arf_dig_pro_user_product_bulk_act();" style="width:100%;">
                    <div class="frm_settings_form wrap_content" style="margin-top:75px;">
                        <div class="page_title"><?php _e('Download History', ARF_DP_TEXT_DOMAIN); ?></div>
                        <div style="clear:both;"></div>
                        <div id="arf_dig_pro_user_product_forms">
                            <?php require_once(ARF_DIG_PRO_VIEWS_DIR . '/arf_dig_pro_download_product_listing.php'); ?>
                        </div>
                    </div>
                </form>
                
                
                <div id="delete_form_message" style="display:none; left:35%;" class="arfmodal arfhide arffade arfdeletemodabox">
                    <div class="arfnewmodalclose" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/close-button.png'; ?>" align="absmiddle" /></div>
                    <input type="hidden" value="" id="delete_entry_id"/>
                    <div class="arfdelete_modal_title"><img src="<?php echo ARFIMAGESURL . '/delete-field-icon.png'; ?>" align="absmiddle" style="margin-top:-5px;" />&nbsp;<?php _e('DELETE', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arfdelete_modal_msg"><?php _e('Are you sure you want to delete this user product?', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arf_delete_modal_row">
                        <div class="arf_delete_modal_left" onclick="arf_dig_pro_singel_delete('delete', '');"><img src="<?php echo ARFIMAGESURL . '/okay-icon.png'; ?>" align="absmiddle" style="margin-right:10px;" />&nbsp;<?php _e('Okay', ARF_DP_TEXT_DOMAIN); ?></div>
                        <div class="arf_delete_modal_right" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/cancel-btnicon.png'; ?>" align="absmiddle" style="margin-right:10px;" />&nbsp;<?php _e('Cancel', ARF_DP_TEXT_DOMAIN); ?></div>
                    </div>
                </div>
                
                <div id="delete_bulk_user_product_message" style="display:none; left:35%;" class="arfmodal arfhide arffade arfdeletemodabox">
                    <div class="arfnewmodalclose" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/close-button.png'; ?>" align="absmiddle" /></div>
                    <input type="hidden" value="false" id="delete_bulk_user_product_flag"/>
                    <div class="arfdelete_modal_title"><img src="<?php echo ARFIMAGESURL . '/delete-field-icon.png'; ?>" align="absmiddle" style="margin-top:-5px;" />&nbsp;<?php _e('DELETE ENTRY', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arfdelete_modal_msg"><?php _e('Are you sure you want to delete this user product?', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arf_delete_modal_row">
                        <div class="arf_delete_modal_left" onclick="arf_dig_pro_delete_bulk_user_product('true');"><img src="<?php echo ARFIMAGESURL . '/okay-icon.png'; ?>" align="absmiddle" />&nbsp;<?php _e('Okay', ARF_DP_TEXT_DOMAIN); ?></div>
                        <div class="arf_delete_modal_right" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/cancel-btnicon.png'; ?>" align="absmiddle" />&nbsp;<?php _e('Cancel', ARF_DP_TEXT_DOMAIN); ?></div>
                    </div>
                </div>
                
                
                <div class="documentation_link" style="background:none; background:none; padding-top:40px;" align="right">
                    <a href="<?php echo ARF_DIG_PRO_URL;?>/documentation/index.html" style="margin-right:10px;" target="_blank"><?php _e('Download Product Documentation',ARF_DP_TEXT_DOMAIN);?></a>|
                    <a href="http://reputeinfosystems.com/support/" style="margin-left:10px;" target="_blank"><?php _e('Support',ARF_DP_TEXT_DOMAIN);?></a> &nbsp;&nbsp;
                    <img src="<?php echo ARFURL;?>/images/dot.png" height="4" width="4" onclick="javascript:OpenInNewTab('<?php echo ARFURL;?>/documentation/assets/sysinfo.php');" />
                </div>
                
            </div>
        </div>
    </div>
</div>