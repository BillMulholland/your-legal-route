<?php

class arf_dig_pro_download_process {

    public $donwload_log = 0;

    function arf_dig_pro_download_process() {

        add_action('init', array(&$this, 'arf_dig_pro_process_download'), 100);

        add_action('admin_init', array(&$this, 'arf_dig_pro_download_for_admin'), 1);
    }

    function arf_dig_pro_process_download() {



        global $wpdb, $arf_dig_pro_products_class, $arfrecordmeta, $arfsettings, $arffield;

        if (isset($_GET['arf_dig_pro_action']) && !empty($_GET['arf_dig_pro_action']) && $_GET['arf_dig_pro_action'] == $arf_dig_pro_products_class->user_download_slug && isset($_GET['arf_token']) && !empty($_GET['arf_token'])) {

            $user = rawurldecode($_GET['user']);
            $as_user = explode(":", $user);
            $download_id = $as_user[0];
            //$user_id = $as_user[1];
            $entry_id = $as_user[1];
            $token = trim($_GET['arf_token']);

            $as_download_product = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product_download_log WHERE download_id = %d AND entry_id = %d AND token = %s', array($download_id, $entry_id, $token)));


            if (!empty($as_download_product->download_id) && !empty($entry_id) && $as_download_product->entry_id == $entry_id) {

                $download_link_expiration = true;
                $entry_ids = array($entry_id);
                $values = $arfrecordmeta->getAll("it.field_id != 0 and it.entry_id in (" . implode(',', $entry_ids) . ")", " ORDER BY fi.field_order");

                $field_id = $product_exp = '';
                foreach ($values as $field) {
                    if ($field->field_type == ARF_PRODUCT_SLUG && trim($field->entry_value) == trim($as_download_product->product_id)) {
                        $field_id = $field->field_id;
                        break;
                    }
                }

                if (!empty($field_id)) {
                    $field = $arffield->getOne($field_id);
                    $filed_option = $field->field_options;
                    $product_exp = $filed_option['arf_product_exp_time'];
                }
                if ($product_exp) {
                    $date1 = $as_download_product->created_at;
                    $date2 = current_time('mysql');
                    $diff = strtotime($date2) - strtotime($date1);
                    $diff_in_hrs = $diff / 3600;

                    if ($product_exp > $diff_in_hrs) {
                        $download_link_expiration = true;
                    } else {
                        $download_link_expiration = false;
                    }
                } else {
                    $download_link_expiration = false;
                }



                $as_product_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', $as_download_product->product_id));


                $product_option = maybe_unserialize($as_product_data->options);
             
                if ($product_option['arf_dig_pro_download_type'] == 'internal') {

                    if ($download_link_expiration) {
                        
                        $requested_file = $product_option['arf_product_file_url'];

                        $as_file_extension = explode('.', $requested_file);
                        $file_extension = end($as_file_extension);
                        $ctype = $this->arf_dig_pro_get_file_ctype($file_extension);

                        
                        $new_values['total_download'] = $as_download_product->total_download + 1;
                        if (wp_is_mobile()) {
                            if ($new_values['total_download'] >= 2) {
                                $new_values['token'] = $arf_dig_pro_products_class->arf_dig_pro_generate_token();
                            } else {
                                $new_values['token'] = $as_download_product->token;
                            }
                        } else {
                            $new_values['token'] = $arf_dig_pro_products_class->arf_dig_pro_generate_token();
                        }
                        $_SESSION['arf_product_download'] = array();
                        $id = $wpdb->update($wpdb->prefix . "arf_digital_product_download_log", $new_values, array('id' => $as_download_product->id));



                        @session_write_close();
                        if (function_exists('apache_setenv')) {
                            @apache_setenv('no-gzip', 1);
                        }
                        @ini_set('zlib.output_compression', 'Off');



                        header("Robots: none");
                        header("Content-Type: " . $ctype . "");
                        header("Content-Description: File Transfer");
                        header("Content-Disposition: attachment; filename=\"" . basename($requested_file) . "\"");
                        header("Content-Transfer-Encoding: binary");

                        $arf_download_site_url = site_url() . '/';
                        if (is_ssl() and ( !preg_match('/^https:\/\/.*\..*$/', $arf_download_site_url))) {
                            $arf_download_site_url = str_replace('http://', 'https://', $arf_download_site_url);
                        }
                        $file_path = str_replace($arf_download_site_url, '', $requested_file);
                        $file_path = realpath(ABSPATH . $file_path);

                        header("Content-Length: " . @filesize($file_path));
                        ob_clean();
                        flush();
                        readfile($file_path);
                        exit;

                        wp_die();
                    } else {

                        $error_message = __('Your download link has been expired', ARF_DP_TEXT_DOMAIN);
                        wp_die($error_message);
                    }
                } else {
                    if (isset($product_option['arf_download_url']) && !empty($product_option['arf_download_url'])) {
                        header("Location: " . $product_option['arf_download_url']);
                        exit;
                    } else {
                        $error_message = __('Download url are not found. Please contact to administrator', ARF_DP_TEXT_DOMAIN);
                        wp_die($error_message);
                    }
                }
            } else {
                $error_message = __('You do not have permission to download this file', ARF_DP_TEXT_DOMAIN);
                wp_die($error_message);
            }
            exit;
        }
    }

