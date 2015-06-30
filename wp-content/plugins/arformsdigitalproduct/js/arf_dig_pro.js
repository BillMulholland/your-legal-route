function arf_ChangeID(id)
{
    document.getElementById('delete_entry_id').value = id;
    arfchangedeletemodalwidth('arfdeletemodabox');
}


function arf_dig_pro_actionfunc(act, id) {
    if (act == 'delete')
    {
        id = document.getElementById('delete_entry_id').value;
    }

    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_delete_product&act=" + act + "&id=" + id,
        success: function (msg) {
            jQuery('#arf_dig_pro_forms').html(msg);
            jQuery(".sltstandard select").selectpicker();
            jQuery('#success_message').delay(3000).fadeOut('slow');
            if (jQuery.isFunction(jQuery().tooltipster)) {
                jQuery('#arf_dig_pro_forms .arfhelptip').tooltipster({
                    theme: 'arf_admin_tooltip',
                    position: 'top',
                    contentAsHTML: true,
                    onlyOne: true,
                    multiple: true,
                    maxWidth: 400,
                });
            }
        }
    });

    if (act == 'delete')
    {
        jQuery('[data-dismiss="arfmodal"]').trigger("click");
    }
    return false;
}




function arf_dig_pro_form_bulk_act() {
    var str = jQuery('#arf_dig_pro_forms').serialize();
    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_form_bulk_act&" + str,
        success: function (msg) {
            jQuery('#arf_dig_pro_forms').html(msg);
            jQuery(".sltstandard select").selectpicker();
            jQuery('#success_message').delay(3000).fadeOut('slow');
            if (jQuery.isFunction(jQuery().tooltipster)) {
                jQuery('#arf_dig_pro_forms .arfhelptip').tooltipster({
                    theme: 'arf_admin_tooltip',
                    position: 'top',
                    contentAsHTML: true,
                    onlyOne: true,
                    multiple: true,
                    maxWidth: 400,
                });
            }
        }
    });
    return false;
}



function arf_dig_pro_save() {

    var req = 0;

    if (jQuery('#arf_product_name').val() == '') {
        jQuery('#arf_product_name').css('border-color', '#ff0000');
        jQuery('#arf_product_name_msg').css('display', 'block');
        req++;
    } else {
        jQuery('#arf_product_name').css('border-color', '');
        jQuery('#arf_product_name_msg').css('display', 'none');
    }




    if (req > 0) {
        jQuery(window.opera ? 'html' : 'html, body').animate({scrollTop: jQuery('#arf_product_name').offset().top - 250}, 'slow');
        return false;
    } else
        return true;
}


function removeVariableFromURL(url_string, variable_name) {
    var URL = String(url_string);
    var regex = new RegExp("\\?" + variable_name + "=[^&]*&?", "gi");
    URL = URL.replace(regex, '?');
    regex = new RegExp("\\&" + variable_name + "=[^&]*&?", "gi");
    URL = URL.replace(regex, '&');
    URL = URL.replace(/(\?|&)$/, '');
    regex = null;
    return URL;
}


jQuery(document).on('click', '.arf_product_image', function (e) {

    var image_id = jQuery(this).attr('id');
    jQuery("#arf_media_upload_iframe").remove();

    if (jQuery("#arf_media_upload_iframeContent").html() == "")
    {
        var iframe_div = document.createElement('iframe');
        iframe_div.setAttribute('src', 'media-upload.php?post_id=0&type=image');
        iframe_div.setAttribute('id', 'arf_media_upload_iframe');
        iframe_div.setAttribute('class', 'arf-media-iframe');
        iframe_div.setAttribute('style', 'float:left;width:100%;height:385px;');
        jQuery("#arf_media_upload_iframeContent").append(iframe_div);
    }


    jQuery('#arf_dig_pro_images').arfmodal({show: true});

    
    window.send_to_editor = function (html) {

        var $html = jQuery('<div />', {'class': 'media-html', 'html': html});
        var height = $html.find('img').attr('height');
        var width = $html.find('img').attr('width');
        var img_src = $html.find('img').attr('src');
        var a_src = $html.find('a').attr('href');


        //var attachment_id = jQuery('img',html).attr('class').match(/wp\-image\-([0-9]+)/);  // For get the attachemnt id 
        //console.log(attachment_id[1]);

        jQuery('input.' + image_id).val(img_src);
        //jQuery('#arp_btn_image_height').val( height );
        //jQuery('#arp_btn_image_width').val( width );

        jQuery('[data-dismiss="arfmodal"]').trigger("click");
    };
    return false;
});





jQuery(document).ready(function () {

    jQuery('#arf_pt_import_file').on('change', function () {
        var filename = jQuery(this).val();
        if (filename == "") {
            jQuery('#arf_pt_import_file_name').html('No file Selected');
        } else {
            jQuery('#arf_pt_import_file_name').html(filename);
        }
    });



    jQuery("#arf_dig_pro_form").change(function () {
        var form_id = jQuery(this).val();

        jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_field_dropdown&form_id=" + form_id,
            success: function (msg) {
                jQuery('.arf_paypal_fields').each(function (i) {
                    var id = jQuery(this).attr('id');
                    if (id != 'undefined' && id != '') {
                        //jQuery('#'+id).html(msg);
                        var dropdown = msg.split('^|^');
                        if (dropdown[0] != '' && id == 'arf_product_amount')
                        {
                            jQuery('#' + id).html(dropdown[0]);
                        }
                        else if (dropdown[1] != '' && id != 'arf_product_amount')
                        {
                            jQuery('#' + id).html(dropdown[1]);
                        }
                        jQuery('#' + id).selectpicker('refresh');
                    }
                });
            }
        });


    });

    if (jQuery('#arf_dig_pro_download_file_data .arf_dig_pro_download_sec').length > 1)
    {

    } else {
        jQuery('.bulk_add_remove_download_file .bulk_remove').hide();
    }



    arf_dig_pro_download_type_show_hide();
});





