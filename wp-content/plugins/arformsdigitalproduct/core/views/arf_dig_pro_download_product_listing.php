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

        var oTables = jQuery('#example').dataTable({
            "sDom": '<"H"lCfr>t<"footer"ip>',
            "sPaginationType": "four_button",
            "bJQueryUI": true,
            "bPaginate": true,
            "bAutoWidth": false,
            "sScrollX": "100%",
            "bScrollCollapse": true,
            "oColVis": {
                "aiExclude": [0, 10]
            },
            "aoColumnDefs": [
                {"sType": "html", "bVisible": false, "aTargets": [2, 3, 4]},
                {"bSortable": false, "aTargets": [0]}
            ],
        });

        new FixedColumns(oTables, {
            "iLeftColumns": 0,
            "iLeftWidth": 0,
            "iRightColumns": 1,
            "iRightWidth": '120',
        })
    });


    //jQuery('.ColVis_Button:not(.ColVis_MasterButton)').on('click', function () {
    jQuery(document).on('click', '.ColVis_Button:not(.ColVis_MasterButton)', function () {
        var colsArray = jQuery('.ColVis_Button :checkbox').map(function () {
            return [[jQuery(this).parent().next('.ColVis_title').text(), this.checked ? 'visibile' : 'hidden']];
        }).get();
        var form = jQuery('#arfredirecttolist').val();
        if (form == '')
            return false;

        jQuery.ajax({type: "POST", url: ajaxurl, data: "action=managecolumns&colsArray=" + colsArray + "&form=" + form,
            success: function (msg) {
            }
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
        ?><div id="success_message" style="margin-bottom:0px; margin-top:15px; width:95%;"><div class="arfsuccessmsgicon"></div><div class="arf_success_message"><?php
    } echo $message;
    if (is_admin()) {
        ?></div></div><?php
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
            <th class="center" style="width:50px;"><div style="display:inline-block; position:relative;"><input id="cb-select-all-1" type="checkbox" class="chkstanard"><label for="cb-select-all-1"  class="cb-select-all"><span></span></label></div></th>
<th class=""><?php _e('Download ID', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Product ID', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Form ID', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Entry ID', ARF_DP_TEXT_DOMAIN); ?></th>
<?php /*
<th class=""><?php _e('User ID', ARF_DP_TEXT_DOMAIN); ?></th>
*/ ?>
<th class=""><?php _e('Transaction ID / Subscription ID', ARF_DP_TEXT_DOMAIN); ?></th>
<?php /*
<th class=""><?php _e('User Mail', ARF_DP_TEXT_DOMAIN); ?></th>
 */?>
<th class=""><?php _e('Product Name', ARF_DP_TEXT_DOMAIN); ?></th>


<th class=""><?php _e('Payment Type', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Payment Method', ARF_DP_TEXT_DOMAIN); ?></th>

<th class=""><?php _e('Amount', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Payment Status', ARF_DP_TEXT_DOMAIN); ?></th>
<th class=""><?php _e('Created Date', ARF_DP_TEXT_DOMAIN); ?></th>      
<th class="col_action" style="width:125px;"><?php _e('Action', ARF_DP_TEXT_DOMAIN); ?></th>


</tr>
</thead>
</tbody>
<?php

$as___payment = array();
$downloads = $wpdb->get_results("SELECT D.*,P.options FROM " . $wpdb->prefix . "arf_digital_product_download AS D LEFT JOIN  " . $wpdb->prefix . "arf_digital_product AS P ON D.product_id = P.id ORDER BY D.id DESC");
if (count($downloads) > 0) {
    foreach ($downloads as $download) {
        $options = maybe_unserialize($download->options);
        $as___payment = $arf_dig_pro_user_products_class->arf_dig_pro_get_user_payment_detail($download->payment_options, $download->form_id, $download->entry_id, $download->id);
        ?>
        <tr>
            <td class="center"><input id="cb-item-action-<?php echo $download->id; ?>" class="chkstanard" type="checkbox" value="<?php echo $download->id; ?>" name="item-action[]"><label for="cb-item-action-<?php echo $download->id; ?>"><span></span></label></td>
            <td class="center"><?php echo $download->id; ?></td>
            <td><?php echo $download->product_id; ?></td>
            <td><?php echo $download->form_id; ?></td>
            <td><?php echo $download->entry_id; ?></td>
            <?php /* 
            <td><?php echo $download->user_id; ?></td>
            */ ?>
            <td><?php echo isset($as___payment[$download->id]['txn_id']) ? $as___payment[$download->id]['txn_id'] : ''; ?></td>
             <?php /*
            <td><?php echo $download->user_email; ?></td>
              */ ?>
            
            <td class="form_name"><a class="row-title" href="<?php echo wp_nonce_url("?page=ARForms-DigitalProduct&arfaction=edit&id={$download->product_id}"); ?>"><?php echo $options['arf_product_name']; ?></a></td>
           
            <td><?php echo isset($as___payment[$download->id]['payment_type']) ? $as___payment[$download->id]['payment_type'] : ''; ?></td>
            <td><?php echo isset($as___payment[$download->id]['payment_method']) ? $as___payment[$download->id]['payment_method'] : ''; ?></td>
            <td><?php echo isset($as___payment[$download->id]['total_amount']) ?   $as___payment[$download->id]['total_amount'] . "&nbsp;" . $as___payment[$download->id]['currency'] : ''; ?></td>
            <td><?php echo (isset($as___payment[$download->id]['payment_status']) && isset($as___payment[$download->id]['currency'])) ? $as___payment[$download->id]['payment_status'] : ''; ?></td>
            <td class="center"><?php echo date(get_option('date_format'), strtotime($download->created_at)); ?></td>
            <td><?php
                if (is_rtl()) {
                    echo "<a href='javascript:void(0);' onclick='arf_dig_pro_open_entry_thickbox({$download->id});'><img src='" . ARFIMAGESURL . "/view_icon23_rtl.png' class='arfhelptip' title=" . __("View Entry", ARF_DP_TEXT_DOMAIN) . " onmouseover=\"this.src='" . ARFIMAGESURL . "/view_icon23_hover_rtl.png';\" onmouseout=\"this.src='" . ARFIMAGESURL . "/view_icon23_rtl.png';\" /></a>";
                } else {
                    echo "<a href='javascript:void(0);' onclick='arf_dig_pro_open_entry_thickbox({$download->id});'><img src='" . ARFIMAGESURL . "/view_icon23.png' class='arfhelptip' title=" . __("View Entry", ARF_DP_TEXT_DOMAIN) . " onmouseover=\"this.src='" . ARFIMAGESURL . "/view_icon23_hover.png';\" onmouseout=\"this.src='" . ARFIMAGESURL . "/view_icon23.png';\" /></a>";
                }
                echo "<img src='" . ARFIMAGESURL . "/delete_icon223.png' title=" . __("Delete", ARF_DP_TEXT_DOMAIN) . " onmouseover=\"this.src='" . ARFIMAGESURL . "/delete_icon223_hover.png';\" onmouseout=\"this.src='" . ARFIMAGESURL . "/delete_icon223.png';\" class='arfhelptip' onclick=\"arf_ChangeID({$download->id})\" data-toggle='arfmodal' href='#delete_form_message' style='cursor:pointer'/></a>";

                echo "<div id='arf_dig_pro_view_entry_{$download->id}' style='display:none; max-height:540px; width:800px; left:20%;' class='arfviewentrymodal arfmodal arfhide arffade'>
                        <div class='arfnewmodalclose' data-dismiss='arfmodal'><img src='" . ARFIMAGESURL . "/close-button.png' align='absmiddle' /></div>
                                        <div class='newform_modal_title_container'>
                                            <div class='newform_modal_title' style='text-align:center;'><img src='" . ARFIMAGESURL . "/view-entry-icon.png' align='absmiddle' />&nbsp;" . __('VIEW ENTRY', ARF_DP_TEXT_DOMAIN) . "</div>
                                        </div>	
                                        <div class='arfentry_modal_content'>" . $arf_dig_pro_user_products_class->arf_dig_pro_get_download_history_entries_list($download, $as___payment) . "</div>
                                        <div style='clear:both;'></div>
                        <div class='arfviewentryclose' data-dismiss='arfmodal'><img src='" . ARFIMAGESURL . "/close-btnicon.png' align='absmiddle' style='margin-right:10px;' />" . __('Close', ARF_DP_TEXT_DOMAIN) . "</div>                                        
                    </div>";
                ?>
            </td> 
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