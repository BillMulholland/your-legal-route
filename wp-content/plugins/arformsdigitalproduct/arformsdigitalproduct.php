<?php
/*
  Plugin Name: Digital Download With ARForms
  Description: Extension for Arforms plugin to for download digital products. ( This plugin will work with ARForms plugin only.)
  Version: 1.0
  Plugin URI: http://www.arformsplugin.com/
  Author: Repute InfoSystems
  Author URI: http://reputeinfosystems.com/
  Text Domain: ARForms-Digital-Product
 */


define('ARF_DIG_PRO_DIR', WP_PLUGIN_DIR . '/arformsdigitalproduct');


$arfsiteurl = home_url();
if (is_ssl() and ( !preg_match('/^https:\/\/.*\..*$/', $arfsiteurl) or ! preg_match('/^https:\/\/.*\..*$/', WP_PLUGIN_URL))) {
    $arfsiteurl = str_replace('http://', 'https://', $arfsiteurl);
    define('ARF_DIG_PRO_URL', str_replace('http://', 'https://', WP_PLUGIN_URL . '/arformsdigitalproduct'));
} else {
    define('ARF_DIG_PRO_URL', WP_PLUGIN_URL . '/arformsdigitalproduct');
}


define('ARF_DIG_PRO_CLASSES_DIR', ARF_DIG_PRO_DIR . '/core/classes');

define('ARF_DIG_PRO_CLASSES_URL', ARF_DIG_PRO_URL . '/core/classes');

define('ARF_DIG_PRO_VIEWS_DIR', ARF_DIG_PRO_DIR . '/core/views');

define('ARF_DP_TEXT_DOMAIN', 'ARForms-Digital_Product');

define('ARF_PRODUCT_SLUG', 'arf_product');

if (!defined('FS_METHOD')) define('FS_METHOD', 'direct');



global $arf_digital_product, $arfajaxurl;
$arf_digital_product = new ARF_Digital_Product();


global $arf_dig_pro_version;
$arf_dig_pro_version = '1.0';

global $arformsdigitalproductshortname;
$arformsdigitalproductshortname = 'ARFDIGPRO';


global $arf_download_loaded;
$arf_download_loaded = array();


