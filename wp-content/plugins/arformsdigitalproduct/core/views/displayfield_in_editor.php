<?php if ($field['type'] == ARF_PRODUCT_SLUG) {  ?>
    <?php $as__products = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "arf_digital_product WHERE status = 1 ORDER BY id  DESC "); ?>
    
    <select name="<?php echo $field_name ?>" id="itemmeta_<?php echo $field['id']; ?>" onchange="arf_dig_pro_changeitemmeta('<?php echo $field['id']; ?>');" >
        <option value=""><?php _e("Please Select Product", ARF_DP_TEXT_DOMAIN); ?></option>
        <?php
        if (!empty($as__products)) {
            foreach ($as__products as $key => $product) {
                $options = maybe_unserialize($product->options);
                ?><option  <?php selected($field['value'], $product->id); ?>  value="<?php echo $product->id; ?>"><?php echo $options['arf_product_name']; ?></option><?php
            }
        }
        ?>
    </select>
    <?php /*
      <input type="hidden" name="<?php echo $field_name ?>" id="itemmeta_<?php echo $field['id']; ?>" onkeyup="arfchangeitemmeta('<?php echo $field['id']; ?>');" value="<?php echo esc_attr($field['default_value']); ?>" class="arf_signature_output" />
     */ ?>

    <script type="text/javascript">
        function arf_dig_pro_changeitemmeta(id)
        {
            if (id == '') {
                return false;
            }

            var product_id = jQuery('#itemmeta_' + id).val();
            var download_content = jQuery("textarea#arf_field_description_" + id).val();

            var res = download_content.split("product_id='");

            if (res[1]) {
                var spce_explode = res[1].split(" ");

                spce_explode[0] = "product_id='" + product_id + "'";

                var spce_impload = spce_explode.join(" ");
                var fynal_donwload_content = res[0] + spce_impload;


                // console.log(fynal_donwload_content);
                //jQuery("textarea#arf_field_description_" + id).text(fynal_donwload_content);
                jQuery("textarea#arf_field_description_" + id).val(fynal_donwload_content);
            }

            

        }
    </script>

<?php } ?>
