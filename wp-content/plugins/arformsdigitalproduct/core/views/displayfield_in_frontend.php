<?php
global $wpdb, $armainhelper, $arfieldhelper, $arformcontroller, $arrecordcontroller;

if ($field['type'] == ARF_PRODUCT_SLUG) {
    ?>
    <!--div class="controls"-->
    <?php
    if (apply_filters('arf_check_for_draw_outside', false, $field)) {
        do_action('arf_drawthisfieldfromoutside', $field);
    } else {
        ?>
        <input type="hidden" name="<?php echo $field_name ?>" value="<?php echo esc_attr($field['value']) ?>" />
        <!-- /div-->
        <?php
    }
    if (!is_admin()) {
        global $arf_download_loaded;
        $arf_download_loaded['field_' . $field['field_key']] = array(
            'id' => $field['id'],
            'form_id' => $field['form_id']
        );
    }
}
?>