<?php
global $wpdb;
$actions['bulk_delete'] = __('Delete', ARF_DP_TEXT_DOMAIN);

if (isset($_REQUEST['err']) and $_REQUEST['err'] == 1) {
    $errors[] = __('This form is already deleted.', ARF_DP_TEXT_DOMAIN);
    ?>	
    <script type="text/javascript">
        var pageurl = removeVariableFromURL(document.URL, 'err');
        if (window.history.pushState)
            window.history.pushState({path: pageurl}, '', pageurl);
    </script>
<?php } ?>
<style type="text/css" title="currentStyle">
    @import "<?php echo ARFURL; ?>/datatables/media/css/demo_page.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/demo_table_jui.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/jquery-ui-1.8.4.custom.css";
    @import "<?php echo ARFURL; ?>/datatables/media/css/ColVis.css";
</style>    

<div class="wrap paypal_page"> 
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
            <div class="inside">
                <div class="frm_settings_form wrap_content" style="margin-top:75px;">
                    <div class="page_title"><?php _e('Manage Products', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div style="clear:both;"></div>
                    <form name="arf_dig_pro_forms" method="get" id="arf_dig_pro_forms" onsubmit="return arf_dig_pro_form_bulk_act();" style="width:100%;">
                        <div id="arf_dig_pro_forms">
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

                            <div style="float:right; margin-bottom:15px;">
                                <button class="greensavebtn" type="button" onclick="location.href = '<?php echo admin_url('admin.php?page=ARForms-DigitalProduct&arfaction=new'); ?>';" style="width:205px; border:0px; color:#FFFFFF; height:40px; border-radius:3px;"><img align="absmiddle" src="<?php echo ARFIMAGESURL ?>/plus-icon.png">&nbsp;&nbsp;<?php _e('Add New Product', ARF_DP_TEXT_DOMAIN); ?></button>
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
                                        <th class="center" style="width:50px;"><div style="display:inline-block; position:relative;"><input id="cb-select-all-1" type="checkbox" class="chkstanard"><label for="cb-select-all-1"  class="cb-select-all"><span></span></label></div></th>

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
                                            <td class="center">
                                                <input id="cb-item-action-<?php echo $product->id; ?>" class="chkstanard" type="checkbox" value="<?php echo $product->id; ?>" name="item-action[]"><label for="cb-item-action-<?php echo $product->id; ?>"><span></span></label></td>
                                            <td><?php echo $product->id; ?></td>
                                            
                                            <td class="form_name">
                                                <a class="row-title" href="<?php echo wp_nonce_url("?page=ARForms-DigitalProduct&arfaction=edit&id={$product->id}"); ?>"><?php echo $options['arf_product_name']; ?></a>
                                            </td>
                                            
                                            <td><?php echo $product_sales->toal_sales; ?></td>
                                            <td><?php echo ($product->status == 1 ) ? __('Enable ', ARF_DP_TEXT_DOMAIN) : __('Disable', ARF_DP_TEXT_DOMAIN); ?></td>                
                                            <td class="center"><?php echo date(get_option('date_format'), strtotime($product->created_at)); ?></td>
                                            <td><?php
                                                $edit_link = "?page=ARForms-DigitalProduct&arfaction=edit&id={$product->id}";

                                                echo "<a href='" . wp_nonce_url($edit_link) . "'><img src='" . ARFIMAGESURL . "/edit-icon22.png' onmouseover=\"this.src='" . ARFIMAGESURL . "/edit-icon_hover22.png';\" class='arfhelptip' title='" . __('Edit Product', ARF_DP_TEXT_DOMAIN) . "' onmouseout=\"this.src='" . ARFIMAGESURL . "/edit-icon22.png';\" /></a>";

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

                        </div><!-- end of form table -->
                    </form>
                </div>

                <div id="delete_form_message" style="display:none; left:35%;" class="arfmodal arfhide arffade arfdeletemodabox">
                    <div class="arfnewmodalclose" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/close-button.png'; ?>" align="absmiddle" /></div>
                    <input type="hidden" value="" id="delete_entry_id"/>
                    <div class="arfdelete_modal_title"><img src="<?php echo ARFIMAGESURL . '/delete-field-icon.png'; ?>" align="absmiddle" style="margin-top:-5px;" />&nbsp;<?php _e('DELETE', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arfdelete_modal_msg"><?php _e('Are you sure you want to delete this product?', ARF_DP_TEXT_DOMAIN); ?></div>
                    <div class="arf_delete_modal_row">
                        <div class="arf_delete_modal_left" onclick="arf_dig_pro_actionfunc('delete', '');"><img src="<?php echo ARFIMAGESURL . '/okay-icon.png'; ?>" align="absmiddle" style="margin-right:10px;" />&nbsp;<?php _e('Okay', ARF_DP_TEXT_DOMAIN); ?></div>
                        <div class="arf_delete_modal_right" data-dismiss="arfmodal"><img src="<?php echo ARFIMAGESURL . '/cancel-btnicon.png'; ?>" align="absmiddle" style="margin-right:10px;" />&nbsp;<?php _e('Cancel', ARF_DP_TEXT_DOMAIN); ?></div>
                    </div>
                </div>

                <div class="documentation_link" style="background:none; background:none; padding-top:40px;" align="right">
                    <a href="<?php echo ARF_DIG_PRO_URL;?>/documentation/index.html" style="margin-right:10px;" target="_blank"><?php _e('Download Product Documentation',ARF_DP_TEXT_DOMAIN);?></a>|
                    <a href="http://reputeinfosystems.com/support/" style="margin-left:10px;" target="_blank"><?php _e('Support',ARF_DP_TEXT_DOMAIN);?></a> &nbsp;&nbsp;
                    <img src="<?php echo ARFURL;?>/images/dot.png" height="4" width="4" onclick="javascript:OpenInNewTab('<?php echo ARFURL;?>/documentation/assets/sysinfo.php');" />
                </div>

            </div>
        </div>   
    </div>   