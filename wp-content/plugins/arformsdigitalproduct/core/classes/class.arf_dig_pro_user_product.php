<?php

class arf_dig_pro_user_products {

    function arf_dig_pro_user_products() {

        add_action('wp_ajax_arf_dig_pro_user_product_bulk_act', array(&$this, 'arf_dig_pro_user_product_bulk_act'));

        add_action('wp_ajax_arf_dig_pro_delete_user_product', array(&$this, 'arf_dig_pro_single_delete_user_product'));
    }

    //function arf_dig_pro_get_user_payment_detail($payment_option, $form_id, $entry_id, $user_id, $download_id) {
    function arf_dig_pro_get_user_payment_detail($payment_option, $form_id, $entry_id, $download_id) {    
        global $wpdb;

        if (empty($form_id) || empty($entry_id) || empty($download_id)) {
            return false;
        }

        $as__transaction = array();
        $as__payment_options = maybe_unserialize($payment_option);

        if (!empty($as__payment_options)) {
            foreach ($as__payment_options as $payment_type => $payment) {
                //Paypal
                if ($payment_type == 'paypal') {
                    if ($payment->form_id == $form_id) {
                        $as__transaction[$download_id]['payment_method'] = __('Paypal', ARF_DP_TEXT_DOMAIN);

                        $as__paypal_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_paypal_order WHERE entry_id = %d AND form_id  = %d', array($entry_id, $form_id)));
                      
                        if ($as__paypal_data) {
                            $as__transaction[$download_id]['txn_id'] = $as__paypal_data->txn_id;
                            if (isset($as__paypal_data->payment_type) and $as__paypal_data->payment_type == 1) {
                                $as__transaction[$download_id]['payment_type'] = __('Donations', ARF_DP_TEXT_DOMAIN);
                            } else if (isset($as__paypal_data->payment_type) and $as__paypal_data->payment_type == 2) {
                                $as__transaction[$download_id]['payment_type'] = __('Subscription', ARF_DP_TEXT_DOMAIN);
                            } else {
                                $as__transaction[$download_id]['payment_type'] = __('Product / Service', ARF_DP_TEXT_DOMAIN);
                            }
                            $as__transaction[$download_id]['payment_status'] = $as__paypal_data->payment_status;
                            $as__transaction[$download_id]['total_amount'] = $as__paypal_data->mc_gross;
                            $as__transaction[$download_id]['currency'] = $as__paypal_data->mc_currency;
                            $as__transaction[$download_id]['created_at'] = (isset($as__paypal_data->created_at) && !empty($as__paypal_data->created_at)) ? date(get_option('date_format'), strtotime($as__paypal_data->created_at)) : '';
                        }
                    }
                }

                //Paypal Pro
                if ($payment_type == 'paypal_pro') {
                    if ($payment->form_id == $form_id) {
                        $as__transaction[$download_id]['payment_method'] = __('Paypal Pro', ARF_DP_TEXT_DOMAIN);
                        $as__paypal_pro_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_paypalpro_order WHERE entry_id = %d AND form_id  = %d', array($entry_id, $form_id)));
                        if ($as__paypal_pro_data) {
                            $as__transaction[$download_id]['txn_id'] = $as__paypal_pro_data->txn_id;
                            if (isset($as__paypal_pro_data->payment_type) and $as__paypal_pro_data->payment_type == 1) {
                                $as__transaction[$download_id]['payment_type'] = __('Donations', ARF_DP_TEXT_DOMAIN);
                            } else if (isset($as__paypal_pro_data->payment_type) and $as__paypal_pro_data->payment_type == 2) {
                                $as__transaction[$download_id]['payment_type'] = __('Subscription', ARF_DP_TEXT_DOMAIN);
                            } else {
                                $as__transaction[$download_id]['payment_type'] = __('Product / Service', ARF_DP_TEXT_DOMAIN);
                            }
                            $as__transaction[$download_id]['payment_status'] = $as__paypal_pro_data->payment_status;
                            $as__transaction[$download_id]['total_amount'] = $as__paypal_pro_data->mc_gross;
                            $as__transaction[$download_id]['currency'] = $as__paypal_pro_data->mc_currency;
                            $as__transaction[$download_id]['created_at'] = (isset($as__paypal_pro_data->created_at) && !empty($as__paypal_pro_data->created_at)) ? date(get_option('date_format'), strtotime($as__paypal_pro_data->created_at)) : '';
                        }
                    }
                }

                //Authorize net
                if ($payment_type == 'authorize_net') {
                    if ($payment->form_id == $form_id) {
                        $as__transaction[$download_id]['payment_method'] = __('Authorize Net', ARF_DP_TEXT_DOMAIN);
                        $as__authorize_net_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_authorizenet_order WHERE entry_id = %d AND form_id  = %d', array($entry_id, $form_id)));
                        if ($as__authorize_net_data) {
                            $as__transaction[$download_id]['txn_id'] = $as__authorize_net_data->txn_id;
                            if (isset($as__paypal_pro_data->payment_type) and $as__authorize_net_data->payment_type == 1) {
                                $as__transaction[$download_id]['payment_type'] = __('Donations', ARF_DP_TEXT_DOMAIN);
                            } else if (isset($as__paypal_pro_data->payment_type) and $as__authorize_net_data->payment_type == 2) {
                                $as__transaction[$download_id]['payment_type'] = __('Subscription', ARF_DP_TEXT_DOMAIN);
                            } else {
                                $as__transaction[$download_id]['payment_type'] = __('Product / Service', ARF_DP_TEXT_DOMAIN);
                            }
                            $as__transaction[$download_id]['payment_status'] = $as__authorize_net_data->payment_status;
                            $as__transaction[$download_id]['total_amount'] = $as__authorize_net_data->mc_gross;
                            $as__transaction[$download_id]['currency'] = $as__authorize_net_data->mc_currency;
                            $as__transaction[$download_id]['created_at'] = (isset($as__authorize_net_data->created_at) && !empty($as__authorize_net_data->created_at)) ? date(get_option('date_format'), strtotime($as__authorize_net_data->created_at)) : '';
                        }
                    }
                }

                //Stripe
                if ($payment_type == 'stripe') {
                    if ($payment->form_id == $form_id) {
                        $as__transaction[$download_id]['payment_method'] = __('Stripe', ARF_DP_TEXT_DOMAIN);
                        $as__stripe_data = $wpdb->get_row($wpdb->prepare('SELECT * FROM  ' . $wpdb->prefix . 'arf_stripe_order WHERE entry_id = %d AND form_id  = %d', array($entry_id, $form_id)));
                        if ($as__stripe_data) {
                            $as__transaction[$download_id]['txn_id'] = $as__stripe_data->txn_id;
                            if (isset($as__paypal_pro_data->payment_type) and $as__paypal_pro_data->payment_type == 1) {
                                $as__transaction[$download_id]['payment_type'] = __('Subscription', ARF_DP_TEXT_DOMAIN);
                            } else {
                                $as__transaction[$download_id]['payment_type'] = __('Product / Service', ARF_DP_TEXT_DOMAIN);
                            }
                            $as__transaction[$download_id]['payment_status'] = $as__stripe_data->payment_status;
                            $as__transaction[$download_id]['total_amount'] = $as__stripe_data->mc_gross;
                            $as__transaction[$download_id]['currency'] = $as__stripe_data->mc_currency;
                            $as__transaction[$download_id]['created_at'] = (isset($as__stripe_data->created_at) && !empty($as__stripe_data->created_at)) ? date(get_option('date_format'), strtotime($as__stripe_data->created_at)) : '';
                        }
                    }
                }
            }
        }

        return $as__transaction;
    }

