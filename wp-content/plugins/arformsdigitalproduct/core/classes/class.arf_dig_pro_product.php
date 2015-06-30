<?php

class arf_dig_pro_products {

    public $product_slug = 'product';
    public $product_normal_view_slug = 'product';
    public $current_user_label = 'Current User';
    public $user_download_slug = 'arf_user_download';
    public $current_user_slug = 'arf_dig_pro_current_user';

    function arf_dig_pro_products() {

        add_action('arfaftercreateentry', array(&$this, 'arf_dig_pro_product_after_create_entry'), 10, 2);

        add_action('arf_after_paypal_successful_paymnet', array(&$this, 'arf_dig_pro_after_paypal_successful_payment'), 10, 3);

        add_filter('arfbefore_autoresponse_send_mail_body', array(&$this, 'arf_dig_pro_before_autoresponse_send_mail_update_mail_body'), 10, 3);

        add_filter('arfbefore_admin_send_mail_body', array(&$this, 'arf_dig_pro_before_admin_send_mail_update_mail_body'), 10, 3);


        add_action('arf_add_auto_response_mail_shortcode_in_out_side', array(&$this, 'arf_dig_pro_add_short_code_in_auto_response'), 10, 3);

        add_action('arf_add_admin_mail_shortcode_in_outside', array(&$this, 'arf_dig_pro_add_short_code_in_admin_mail'), 10, 3);


        add_filter('arfautoresponderattachment', array(&$this, 'arf_dig_pro_send_download_with_mailattachment_touser'), 10, 3);
        
        add_filter( 'arfnotificationattachment', array(&$this, 'arf_dig_pro_send_download_with_mailattachment_touser'), 10, 3 ); // for admin
        
        

        add_action('arfaftercreateentry', array(&$this, 'arf_dig_pro_product_set_session'), 100, 2);

        add_action('arf_predisplay_form', array(&$this, 'arf_before_form_render'), 10, 1); //before form render


        add_action('wp_ajax_arf_dig_pro_get_donwload_link', array(&$this, 'arf_dig_pro_set_donwload_link_in_ajax'));

        add_action('wp_ajax_nopriv_arf_dig_pro_get_donwload_link', array(&$this, 'arf_dig_pro_set_donwload_link_in_ajax'));

        add_filter('arfcontent', array(&$this, 'arf_dig_pro_set_donwload_link_in_normal'), 10, 3);

        add_shortcode('ARF_download_link', array(&$this, 'arf_dig_pro_get_download_html'));

        add_action('arf_after_success_massage', array(&$this, 'arf_dig_pro_set_download_link_success_paypal'), 10, 1);
    }

