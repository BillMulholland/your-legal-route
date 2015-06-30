<?php

class arf_dig_pro_editor_product {

    function arf_dig_pro_editor_product() {

        add_action('arfafterbasicfieldlisting', array(&$this, 'arf_add_product_filed'), 11, 2);

        add_filter('arf_all_field_css_class_for_editor', array(&$this, 'arf_get_product_field_class'), 11, 3);

        add_filter('arfavailablefieldsbasicoptions', array(&$this, 'add_availablefieldsbasicoptions'), 10, 3);


        add_action('arfdisplayaddedfields', array(&$this, 'add_product_field_to_editor'), 11);

        add_action('form_fields', array(&$this, 'add_product_field_to_frontend'), 11, 2);

        add_filter('arf_before_createfield', array(&$this, 'arf_product_createfield'), 10, 2);    // Before Create new filed

        add_filter('arfcustomhtml', array(&$this, 'arf_product_lable_hide'), 10, 2);    // Before Create new filed

        add_action('arf_add_more_field_option_in_out_side', array(&$this, 'arf_add_more_product_field'), 10, 2);

        add_filter('arf_save_more_field_from_out_side', array(&$this, 'arf_save_product_field'), 10, 2);    // Before Create new filed

        add_filter('arf_set_field_width_in_outside', array(&$this, 'arf_dig_pro_set_product_field_width'), 10, 3);    // Before Create new filed

        add_filter('arf_add_more_field_options_outside', array(&$this, 'arf_dig_pro_add_product_options'), 10, 2);

        add_filter('arf_disply_required_field_outside', array(&$this, 'arf_dig_pro_hide_required_product_field_icon'), 10, 2);
    }

    function arf_add_product_filed($id = '', $is_ref_form = '', $values = '') {
        global $arf_dig_pro_field_class_name, $arf_dig_pro_new_field_data, $arf_dig_pro_field_image_path, $arf_dig_pro_total_class;

        if (is_rtl()) {
            $floating_style = 'float:right;';
        } else {
            $floating_style = 'float:left;';
        }


        foreach ($arf_dig_pro_new_field_data as $field_key => $field_type) {
            ?>
            <li style=" <?php echo $floating_style; ?> margin-bottom: 10px;width: 139px;" class="frmbutton frm_t<?php echo $field_key ?> <?php echo($arf_dig_pro_total_class % 2 == 0) ? 'arffield_even' : 'arffield_odd'; ?>" id="<?php echo $field_key ?>" >
                <div class="form-field">
                    <div class="icon-bg_<?php echo $arf_dig_pro_field_class_name[$field_key]; ?>"><img src="<?php echo $arf_dig_pro_field_image_path[$field_key]; ?>" /></div>
                    <div class="arrow_<?php echo $arf_dig_pro_field_class_name[$field_key]; ?>"></div>
                    <div class="element-name"><?php echo apply_filters('arfaddnewfieldlinks', $field_type, $id, $field_key); ?></div>
                </div>
            </li>
        <?php } ?>
        <?php
    }

    function arf_get_product_field_class($class) {
        global $arf_dig_pro_field_class_name, $arf_dig_pro_total_class;
        $as_class = array_merge($class, $arf_dig_pro_field_class_name);
        $arf_dig_pro_total_class = count($as_class);
        return $as_class;
    }

    function add_availablefieldsbasicoptions($basic_option) {

        $signature_filed_option = array(ARF_PRODUCT_SLUG => array('labelname' => 1, 'attachfiletoemail' => 2, 'arf_product_exp_time' => 3, 'arf_download_show_link' => 4, 'arf_download_link_content' => 5));

        return array_merge($basic_option, $signature_filed_option);
    }

    function arf_product_createfield($field_data) {

        if ($field_data['type'] == ARF_PRODUCT_SLUG) {
            $field_data['name'] = __('Products', ARF_DP_TEXT_DOMAIN);
        }

        return $field_data;
    }

    function add_product_field_to_editor($field) {
        global $arfajaxurl, $wpdb;
        $field_name = "item_meta[" . $field['id'] . "]";

        require(ARF_DIG_PRO_VIEWS_DIR . '/displayfield_in_editor.php');
    }

    function add_product_field_to_frontend($field, $field_name) {

        global $style_settings, $arfsettings, $arfeditingentry, $arffield;
        $entry_id = $arfeditingentry;

        if ($field['type'] == 'form' and $field['form_select'])
            $dup_fields = $arffield->getAll("fi.form_id='$field[form_select]' and fi.type not in ('break', 'captcha')");

        require(ARF_DIG_PRO_VIEWS_DIR . '/displayfield_in_frontend.php');
    }

    function arf_product_lable_hide($default_html, $type) {
        if ($type == ARF_PRODUCT_SLUG) {
            $default_html = '[input]';
            return $default_html;
        } else {
            return $default_html;
        }
    }