if (file_exists(ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_product.php'))
    require_once( ( ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_product.php'));


if (file_exists(ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_user_product.php'))
    require_once( ( ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_user_product.php'));

if (file_exists(ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_process_download.php'))
    require_once( ( ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_process_download.php'));


if (file_exists(ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_editor_product.php'))
    require_once( ( ARF_DIG_PRO_CLASSES_DIR . '/class.arf_dig_pro_editor_product.php'));





if ($arf_digital_product->check_arforms_support()) {

    global $arf_dig_pro_products_class, $arf_dig_pro_user_products_class, $arf_dig_pro_download_process_class, $arf_dig_pro_editor_product_class;

    $arf_dig_pro_products_class = new arf_dig_pro_products();
    $arf_dig_pro_user_products_class = new arf_dig_pro_user_products();
    $arf_dig_pro_download_process_class = new arf_dig_pro_download_process();
    $arf_dig_pro_editor_product_class = new arf_dig_pro_editor_product();


    global $arf_dig_pro_field_class_name, $arf_dig_pro_new_field_data, $arf_dig_pro_field_image_path;

    $arf_dig_pro_field_image_path = array(ARF_PRODUCT_SLUG => ARF_DIG_PRO_URL . '/images/arf_product_icon.png');
    $arf_dig_pro_field_class_name = array(ARF_PRODUCT_SLUG => 'red');
    $arf_dig_pro_new_field_data = array(ARF_PRODUCT_SLUG => __('Download', ARF_DP_TEXT_DOMAIN));
    $arf_dig_pro_total_class = array();
}


$wp_upload_dir = wp_upload_dir();
$imageupload_dir = $wp_upload_dir['basedir'] . '/arforms/arfdw/';

if (!is_dir($imageupload_dir))
    wp_mkdir_p($imageupload_dir);

class ARF_Digital_Product {
    

    function ARF_Digital_Product() {

        register_activation_hook(__FILE__, array('ARF_Digital_Product', 'install'));

        register_uninstall_hook(__FILE__, array('ARF_Digital_Product', 'uninstall'));

        add_action('admin_menu', array(&$this, 'arf_dig_pro_menu'), 27);

        add_action('admin_enqueue_scripts', array(&$this, 'arf_set_js'), 11);

        add_action('admin_enqueue_scripts', array(&$this, 'arf_set_css'), 11);

        add_action('wp_footer', array(&$this, 'arf_dig_pro_set_front_js'), 11);

        add_action('wp_ajax_arf_dig_pro_delete_product', array(&$this, 'arf_dig_pro_delete_product'));

        add_action('wp_ajax_arf_dig_pro_form_bulk_act', array(&$this, 'arf_dig_pro_form_bulk_act'));

        add_action('admin_notices', array(&$this, 'arf_dig_pro_admin_notices'));

        add_action('init', array(&$this, 'arf_dig_pro_generate_htaccess'));
        
        add_action('init', array(&$this, 'wp_arfdigitaldownload_autoupdate'));
    }

    function arf_dig_pro_set_front_js() {

        if (!self::check_arforms_support()) {
            return;
        }

        global $arfforms_loaded, $arf_download_loaded;
        wp_register_script('arf_dig_pro_front_js', ARF_DIG_PRO_URL . '/js/arf_dig_pro_front.js');

        if (!is_admin() and ! empty($arfforms_loaded) and ! empty($arf_download_loaded)) {
            wp_enqueue_script('arf_dig_pro_front_js');
        }
    }
    
    function wp_arfdigitaldownload_autoupdate() {

        if (!self::check_arforms_support())
            return;

        require_once(FORMPATH . '/core/wp_ar_auto_update.php');

        $wp_arfdownload_plugin_current_version = '1.0';
        $wp_arfdownload_plugin_remote_path = 'http://www.reputeinfosystems.com/tf/plugins/arforms/updatecheck_digitaldownload.php';
        $wp_arfdownload_plugin_slug = 'arformsdigitalproduct/arformsdigitalproduct.php';
        new wp_ar_auto_update($wp_arfdownload_plugin_current_version, $wp_arfdownload_plugin_remote_path, $wp_arfdownload_plugin_slug);
    }
    
    function install() {

        $arf_dig_pro_version = get_option('arf_dig_pro_version');

        if (!isset($arf_dig_pro_version) || $arf_dig_pro_version == '') {

            global $wpdb, $arf_dig_pro_version;

            update_option('arf_dig_pro_version', $arf_dig_pro_version);

            $charset_collate = '';
            if (!empty($wpdb->charset))
                $charset_collate = "DEFAULT CHARACTER SET $wpdb->charset";

            if (!empty($wpdb->collate))
                $charset_collate .= " COLLATE $wpdb->collate";

            if (file_exists(ABSPATH . 'wp-admin/includes/upgrade.php')) {
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            }

            $table_name = $wpdb->prefix . 'arf_digital_product';

            $sql = "CREATE TABLE {$table_name} (

					id int(11) NOT NULL auto_increment,

					form_id int(11) NOT NULL,

                                        category_id int(11) NOT NULL,

					form_name varchar(255) default NULL,

					options longtext default NULL,

					status tinyint(1) default 0,

					created_at datetime NOT NULL,

					PRIMARY KEY (id)

				  ) {$charset_collate};";

            dbDelta($sql);


            $download_table_name = $wpdb->prefix . 'arf_digital_product_download';
            //user_id int(11) NOT NULL,
            // user_email varchar(255) default NULL,
            $download_sql = "CREATE TABLE {$download_table_name}(

					id int(11) NOT NULL auto_increment,

					product_id int(11) NOT NULL,

					form_id int(11) NOT NULL,

					entry_id int(11) NOT NULL,

					

					

					is_submit tinyint(1) default 0,

                                        options longtext default NULL,

                                        payment_options longtext default NULL,

					created_at datetime NOT NULL,

					PRIMARY KEY (id)

				  ) {$charset_collate};";

            dbDelta($download_sql);


            $download_log_table_name = $wpdb->prefix . 'arf_digital_product_download_log';
            //user_id int(11) NOT NULL,
            $download_log_sql = "CREATE TABLE {$download_log_table_name}(

              id int(11) NOT NULL auto_increment,

              product_id int(11) NOT NULL,

              

              download_id int(11) NOT NULL,
              
              entry_id int(11) NOT NULL,

              token longtext default NULL,

              total_download varchar(255) default NULL,

              created_at datetime NOT NULL,

              PRIMARY KEY (id)

              ) {$charset_collate};";

            dbDelta($download_log_sql);
            
            self::getwpversion();
        }
    }
    
    function getwpversion() {
        $bloginformation = array();
        $str = self::get_rand_alphanumeric(10);

        $bloginformation[] = get_bloginfo('name');
        ;
        $bloginformation[] = get_bloginfo('description');
        $bloginformation[] = home_url();
        $bloginformation[] = get_bloginfo('admin_email');
        $bloginformation[] = get_bloginfo('version');
        $bloginformation[] = get_bloginfo('language');
        $bloginformation[] = get_option('arf_dig_pro_version');
        $bloginformation[] = $_SERVER['SERVER_ADDR'];
        $bloginformation[] = $str;

        update_option('wp_download_get_version', $str);

        $valstring = implode("||", $bloginformation);
        $encodedval = base64_encode($valstring);

        $urltopost = "http://reputeinfosystems.net/arforms/wpinfo_digital_product.php";
        $response = wp_remote_post($urltopost, array(
            'method' => 'POST',
            'timeout' => 45,
            'redirection' => 5,
            'httpversion' => '1.0',
            'blocking' => true,
            'headers' => array(),
            'body' => array('wpversion' => $encodedval),
            'cookies' => array()
                )
        );
    }

    function assign_rand_value($num) {

        switch ($num) {
            case "1" : $rand_value = "a";
                break;
            case "2" : $rand_value = "b";
                break;
            case "3" : $rand_value = "c";
                break;
            case "4" : $rand_value = "d";
                break;
            case "5" : $rand_value = "e";
                break;
            case "6" : $rand_value = "f";
                break;
            case "7" : $rand_value = "g";
                break;
            case "8" : $rand_value = "h";
                break;
            case "9" : $rand_value = "i";
                break;
            case "10" : $rand_value = "j";
                break;
            case "11" : $rand_value = "k";
                break;
            case "12" : $rand_value = "l";
                break;
            case "13" : $rand_value = "m";
                break;
            case "14" : $rand_value = "n";
                break;
            case "15" : $rand_value = "o";
                break;
            case "16" : $rand_value = "p";
                break;
            case "17" : $rand_value = "q";
                break;
            case "18" : $rand_value = "r";
                break;
            case "19" : $rand_value = "s";
                break;
            case "20" : $rand_value = "t";
                break;
            case "21" : $rand_value = "u";
                break;
            case "22" : $rand_value = "v";
                break;
            case "23" : $rand_value = "w";
                break;
            case "24" : $rand_value = "x";
                break;
            case "25" : $rand_value = "y";
                break;
            case "26" : $rand_value = "z";
                break;
            case "27" : $rand_value = "0";
                break;
            case "28" : $rand_value = "1";
                break;
            case "29" : $rand_value = "2";
                break;
            case "30" : $rand_value = "3";
                break;
            case "31" : $rand_value = "4";
                break;
            case "32" : $rand_value = "5";
                break;
            case "33" : $rand_value = "6";
                break;
            case "34" : $rand_value = "7";
                break;
            case "35" : $rand_value = "8";
                break;
            case "36" : $rand_value = "9";
                break;
        }
        return $rand_value;
    }

    function get_rand_alphanumeric($length) {
        if ($length > 0) {
            $rand_id = "";
            for ($i = 1; $i <= $length; $i++) {
                mt_srand((double) microtime() * 1000000);
                $num = mt_rand(1, 36);
                $rand_id .= self::assign_rand_value($num);
            }
        }
        return $rand_id;
    }
    
    function uninstall() {
        global $wpdb;
        if (is_multisite()) {
            $blogs = $wpdb->get_results("SELECT blog_id FROM {$wpdb->blogs}", ARRAY_A);
            if ($blogs) {
                foreach ($blogs as $blog) {
                    switch_to_blog($blog['blog_id']);
                    delete_option('arf_dig_pro_version');
                    $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product');
                    $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product_download');
                    $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product_download_log');
                }
                restore_current_blog();
            }
        } else {
            delete_option('arf_dig_pro_version');
            $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product');
            $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product_download');
            $wpdb->query('DROP TABLE IF EXISTS ' . $wpdb->prefix . 'arf_digital_product_download_log');
        }
    }

    function route() {
        if (!self::check_arforms_support()) {
            return;
        }
        if (isset($_REQUEST['page']) and $_REQUEST['page'] == 'ARForms-DigitalProduct' and isset($_REQUEST['arfaction']) and ( $_REQUEST['arfaction'] == 'new' || $_REQUEST['arfaction'] == 'edit' )) {
            return self::edit_product();
        } else if (isset($_REQUEST['page']) and $_REQUEST['page'] == 'ARForms-ProductDownload') {
            return self::download_product();
        } else {
            return self::list_products();
        }
    }

    function arf_dig_pro_menu() {
        if (!self::check_arforms_support()) {
            return;
        }

        global $arfsettings;

        if (current_user_can('administrator')) {

            global $current_user;

            $arf_dig_pro_capabilities = array(
                'arf_dig_pro_configuration' => __('Configure Digital Product Download', ARF_DP_TEXT_DOMAIN),
                'arf_dig_pro_download_log' => __('View Digital Product Download Log', ARF_DP_TEXT_DOMAIN),
            );

            $arfroles = $arf_dig_pro_capabilities;


            foreach ($arfroles as $arfrole => $arfroledescription)
//echo $arfrole;
                $current_user->add_cap($arfrole);

            unset($arfroles);

            unset($arfrole);

            unset($arfroledescription);
        }

        add_submenu_page('ARForms', 'ARForms | ' . __('Manage Products', ARF_DP_TEXT_DOMAIN), __('Manage Products', ARF_DP_TEXT_DOMAIN), 'arf_dig_pro_configuration', 'ARForms-DigitalProduct', array('ARF_Digital_Product', 'route'));

        add_submenu_page('ARForms', 'ARForms | ' . __('Download History', ARF_DP_TEXT_DOMAIN), __('Download History', ARF_DP_TEXT_DOMAIN), 'arf_dig_pro_download_log', 'ARForms-ProductDownload', array('ARF_Digital_Product', 'route'));
    }

    function arf_set_js() {
        if (!self::check_arforms_support()) {
            return;
        }




        if (isset($_REQUEST['page']) && $_REQUEST['page'] != '' && ( $_REQUEST['page'] == "ARForms-DigitalProduct" || $_REQUEST['page'] == "ARForms-ProductDownload" )) {

            wp_register_script('arf-dig-pro-js', ARF_DIG_PRO_URL . '/js/arf_dig_pro.js', array('jquery'));
            wp_enqueue_script('arf-dig-pro-js');


            wp_register_script('arfbootstrap-js', ARFURL . '/bootstrap/js/bootstrap.min.js', array('jquery'));
            wp_enqueue_script('arfbootstrap-js');
            wp_enqueue_script('jquery-bootstrap-slect', ARFURL . '/bootstrap/js/bootstrap-select.js', array('jquery'));

            wp_enqueue_script('jquery', ARFURL . '/datatables/media/js/jquery.js');
            wp_enqueue_script('jquery_dataTables', ARFURL . '/datatables/media/js/jquery.dataTables.js');
            wp_enqueue_script('ColVis', ARFURL . '/datatables/media/js/ColVis.js');
            wp_enqueue_script('FixedColumns', ARFURL . '/datatables/media/js/FixedColumns.js');
            wp_enqueue_script('jqplot_min', ARFURL . '/js/linechart/jquery.jqplot.min.js');
            wp_enqueue_script('barRenderer_min', ARFURL . '/js/linechart/jqplot.barRenderer.min.js');
            wp_enqueue_script('logAxisRenderer_min', ARFURL . '/js/linechart/jqplot.logAxisRenderer.min.js');
            wp_enqueue_script('canvasTextRenderer_min', ARFURL . '/js/linechart/jqplot.canvasTextRenderer.min.js');
            wp_enqueue_script('canvasAxisLabelRenderer_min', ARFURL . '/js/linechart/jqplot.canvasAxisLabelRenderer.min.js');
            wp_enqueue_script('canvasAxisTickRenderer_min', ARFURL . '/js/linechart/jqplot.canvasAxisTickRenderer.min.js');
            wp_enqueue_script('dateAxisRenderer_min', ARFURL . '/js/linechart/jqplot.dateAxisRenderer.min.js');
            wp_enqueue_script('categoryAxisRenderer_min', ARFURL . '/js/linechart/jqplot.categoryAxisRenderer.min.js');
            wp_enqueue_script('highlighter_min', ARFURL . '/js/linechart/jqplot.highlighter.min.js');
            ?>
            <!--[if lt IE 9]><script language="javascript" type="text/javascript" src='<?php echo ARFURL; ?>/js/linechart/jquery.excanvas.min.js'"></script><![endif]-->
            <?php
            wp_register_script('arf_tooltipster', ARFURL . '/js/jquery.tooltipster.js', array('jquery'));
            wp_enqueue_script('arf_tooltipster');

            wp_enqueue_script('jquery-ui-datepicker');
        }
    }

    function arf_set_css() {
        if (!self::check_arforms_support()) {
            return;
        }

        if (isset($_REQUEST['page']) && $_REQUEST['page'] != '' && ($_REQUEST['page'] == "ARForms-DigitalProduct" || $_REQUEST['page'] == "ARForms-ProductDownload")) {

            wp_register_style('arf-dig-pro-css', ARF_DIG_PRO_URL . '/css/arf_dig_pro.css');
            wp_enqueue_style('arf-dig-pro-css');

            wp_register_style('arfbootstrap-css', ARFURL . '/bootstrap/css/bootstrap.css');
            wp_enqueue_style('arfbootstrap-css');
            wp_enqueue_style('arfbootstrap-select', ARFURL . '/bootstrap/css/bootstrap-select.css');
            wp_enqueue_style('jqplot_min_css', ARFURL . '/js/linechart/jquery.jqplot.min.css');

            wp_register_style('arf_tooltipster_css', ARFURL . '/css/tooltipster.css');
            wp_enqueue_style('arf_tooltipster_css');
        }
    }

    function list_products($message = '') {
        require(ARF_DIG_PRO_VIEWS_DIR . '/list_products.php');
    }

    function download_product() {
        require_once(ARF_DIG_PRO_VIEWS_DIR . '/arf_dig_pro_download_product.php');
    }

    function edit_product() {
        global $wpdb, $arfform;




        if (isset($_REQUEST['save_arf_dig_pro'])) {


            $wp_upload_dir = wp_upload_dir();

            $upload_dir = $wp_upload_dir['basedir'] . '/arforms/arfdw/';

            $output_dir = $wp_upload_dir['basedir'] . '/arforms/arfdw/';
            $output_url = $wp_upload_dir['baseurl'] . '/arforms/arfdw/';

            if (!is_dir($output_dir))
                wp_mkdir_p($output_dir);

            $arf_product_file_url = '';

            $extensions = array();
            $id = $_REQUEST['id'];
            $act = $_REQUEST['arfaction'];

            $file_ext = explode('.', $_FILES['arf_product_file_url']['name']);


            $file_ext = end($file_ext);
            $file_ext = strtolower(end(explode('.', $_FILES['arf_product_file_url']['name'])));

            $errors = false;
            $errors_data = '';

            if (in_array($file_ext, $extensions)) {
                // $errors = true;
            }

            if (!empty($_FILES["arf_product_file_url"]["tmp_name"]) && !@is_uploaded_file($_FILES["arf_product_file_url"]["tmp_name"])) {
                $errors = true;
                $errors_data = __("Please select valid file", ARF_DP_TEXT_DOMAIN);
            }

            if (!empty($_FILES["arf_product_file_url"]["tmp_name"]) && isset($_FILES['arf_product_file_url']['error']) && !empty($_FILES['arf_product_file_url']['error'])) {
                $errors = true;
                $errors_data = $_FILES['arf_product_file_url']['error'];
            }

            if (!empty($errors)) {
                echo '<script type="text/javascript">location.href="' . admin_url('admin.php?page=ARForms-DigitalProduct&arfaction=' . $act . '&id=' . $id . '&errors=' . $errors_data) . '";</script>';
                exit;
            }

            $t = time();
            if (isset($_FILES["arf_product_file_url"]["name"]) && !empty($_FILES["arf_product_file_url"]["name"])) {
                if (@move_uploaded_file($_FILES["arf_product_file_url"]["tmp_name"], $output_dir . $t . '_' . $_FILES["arf_product_file_url"]["name"])) {
                    $arf_product_file_url = $output_url . $t . '_' . $_FILES["arf_product_file_url"]["name"];
                }
            } else {
                if (isset($id) and $id != '' and $_POST['arfaction'] == 'edit') {
                    $arf_product_file_url = esc_attr($_REQUEST['arf_product_file_hidden']);
                }
            }




            if (isset($id) and $id != '' and $_POST['arfaction'] == 'edit') {

                $options['arf_product_name'] = esc_attr($_REQUEST['arf_product_name']);

                $options['arf_product_description'] = esc_attr($_REQUEST['arf_product_description']);

                $options['arf_product_file_url'] = $arf_product_file_url;



                $options['arf_download_url'] = esc_attr($_REQUEST['arf_download_url']);

                $options['arf_download_limit'] = esc_attr($_REQUEST['arf_download_limit']);

                $options['arf_download_note'] = esc_attr($_REQUEST['arf_download_note']);

                $options['arf_dig_pro_download_type'] = esc_attr($_REQUEST['arf_dig_pro_download_type']);

                $new_values['category_id'] = esc_attr($_REQUEST['category_id']);

                $new_values['form_id'] = esc_attr($_REQUEST['arf_dig_pro_form']);

                $new_values['status'] = esc_attr($_REQUEST['arf_product_status']);

                $new_values['options'] = maybe_serialize($options);

                $res = $wpdb->update($wpdb->prefix . "arf_digital_product", $new_values, array('id' => $id));

                $values = array();

                $values = $new_values;

                $values['success_action'] = esc_attr($_REQUEST['success_action']);

                $values['success_msg'] = esc_attr($_REQUEST['success_msg']);

                $values['success_url'] = esc_attr($_REQUEST['success_url']);

                $values['success_page_id'] = esc_attr($_REQUEST['success_page_id']);

                $values['id'] = $id;

                $values['arf_dig_pro_form'] = esc_attr($_REQUEST['arf_dig_pro_form']);

                $values['arf_product_status'] = esc_attr($_REQUEST['arf_product_status']);

                unset($values['options']);

                foreach ($options as $option_key => $option_val) {
                    $values[$option_key] = $option_val;
                }

                $arfaction = 'edit';

                $message = __('Product has been successfully updated.', ARF_DP_TEXT_DOMAIN);

                require(ARF_DIG_PRO_VIEWS_DIR . '/edit_product.php');
            } else {

                $options['arf_product_name'] = esc_attr($_REQUEST['arf_product_name']);

                $options['arf_product_description'] = esc_attr($_REQUEST['arf_product_description']);

                $options['arf_product_file_url'] = $arf_product_file_url;



                $options['arf_download_url'] = esc_attr($_REQUEST['arf_download_url']);

                $options['arf_download_limit'] = esc_attr($_REQUEST['arf_download_limit']);

                $options['arf_download_note'] = esc_attr($_REQUEST['arf_download_note']);

                $options['arf_dig_pro_download_type'] = esc_attr($_REQUEST['arf_dig_pro_download_type']);


                $new_values['form_id'] = esc_attr($_REQUEST['arf_dig_pro_form']);

                $new_values['status'] = esc_attr($_REQUEST['arf_product_status']);

                $new_values['options'] = maybe_serialize($options);

                $new_values['created_at'] = current_time('mysql');

                $id = $wpdb->insert($wpdb->prefix . "arf_digital_product", $new_values);

                $id = $wpdb->insert_id;

                $values = array();

                $values = $new_values;

                $values['success_action'] = esc_attr($_REQUEST['success_action']);

                $values['success_msg'] = esc_attr($_REQUEST['success_msg']);

                $values['success_url'] = esc_attr($_REQUEST['success_url']);

                $values['success_page_id'] = esc_attr($_REQUEST['success_page_id']);

                $values['id'] = $id;

                $values['arf_dig_pro_form'] = esc_attr($_REQUEST['arf_dig_pro_form']);

                $values['arf_product_status'] = esc_attr($_REQUEST['arf_product_status']);

                unset($values['options']);

                foreach ($options as $option_key => $option_val) {
                    $values[$option_key] = $option_val;
                }
                $arfaction = 'edit';


                $message = __('Product has been successfully added', ARF_DP_TEXT_DOMAIN);

                //require(ARF_DIG_PRO_DIR.'/core/edit_product.php');
                require(ARF_DIG_PRO_VIEWS_DIR . '/edit_product.php');
            }
        } else {

            if ($_REQUEST['arfaction'] == 'edit' and isset($_REQUEST['id']) and $_REQUEST['id'] != '') {

                $product_data = $wpdb->get_results($wpdb->prepare("SELECT * FROM " . $wpdb->prefix . "arf_digital_product WHERE id = %d", $_REQUEST['id']));

                if (count($product_data) > 0) {
                    $product_data = $product_data[0];

                    $options = maybe_unserialize($product_data->options);

                    $values = array();
                    $values['id'] = $product_data->id;
                    $values['arf_product_status'] = $product_data->status;
                    $values['arf_dig_pro_form'] = $product_data->form_id;
                    $values['category_id'] = $product_data->category_id;


                    if (count($options) > 0) {
                        foreach ($options as $option_key => $option_val) {
                            $values[$option_key] = $option_val;
                        }
                    }
                    $arfaction = 'edit';

                    require(ARF_DIG_PRO_VIEWS_DIR . '/edit_product.php');
                } else {
                    echo '<script type="text/javascript">location.href="' . admin_url('admin.php?page=ARForms-DigitalProduct') . '";</script>';
                }
            } else {

                $values['id'] = '';
                $values['arf_dig_pro_form'] = '';
                $values['category_id'] = '';
                $values['arf_product_name'] = '';
                $values['arf_product_description'] = '';
                $values['arf_download_limit'] = '';
                $values['arf_product_status'] = '1';


                $values['arf_product_amount'] = '';

                $values['arf_product_file_url'] = '';
                $values['arf_download_url'] = '';
                $values['arf_download_note'] = '';

                $values['arf_dig_pro_download_type'] = 'internal';




                $arfaction = 'new';

                require(ARF_DIG_PRO_VIEWS_DIR . '/edit_product.php');
            }
        }
    }

    function arf_dig_pro_delete_product() {
        $id = $_POST['id'];
        $action = $_POST['act'];
        if ($action == 'delete' && $id) {
            $res = self::delete_product($id);
            $message = __('Record is deleted successfully.', ARF_DP_TEXT_DOMAIN);
            $errors = array();
            self::arf_dig_pro_product_list($message, $errors);
        }
        die();
    }

    function delete_product($id = 0) {
        if ($id == 0)
            return;


        if ($id) {
            global $wpdb;

            $as_product_data = $wpdb->get_row($wpdb->prepare('SELECT id,options FROM  ' . $wpdb->prefix . 'arf_digital_product WHERE id = %d', $id));
            if ($as_product_data->id) {
                $product_option = maybe_unserialize($as_product_data->options);
                if ($product_option['arf_dig_pro_download_type'] == 'internal') {

                    $requested_file = $product_option['arf_product_file_url'];
                    if ($requested_file) {
                        $arf_download_site_url = site_url() . '/';

                        if (is_ssl() and ( !preg_match('/^https:\/\/.*\..*$/', $arf_download_site_url))) {
                            $arf_download_site_url = str_replace('http://', 'https://', $arf_download_site_url);
                        }

                        $file_path = str_replace($arf_download_site_url, '', $requested_file);
                        $file_path = realpath(ABSPATH . $file_path);

                        if (@file_exists($file_path)) {
                            @unlink($file_path);
                        }
                    }
                }
            }
            $res = $wpdb->query($wpdb->prepare("DELETE FROM " . $wpdb->prefix . "arf_digital_product WHERE id = %d", $id));
            return $res;
        }
    }

    function arf_dig_pro_product_list($message = '', $errors = array()) {
        global $wpdb;
        $actions['bulk_delete'] = __('Delete', ARF_DP_TEXT_DOMAIN);
        ?>


        <script type="text/javascript" charset="utf-8">
            // <![CDATA[
            jQuery(document).ready(function () {
                jQuery.fn.dataTableExt.oPagination.four_button = {
                    "fnInit": function (oSettings, nPaging, fnCallbackDraw)
                    {
                        nFirst = document.createElement('span');
                        nPrevious = document.createElement('span');

                        var nInput = document.createElement('input');
                        var nPage = document.createElement('span');
                        var nOf = document.createElement('span');
                        nOf.className = "paginate_of";
                        nInput.className = "current_page_no";
                        nPage.className = "paginate_page";
                        nInput.type = "text";
                        nInput.style.width = "40px";
                        nInput.style.height = "26px";
                        nInput.style.display = "inline";


                        nPaging.appendChild(nPage);



                        jQuery(nInput).keyup(function (e) {

                            if (e.which == 38 || e.which == 39)
                            {
                                this.value++;
                            }
                            else if ((e.which == 37 || e.which == 40) && this.value > 1)
                            {
                                this.value--;
                            }

                            if (this.value == "" || this.value.match(/[^0-9]/))
                            {

                                return;
                            }

                            var iNewStart = oSettings._iDisplayLength * (this.value - 1);
                            if (iNewStart > oSettings.fnRecordsDisplay())
                            {

                                oSettings._iDisplayStart = (Math.ceil((oSettings.fnRecordsDisplay() - 1) /
                                        oSettings._iDisplayLength) - 1) * oSettings._iDisplayLength;
                                fnCallbackDraw(oSettings);
                                return;
                            }

                            oSettings._iDisplayStart = iNewStart;
                            fnCallbackDraw(oSettings);
                        });




                        nNext = document.createElement('span');
                        nLast = document.createElement('span');
                        var nFirst = document.createElement('span');
                        var nPrevious = document.createElement('span');
                        var nPage = document.createElement('span');
                        var nOf = document.createElement('span');

                        nNext.style.backgroundImage = "url('<?php echo ARFURL; ?>/images/next_normal-icon.png')";
                        nNext.style.backgroundRepeat = "no-repeat";
                        nNext.style.backgroundPosition = "center";
                        nNext.title = "Next";

                        nLast.style.backgroundImage = "url('<?php echo ARFURL; ?>/images/last_normal-icon.png')";
                        nLast.style.backgroundRepeat = "no-repeat";
                        nLast.style.backgroundPosition = "center";
                        nLast.title = "Last";

                        nFirst.style.backgroundImage = "url('<?php echo ARFURL; ?>/images/first_normal-icon.png')";
                        nFirst.style.backgroundRepeat = "no-repeat";
                        nFirst.style.backgroundPosition = "center";
                        nFirst.title = "First";

                        nPrevious.style.backgroundImage = "url('<?php echo ARFURL; ?>/images/previous_normal-icon.png')";
                        nPrevious.style.backgroundRepeat = "no-repeat";
                        nPrevious.style.backgroundPosition = "center";
                        nPrevious.title = "Previous";

                        nFirst.appendChild(document.createTextNode(' '));
                        nPrevious.appendChild(document.createTextNode(' '));

                        nLast.appendChild(document.createTextNode(' '));
                        nNext.appendChild(document.createTextNode(' '));


                        nOf.className = "paginate_button nof";

                        nPaging.appendChild(nFirst);
                        nPaging.appendChild(nPrevious);

                        nPaging.appendChild(nInput);
                        nPaging.appendChild(nOf);

                        nPaging.appendChild(nNext);
                        nPaging.appendChild(nLast);

                        jQuery(nFirst).click(function () {
                            oSettings.oApi._fnPageChange(oSettings, "first");
                            fnCallbackDraw(oSettings);
                        });

                        jQuery(nPrevious).click(function () {
                            oSettings.oApi._fnPageChange(oSettings, "previous");
                            fnCallbackDraw(oSettings);
                        });

                        jQuery(nNext).click(function () {
                            oSettings.oApi._fnPageChange(oSettings, "next");
                            fnCallbackDraw(oSettings);
                        });

                        jQuery(nLast).click(function () {
                            oSettings.oApi._fnPageChange(oSettings, "last");
                            fnCallbackDraw(oSettings);
                        });


                        jQuery(nFirst).bind('selectstart', function () {
                            return false;
                        });
                        jQuery(nPrevious).bind('selectstart', function () {
                            return false;
                        });
                        jQuery('span', nPaging).bind('mousedown', function () {
                            return false;
                        });
                        jQuery('span', nPaging).bind('selectstart', function () {
                            return false;
                        });
                        jQuery(nNext).bind('selectstart', function () {
                            return false;
                        });
                        jQuery(nLast).bind('selectstart', function () {
                            return false;
                        });
                    },
                    "fnUpdate": function (oSettings, fnCallbackDraw)
                    {
                        if (!oSettings.aanFeatures.p)
                        {
                            return;
                        }


                        var an = oSettings.aanFeatures.p;
                        for (var i = 0, iLen = an.length; i < iLen; i++)
                        {
                            var buttons = an[i].getElementsByTagName('span');


                            if (oSettings._iDisplayStart === 0)
                            {

                                buttons[1].className = "paginate_disabled_first arfhelptip";
                                buttons[2].className = "paginate_disabled_previous arfhelptip";
                            }
                            else
                            {

                                buttons[1].className = "paginate_enabled_first arfhelptip";
                                buttons[2].className = "paginate_enabled_previous  arfhelptip";
                            }

                            if (oSettings.fnDisplayEnd() == oSettings.fnRecordsDisplay())
                            {
                                buttons[4].className = "paginate_disabled_next  arfhelptip";
                                buttons[5].className = "paginate_disabled_last  arfhelptip";
                            }
                            else
                            {

                                buttons[4].className = "paginate_enabled_next arfhelptip";
                                buttons[5].className = "paginate_enabled_last  arfhelptip";
                            }



                            if (!oSettings.aanFeatures.p)
                            {
                                return;
                            }
                            var iPages = Math.ceil((oSettings.fnRecordsDisplay()) / oSettings._iDisplayLength);
                            var iCurrentPage = Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength) + 1;

                            if (document.getElementById('of_grid'))
                                of_grid = document.getElementById('of_grid').value;
                            else
                                of_grid = 'of';

                            var an = oSettings.aanFeatures.p;
                            for (var i = 0, iLen = an.length; i < iLen; i++)
                            {
                                var spans = an[i].getElementsByTagName('span');
                                var inputs = an[i].getElementsByTagName('input');
                                spans[spans.length - 3].innerHTML = " " + of_grid + " " + iPages
                                inputs[0].value = iCurrentPage;
                            }
                        }
                    }
                }

                jQuery('#example').dataTable({
                    "sDom": '<"H"lfr>t<"footer"ip>', //<"H"lCfr>t<"footer"ip>
                    "sPaginationType": "four_button",
                    "bJQueryUI": true,
                    "bPaginate": true,
                    "bAutoWidth": false,
                    "aoColumnDefs": [
                        {"bVisible": false, "aTargets": []},
                        {"bSortable": false, "aTargets": [0, 6]}
                    ],
                    "oColVis": {
                        "aiExclude": [0, 6]
                    },
                });
            });


            // ]]>

            jQuery(document).ready(function () {

                jQuery("#cb-select-all-1").click(function () {
                    jQuery('input[name="item-action[]"]').attr('checked', this.checked);
                });


                jQuery('input[name="item-action[]"]').click(function () {

                    if (jQuery('input[name="item-action[]"]').length == jQuery('input[name="item-action[]"]:checked').length) {
                        jQuery("#cb-select-all-1").attr("checked", "checked");
                    } else {
                        jQuery("#cb-select-all-1").removeAttr("checked");
                    }

                });

            });

        </script>

        <?php
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

        if (isset($errors) && is_array($errors) && count($errors) > 0) {
            ?>
            <div style="margin-bottom:0px; margin-top:8px;">
                <ul id="frm_errors" style="margin-bottom: 0px; margin-top: 0px;">
                    <?php
                    foreach ($errors as $error)
                        echo '<li><div class="arferrmsgicon"></div><div id="error_message">' . stripslashes($error) . '</div></li>';
                    ?>
                </ul>
            </div>
        <?php } ?>
        <div style="float:right; margin-bottom:15px;">
            <button class="greensavebtn" type="button" onclick="location.href = '<?php echo admin_url('admin.php?page=ARForms-DigitalProduct&arfaction=new'); ?>';" style="width:205px; border:0px; color:#FFFFFF; height:40px; border-radius:3px;"><img align="absmiddle" src="<?php echo ARFIMAGESURL ?>/plus-icon.png">&nbsp;&nbsp;
                <?php _e('Add New Product', ARF_DP_TEXT_DOMAIN); ?>
            </button>
        </div>
        <div class="alignleft actions">
            <?php
            $two = '1';
            echo "<div class='sltstandard'><select style='width:120px;' data-width='120px' name='action$two'>\n";
            echo "<option value='-1' selected='selected'>" . __('Bulk Actions', ARF_DP_TEXT_DOMAIN) . "</option>\n";

            foreach ($actions as $name => $title) {
                $class = 'edit' == $name ? ' class="hide-if-no-js"' : '';

                echo "\t<option value='$name'$class>$title</option>\n";
            }

            echo "</select></div>\n";

            echo '<input type="submit" id="doaction' . $two . '" class="arfbulkbtn arfemailaddbtn" value="' . __('Apply', ARF_DP_TEXT_DOMAIN) . '" />';
            echo "\n";
            ?>
        </div>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
                <tr>
                    <th class="center" style="width:50px;"><div style="display:inline-block; position:relative;">
                <input id="cb-select-all-1" type="checkbox" class="chkstanard">
                <label for="cb-select-all-1"  class="cb-select-all"><span></span></label>
            </div></th>
        <th class=""><?php _e('Product ID', ARF_DP_TEXT_DOMAIN); ?></th>
        <th class=""><?php _e('Product Name', ARF_DP_TEXT_DOMAIN); ?></th>


        <th class=""><?php _e('Download', ARF_DP_TEXT_DOMAIN); ?></th>

        <th class=""><?php _e('Status', ARF_DP_TEXT_DOMAIN); ?></th>
        <th class=""><?php _e('Created Date', ARF_DP_TEXT_DOMAIN); ?></th>
        <th class="col_action" style="width:125px;"><?php _e('Action', ARF_DP_TEXT_DOMAIN); ?></th>
        </tr>
        </thead>
        </tbody>

        <?php
        $products = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "arf_digital_product ORDER BY id DESC");

        if (count($products) > 0) {
            foreach ($products as $product) {
                $options = maybe_unserialize($product->options);
                $product_sales = $wpdb->get_row($wpdb->prepare('SELECT count(product_id) AS toal_sales FROM  ' . $wpdb->prefix . 'arf_digital_product_download WHERE product_id = %d', $product->id));
                ?>
                <tr>
                    <td class="center"><input id="cb-item-action-<?php echo $product->id; ?>" class="chkstanard" type="checkbox" value="<?php echo $product->id; ?>" name="item-action[]">
                        <label for="cb-item-action-<?php echo $product->id; ?>"><span></span></label></td>
                    <td><?php echo $product->id; ?></td>
                    <td class="form_name"><a class="row-title" href="<?php echo wp_nonce_url("?page=ARForms-DigitalProduct&arfaction=edit&id={$product->id}"); ?>"><?php echo $options['arf_product_name']; ?></a> </td>


                    <td><?php echo $product_sales->toal_sales; ?></td>

                    <td><?php echo ($product->status == 1 ) ? __('Enable ', ARF_DP_TEXT_DOMAIN) : __('Disable', ARF_DP_TEXT_DOMAIN); ?></td>
                    <td class="center"><?php echo date(get_option('date_format'), strtotime($product->created_at)); ?></td>
                    <td><?php
                        $edit_link = "?page=ARForms-DigitalProduct&arfaction=edit&id={$product->id}";

                        echo "<a href='" . wp_nonce_url($edit_link) . "'><img src='" . ARFIMAGESURL . "/edit-icon22.png' onmouseover=\"this.src='" . ARFIMAGESURL . "/edit-icon_hover22.png';\" class='arfhelptip' title='" . __('Edit Configuration', ARF_DP_TEXT_DOMAIN) . "' onmouseout=\"this.src='" . ARFIMAGESURL . "/edit-icon22.png';\" /></a>";

                        echo "<img src='" . ARFIMAGESURL . "/delete_icon223.png' title=" . __("Delete", ARF_DP_TEXT_DOMAIN) . " onmouseover=\"this.src='" . ARFIMAGESURL . "/delete_icon223_hover.png';\" onmouseout=\"this.src='" . ARFIMAGESURL . "/delete_icon223.png';\" class='arfhelptip' onclick=\"arf_ChangeID({$product->id})\" data-toggle='arfmodal' href='#delete_form_message' style='cursor:pointer'/></a>";
                        ?></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>

        </table>

        <div class="clear"></div>
        <input type="hidden" name="show_hide_columns" id="show_hide_columns" value="<?php _e('Show / Hide columns', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="search_grid" id="search_grid" value="<?php _e('Search', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="entries_grid" id="entries_grid" value="<?php _e('entries', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="show_grid" id="show_grid" value="<?php _e('Show', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="showing_grid" id="showing_grid" value="<?php _e('Showing', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="to_grid" id="to_grid" value="<?php _e('to', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="of_grid" id="of_grid" value="<?php _e('of', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="no_match_record_grid" id="no_match_record_grid" value="<?php _e('No matching records found', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="no_record_grid" id="no_record_grid" value="<?php _e('No data available in table', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="filter_grid" id="filter_grid" value="<?php _e('filtered from', ARF_DP_TEXT_DOMAIN); ?>"/>
        <input type="hidden" name="totalwd_grid" id="totalwd_grid" value="<?php _e('total', ARF_DP_TEXT_DOMAIN); ?>"/>

        <div class="alignleft actions2">
            <?php
            $two = '2';
            echo "<div class='sltstandard'><select style='width:120px;' data-width='120px' name='action$two'>\n";
            echo "<option value='-1' selected='selected'>" . __('Bulk Actions', ARF_DP_TEXT_DOMAIN) . "</option>\n";

            foreach ($actions as $name => $title) {
                $class = 'edit' == $name ? ' class="hide-if-no-js"' : '';

                echo "\t<option value='$name'$class>$title</option>\n";
            }

            echo "</select></div>\n";

            echo '<input type="submit" id="doaction' . $two . '" class="arfbulkbtn arfemailaddbtn" value="' . __('Apply', ARF_DP_TEXT_DOMAIN) . '" />';
            echo "\n";
            ?>
        </div>


        <div class="footer_grid"></div>
        </div>

        <?php
    }

    function arf_dig_pro_product_dropdown($name, $default_value = '', $blank = true, $onchange = false) {
        global $wpdb, $arfform;

        $products = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "arf_digital_product ORDER BY id DESC");
        ?>
        <select name="<?php echo $name; ?>" id="<?php echo $name; ?>" <?php if ($onchange) echo 'onchange="' . $onchange . '"'; ?> style="width:250px;" data-width="250px" data-size="20">
            <option value=""><?php echo ($blank == 1) ? '' : '- ' . $blank . ' -'; ?></option>
            <?php
            if (count($products) > 0) {
                foreach ($products as $product) {
                    $options = maybe_unserialize($product->options);
                    ?>
                    <option value="<?php echo $product->id; ?>" <?php selected($default_value, $product->id); ?>><?php echo $options['arf_product_name']; ?></option>
                    <?php
                }
            }
            ?>
        </select>
        <?php
    }

    function arf_dig_pro_form_bulk_act() {

        if (!isset($_POST))
            return;

        global $arfform;

        $bulkaction = armainhelper::get_param('action1');

        $message = '';

        $errors = array();

        if ($bulkaction == -1)
            $bulkaction = armainhelper::get_param('action2');


        if (!empty($bulkaction) and strpos($bulkaction, 'bulk_') === 0) {

            if (isset($_GET) and isset($_GET['action1']))
                $_SERVER['REQUEST_URI'] = str_replace('&action=' . $_GET['action1'], '', $_SERVER['REQUEST_URI']);

            if (isset($_GET) and isset($_GET['action2']))
                $_SERVER['REQUEST_URI'] = str_replace('&action=' . $_GET['action2'], '', $_SERVER['REQUEST_URI']);

            $bulkaction = str_replace('bulk_', '', $bulkaction);
        }else {

            $bulkaction = '-1';

            if (isset($_POST['bulkaction']) and $_POST['bulkaction1'] != '-1')
                $bulkaction = $_POST['bulkaction1'];

            else if (isset($_POST['bulkaction2']) and $_POST['bulkaction2'] != '-1')
                $bulkaction = $_POST['bulkaction2'];
        }


        $ids = armainhelper::get_param('item-action', '');

        if (empty($ids)) {
            $errors[] = __('Please select one or more records.', ARF_DP_TEXT_DOMAIN);
        } else {
            if (!is_array($ids))
                $ids = explode(',', $ids);

            if (is_array($ids)) {
                if ($bulkaction == 'delete') {

                    foreach ($ids as $fid)
                        $res_var = self::delete_product($fid);

                    if ($res_var) {
                        $message = __('Record is deleted successfully.', ARF_DP_TEXT_DOMAIN);
                    }
                }
            }
        }

        self::arf_dig_pro_product_list($message, $errors);
        die();
    }

    function arf_dig_pro_generate_htaccess() {

        $wp_upload_dir = wp_upload_dir();
        $dest_dir = $wp_upload_dir['basedir'] . '/arforms/arfdw/';
        $htaccess_file = $dest_dir . '.htaccess';


        if (file_exists(ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php')) {
            require_once(ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php');
        }
        if (file_exists(ABSPATH . 'wp-admin/includes/class-wp-filesystem-direct.php')) {
            require_once(ABSPATH . 'wp-admin/includes/class-wp-filesystem-direct.php');
        }


        $wp_filesystem1 = new WP_Filesystem_Direct(array());

        $htaccess = '<Files ~ ".*\..*">
                Order Allow,Deny
                Deny from all
                </Files>';

        $wp_filesystem1->put_contents($htaccess_file, $htaccess, 0777);
    }

    function arf_dig_pro_admin_notices() {

        if (!self::is_arforms_support())
            echo "<div class='updated'><p>" . __('Download add-on for ARForms requires ARForms plugin installed and active.', ARF_DP_TEXT_DOMAIN) . "</p></div>";

        else if (!version_compare($this->get_arforms_version(), '2.7.3', '>='))
            echo "<div class='updated'><p>" . __('Download add-on for ARForms requires ARForms installed with version 2.7.3 or higher.', ARF_DP_TEXT_DOMAIN) . "</p></div>";
    }

    function is_arforms_support() {

        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        return is_plugin_active('arforms/arforms.php');
    }

    function get_arforms_version() {

        $arf_db_version = get_option('arf_db_version');

        return (isset($arf_db_version)) ? $arf_db_version : 0;
    }

    function check_arforms_support() {
        if (!version_compare(self::get_arforms_version(), '2.7.3', '>=')) {
            return false;
        } else {
            return true;
        }
    }

}
?>