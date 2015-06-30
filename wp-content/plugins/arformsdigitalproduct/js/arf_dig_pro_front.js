function reset_field_in_outsite(object, result) {

    var form_id = jQuery(object).find('#form_id').val();

    var res = '';
    res = isJSON(result);
    var conf_method = '';
    var resmessage = '';

    data = jQuery.parseJSON(result)

    jQuery.each(data, function (i, e) {
        if (i == "conf_method") {
            conf_method = e;
        }
        if (i == "message") {
            resmessage = e;
        }
    });


    if (conf_method != "") {
      
        set_download_link(form_id);

    }

}

function set_download_link(form_id) {
    
    if (form_id == '') {
        return false;
    }

    var ajaxurl = jQuery(".arf_ajax_url").val();
    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_get_donwload_link&form_id=" + form_id,
        success: function (html) {
            if (html) {
                
                //jQuery("#arffrm_" + form_id + "_container #arf_download_link").find('.arf-product-link').html(html);
                /*jQuery("#arffrm_" + form_id + "_container #arf_show_download_link").html(html);
                 jQuery("#arffrm_" + form_id + "_container #arf_show_download_link").show();
                 jQuery("#arffrm_" + form_id + "_container form").hide();
                 */
                
                jQuery("#arffrm_" + form_id + "_container form").find(".arf_fieldset").html(html);

            }
        }
    });

}