    function arf_add_more_product_field($field, $option) {
        global $armainhelper, $arfieldhelper, $arformcontroller, $arformhelper;


        if ($field['type'] == ARF_PRODUCT_SLUG) {
            ?>
            <style type="text/css">
                #main_fieldoptions_modal_<?php echo $field['id']; ?> .fieldoptions_tab_main #field_custom_css_tab, #main_fieldoptions_modal_<?php echo $field['id']; ?> .fieldoptions_tab_main #field_conditional_law_tab{display:none;}
            </style>
            <?php
        }


        switch ($option) {
            case 'arf_product_exp_time':
                ?>
                <table style="float:left;" border="0" cellpadding="0" cellspacing="0">
                    <tr class="fieldoptions_label_style"><td><?php _e('Download Link Expiration', ARF_DP_TEXT_DOMAIN) ?>:</td></tr>
                    <tr class="fieldoptions_field_style">
                        <td style="float:left">
                            <div style="float:left;">
                                <input id="frm_custom_width_field_<?php echo $field['id'] ?>_div" type="text" style="width:170px;" class="txtstandardnew" name="field_options[arf_product_exp_time_<?php echo $field['id'] ?>]" value="<?php echo esc_attr($field['arf_product_exp_time']); ?>" />
                            </div>
                            <p class="howto clear"><?php _e('How long should download links be valid for? Enter a time in hours', ARF_DP_TEXT_DOMAIN); ?></p>
                        </td>
                    </tr>
                </table>
                <?php
                break;


            case 'arf_download_link_content':


                $htmldesciprion = $armainhelper->esc_textarea($field['arf_download_link_content']);
                ?>
                <table style="float:left; width:100%;" border="0" cellpadding="0" cellspacing="0">
                    <tr class="fieldoptions_label_style"><td><?php _e('Download Link Content', ARF_DP_TEXT_DOMAIN) ?></td></tr>
                    <tr class="fieldoptions_field_style fieldoptions_htmlfield">
                        <td style="float:left;width:100%;">
                            <textarea id="arf_field_description_<?php echo $field['id']; ?>" name="field_options[arf_download_link_content_<?php echo $field['id'] ?>]" class="txtmultinew html_field_description" style="width:98%;" rows="4"><?php echo $htmldesciprion; ?></textarea>
                            <div style="font-size:14px; padding:5px 5px 5px 15px; color:#666;">
                                <?php _e("Donwload Link:  [ARF_download_link product_id='0' desc='download me' type='link']  ", ARF_DP_TEXT_DOMAIN); ?>
                                <p style="margin: 0;" class="howto clear"><?php _e("Note: Possible argument for type argument 1.)type='link' 2.)type='button'.", ARF_DP_TEXT_DOMAIN); ?></p>
                            </div>
                        </td>
                    </tr>
                </table>

                <?php
                break;

            case 'arf_download_show_link':
                ?>
                <table style="float:left; width:100%;"  border="0" cellpadding="0" cellspacing="0">
                    <tr class="fieldoptions_label_style"><td><?php _e('Show download link after form submitted ', 'ARForms') ?>:</td></tr>
                    <tr class="fieldoptions_field_style">
                        <td>
                            <label class="lblswitch"><span>NO&nbsp;</span></label><input type="checkbox" class="js-switch" name="field_options[arf_download_show_link_<?php echo $field['id'] ?>]" id="field_options[attach_<?php echo $field['id'] ?>]"  <?php echo (isset($field['arf_download_show_link']) and $field['arf_download_show_link']) ? 'checked="checked"' : ''; ?> value="1" /><label class="lblswitch"><span>&nbsp;YES</span></label>
                            <p class="howto clear"></p>
                        </td>
                    </tr>
                </table>
                <?php
                break;




            default:
        }
    }

    function arf_save_product_field($field_array) {

        return array_merge($field_array, array('arf_product_exp_time', 'arf_download_link_content', 'arf_download_show_link'));
    }

    function arf_dig_pro_set_product_field_width($mainwidth, $fieldname, $field) {

        if ($field['type'] == ARF_PRODUCT_SLUG) {
            if ($fieldname == 'arf_download_link_content') {
                $mainwidth = '100%';
            }
            if ($fieldname == 'arf_download_show_link') {
                $mainwidth = '39%';
            }
        }
        return $mainwidth;
    }

    function arf_dig_pro_add_product_options($field_options, $type) {
        return array_merge($field_options, array(
            'arf_product_exp_time' => '24',
            'arf_download_link_content' => __(" Please download your product by clicking below link  [ARF_download_link  product_id='0' desc='Download'  type='link' ]", ARF_DP_TEXT_DOMAIN),
            'arf_download_show_link' => true,
        ));
    }

    function arf_dig_pro_hide_required_product_field_icon($arf_disply_required_field, $field) {

        if ($field['type'] == ARF_PRODUCT_SLUG) {
            $arf_disply_required_field = false;
        }
        return $arf_disply_required_field;
    }

}
?>