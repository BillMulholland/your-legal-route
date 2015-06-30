<?php global $arf_digital_product, $arf_dig_pro_products_class; ?>
<div class="wrap paypal_page">
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
            <div class="inside">
                <div class="frm_settings_form wrap_content" style="margin-top:75px;">
                    <div class="page_title">
                        <?php _e('Add New Product', ARF_DP_TEXT_DOMAIN); ?>
                    </div>

                    <div style="clear:both;"></div>
                    <?php if ($_GET['arfaction'] == 'new' and isset($arfaction) and $arfaction == 'edit') { ?>
                        <script type="text/javascript">
                            var pageurl = removeVariableFromURL(document.URL, 'arfaction');
                            if (window.history.pushState)
                                window.history.pushState({path: pageurl}, '', pageurl + '&arfaction=edit&id=<?php echo $id; ?>');
                        </script>
                        <?php
                    }
                    
                    
                    $product_id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id'] : '';
                    
                    if ($arfaction == '')
                        $arfaction = $_REQUEST['arfaction'];

                    if (isset($message) && $message != '') {
                        if (is_admin()) {
                            ?>
                            <div id="success_message" style="margin-bottom:0px; margin-top:15px; width:95%;">
                                <div class="arfsuccessmsgicon"></div>
                                <div class="arf_success_message">
                                    <?php
                                } echo $message;
                                if (is_admin()) {
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>

                    <?php if (isset($_GET['errors']) && !empty($_GET['errors'])) { ?>   
                        <ul style="margin-bottom: 0px; margin-top: 0px;" id="frm_errors">
                            <li><div class="arferrmsgicon"></div><div id="error_message"> <?php echo $_GET['errors']; ?> </div></li>  
                        </ul>
                    <?php } ?>

                    <form name="arf_dig_pro_setting" id="arf_dig_pro_setting" method="post" onSubmit="return arf_dig_pro_save();" enctype="multipart/form-data">
                        <input type="hidden" id="arfaction" name="arfaction" value="<?php echo $arfaction; ?>">
                        <table class="form-table">



                            <tr class="tdclass">
                                <td width="18%" class="tdclass" valign="top"><label class="lblsubtitle">
                                        <?php _e('Product Name', ARF_DP_TEXT_DOMAIN); ?>
                                        &nbsp;&nbsp;<span style="vertical-align:top" class="arfglobalrequiredfield">*</span></label></td>
                                <td><input type="text" name="arf_product_name" id="arf_product_name" value="<?php echo esc_attr($values['arf_product_name']); ?>" class="txtstandardnew" style="width:400px;">
                                    <div class="arferrmessage" id="arf_product_name_msg" style="display:none;">
                                        <?php _e('This field cannot be blank.', ARF_DP_TEXT_DOMAIN); ?>
                                    </div></td>
                            </tr>




                            <tr class="tdclass success_action_message_box success_action_box">
                                <td class="tdclass" valign="top" style="vertical-align:top;">
                                    <label class="lblsubtitle" style="vertical-align:top;">
                                        <?php _e('Description', ARF_DP_TEXT_DOMAIN); ?>
                                    </label>
                                </td>
                                <td>
                                    <textarea id="success_msg" name="arf_product_description" style="width:400px !important;" cols="50" rows="4" class="arfplacelonginput txtmultinew"><?php echo esc_attr($values['arf_product_description']); ?></textarea>
                                <td>
                            </tr>



                            <tr class="tdclass">
                                <td valign="top" class="tdclass"><label class="lblsubtitle">
                                        <?php _e('Product Status', ARF_DP_TEXT_DOMAIN); ?>
                                    </label></td>
                                <td><input type="radio" class="rdostandard" id="arf_product_enable_status" name="arf_product_status" value="1" <?php checked($values['arf_product_status'], 1); ?>>
                                    <label for="arf_product_enable_status"><span></span>
                                        <?php _e('Enable ', ARF_DP_TEXT_DOMAIN); ?>
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="rdostandard" id="arf_product_disable_status" name="arf_product_status" value="0" <?php checked($values['arf_product_status'], 0); ?> >
                                    <label for="arf_product_disable_status"><span></span>
                                        <?php _e('Disable', ARF_DP_TEXT_DOMAIN); ?>
                                    </label></td>
                            </tr>


                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr class="tdclass">
                                <td valign="top" colspan="2" class="lbltitle"><br /><?php _e('Download', ARF_DP_TEXT_DOMAIN); ?></td>
                            </tr>

                            <tr class="tdclass">
                                <td valign="top" class="tdclass" style="vertical-align:top"><label class="lblsubtitle"><?php _e('Download Type', ARF_DP_TEXT_DOMAIN); ?></label></td>
                                <td>
                                    <input type="radio" class="rdostandard" id="arf_dig_pro_internal_type" name="arf_dig_pro_download_type" value="internal"  <?php checked($values['arf_dig_pro_download_type'], 'internal'); ?> >
                                    <label for="arf_dig_pro_internal_type"><span></span><?php _e('Internal', ARF_DP_TEXT_DOMAIN); ?></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" class="rdostandard" id="arf_dig_pro_external_type" name="arf_dig_pro_download_type" value="external" <?php checked($values['arf_dig_pro_download_type'], 'external'); ?>>
                                    <label for="arf_dig_pro_external_type"><span></span><?php _e('External', ARF_DP_TEXT_DOMAIN); ?></label>
                                </td>
                            </tr>

                            <tr class="tdclass arf_dig_pro_external_type_data">
                                <td width="18%" class="tdclass" valign="top"><label class="lblsubtitle"><?php _e('Download Url', ARF_DP_TEXT_DOMAIN); ?></label></td>
                                <td><input type="text" name="arf_download_url" id="arf_download_url" value="<?php echo esc_attr($values['arf_download_url']); ?>" class="txtstandardnew" style="width:400px;"></td>
                            </tr>

                            <tr class="tdclass arf_dig_pro_internal_type_data">
                                <td width="18%" valign="top" class="tdclass" ><label for="arf_product_image" class="lblsubtitle"><?php _e('Download File', ARF_DP_TEXT_DOMAIN); ?></label></td>
                                <td valign="top" >
                                    <div id="arf_dig_pro_download_file_data">
                                        <div class="arf_dig_pro_download_sec">
                                            <?php /*
                                              <input type="text" name="arf_product_file_url" class="arf_product_file_url_0 txtstandardnew" value="<?php echo $values['arf_product_file_url']; ?>"/>
                                              <input type="button"  id="arf_product_file_url_0" value="Upload File" class="arf_product_image arfbulkbtn arfemailaddbtn" style="float: left;"/>
                                              <!--span class="bulk_add_remove_download_file">
                                              <button type="button" onclick="arf_dig_pro_add_file();" class="bulk_add">&nbsp;</button>
                                              <span onclick="arf_dig_pro_delete_file(this);" class="bulk_remove">&nbsp;</span>
                                              </span-->
                                              <br>
                                             */
                                            ?>
                                            <!--input type="file"  id="arf_pt_import_file" name="arf_product_file_url"  / -->

                                            <input type="hidden" value="<?php echo $values['arf_product_file_url']; ?>" name="arf_product_file_hidden"  />

                                            <input type="file" style="opacity:0;width:0px !important;;height:0px !important;;padding:0px !important;" id="arf_pt_import_file" name="arf_product_file_url"  />
                                            <label for="arf_pt_import_file">
                                                <div  class="text pd_input_control pd_input_small helpdesk_txt" style="float:left; width:48%; border: 1px solid #CCCCCC; border-radius: 3px;">
                                                    <div>
                                                        <div id="arf_pt_import_file_name" style="float: left; width: 75%; line-height: 32px;">
                                                            <?php
                                                            if (isset($values['arf_product_file_url']) && !empty($values['arf_product_file_url'])) {
                                                                // echo basename($values['arf_product_file_url']);
                                                                _e('No file Selected', ARF_DP_TEXT_DOMAIN);
                                                            } else {
                                                                _e('No file Selected', ARF_DP_TEXT_DOMAIN);
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="arp_import_export_file_btn" style="background:#19a6c9; color:#ffffff;  overflow:hidden; padding: 0 15px;  text-align: right;" >
                                                        <div style="margin:7px;"><?php _e('Add File', ARF_DP_TEXT_DOMAIN); ?></div>
                                                    </div>
                                                </div>
                                            </label>

                                            <?php if ($arfaction == 'edit' && $values['arf_product_file_url']) { ?>
                                                <small style="float: left; line-height: 32px; font-size:12px; margin: 0 0 0 15px;">
                                                    <a style="color:#666; text-decoration: none;" href="<?php echo $arf_dig_pro_products_class->arf_dig_pro_create_download_link_for_admin($values['id']); ?>"><?php _e('View Download', ARF_DP_TEXT_DOMAIN); ?></a> (<?php echo basename($values['arf_product_file_url']); ?>)
                                                </small>
                                            <?php } ?>

                                        </div>

                                    </div>
                                </td>
                            </tr>

                            <tr class="tdclass success_action_message_box success_action_box">
                                <td class="tdclass" valign="top" style="vertical-align:top;"><label class="lblsubtitle" style="vertical-align:top;"><?php _e('Download Notes', ARF_DP_TEXT_DOMAIN); ?></label></td>
                                <td><textarea  name="arf_download_note" style="width:400px !important;" cols="50" rows="4" class="arfplacelonginput txtmultinew"><?php echo esc_attr($values['arf_download_note']); ?></textarea><td>
                            </tr>


                            
                            <?php if ($arfaction == 'edit' && !empty($product_id)) { ?>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr class="tdclass">
                                    <td valign="top" colspan="2" class="lbltitle"><br /><?php _e('Download Link Shortcode', ARF_DP_TEXT_DOMAIN); ?></td>
                                </tr>
                                <tr class="tdclass">
                                    <td width="18%" class="tdclass" valign="top"><label class="lblsubtitle"><?php _e('Shortcode', ARF_DP_TEXT_DOMAIN); ?></label></td>
                                    <td>
                                        <div class="arf_dig_pro_shortcode_sec">
                                            <span>[ARF_download_link  product_id='<?php echo $product_id; ?>' desc='Download' type='link']</span> 
                                            <p class="howto clear"><?php _e("Note: Possible argument for type argument 1.)type='link' 2.)type='button'.", ARF_DP_TEXT_DOMAIN); ?></p>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>


                            <?php
                            /*
                              <tr class="tdclass">
                              <td width="18%" class="tdclass" valign="top" style="vertical-align:top;"><label class="lblsubtitle"><?php _e('File Download Limit', ARF_DP_TEXT_DOMAIN); ?></label></td>
                              <td>
                              <input type="text" name="arf_download_limit" id="arf_download_limit" value="<?php echo esc_attr($values['arf_download_limit']); ?>" class="txtstandardnew" style="width:400px;">
                              <label style="font-size:12px; font-style:italic; float:left; width:100%"><?php _e('Set user download limit. (0 for unlimited)', ARF_DP_TEXT_DOMAIN); ?></label>
                              </td>
                              </tr> */
                            ?>



                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>

                        </table>

                        <div style="clear:both; margin-top:30px; margin-left:50px;">
                            <button class="greensavebtn" id="save_arf_dig_pro" name="save_arf_dig_pro" type="submit" style="width:110px; border:0px; color:#FFFFFF; height:40px; border-radius:3px;"><img align="absmiddle" src="<?php echo ARFIMAGESURL ?>/save_icon.png">&nbsp;&nbsp;
                                <?php _e('Save', ARF_DP_TEXT_DOMAIN) ?>
                            </button>
                            <button class="whitecancelbtn" style="background-color: #FFFFFF; border-radius: 3px 3px 3px 3px;height: 41px; width: 110px;" type="button" onclick="location.href = '?page=ARForms-DigitalProduct'">
                                <?php _e('Cancel', ARF_DP_TEXT_DOMAIN) ?>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #arf_dig_pro_images .arfmodal-header, #arf_dig_pro_images .arfmodal-header {
        background: none repeat scroll 0 0 #1bbae1;
        height: 60px;
        padding: 0 15px;
    }
</style>

<div id="arf_dig_pro_images" class="arfmodal arfhide arffade" style="display:none;left:15%; width:1074px; height:480px;">
    <div class="arfmodal-header">
        <div style="padding-top:20px;font-size:24.5px; color:#FFFFFF; float:left;">Please Select File</div>
        <div style="float:right; padding-top:20px; cursor:pointer;" data-dismiss="arfmodal"><img src="<?php echo ARFURL . '/images/close-button2.png'; ?>" align="absmiddle" /></div>
    </div>
    <div class="arfmodal-body" style="height:355px; overflow:hidden; clear:both;">
        <div id="arf_media_upload_iframeContent"></div>
        <!--iframe id="arfdevicepreview" src="media-upload.php?post_id=0&type=image" frameborder="0" height="100%" width="100%"></iframe-->
    </div>
</div>