    function arf_dig_pro_user_product_bulk_act() {

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
                    foreach ($ids as $fid) {
                        $res_var = $this->arf_dig_pro_delete_user_product($fid);
                    }
                    if ($res_var) {
                        $message = __('Record is deleted successfully.', ARF_DP_TEXT_DOMAIN);
                    }
                } else {
                    $errors[] = __('Please select one or more records.', ARF_DP_TEXT_DOMAIN);
                }
            }
        }

        $this->arf_dig_pro_user_product_listing($message, $errors);
        die();
    }

    function arf_dig_pro_user_product_listing($message = '', $errors = array()) {
        global $wpdb, $arf_dig_pro_user_products_class;
        $actions['bulk_delete'] = __('Delete', ARF_DP_TEXT_DOMAIN);
        require_once(ARF_DIG_PRO_VIEWS_DIR . '/arf_dig_pro_download_product_listing.php');
    }

    function arf_dig_pro_single_delete_user_product() {
        $id = $_POST['id'];
        $action = $_POST['act'];
        if ($action == 'delete' && $id) {
            $res = $this->arf_dig_pro_delete_user_product($id);
            $message = __('Record is deleted successfully.', ARF_DP_TEXT_DOMAIN);
            $errors = array();
            $this->arf_dig_pro_user_product_listing($message, $errors);
        }
        die();
    }

    function arf_dig_pro_delete_user_product($id = 0) {
        if ($id == 0)
            return;
        if ($id) {
            global $wpdb;
            $res = $wpdb->query($wpdb->prepare("DELETE FROM " . $wpdb->prefix . "arf_digital_product_download WHERE id = %d", $id));
            return $res;
        }
    }

    function arf_dig_pro_get_download_history_entries_list($download, $as___payment) {

        if (empty($download)) {
            return false;
        }

        if (is_rtl()) {
            $txt_align = 'text-align:right;';
        } else {
            $txt_align = 'text-align:left;';
        }

        $options = maybe_unserialize($download->options);

        $var = '<table class="form-table"><tbody>';

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Download ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->product_id . '</td>';
        $var .= '</tr>';

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Product ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->product_id . '</td>';
        $var .= '</tr>';

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Form ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->form_id . '</td>';
        $var .= '</tr>';

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Entry ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->entry_id . '</td>';
        $var .= '</tr>';

        /*$var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('User ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->user_id . '</td>';
        $var .= '</tr>';*/

        $txn_id = (isset($as___payment[$download->id]['txn_id'])) ? $as___payment[$download->id]['txn_id'] : '';
        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Transaction ID / Subscription ID', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        // $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . if(isset($as___payment[$download->id]['txn_id'])) { $as___payment[$download->id]['txn_id'] } .'</td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $txn_id . '</td>';
        $var .= '</tr>';

        /*$var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('User Mail', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $download->user_email . '</td>';
        $var .= '</tr>';*/

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Product Name', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '"><a class="row-title" href="' . wp_nonce_url("?page=ARForms-DigitalProduct&arfaction=edit&id={$download->product_id}") . '">' . $options['arf_product_name'] . '</a></td>';
        $var .= '</tr>';

       /* $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Image', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">';
        if ($options['arf_product_display_image']) {

            $var .= '<img  height="100" width="100"  src="' . $options['arf_product_display_image'] . '" />';
        }

        $var .= '</td>';
        $var .= '</tr>';*/

        $payment_type = isset($as___payment[$download->id]['payment_type']) ? $as___payment[$download->id]['payment_type'] : '';
        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Payment Type', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $payment_type . '</td>';
        $var .= '</tr>';

        $payment_method = isset($as___payment[$download->id]['payment_method']) ? $as___payment[$download->id]['payment_method'] : '';
        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Payment Method', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $payment_method . '</td>';
        $var .= '</tr>';

        $currency = (isset($as___payment[$download->id]['total_amount']) && isset($as___payment[$download->id]['currency'])) ? $as___payment[$download->id]['total_amount'] . "&nbsp;" . $as___payment[$download->id]['currency'] : '';
        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Amount', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $currency . '</td>';
        $var .= '</tr>';

        $payment_status = isset($as___payment[$download->id]['payment_status']) ? $as___payment[$download->id]['payment_status'] : '';
        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Payment Status', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . $payment_status . '</td>';
        $var .= '</tr>';

        $var .= '<tr class="arfviewentry_row" valign="top">';
        $var .= '<td class="arfviewentry_left" scope="row"><strong>' . __('Created Date', ARF_DP_TEXT_DOMAIN) . ':</strong></td>';
        $var .= '<td  class="arfviewentry_right" style="' . $txt_align . '">' . date(get_option('date_format'), strtotime($download->created_at)) . '</td>';
        $var .= '</tr>';




        $var .= '</tbody></table>';
        return $var;
    }

}

?>