    function arf_dig_pro_get_download_html($atts) {

        global $post, $wpdb, $arfsettings, $arfrecordmeta, $arffield, $arfform;

        extract(shortcode_atts(array('desc' => 'Download', 'type' => 'link', 'product_id' => '0'), $atts));

        $as_product_download = $_SESSION['arf_product_download'];

        if (isset($as_product_download['form_id']) && !empty($as_product_download['form_id']) && isset($as_product_download['entry_id']) && !empty($as_product_download['entry_id'])) {

            $entry_id = base64_decode(urldecode($as_product_download['entry_id']));
            $form_id = base64_decode(urldecode($as_product_download['form_id']));


            if (isset($product_id) && !empty($product_id)) {

                $as_single_download_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product_download WHERE product_id = %d  AND entry_id = %d',array($product_id, $entry_id) ));


                $download_link = $this->arf_dig_pro_create_download_link($as_single_download_product->id, $as_single_download_product->product_id, $as_single_download_product->entry_id);
                if ($type == 'button') {
                    $onclick = 'onclick=location.href="' . $download_link . '"';
                    $html = '<button id="arf_download_button" class="arf_download_button arf_download_button_' . $form_id . '" ' . $onclick . '  >' . $desc . '</button>';
                } else {
                    $html = '<a  id="arf_download_link"  class="arf-download-link  arf_download_link_' . $form_id . ' " href="' . $download_link . '">' . $desc . '</a>';
                }
            } else {

                $as_download_product = $wpdb->get_results($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product_download WHERE form_id = %d AND entry_id = %d  ORDER BY id DESC', array($form_id, $entry_id)));

                if (!empty($as_download_product)) {

                    foreach ($as_download_product as $k => $download_product) {
                        $download_link = '';
                        $download_link = $this->arf_dig_pro_create_download_link($download_product->id, $download_product->product_id, $download_product->entry_id);
                        if ($type == 'button') {
                            $onclick = 'onclick=location.href="' . $download_link . '"';
                            $html = '<button id="arf_download_button" class="arf_download_button arf_download_button_' . $form_id . '" ' . $onclick . '  >' . $desc . '</button>';
                        } else {
                            $html = '<a  id="arf_download_link"  class="arf-download-link  arf_download_link_' . $form_id . ' " href="' . $download_link . '">' . $desc . '</a>';
                        }
                    }
                }
            }


            if ($html) {
                $download_html = '<div id="arf-download-view" class="arf-download-detail  arf_download_view_' . $form_id . ' ">' . $html . '</div>';
            }


            return $download_html;
        }
    }

    function arf_dig_pro_set_donwload_link_in_normal($saved_message = '', $form = '', $entry_id = '') {

        global $wpdb, $arfsettings, $arfrecordmeta, $arffield;

        $form_options = $form->options;


        $form_css = maybe_unserialize($form->form_css);
        $form_bg = $form_css['arfmainformbgcolorsetting'];

        if (empty($entry_id) || empty($form->id)) {
            return $saved_message;
        }

        if (isset($arfsettings->form_submit_type) && $arfsettings->form_submit_type == '1' && $form_options['success_action'] == 'message') {
            return $saved_message;
        }



        $form_id = $form->id;
        $html = $return = $download_html = '';

        $as_product_download = $_SESSION['arf_product_download'];

        if (isset($as_product_download['form_id']) && !empty($as_product_download['form_id'])) {

            $entry_id1 = base64_decode(urldecode($as_product_download['entry_id']));

            if (base64_decode(urldecode($as_product_download['form_id'])) == $form_id && !empty($entry_id1)) {

                $entry_ids = array($entry_id);
                $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

                foreach ($values as $field) {
                    if ($field->field_type == ARF_PRODUCT_SLUG) {
                        $single_field = $arffield->getOne($field->field_id);
                        if (!empty($single_field->id)) {
                            $filed_option = $single_field->field_options;
                            if (isset($filed_option['arf_download_show_link']) && !empty($filed_option['arf_download_show_link'])) {
                                $download_link_html .= $filed_option['arf_download_link_content'];
                            }
                        }
                    }
                }
            }

            if ($form_options['success_action'] == 'message' && !empty($download_link_html)) {

                if (isset($arfsettings->form_submit_type) && $arfsettings->form_submit_type == '1') {
                    return $saved_message . $download_link_html;
                } else {
                    return $saved_message . "<div style='background:" . $form_bg . "'>" . $download_link_html . "</div>";
                }
            }
        }

        return $saved_message;
    }

    function arf_dig_pro_set_donwload_link_in_ajax() {

        global $wpdb, $arfsettings, $arfrecordmeta, $arffield;
        $html = '';
        $return = '';
        if (isset($arfsettings->form_submit_type) && $arfsettings->form_submit_type == '1') {

            $form_id = (isset($_POST['form_id']) && !empty($_POST['form_id'])) ? $_POST['form_id'] : '';
            if (empty($form_id)) {
                return false;
            }

            $simple_paypal_support = true;
            if (self::is_arforms_paypal_support() && version_compare(self::get_arforms_paypal_version(), '1.2', '>=')) {
                $paypal_form = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "arf_paypal_forms WHERE form_id = %d", $form_id));
                if (!empty($paypal_form->form_id)) {
                    $simple_paypal_support = false;
                }
            }


            $as_product_download = $_SESSION['arf_product_download'];

            if (isset($as_product_download['form_id']) && !empty($as_product_download['form_id']) && $simple_paypal_support) {

                $entry_id1 = base64_decode(urldecode($as_product_download['entry_id']));
                if (base64_decode(urldecode($as_product_download['form_id'])) == $form_id && !empty($entry_id1)) {

                    $entry_id = base64_decode(urldecode($as_product_download['entry_id']));

                    $entry_ids = array($entry_id);
                    $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

                    foreach ($values as $field) {
                        if ($field->field_type == ARF_PRODUCT_SLUG) {
                            $single_field = $arffield->getOne($field->field_id);
                            if (!empty($single_field->id)) {
                                $filed_option = $single_field->field_options;
                                $download_link_html = $filed_option['arf_download_link_content'];
                                if (isset($filed_option['arf_download_show_link']) && !empty($filed_option['arf_download_show_link'])) {
                                    $return .= apply_filters('the_content', $download_link_html);
                                }
                            }
                        }
                    }
                }
            }
        }