    function arf_dig_pro_check_download_limit($product_download, $user_download) {

        if ($product_download === '0') {
            return true;
        }

        if ($product_download > $user_download) {
            return true;
        } else {
            return false;
        }
    }

    function arf_dig_pro_get_file_ctype($extension) {
        if (wp_is_mobile()) {
            $ctype = 'application/octet-stream';
        } else {
            $ctype = "application/force-download";
        }

        return apply_filters('arf_dig_pro_file_ctype', $ctype);
    }

    function arf_dig_pro_download_for_admin() {

        if (is_admin()) {

            global $wpdb, $arf_dig_pro_products_class, $arfrecordmeta, $arfsettings, $arffield;

            if (isset($_GET['arf_dig_pro_action_admin']) && !empty($_GET['arf_dig_pro_action_admin']) && $_GET['arf_dig_pro_action_admin'] == $arf_dig_pro_products_class->user_download_slug && isset($_GET['arf_token']) && !empty($_GET['arf_token'])) {

                $user = rawurldecode($_GET['user']);
                $as_user = explode(":", $user);

                $product_id = $as_user[0];

                $entry_id = $as_user[1];
                $token = trim($_GET['arf_token']);


                $as_product_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', $product_id));

                $product_option = maybe_unserialize($as_product_data->options);

                if ($product_option['arf_dig_pro_download_type'] == 'internal') {


                    $requested_file = $product_option['arf_product_file_url'];

                    $as_file_extension = explode('.', $requested_file);
                    $file_extension = end($as_file_extension);
                    $ctype = $this->arf_dig_pro_get_file_ctype($file_extension);

                    if (function_exists('apache_setenv')) {
                        @apache_setenv('no-gzip', 1);
                    }
                    @ini_set('zlib.output_compression', 'Off');

                    header("Robots: none");
                    header("Content-Type: " . $ctype . "");
                    header("Content-Description: File Transfer");
                    header("Content-Disposition: attachment; filename=\"" . basename($requested_file) . "\"");
                    header("Content-Transfer-Encoding: binary");


                    $arf_download_site_url = site_url() . '/';
                    if (is_ssl() and ( !preg_match('/^https:\/\/.*\..*$/', $arf_download_site_url))) {
                        $arf_download_site_url = str_replace('http://', 'https://', $arf_download_site_url);
                    }
                    $file_path = str_replace($arf_download_site_url, '', $requested_file);
                    $file_path = realpath(ABSPATH . $file_path);

                    header("Content-Length: " . filesize($file_path));
                    ob_clean();
                    flush();
                    readfile($file_path);

                    $new_values['total_download'] = $as_download_product->total_download + 1;
                    $new_values['token'] = $arf_dig_pro_products_class->arf_dig_pro_generate_token();

                    $id = $wpdb->update($wpdb->prefix . "arf_digital_product_download_log", $new_values, array('id' => $as_download_product->id));
                    $_SESSION['arf_product_download_temp_download'] = array();
                    wp_die();
                } else {
                    if (isset($product_option['arf_download_url']) && !empty($product_option['arf_download_url'])) {
                        header("Location: " . $product_option['arf_download_url']);
                        wp_die();
                    } else {
                        $error_message = __('Download url are not found. Please contact to administrator', ARF_DP_TEXT_DOMAIN);
                        wp_die($error_message);
                    }
                }
                exit;
            }
        }
    }

}

?>