function arf_dig_pro_user_product_bulk_act() {

    var action1 = jQuery('select[name="action1"]').val();
    var action2 = jQuery('select[name="action2"]').val();
    var action_delete = jQuery('#delete_bulk_user_product_flag').val();
    var chk_count = jQuery('input[name="item-action[]"]:checked').length;

    if ((action1 == 'bulk_delete' || action2 == 'bulk_delete') && chk_count > 0) {
        if (action_delete == 'false') {
            jQuery('#delete_bulk_user_product_flag').attr("data-toggle", "arfmodal").attr('href', '#delete_bulk_user_product_message').trigger("click");
            return false;
        }
    }
    jQuery('#delete_bulk_user_product_flag').val('false');


    var str = jQuery('#arf_dig_pro_user_product_forms').serialize();
    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_user_product_bulk_act&" + str,
        success: function (msg) {
            jQuery('div#arf_dig_pro_user_product_forms').html(msg);
            jQuery(".sltstandard select").selectpicker();
            jQuery('#success_message').delay(3000).fadeOut('slow');
            if (jQuery.isFunction(jQuery().tooltipster)) {
                jQuery('#arf_dig_pro_user_product_forms .arfhelptip').tooltipster({
                    theme: 'arf_admin_tooltip',
                    position: 'top',
                    contentAsHTML: true,
                    onlyOne: true,
                    multiple: true,
                    maxWidth: 400,
                });
            }
        }
    });
    return false;
}

function arf_dig_pro_delete_bulk_user_product(val) {
    var action_delete = jQuery('#delete_bulk_user_product_flag').val('true');
    jQuery('form#arf_dig_pro_user_product_forms').submit();
    jQuery('[data-dismiss="arfmodal"]').trigger("click");
}


function arf_dig_pro_singel_delete(act, id) {
    if (act == 'delete')
    {
        id = document.getElementById('delete_entry_id').value;
    }

    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=arf_dig_pro_delete_user_product&act=" + act + "&id=" + id,
        success: function (msg) {
            jQuery('div#arf_dig_pro_user_product_forms').html(msg);
            jQuery(".sltstandard select").selectpicker();
            jQuery('#success_message').delay(3000).fadeOut('slow');
            if (jQuery.isFunction(jQuery().tooltipster)) {
                jQuery('#arf_dig_pro_user_product_forms .arfhelptip').tooltipster({
                    theme: 'arf_admin_tooltip',
                    position: 'top',
                    contentAsHTML: true,
                    onlyOne: true,
                    multiple: true,
                    maxWidth: 400,
                });
            }
        }
    });

    if (act == 'delete')
    {
        jQuery('[data-dismiss="arfmodal"]').trigger("click");
    }
    return false;
}

jQuery(document).on('click', '#arf_dig_pro_internal_type, #arf_dig_pro_external_type', function () {
    arf_dig_pro_download_type_show_hide();
});

function arf_dig_pro_download_type_show_hide() {
    var internal_type = jQuery("input#arf_dig_pro_internal_type:radio:checked").val();
    if (internal_type == 'internal') {
        jQuery(".arf_dig_pro_external_type_data").hide();
        jQuery(".arf_dig_pro_internal_type_data").show();
    } else {
        jQuery(".arf_dig_pro_internal_type_data").hide();
        jQuery(".arf_dig_pro_external_type_data").show();

    }
}

function arf_dig_pro_open_entry_thickbox(id) {
    jQuery("#arf_dig_pro_view_entry_" + id).arfmodal();
}




function arf_dig_pro_add_file() {

    jQuery('.bulk_add').attr('disabled', true);

    var metas = [];
    jQuery('input[name^="arf_product_file_url"]').each(function () {
        metas.push(this.value);
    });

    if (metas.length > 0) {
        /*var maxValueInArray = Math.max.apply(Math, metas);
         var next_meta_id = parseInt(maxValueInArray) + parseInt(1);
         */
        var next_meta_id = parseInt(metas.length);
    } else {
        var next_meta_id = 1;
    }

    jQuery.ajax({type: "POST", url: ajaxurl, data: "action=add_new_donwload_file&next_file_id=" + next_meta_id,
        success: function (msg) {
            jQuery('#arf_dig_pro_download_file_data').append(msg);
            jQuery('.bulk_add').attr('disabled', false);

            if (jQuery('#arf_dig_pro_download_file_data .arf_dig_pro_download_sec').length == 1) {
                jQuery('.bulk_add_remove_download_file .bulk_remove').hide();
            } else {
                jQuery('.bulk_add_remove_download_file .bulk_remove').show();
            }
        }
    });

}

function arf_dig_pro_delete_file(field) {
    if (jQuery('#arf_dig_pro_download_file_data .arf_dig_pro_download_sec').length > 2)
    {
        jQuery(field).parents('.arf_dig_pro_download_sec').first().remove();
    } else {
        jQuery(field).parents('.arf_dig_pro_download_sec').first().remove();
        jQuery('.bulk_add_remove_download_file .bulk_remove').hide();

    }
}