        // echo apply_filters('the_content', $download_link_html);
        echo $return;
        die();
    }

    function arf_dig_pro_set_download_link_success_paypal($form) {
        // if($from->id)


        global $wpdb, $arfsettings, $arfrecordmeta, $arffield;

        $form_options = $form->options;


        $form_id = $form->id;
        $html = $return = $download_html = '';

        $as_product_download = $_SESSION['arf_product_download'];


        if (isset($as_product_download['form_id']) && !empty($as_product_download['form_id'])) {

            $entry_id1 = base64_decode(urldecode($as_product_download['entry_id']));


            if (base64_decode(urldecode($as_product_download['form_id'])) == $form_id && !empty($entry_id1)) {

                $entry_ids = array($entry_id1);

                $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

                foreach ($values as $field) {
                    if ($field->field_type == ARF_PRODUCT_SLUG) {
                        $single_field = $arffield->getOne($field->field_id);
                        if (!empty($single_field->id)) {
                            $filed_option = $single_field->field_options;
                            if (isset($filed_option['arf_download_show_link']) && !empty($filed_option['arf_download_show_link'])) {
                                $download_link_html .= $filed_option['arf_download_link_content'];
                            }
                        }
                    }
                }
            }
            echo apply_filters('the_content', $download_link_html);
        }
    }

    function arf_before_form_render($form) {
        global $wpdb;
        $form_id2 = $form->id;
        /* echo '<div id="arf_show_download_link"  style="display:none;"> </div>
          <input type="hidden" class="arf_ajax_url" id="arf_ajax_url" value="' . admin_url('admin-ajax.php') . '" />'; */
        echo '<input type="hidden" class="arf_ajax_url" id="arf_ajax_url" value="' . admin_url('admin-ajax.php') . '" />';
    }

    function arf_dig_pro_product_set_session($entry_id, $form_id) {
        global $wpdb;

        if (isset($entry_id) && !empty($entry_id) && isset($form_id) && !empty($form_id)) {
            $_SESSION['arf_product_download'] = array('form_id' => urlencode(base64_encode($form_id)), 'entry_id' => urlencode(base64_encode($entry_id)));
        }
    }

    function arf_dig_pro_product_after_create_entry($entry_id, $form_id) {

        global $wpdb, $arfrecordmeta, $arfsettings;

        if ($entry_id && $form_id) {


            $entry_ids = array($entry_id);
            $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

            if ($values) {
                $payment_option = $this->arf_dig_pro_get_all_payment_methods($form_id);
                //$current_user = wp_get_current_user();

                foreach ($values as $field) {
                    if ($field->field_type == ARF_PRODUCT_SLUG) {
                        $as__single_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', array($field->entry_value)));
                        if (!empty($as__single_product->id)) {
                            $new_values['product_id'] = $as__single_product->id;
                            $new_values['form_id'] = $form_id;
                            $new_values['entry_id'] = $entry_id;

                            //$new_values['user_id'] = $current_user->ID;
                            //$new_values['user_email'] = $current_user->user_email;

                            $new_values['is_submit'] = $field->field_id;
                            $new_values['options'] = '';
                            $new_values['payment_options'] = maybe_serialize($payment_option);
                            $new_values['created_at'] = current_time('mysql');
                            $id = $wpdb->insert($wpdb->prefix . "arf_digital_product_download", $new_values);
                            if ($id) {
                                
                            }
                        }
                    }
                }
            }
            return true;
        }
    }

    function arf_dig_pro_after_paypal_successful_payment($form_id, $entry_id, $txn_id) {
        if (!$entry_id || !$form_id)
            return;

        global $wpdb, $arfrecordmeta, $arfsettings;

        if ($entry_id && $form_id) {

            if (self::is_arforms_paypal_support() && version_compare(self::get_arforms_paypal_version(), '1.2', '>=')) {

                $paypal_form = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "arf_paypal_forms WHERE form_id = %d", $form_id));

                if (!empty($paypal_form->form_id)) {


                    $entry_ids = array($entry_id);
                    $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

                    if ($values) {

                        $payment_option = $this->arf_dig_pro_get_all_payment_methods($form_id);
                        $current_user = wp_get_current_user();

                        foreach ($values as $field) {
                            if ($field->field_type == ARF_PRODUCT_SLUG) {
                                $as__single_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', array($field->entry_value)));
                                if (!empty($as__single_product->id)) {

                                    $new_values['payment_options'] = maybe_serialize($payment_option);

                                    $id = $wpdb->update($wpdb->prefix . "arf_digital_product_download", $new_values, array('product_id' => $as__single_product->id, 'form_id' => $form_id, 'entry_id' => $entry_id));

                                    if ($id) {
                                        
                                    }
                                }
                            }
                        }
                    }
                } else {
                    return true;
                }
            }


            return true;
        }
    }

    function arf_dig_pro_get_all_payment_methods($form_id) {

        if (empty($form_id)) {
            return false;
        }
        include_once( ABSPATH . 'wp-admin/includes/plugin.php');

        global $wpdb;
        $return = $as__arformspaypal = $as__arformspaypalpro = $as__arformspaypalpro = $as__arformsauthorizenet = $as__stripe = array();

        if (is_plugin_active('arformspaypal/arformspaypal.php')) {
            $as__arformspaypal = $wpdb->get_row($wpdb->prepare('SELECT id, form_id FROM  ' . $wpdb->prefix . 'arf_paypal_forms WHERE form_id  = %d', $form_id));
        }

        if (is_plugin_active('arformspaypalpro/arformspaypalpro.php')) {
            $as__arformspaypalpro = $wpdb->get_row($wpdb->prepare('SELECT id, form_id FROM  ' . $wpdb->prefix . 'arf_paypalpro_forms WHERE form_id  = %d', $form_id));
        }

        if (is_plugin_active('arformsauthorizenet/arformsauthorizenet.php')) {
            $as__arformsauthorizenet = $wpdb->get_row($wpdb->prepare('SELECT id, form_id FROM  ' . $wpdb->prefix . 'arf_authorizenet_forms WHERE form_id  = %d', $form_id));
        }

        if (is_plugin_active('arformsstripe/arformsstripe.php')) {
            $as__stripe = $wpdb->get_row($wpdb->prepare('SELECT id, form_id FROM  ' . $wpdb->prefix . 'arf_stripe_forms WHERE form_id  = %d', $form_id));
        }


        //$return = array('paypal_pro' => $as__arformspaypalpro,'authorize_net' => $as__arformsauthorizenet);

        if (isset($as__arformspaypal) && !empty($as__arformspaypal)) {
            $return['paypal'] = $as__arformspaypal;
        }

        if (isset($as__arformspaypalpro) && !empty($as__arformspaypalpro)) {
            $return['paypal_pro'] = $as__arformspaypalpro;
        }
        if (isset($as__arformsauthorizenet) && !empty($as__arformsauthorizenet)) {
            $return['authorize_net'] = $as__arformsauthorizenet;
        }
        if (isset($as__stripe) && !empty($as__stripe)) {
            $return['stripe'] = $as__stripe;
        }

        return $return;
    }

    function arf_dig_pro_add_short_code_in_auto_response($id, $is_ref_form, $values) {
        ?>
        <div class="arfsettingsubtitle" style="margin: 5px 0 0; font-size: 12px;"><?php _e('Download Products', ARF_DP_TEXT_DOMAIN); ?></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_name product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with download product name. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_download_link product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with product download link. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_download_note product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with download product note. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <?php
    }

    function arf_dig_pro_add_short_code_in_admin_mail($id, $is_ref_form, $values) {
        ?>
        <div class="arfsettingsubtitle" style="margin: 5px 0 0; font-size: 12px;"><?php _e('Download Products', ARF_DP_TEXT_DOMAIN); ?></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_name product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with download product name. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_download_link product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with product download link. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <div class="sub_content"><label class="lblsubtitle"><code>[ARF_product_download_note product_id=XX]</code> - </label><label class="lblsubtitle" style="text-shadow:none;"><?php _e('This will be replaced with download product note. XX will be replaced with product_id.', ARF_DP_TEXT_DOMAIN); ?></label></div>
        <?php
    }

    function arf_dig_pro_before_autoresponse_send_mail_update_mail_body($mail_body, $entry_id, $form_id) {
        global $wpdb;

        $as_download_product = $wpdb->get_results($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product_download WHERE form_id = %d AND entry_id = %d', array($form_id, $entry_id)));

        $product_name = $product_download_file = $product_download_note = '';

        if (!empty($as_download_product)) {

            foreach ($as_download_product as $k => $download_product) {

                $as__single_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d ', array($download_product->product_id)));
                $options = maybe_unserialize($as__single_product->options);

                $download_link = $this->arf_dig_pro_create_download_link($download_product->id, $download_product->product_id, $download_product->entry_id);

                $product_name .= $options['arf_product_name'] . "<br/>";
                $product_download_file .= $download_link . "<br/>";
                $product_download_note .= $options['arf_download_note'] . "<br/>";

                $product_name_mul = $options['arf_product_name'];
                $product_download_mul = $download_link;
                $product_download_note_mul = $options['arf_download_note'];


                if (preg_match('/\[ARF_product_name product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_name product_id=' . $download_product->product_id . ']', $product_name_mul, $mail_body);
                }
                if (preg_match('/\[ARF_product_download_link product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_download_link product_id=' . $download_product->product_id . ']', $product_download_mul, $mail_body);
                }
                if (preg_match('/\[ARF_product_download_note product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_download_note product_id=' . $download_product->product_id . ']', $product_download_note_mul, $mail_body);
                }
                
            }

            return $mail_body;
        } else {

            return $mail_body;
        }
    }

    function arf_dig_pro_before_admin_send_mail_update_mail_body($mail_body, $entry_id, $form_id) {

        global $wpdb;

        $as_download_product = $wpdb->get_results($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product_download WHERE form_id = %d AND entry_id = %d', array($form_id, $entry_id)));

        $product_name = $product_download_file = $product_download_note = '';

        if (!empty($as_download_product)) {
            foreach ($as_download_product as $k => $download_product) {

                $as__single_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d ', array($download_product->product_id)));
                $options = maybe_unserialize($as__single_product->options);

                $download_link = $this->arf_dig_pro_create_download_link($download_product->id, $download_product->product_id, $download_product->entry_id);

                $product_name .= $options['arf_product_name'] . "<br/>";
                $product_download_file .= $download_link . "<br/>";
                $product_download_note .= $options['arf_download_note'] . "<br/>";

                $product_name_mul = $options['arf_product_name'];
                $product_download_mul = $download_link;
                $product_download_note_mul = $options['arf_download_note'];



                if (preg_match('/\[ARF_product_name product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_name product_id=' . $download_product->product_id . ']', $product_name_mul, $mail_body);
                }
                if (preg_match('/\[ARF_product_download_link product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_download_link product_id=' . $download_product->product_id . ']', $product_download_mul, $mail_body);
                }
                if (preg_match('/\[ARF_product_download_note product_id=' . $download_product->product_id . '\]/', $mail_body)) {
                    $mail_body = str_replace('[ARF_product_download_note product_id=' . $download_product->product_id . ']', $product_download_note_mul, $mail_body);
                }
            }

            return $mail_body;
        } else {
            return $mail_body;
        }
    }

    function arf_dig_pro_create_download_link($download_id, $product_id, $entry_id, $type = 'new') {

        if (empty($download_id) || empty($product_id) || empty($entry_id)) {
            return false;
        }
        global $wpdb;
        $download_url = '';
        $new_values = $update_values = array();
        $token = $this->arf_dig_pro_generate_token();

        $download_string .= 'user=' . rawurlencode(sprintf('%d:%d:', $download_id, $entry_id));
        $download_string .= '&arf_dig_pro_action=' . $this->user_download_slug;
        $download_string .= '&arf_token=' . $token;
        $download_string .= '&arf_type=' . $type;

        if ($type == 'update') {
            $update_values['token'] = $token;
            $id = $wpdb->update($wpdb->prefix . "arf_digital_product_download_log", $update_values, array('download_id' => $download_id, 'entry_id' => $entry_id, 'product_id' => $product_id));
        } else {
            $new_values['download_id'] = $download_id;
            // $new_values['user_id'] = $user_id;
            $new_values['entry_id'] = $entry_id;
            $new_values['product_id'] = $product_id;
            $new_values['token'] = $token;
            $new_values['total_download'] = '0';
            $new_values['created_at'] = current_time('mysql');
            $id = $wpdb->insert($wpdb->prefix . "arf_digital_product_download_log", $new_values);
        }
        if ($id) {

            $arf_download_site_url = home_url('index.php');
            if (is_ssl() and ( !preg_match('/^https:\/\/.*\..*$/', $arf_download_site_url))) {
                $arf_download_site_url = str_replace('http://', 'https://', $arf_download_site_url);
            }
            $download_url = $arf_download_site_url . "?" . $download_string;
        }
        return $download_url;
    }

    function arf_dig_pro_generate_token() {

        $ip = 'localhost';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $token = md5(uniqid(mt_rand(), true));
        $arfdwnldtm = time();

        return md5('arftokensecret=' . $ip . '&arfdwnldtoken=' . $token . '&arfdwtm=' . $arfdwnldtm);
    }

    function arf_dig_pro_send_download_with_mailattachment_touser($attachments, $form, $entries = array()) {

        if (!$form)
            return $attachments;

        if (!$entries)
            return $attachments;

        global $wpdb, $arfrecordmeta, $db_record, $arfsettings, $arffield;


        $entry = $entries['entry'];

        $entry_id = $entry->id;

        if (!$entry_id)
            return $attachments;


        $entry_ids = array($entry_id);
        $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

        $field_id = $product_id = '';

        foreach ($values as $field) {


            if ($field->field_type == ARF_PRODUCT_SLUG) {


                $field_id = $field->field_id;
                $product_id = $field->entry_value;

                if (!empty($field_id)) {
                    $field = $arffield->getOne($field_id);
                    $filed_option = $field->field_options;
                }

                if (isset($filed_option['attach']) && !empty($filed_option['attach'])) {

                    $as_product_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', $product_id));
                    $options = maybe_unserialize($as_product_data->options);

                    $file_path = '';
                    if ($options['arf_dig_pro_download_type'] == 'internal') {
                        $file_path = str_replace(site_url(), '', $options['arf_product_file_url']);
                        $file_path = realpath(ABSPATH . $file_path);
                    }

                    if (file_exists($file_path)) {
                        $attachments[] = $file_path;
                    }
                }
            }
        }

        return $attachments;
    }

    function arf_dig_pro_create_download_link_for_admin($product_id, $type = 'new') {
        if (empty($product_id)) {
            return false;
        }

        if (is_admin()) {
            global $wpdb;
            $download_url = '';
            $token = $this->arf_dig_pro_generate_token();
            $download_string .= 'user=' . rawurlencode(sprintf('%d:', $product_id));
            $download_string .= '&arf_dig_pro_action_admin=' . $this->user_download_slug;
            $download_string .= '&arf_token=' . $token;
            $download_string .= '&arf_type=' . $type;

            $download_url = admin_url() . "?" . $download_string;

            return $download_url;
        } else {
            return false;
        }
    }

    function is_arforms_paypal_support() {

        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        return is_plugin_active('arformspaypal/arformspaypal.php');
    }

    function get_arforms_paypal_version() {

        $arf_paypal_db_version = get_option('arf_paypal_version');

        return (isset($arf_paypal_db_version)) ? $arf_paypal_db_version : 0;
    }

}
?>