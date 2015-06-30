<?php
/*
Plugin Name: PDF Creator For ARForms
Description: Extension for Arforms to Create PDF from entries
Version: 1.1
Plugin URI: http://www.arformsplugin.com/
Author: Repute InfoSystems
Author URI: http://reputeinfosystems.com/
Text Domain: ARForms-Pdfcreator
*/
ini_set('max_execution_time',0);
ini_set("memory_limit","256M");

define('ARF_PDFCREATOR_DIR', WP_PLUGIN_DIR.'/arformspdfcreator');

define('ARF_PDFCREATOR_URL', WP_PLUGIN_URL.'/arformspdfcreator');

load_plugin_textdomain('ARForms-Pdfcreator', false, 'arformspdfcreator/languages/' );

global $arformspdfcreator, $arf_templates;
$arformspdfcreator = new ARF_Pdfcreator();

global $arformspdfcreator_version;
$arformspdfcreator_version = '1.1';

global $arformspdfcreatorshortname;
$arformspdfcreatorshortname = 'PDFC';

global $arf_entries_action_column_width;
$arf_entries_action_column_width += 37;


$ARFPDF_LABEL_SHORTCODE = "[ARF_GetLabel";
$ARFPDF_FIELD_SHORTCODE = ":";
$ARFPDF_SHORTCODE_OVER = "]";

$ARFPDF_VALUE_SHORTCODE = "[ARF_GetValue";
$ARFPDF_ENTRY_ID_SHORTCODE = "[ARF_GetEntryID";
$ARFPDF_LOOP_FIRST = "[ARF_LOOP";
$ARFPDF_LOOP_LAST = "[/ARF_LOOP]";
$ARFPDF_LOOP_VAR = "var=";
$ARFPDF_LOOP_VAR_ONLY = "var";
$ARFPDF_LOOP_VAR_TO = "to";
$ARFPDF_IF_CONDITION_START = "{ARF_IF";
$ARFPDF_IF_CONDITION_END = "{/ARF_IF}";
$ARFPDF_IF_OR_CONDITION = "||";
$ARFPDF_IF_AND_CONDITION = "&&";
$ARFPDF_FIELDTYPE_SHORTCODE = "[ARF_GetFieldType";
$ARFPDF_MODULE_SHORTCODE = "[var mod";
$ARFPDF_SIGNATURE_SHORTCODE_START = "[ARF_Signature]";
$ARFPDF_SIGNATURE_SHORTCODE_END = "[/ARF_Signature]";

class ARF_Pdfcreator {
	
	function ARF_Pdfcreator(){
	
		global $arformspdfcreator;
	
		add_action('init', array(&$this, 'arformspdfcreator_db_check') );
		
		register_activation_hook(__FILE__, array(&$this, 'install') );
		
		register_uninstall_hook(__FILE__, array(&$this, 'uninstall') );
		
		add_action('admin_menu', array(&$this, 'arformspdfcreator_menu'), 27);
				
		add_action('admin_notices', array(&$this, 'arformspdfcreator_admin_notices') );
												
		add_action('admin_enqueue_scripts', array( &$this, 'arf_set_css'), 11);
				
		add_action('init', array(&$this, 'wp_arformspdfcreator_autoupdate'));
		
		add_filter('upgrader_pre_install', array(&$this, 'arformspdfcreator_backup'), 10, 2);
		
		add_action('admin_init', array( &$this, 'upgrade_arformspdfcreator_data'));
		
		add_action('init', array( &$this, 'load_mpdf_library' ) );
		
		if( version_compare($this->get_arforms_version(), '2.6.2', '>=') )
		{	
			add_action('arf_additional_action_entries', array( &$this, 'arf_create_pdf' ), 10, 2);
		
			add_action('arf_additional_autoresponder_settings',array( &$this, 'arfpdfcreator_setting' ),10, 3 );
				
			add_filter('arfformoptionsbeforeupdateform', array(&$this, 'arf_pdfcreator_save_opt'), 10, 2);
		
			add_filter( 'arfnotificationattachment', array(&$this, 'arf_pdfcreator_sendpdf_with_mailattachment'), 10, 3 );
			
			add_filter( 'arfautoresponderattachment', array(&$this, 'arf_pdfcreator_sendpdf_with_mailattachment_touser'), 10, 3 );
		}
		
	}
	
	function arformspdfcreator_db_check(){
	
		global $arformspdfcreator;
		
		$arformspdfcreator_version = get_option('arformspdfcreator_version');
		
		if( !isset($arformspdfcreator_version) || $arformspdfcreator_version ==''  )
			$arformspdfcreator->install();
	}

	function install(){
		
		global $arformspdfcreator;
		
		$arformspdfcreator_version = get_option('arformspdfcreator_version');
		
		if( !isset($arformspdfcreator_version) || $arformspdfcreator_version ==''  ) {
			
			global $wpdb, $arformspdfcreator_version;
			
			update_option('arformspdfcreator_version', $arformspdfcreator_version);	
											
			$arformspdfcreator->getwpversion();
		}
	}

	function uninstall(){
		global $wpdb;
		if ( is_multisite() ) {		
			$blogs = $wpdb->get_results("SELECT blog_id FROM {$wpdb->blogs}", ARRAY_A);
			if ($blogs) {
				foreach($blogs as $blog) {
					switch_to_blog($blog['blog_id']);
					
					delete_option('arformspdfcreator_version');					
				}
				restore_current_blog();
			}
			
		} else {		
			delete_option('arformspdfcreator_version');
		}
		
	}
	

	function arformspdfcreator_admin_notices() {
		
		global $arformspdfcreator;
		
		if( !$arformspdfcreator->is_arforms_support() )
			echo "<div class='updated'><p>".__('Pdfcreator For ARForms plugin requires ARForms Plugin installed and active.', 'ARForms-Pdfcreator')."</p></div>";
			
		else if( !version_compare($arformspdfcreator->get_arforms_version(), '2.6.2', '>=') )
			echo "<div class='updated'><p>".__('Pdfcreator For ARForms plugin requires ARForms plugin installed with version 2.6.2 or higher.', 'ARForms-Pdfcreator')."</p></div>";						
	}
	
	function is_arforms_support(){
		
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		
		return is_plugin_active( 'arforms/arforms.php' );
		
	}
	
	function get_arforms_version(){
		
		$arf_db_version = get_option('arf_db_version');
		
		return (isset($arf_db_version)) ? $arf_db_version : 0;
	}

	function arformspdfcreator_menu(){
		
		global $arformspdfcreator;
		
		if( version_compare($arformspdfcreator->get_arforms_version(), '2.6.2', '>=') ) {
			
			if(current_user_can('administrator')){
		
				global $current_user;
	
				$paypalcapabilities = array(

				'arformspdfcreator' => __('Configure ARForms Pdfcreator', 'ARForms-Pdfcreator'),
		
				);
		
				$arfroles = $paypalcapabilities;
	
	
				foreach($arfroles as $arfrole => $arfroledescription)
	
					$current_user->add_cap( $arfrole );
	
	
				unset($arfroles);
	
	
				unset($arfrole);
	
	
				unset($arfroledescription);
	
	
			}
				
		}		
		
	}
	
	
	function arf_set_css(){
		if( isset($_REQUEST['page']) && $_REQUEST['page'] != '' && $_REQUEST['page'] == "ARForms-entries" )
		{
			wp_register_style('arformspdfcreator-css', ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css');
			wp_enqueue_style('arformspdfcreator-css');
		}
	}
			
	function getwpversion()
	{
		global $arformspdfcreator_version, $arformspdfcreator;
		$bloginformation = array();
		$str = $arformspdfcreator->get_rand_alphanumeric(10);

		$bloginformation[] = get_bloginfo('name');;
		$bloginformation[] = get_bloginfo('description');
		$bloginformation[] = home_url();
		$bloginformation[] = get_bloginfo('admin_email');
		$bloginformation[] = get_bloginfo('version');
		$bloginformation[] = get_bloginfo('language');
		$bloginformation[] = $arformspdfcreator_version;
		$bloginformation[] = $_SERVER['SERVER_ADDR'];
		$bloginformation[] = $str;
		
		update_option('wp_arforms_pdfcreator_version_get_version',$str);
		
		$valstring = implode("||",$bloginformation);
		$encodedval = base64_encode($valstring);
		
		$urltopost = "http://reputeinfosystems.net/arforms/wpinfo_pdfcreator.php";
		$response = wp_remote_post( $urltopost, array(
			'method' => 'POST',
			'timeout' => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking' => true,
			'headers' => array(),
			'body' => array( 'wpversion' => $encodedval ),
			'cookies' => array()
			)
		);
	}
	
	function assign_rand_value($num) {

		switch($num) {
			case "1"  : $rand_value = "a"; break;
			case "2"  : $rand_value = "b"; break;
			case "3"  : $rand_value = "c"; break;
			case "4"  : $rand_value = "d"; break;
			case "5"  : $rand_value = "e"; break;
			case "6"  : $rand_value = "f"; break;
			case "7"  : $rand_value = "g"; break;
			case "8"  : $rand_value = "h"; break;
			case "9"  : $rand_value = "i"; break;
			case "10" : $rand_value = "j"; break;
			case "11" : $rand_value = "k"; break;
			case "12" : $rand_value = "l"; break;
			case "13" : $rand_value = "m"; break;
			case "14" : $rand_value = "n"; break;
			case "15" : $rand_value = "o"; break;
			case "16" : $rand_value = "p"; break;
			case "17" : $rand_value = "q"; break;
			case "18" : $rand_value = "r"; break;
			case "19" : $rand_value = "s"; break;
			case "20" : $rand_value = "t"; break;
			case "21" : $rand_value = "u"; break;
			case "22" : $rand_value = "v"; break;
			case "23" : $rand_value = "w"; break;
			case "24" : $rand_value = "x"; break;
			case "25" : $rand_value = "y"; break;
			case "26" : $rand_value = "z"; break;
			case "27" : $rand_value = "0"; break;
			case "28" : $rand_value = "1"; break;
			case "29" : $rand_value = "2"; break;
			case "30" : $rand_value = "3"; break;
			case "31" : $rand_value = "4"; break;
			case "32" : $rand_value = "5"; break;
			case "33" : $rand_value = "6"; break;
			case "34" : $rand_value = "7"; break;
			case "35" : $rand_value = "8"; break;
			case "36" : $rand_value = "9"; break;
		}
		return $rand_value;
	}

	function get_rand_alphanumeric($length) {
		if ($length>0) {
			global $arformspdfcreator;
			$rand_id="";
			for ($i=1; $i<=$length; $i++) {
				mt_srand((double)microtime() * 1000000);
				$num = mt_rand(1,36);
				$rand_id .= $arformspdfcreator->assign_rand_value($num);
			}
		}
		return $rand_id;
	}
	
	function wp_arformspdfcreator_autoupdate(){
		
		global $arformspdfcreator;
		
		if( !$arformspdfcreator->is_arforms_support() )
			return;
			
		require_once(FORMPATH.'/core/wp_ar_auto_update.php');		
		
		$wp_arf_pdf_creator_plugin_current_version = '1.1'; 
		$wp_arf_pdf_creator_plugin_remote_path = 'http://www.reputeinfosystems.com/tf/plugins/arforms/updatecheck_arf_pdf_creator.php'; 
		$wp_arf_pdf_creator_plugin_slug = 'arformspdfcreator/arformspdfcreator.php';
		new wp_ar_auto_update($wp_arf_pdf_creator_plugin_current_version, $wp_arf_pdf_creator_plugin_remote_path, $wp_arf_pdf_creator_plugin_slug);
	}
	
	function arformspdfcreator_backup(){
		$databaseversion = get_option('arformspdfcreator_version');
		update_option('old_arformspdfcreator_version',$databaseversion);
	}
	
	function upgrade_arformspdfcreator_data(){
		
		global $newarformspdfcreator_version;
		
		if(!isset($newarformspdfcreator_version) || $newarformspdfcreator_version == "")
			$newarformspdfcreator_version = get_option('arformspdfcreator_version');
		
		if(version_compare($newarformspdfcreator_version, '1.1', '<'))
		{
			$path = ARF_PDFCREATOR_DIR.'/core/upgrade_arformspdfcreator_latest_data.php';
			include($path);
		}
	}
	
	function load_mpdf_library()
	{
		$lib = ARF_PDFCREATOR_DIR.'/libs/mpdf.php';
		include($lib);
		
		$pdf_templates = ARF_PDFCREATOR_DIR.'/core/arf_pdfcreator_templates.php';
		include($pdf_templates);
		
		global $arf_templates;
		$arf_templates = new ARF_pdfcreator_template();
		
		global $arf_pdfcreator;
		$arf_pdfcreator = new mPDF('utf-8','A4',0,'',5,5,20,10,5,5);
		
		if(is_rtl())
		{
			$arf_pdfcreator->SetDirectionality('rtl');
		}
		
	}
	
	function arf_create_pdf($item_id,$form_id)
	{
		global $arf_templates;
		$template = $arf_templates->get_arfpdf_template($form_id);
		if( $template == '')
			$template = 'default_template';
		echo "<a href='".ARF_PDFCREATOR_URL."/core/arf_pdfcreator.php?entry_id=".$item_id."&arf_pdf_template=".$template."' target='_blank'><img src='".ARF_PDFCREATOR_URL."/images/pdf-icon.png' class='arfhelptip' title='".__('PDF', 'ARForms-Pdfcreator')."' onmouseout='this.src=\"".ARF_PDFCREATOR_URL."/images/pdf-icon.png\";' onmouseover='this.src=\"".ARF_PDFCREATOR_URL."/images/pdf-icon_hover.png\";' /></a>";
	}
	
	function get_file_icon($media_id)
	{
		if ( !is_numeric($media_id) )


            return;
		
		$image_array = wp_get_attachment_image_src($media_id, array(150,150),true);

		$image_array_link = str_replace('thumbs/','',$image_array[0]);              
		
		$img_size = @getimagesize($image_array[0]);
		
		$img_height = $img_width = '';
				
		$img_height = $img_size[1];
		
		$img_height = ($img_height == '' ) ? '' : 'height="'.$img_height.'"';
		
		$img_width = $img_size[0];
		
		$img_width = ($img_width == '' ) ? '' : 'width="'.$img_width.'"';
		
		
		$image = '<img class="attachment-thumnail" alt="'.$image_array[0].'" src="'.$image_array[0].'" border="0" '.$img_height.' '.$img_width.'>';
		
        if($image and !preg_match("/wp-content\/uploads/", $image)){ 


            $attachment = get_post($media_id);

            $label = basename($attachment->guid);

			$image = '<img class="attachment-thumnail" alt="'.$image_array[0].'" src="'.$image_array[0].'" border="0" '.$img_height.' '.$img_width.'></a>';


        }else{
			$image = '<a href="'.$image_array_link.'" target="_blank"><img class="attachment-thumnail" alt="'.$image_array[0].'" src="'.$image_array[0].'" border="0" '.$img_height.' '.$img_width.'></a>';
		}


        return $image;
	}
	
	function get_file_link($media_id,$short=true)
	{
		if ( is_numeric($media_id) ){
		
    		if ($short){
			
    		    $attachment = get_post($media_id);
				
                $label = basename($attachment->guid);
            }
            $url = wp_get_attachment_url($media_id);
		
			$url = str_replace('thumbs/','',$url);              
        
		    if (is_admin()){
                global $arfsiteurl;

                $url = '<a href="'.$url.'">';
            }

            return $url;
    	}
	}
	
	function arfpdfcreator_setting( $id, $is_ref_form, $values )
	{
		global $arf_templates;
		
		$templates = $arf_templates->get_arf_pdf_templates();
		//print_r($templates);
		
		?>
<div style="clear:both; margin:20px 0;"></div>
<div class="arftablerow arfpdfcreatorsetting">
  <div class="arfcolmnleft">
    
    <div class="arftablerow">
      <div class="arfcolumnleft arfsettingsubtitle">
        <?php _e('PDF Creator Settings', 'ARForms');?>
      </div>
      <div class="arfcolumnright">
        <input type="checkbox" value="1" id="send_pdf_with_email" name="options[send_pdf_with_email]" <?php checked(@$values['send_pdf_with_mail'], 1); ?> class="chkstanard">
        <label for="send_pdf_with_email" style="font-weight:bold;"><span></span>
        <?php _e(' Send pdf file of the form entry with email to admin ( If Configured )', 'ARForms-Pdfcreator') ?>
        </label>
      </div>
    </div>
    
    <div class="arftablerow" style="margin-top:20px;"> 
      <div class="arfcolumnright">
        <input type="checkbox" value="1" id="send_pdf_with_email_touser" name="options[send_pdf_with_email_touser]" <?php checked(@$values['send_pdf_with_email_touser'], 1); ?> class="chkstanard">
        <label for="send_pdf_with_email_touser" style="font-weight:bold;"><span></span>
        <?php _e(' Send pdf file of the form entry with email to user ( If Configured )', 'ARForms-Pdfcreator') ?>
        </label>
      </div>
    </div>
    
    <div class="arftablerow">
      <div class="arfcolumnleft">&nbsp;</div>
      <div class="arfcolmnright">
        <div class="arfsettingsubtitle">
          <?php _e('PDF Template','ARForms-Pdfcreator'); ?>
        </div>
        <div style="clear:both;"></div>
        <div class="sltstandard" style="margin-top:5px;">
          <select name="options[arf_pdf_template]" id="arf_pdf_template" class="">
            <?php 
				$chkcurrtemplate = @substr($values['arf_pdf_template'], -4);
				if($chkcurrtemplate==".php" && $chkcurrtemplate!="")
				{
					$arfcurrtemplatename = $values['arf_pdf_template'];
				}else if(@$values['arf_pdf_template']!="") {
					$arfcurrtemplatename = "template_".$values['arf_pdf_template'].".php";
				}
				
				foreach($templates as $key=>$template)
				{
			?>
            		<option value="<?php echo $key; ?>" <?php selected(@$arfcurrtemplatename,$key); ?> ><?php echo $template; ?></option>
            <?php 
				}
			?>
          </select>
        </div>
        <button type="button" class="arfemailaddbtn add_field_btn" style="height: 30px; margin-left: 25px; margin-top: 5px;" onclick="arfpdf_preview();" name="arfpdfpreview">
        <?php _e('Preview','ARForms-Pdfcreator'); ?>
        </button>
        
        <div class="arf_pdf_preview_pre">
          <div class="arfmodal arfhide arfdeletemodabox" style="display:none;" id="arf_pdf_preview">
            <div data-dismiss="arfmodal" onclick="arfpdfclosebox();" class="arfnewmodalclose"><img align="absmiddle" src="<?php echo ARFURL;?>/images/close-button.png"></div>
            <div class="arfdelete_modal_msg">
            <?php
				global $wp_filesystem;
            	$template_dir_path = ARF_PDFCREATOR_DIR.'/core/templates/';
				$templates_list = glob($template_dir_path.'*.*');
				if(count($templates_list>0))
				{
					foreach($templates_list as $file) {
						$file_key = str_replace($template_dir_path,'',$file);
						$file_value = str_replace('.php','',$file_key);
						$file_value = str_replace(' ','_',$file_value);
						$templates[$file_key] = $file_value;
						
						$file_content = $wp_filesystem->get_contents($file);
						$chkvalue = preg_match('/<preview>(.*?)<\/preview>/s',$file_content,$imageurl);
						if($chkvalue>0)
						{
							$newimageurl = $imageurl[1];
							$chkimageurl = substr($newimageurl,0,4);
							if($imageurl=="http")
							{
								echo "<div id='template_".$file_key."' class='arfpdf_tempalte_div' style='background:url(".$newimageurl.");'></div>";
							}else {
								echo "<div id='template_".$file_key."' class='arfpdf_tempalte_div' style='background:url(". ARF_PDFCREATOR_URL .'/'. $newimageurl.");'></div>";
							}
						}else {
							echo "<div id='template_".$file_key."' class='arfpdf_tempalte_div arfpdf_custom_tempalte_div'>Custom Template</div>";
						}
					}
				}
			?>
            </div>
            <div style="clear:both;"></div>
          </div>
        </div>
        
        <div class="pdfcreator_documentation"><a href="<?php echo ARF_PDFCREATOR_URL."/documentation/index.html" ?>" target="_blank"><?php  _e("PDF Creator Documentation", 'ARForms-Pdfcreator');?></a></div>
      </div>
    </div>
        
  </div>
  
</div>

<script type="text/javascript" language="javascript">
			function arfpdf_preview()
			{
				var pdf_template = jQuery('#arf_pdf_template').val();
				var current_template = 'template_'+pdf_template;
				jQuery(".arfpdf_tempalte_div").hide(0);
				if(document.getElementById(current_template))
				{
					document.getElementById(current_template).style.display = "block";
				}
				jQuery('#arf_pdf_preview').show();
			}
			function arfpdfclosebox()
			{
				jQuery('#arf_pdf_preview').hide();
				jQuery(".arfpdf_tempalte_div").hide();
			}
            </script>
<style type="text/css">
.arfpdfcreatorsetting { background:#F3F6F9; margin-top:25px; padding:15px 0 10px 15px; }
			.arf_pdf_preview_pre {
				position:relative;
			}
			#arf_pdf_preview {
				padding-left: 15px;
    			padding-right: 15px;
    			width: 510px;
				height:auto;
				top:20%;
				position:absolute;
				border: 1px solid #ccc;
    			left: -205px;
    			top: 5px; 
			}			
			.arfpdf_tempalte_div {
				display:none;
				height:142px;
				width:506px;
				display:none;
			}
			.arfpdf_custom_tempalte_div {
				height:72px;
				width:506px;
			}
			.pdfcreator_documentation {
				float:right;
				margin-right:55px;
			}
            </style>
<?php
	}
	
	function arf_pdfcreator_save_opt( $options, $values )
	{
		$options['send_pdf_with_mail'] =  $values['options']['send_pdf_with_email'];
		$options['send_pdf_with_email_touser'] =  $values['options']['send_pdf_with_email_touser'];
		$options['arf_pdf_template'] = $values['options']['arf_pdf_template'];
		
		return $options;
	}
	
	function arf_pdfcreator_send_pdf_with_mail( $entry_id, $form_id )
	{
		global $wpdb, $db_record, $arfsettings, $armainhelper, $arfieldhelper, $arnotifymodel;
		
		$wp_upload_dir 	= wp_upload_dir();
		
		$upload_main_dir = 	$wp_upload_dir['basedir'].'/arforms/';
		
		$pdf = $this->arfcreatepdf($upload_main_dir, $entry_id);
		
		$attachment[] = $upload_main_dir.'/'.$pdf;
		
		$frm_opt = $wpdb->get_results( $wpdb->prepare( "SELECT options FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form_id ) );
		
		$options = maybe_unserialize( $frm_opt->options );
		
		$entry = $db_record->getOne($entry_id, true);
		
		if( $options['chk_admin_notification'] == 0 && $options['send_pdf_with_mail'] == 0  )
			return;
			
		$admin_email = $options['reply_to'];
		
		$from_email = $options['ar_admin_from_email'];
		
		$subject  = $options['admin_email_subject'];
		
		$reply_to_name = (isset($options['ar_user_from_name'])) ? $options['ar_user_from_name'] : $arfsettings->reply_to_name; 

		$reply_to_id = (isset($options['ar_user_from_email'])) ? $options['ar_user_from_email'] : $arfsettings->reply_to; 
		
		if(isset($reply_to_id))
			$reply_to = @$entry->metas[$reply_to_id];
		
		if($reply_to == '')
			$reply_to = $reply_to_id;
		
		$subject = str_replace('[form_name]', stripslashes($form->name), $subject);
		
		$subject = str_replace('[site_name]', $arfblogname, $subject);
		
		$shortcodes = $armainhelper->get_shortcodes($options['ar_admin_from_email'], $entry->form_id);
		
		$reply_to = $arfieldhelper->replace_shortcodes($options['ar_admin_from_email'], $entry, $shortcodes);
		
		$reply_to = $arfieldhelper->arf_replace_shortcodes($reply_to, $entry);
		
		$arnotifymodel->send_notification_email_user($admin_email,$subject, $message='',$reply_to,$reply_to_name,true,$attachment);
	}
	
	function arf_pdfcreator_sendpdf_with_mailattachment($attachments, $form, $entries = array() )
	{
				
		if( ! $form )
			return $attachments;
		
		if( ! $entries )
			return $attachments;
	
		global $wpdb, $db_record, $arfsettings, $arformspdfcreator;
		
		$frm_opt = $wpdb->get_row( $wpdb->prepare( "SELECT options FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form->id ) );
		
		$options = maybe_unserialize( $frm_opt->options );
				
		if( $options['send_pdf_with_mail'] == 0 )
			return $attachments;
		
		$entry = $entries['entry']; 
		
		$entry_id	= $entry->id;
		
		if( ! $entry_id )
			return $attachments;
		
		$wp_upload_dir 	= wp_upload_dir();
		
		$upload_main_dir = 	$wp_upload_dir['basedir'].'/arforms/';
			
		$pdf = $arformspdfcreator->arfcreatepdf($upload_main_dir, $entry_id);
		
		$attachments[] = $upload_main_dir.$pdf;
	
		return $attachments; 				
	}
	
	function arf_pdfcreator_sendpdf_with_mailattachment_touser($attachments, $form, $entries = array() )
	{	
			
					
		if( ! $form )
			return $attachments;

		if( ! $entries )
			return $attachments;
	
		global $wpdb, $db_record, $arfsettings, $arformspdfcreator;
				
		$frm_opt = $wpdb->get_row( $wpdb->prepare( "SELECT options FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form->id ) );
		 
		$options = maybe_unserialize( $frm_opt->options );
	
		if( $options['send_pdf_with_email_touser'] == 0 )
			return $attachments;
		
		$entry = $entries['entry']; 
		
		$entry_id	= $entry->id;
		
		if( ! $entry_id )
			return $attachments;
		
		$wp_upload_dir 	= wp_upload_dir();
		
		$upload_main_dir = 	$wp_upload_dir['basedir'].'/arforms/';
		
		if(!file_exists( $upload_main_dir.'entry_'.$entry_id.'.pdf' ))
		{
			$pdf = $arformspdfcreator->arfcreatepdf($upload_main_dir, $entry_id);
			
			$attachments[] = $upload_main_dir.$pdf;
		}
		else
		{
			$attachments[] = $upload_main_dir.'entry_'.$entry_id.'.pdf';
		}
		
		return $attachments; 
			
	}
	
	function arfcreatepdf( $path, $id )
	{
		global $arf_pdfcreator, $wpdb, $arformspdfcreator, $arf_templates;
		
		$style = file_get_contents(ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css');
	
		$arf_pdfcreator->WriteHTML($style,1);
		
		$form = $wpdb->get_results( $wpdb->prepare("SELECT form_id,created_date FROM ".$wpdb->prefix."arf_entries WHERE id = %d", $id) );
	
		$form_id = $form[0]->form_id;
		
		$created_date = strtotime($form[0]->created_date);
		
		$forms = $wpdb->get_results( $wpdb->prepare( "SELECT name,options FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form_id ) );
		
		$form_name = stripslashes_deep( strip_tags($forms[0]->name) );
		
		$frm_options = maybe_unserialize( $forms[0]->options );
		
		$template_type = $frm_options['arf_pdf_template'];
		
		$arf_pdfcreator->SetTitle($form_name);
		
		$arf_pdfcreator->SetAutoFont();
	
		$chktemplate = substr($template_type, -4);
		if($chktemplate==".php")
		{
			$arftemplatename = $template_type;
		}else {
			$arftemplatename = "template_".$template_type.".php";
		}
		
		$htmlcontent = $arf_templates->arf_get_template_html($arftemplatename, $arf_pdfcreator, $form_id, $id);
	
		$arf_pdfcreator->WriteHTML($htmlcontent);	
	
		$arf_pdfcreator->Output($path.'/entry_'.$id.'.pdf','F');
		
		return 'entry_'.$id.'.pdf';
	}
	
	function get_label( $value )
	{
		if( ! $value )
			return '';
		
		return $value->name;
		
	}
	
	function get_fieldtype( $value )
	{
		if( ! $value )
			return '';
		
		return $value->type;
		
	}
	
	function get_value($field){
		
		if( ! $field )
			return '';
		
		global $arformspdfcreator;
		
		$field->entry_value = isset($field->entry_value) ? $field->entry_value : '';
		
		switch($field->type)
				{
					case 'file':
						$post_id = $field->entry_value;
					
						$icon = $arformspdfcreator->get_file_icon($post_id);
						
						$link = $arformspdfcreator->get_file_link($post_id);
																			
						return "<a href='".$link."' target='_blank'>".$icon."</a>";							
						
						break;
						
					case 'like':
						
						if( $field->entry_value == 1)
							return "<img src='".ARFIMAGESURL."/like_hover.png'>";
						else
							return "<img src='".ARFIMAGESURL."/dislike_hover.png'>";
						break;
					case 'checkbox':
						$opts = maybe_unserialize($field->entry_value);
						if(count($opts) > 1)
							$options = implode(', ',$opts);
						else
							$options = $field->entry_value;
						
						return $options;
						break;
					case 'image':
						
						if($field->entry_value == '')
							return '';
						else
							return "<img height='50px' src='".$field->entry_value."'>";
						break;
					
					case 'textarea':
					
						return stripslashes(nl2br($field->entry_value));
						break;
					
					case 'divider':
						return '';						
						break;
							
					default:
						return stripslashes($field->entry_value);
						break;
				}
				
		return $field->entry_value;	
	}
	
	function ARFPDF_Convert_Shortcode_values($values, $content, $entry_id)
	{
		$total_values = count($values);
		
		global $ARFPDF_LABEL_SHORTCODE, $ARFPDF_FIELD_SHORTCODE, $ARFPDF_SHORTCODE_OVER, $ARFPDF_VALUE_SHORTCODE, $ARFPDF_ENTRY_ID_SHORTCODE, $ARFPDF_LOOP_FIRST, $ARFPDF_LOOP_LAST, $ARFPDF_LOOP_VAR, $ARFPDF_LOOP_VAR_ONLY, $ARFPDF_LOOP_VAR_TO, $ARFPDF_IF_CONDITION_START, $ARFPDF_IF_CONDITION_END, $ARFPDF_IF_OR_CONDITION, $ARFPDF_IF_AND_CONDITION, $ARFPDF_FIELDTYPE_SHORTCODE, $ARFPDF_MODULE_SHORTCODE, $ARFPDF_SIGNATURE_SHORTCODE_START, $ARFPDF_SIGNATURE_SHORTCODE_END, $arformspdfcreator;
		
		$delimiter = '#';
		$signaturematches = $delimiter . preg_quote($ARFPDF_SIGNATURE_SHORTCODE_START, $delimiter) 
							. '(.*?)(.*?)' 
							. preg_quote($ARFPDF_SIGNATURE_SHORTCODE_END, $delimiter) 
							. $delimiter 
							. 's';
		$signaturevalue = preg_match_all($signaturematches, $content, $signaturevalues);
		
		if($signaturevalue>0)
		{
			foreach($signaturevalues[0] as $k => $v)
			{
				$content = str_replace($signaturevalues[$k],'',$content);
			}
		}
		
		
		$loopmatches = $delimiter . preg_quote($ARFPDF_LOOP_FIRST, $delimiter) 
							. '(.*?)](.*?)' 
							. preg_quote($ARFPDF_LOOP_LAST, $delimiter) 
							. $delimiter 
							. 's';
		$chkloopvalue = preg_match_all($loopmatches, $content, $loopvalues);
		
		if($chkloopvalue>0)
		{
			$original_loopvalues = $loopvalues[0];
			$parameters_value = $loopvalues[1];
			$loopvalues_value = $loopvalues[2];
			if(count($loopvalues_value)>0)
			{
				$cntr = 0;
				foreach($loopvalues_value as $loopvalue)
				{
					$chkstartend = strtolower(trim($parameters_value[$cntr]));
					if($chkstartend!="")
					{
						$startloop_exp = explode($ARFPDF_LOOP_VAR,$chkstartend);
						$startloop_exp_val = explode(" ",$startloop_exp[1]);
						$startloop = trim($startloop_exp_val[0]);
						if($startloop=='')
						{
							$startloop = 1;
						}
						
						$endloop_exp = explode($ARFPDF_LOOP_VAR_TO,$chkstartend);
						$startloop_exp1 = explode($ARFPDF_LOOP_VAR,$endloop_exp[1]);
						$endloop_exp_val = explode(" ",$startloop_exp1[1]);
						$endloop = trim($endloop_exp_val[0]);
						
						if($endloop=='')
						{
							$endloop = 1;
						}
					}else {
						$startloop = 1;
						$endloop = $total_values;
					}
					
					$newhtmlcontent = "";
					$for_counter = 0;
					$ifnewloopvalue = "";
					if($startloop<=$endloop)
					{
						for($i=$startloop;$i<=$endloop;$i++)
						{
							$newloopvalue = $loopvalue;
							
							
							/* Code Start for IF Condition */
							$ifcondition_loopmatches = $delimiter . preg_quote($ARFPDF_IF_CONDITION_START, $delimiter) 
												. '(.*?)}(.*?)' 
												. preg_quote($ARFPDF_IF_CONDITION_END, $delimiter) 
												. $delimiter 
												. 's';
							$chkifloopvalue = preg_match_all($ifcondition_loopmatches, $newloopvalue, $ifloopvalues);
							if($chkifloopvalue>0)
							{
								$if_original_loopvalues = $ifloopvalues[0];
								$if_parameters_value = $ifloopvalues[1];
								$if_loopvalues_value = $ifloopvalues[2];
								
								
								$if_cntr = 0;
								$field_counter = $i;
								$if_loopvalues_value_arr = "";
								foreach($if_parameters_value as $k => $v)
								{
									$if_loopvalues_value_arr .= $if_loopvalues_value[$k];
									$pattern_for_condition = '/' . preg_quote($ARFPDF_IF_OR_CONDITION, '/') . '/';
									$is_condition_available = preg_match_all($pattern_for_condition, $if_parameters_value[$k], $condition_values_arr);
									if($is_condition_available>0)
									{
										$condition_field = "OR";
									}else {
										$condition_field = "AND";
									}
									$check_template_conditions = $arformspdfcreator->CheckTemplateConditionsValue($if_parameters_value[$k], $condition_field, $newloopvalue, $values, $field_counter);
									if($check_template_conditions==1)
									{
										$ifnewloopvalue = $if_loopvalues_value[$k];
										$newloopvalue = str_replace($if_original_loopvalues[$k],$ifnewloopvalue,$newloopvalue);
									}else {
										$ifnewloopvalue = '';
										$newloopvalue = str_replace($if_original_loopvalues[$k],$ifnewloopvalue,$newloopvalue);
									}
									$if_cntr++;
								}
							}
							/* Code Start for Get LOOP Label*/
							$field_id = '';
							$pattern_for_label = '/' . preg_quote($ARFPDF_LABEL_SHORTCODE, '/') . '/';
							$is_label_available = preg_match_all($pattern_for_label, $newloopvalue, $content_labels_arr);
							if ($is_label_available>0) {
								foreach($content_labels_arr[0] as $content_label_arr)
								{
									$parts = @explode($ARFPDF_LABEL_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_label_value = $arformspdfcreator->get_label($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_label_value,$newloopvalue);
									}else {
										$get_label_value = $arformspdfcreator->get_label($values[$i]);
										$newloopvalue = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_label_value,$newloopvalue);
									}
								}
								
							}
							/* Code End for Get LOOP Label*/
							
							
							/* Code Start for Get LOOP Value*/
							$field_id = '';
							$pattern_for_value = '/' . preg_quote($ARFPDF_VALUE_SHORTCODE, '/') . '/';
							
							$is_value_available = preg_match_all($pattern_for_value, $newloopvalue, $content_values_arr);
							if ($is_value_available>0) {
								foreach($content_values_arr[0] as $content_value_arr)
								{
									$parts = @explode($ARFPDF_VALUE_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_value_value = $arformspdfcreator->get_value($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_value_value,$newloopvalue);
									}else {
										$get_value_value = $arformspdfcreator->get_value($values[$i]);
										$newloopvalue = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_value_value,$newloopvalue);
									}
								}
							}
							/* Code End for Get LOOP value*/
							
							
							/* Code Start for Get LOOP Field Type*/
							$field_id = '';
							$pattern_for_fieldtype = '/' . preg_quote($ARFPDF_FIELDTYPE_SHORTCODE, '/') . '/';
							$is_fieldtype_available = preg_match_all($pattern_for_fieldtype, $newloopvalue, $content_fieldtypes_arr);
							if ($is_fieldtype_available>0) {
								foreach($content_fieldtypes_arr[0] as $content_fieldtype_arr)
								{
									$parts = @explode($ARFPDF_FIELDTYPE_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$newloopvalue);
									}else {
										$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$i]);
										$newloopvalue = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$newloopvalue);
									}
								}
								
							}
							/* Code End for Get LOOP Field Type*/
							$newhtmlcontent .= $newloopvalue;
							$for_counter++;
						}
					}else 
					{
						for($i=$startloop;$i>=$endloop;$i--)
						{
							$newloopvalue = $loopvalue;
							
							
							/* Code Start for IF Condition */
							$ifcondition_loopmatches = $delimiter . preg_quote($ARFPDF_IF_CONDITION_START, $delimiter) 
												. '(.*?)}(.*?)' 
												. preg_quote($ARFPDF_IF_CONDITION_END, $delimiter) 
												. $delimiter 
												. 's';
							$chkifloopvalue = preg_match_all($ifcondition_loopmatches, $newloopvalue, $ifloopvalues);
							if($chkifloopvalue>0)
							{
								$if_original_loopvalues = $ifloopvalues[0];
								$if_parameters_value = $ifloopvalues[1];
								$if_loopvalues_value = $ifloopvalues[2];
								
								
								$if_cntr = 0;
								$field_counter = $i;
								$if_loopvalues_value_arr = "";
								foreach($if_parameters_value as $k => $v)
								{
									$if_loopvalues_value_arr .= $if_loopvalues_value[$k];
									$pattern_for_condition = '/' . preg_quote($ARFPDF_IF_OR_CONDITION, '/') . '/';
									$is_condition_available = preg_match_all($pattern_for_condition, $if_parameters_value[$k], $condition_values_arr);
									if($is_condition_available>0)
									{
										$condition_field = "OR";
									}else {
										$condition_field = "AND";
									}
									$check_template_conditions = $arformspdfcreator->CheckTemplateConditionsValue($if_parameters_value[$k], $condition_field, $newloopvalue, $values, $field_counter);
									if($check_template_conditions==1)
									{
										$ifnewloopvalue = $if_loopvalues_value[$k];
										$newloopvalue = str_replace($if_original_loopvalues[$k],$ifnewloopvalue,$newloopvalue);
									}else {
										$ifnewloopvalue = '';
										$newloopvalue = str_replace($if_original_loopvalues[$k],$ifnewloopvalue,$newloopvalue);
									}
									$if_cntr++;
								}
							}
							/* Code Start for Get LOOP Label*/
							$field_id = '';
							$pattern_for_label = '/' . preg_quote($ARFPDF_LABEL_SHORTCODE, '/') . '/';
							$is_label_available = preg_match_all($pattern_for_label, $newloopvalue, $content_labels_arr);
							if ($is_label_available>0) {
								foreach($content_labels_arr[0] as $content_label_arr)
								{
									$parts = @explode($ARFPDF_LABEL_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_label_value = $arformspdfcreator->get_label($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_label_value,$newloopvalue);
									}else {
										$get_label_value = $arformspdfcreator->get_label($values[$i]);
										$newloopvalue = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_label_value,$newloopvalue);
									}
								}
								
							}
							/* Code End for Get LOOP Label*/
							
							
							/* Code Start for Get LOOP Value*/
							$field_id = '';
							$pattern_for_value = '/' . preg_quote($ARFPDF_VALUE_SHORTCODE, '/') . '/';
							
							$is_value_available = preg_match_all($pattern_for_value, $newloopvalue, $content_values_arr);
							if ($is_value_available>0) {
								foreach($content_values_arr[0] as $content_value_arr)
								{
									$parts = @explode($ARFPDF_VALUE_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_value_value = $arformspdfcreator->get_value($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_value_value,$newloopvalue);
									}else {
										$get_value_value = $arformspdfcreator->get_value($values[$i]);
										$newloopvalue = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_value_value,$newloopvalue);
									}
								}
							}
							/* Code End for Get LOOP value*/
							
							
							/* Code Start for Get LOOP Field Type*/
							$field_id = '';
							$pattern_for_fieldtype = '/' . preg_quote($ARFPDF_FIELDTYPE_SHORTCODE, '/') . '/';
							$is_fieldtype_available = preg_match_all($pattern_for_fieldtype, $newloopvalue, $content_fieldtypes_arr);
							if ($is_fieldtype_available>0) {
								foreach($content_fieldtypes_arr[0] as $content_fieldtype_arr)
								{
									$parts = @explode($ARFPDF_FIELDTYPE_SHORTCODE,$newloopvalue);
									$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
									$myid = @explode("]",$myidpart[1]);
									$field_id = trim(strtolower($myid[0]));
									$original_field_id = $myid[0];
									if(count($myid)>1 && $field_id!=$ARFPDF_LOOP_VAR_ONLY)
									{
										$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$field_id]);
										$newloopvalue = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$newloopvalue);
									}else {
										$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$i]);
										$newloopvalue = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$original_field_id.$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$newloopvalue);
									}
								}
								
							}
							/* Code End for Get LOOP Field Type*/
							$newhtmlcontent .= $newloopvalue;
							$for_counter++;
						}
					}
					$content = str_replace($original_loopvalues[$cntr],$newhtmlcontent,$content);
					$cntr++;
				}
			}
		}
		
		
		
		
		
		/* Code Start for IF Condition */
		$ifcondition_loopmatches = $delimiter . preg_quote($ARFPDF_IF_CONDITION_START, $delimiter) 
							. '(.*?)}(.*?)' 
							. preg_quote($ARFPDF_IF_CONDITION_END, $delimiter) 
							. $delimiter 
							. 's';
		$chkifloopvalue = preg_match_all($ifcondition_loopmatches, $content, $ifloopvalues);
		if($chkifloopvalue>0)
		{
			$if_original_loopvalues = $ifloopvalues[0];
			$if_parameters_value = $ifloopvalues[1];
			$if_loopvalues_value = $ifloopvalues[2];
			
			
			$if_cntr = 0;
			foreach($if_parameters_value as $if_parameter_value)
			{
				$pattern_for_condition = '/' . preg_quote($ARFPDF_IF_OR_CONDITION, '/') . '/';
				$is_condition_available = preg_match_all($pattern_for_condition, $if_parameters_value[$if_cntr], $condition_values_arr);
				if($is_condition_available>0)
				{
					$condition_field = "OR";
				}else {
					$condition_field = "AND";
				}
				$check_template_conditions = $arformspdfcreator->CheckTemplateConditionsValue($if_parameter_value, $condition_field, $content, $values, 0);
				if($check_template_conditions==1)
				{
					$content = str_replace($if_original_loopvalues[$if_cntr],$if_loopvalues_value[$if_cntr],$content);
				}else {
					$content = str_replace($if_original_loopvalues[$if_cntr],'',$content);
				}
				$if_cntr++;
			}
		}
		/* Code End for IF Condition */
		
		
		/* Code Start for Get Label*/
		$field_id = '';
		$pattern_for_label = '/' . preg_quote($ARFPDF_LABEL_SHORTCODE, '/') . '/';
		$is_label_available = preg_match_all($pattern_for_label, $content, $content_labels_arr);
		if ($is_label_available>0) {
			foreach($content_labels_arr[0] as $content_label_arr)
			{
				$parts = @explode($ARFPDF_LABEL_SHORTCODE,$content);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					$get_label_value = $arformspdfcreator->get_label($values[$field_id]);
					$content = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,$get_label_value,$content);
				}else {
					$content = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,'',$content);
				}
			}
			
		}
		/* Code End for Get Label*/
		
		/* Code Start for Get Value*/
		$field_id = '';
		$pattern_for_value = '/' . preg_quote($ARFPDF_VALUE_SHORTCODE, '/') . '/';
		
		$is_value_available = preg_match_all($pattern_for_value, $content, $content_values_arr);
		if ($is_value_available>0) {
			foreach($content_values_arr[0] as $content_value_arr)
			{
				$parts = @explode($ARFPDF_VALUE_SHORTCODE,$content);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					$get_value_value = $arformspdfcreator->get_value($values[$field_id]);
					$content = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,$get_value_value,$content);
				}else {
					$content = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,'',$content);
				}
			}
			
		}
		/* Code End for Get value*/
		
		/* Code Start for Get Entry ID*/
		$field_id = '';
		$pattern_for_entry_id = '/' . preg_quote($ARFPDF_ENTRY_ID_SHORTCODE, '/') . '/';
		$is_entry_id_available = preg_match_all($pattern_for_entry_id, $content, $content_entry_ids_arr);
		if ($is_entry_id_available>0) {
			foreach($content_entry_ids_arr[0] as $content_entry_id_arr)
			{
				$parts = @explode($ARFPDF_ENTRY_ID_SHORTCODE,$content);
				$myid = @explode("]",$parts[1]);
				if(count($myid)>1)
				{
					$get_entry_id_value = $entry_id;
					$content = str_replace($ARFPDF_ENTRY_ID_SHORTCODE.$ARFPDF_SHORTCODE_OVER,$get_entry_id_value,$content);
				}else {
					$content = str_replace($ARFPDF_ENTRY_ID_SHORTCODE.$ARFPDF_SHORTCODE_OVER,'',$content);
				}
			}
		}
		/* Code End for Get Entry ID*/
		
		
		/* Code Start for Get Field Type*/
		$field_id = '';
		$pattern_for_fieldtype = '/' . preg_quote($ARFPDF_FIELDTYPE_SHORTCODE, '/') . '/';
		$is_fieldtype_available = preg_match_all($pattern_for_fieldtype, $content, $content_fieldtypes_arr);
		if ($is_fieldtype_available>0) {
			foreach($content_fieldtypes_arr[0] as $content_fieldtype_arr)
			{
				$parts = @explode($ARFPDF_FIELDTYPE_SHORTCODE,$content);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$field_id]);
					$content = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$content);
				}else {
					$content = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$field_id.$ARFPDF_SHORTCODE_OVER,'',$content);
				}
			}
		}
		/* Code End for Get Field Type*/
		
		return $content;
	}
	
	function CheckTemplateConditionsValue($if_parameter_value, $condition_field, $content, $values, $field_counter=0)
	{
		global $ARFPDF_IF_OR_CONDITION, $ARFPDF_IF_AND_CONDITION, $arformspdfcreator;
		if($condition_field=="AND")
		{
			$exp_conditions = explode($ARFPDF_IF_AND_CONDITION,$if_parameter_value);
			$ParseTemplateLabelValue = array();
			foreach($exp_conditions as $exp_condition)
			{
				$parameter_value = trim($exp_condition);
				$parsedvaluecheckedresult = $arformspdfcreator->ParseTemplateLabelValue($parameter_value, $values, 1, $field_counter);
				$ParseTemplateLabelValue[] = $parsedvaluecheckedresult;
				
			}
			if(in_array('0',$ParseTemplateLabelValue))
			{
				return 0;
			}else{
				return 1;
			}
		}else {
			$exp_conditions = explode($ARFPDF_IF_OR_CONDITION,$if_parameter_value);
			$ParseTemplateLabelValue = array();
			
			foreach($exp_conditions as $exp_condition)
			{
				$parameter_value = trim($exp_condition);
				$ParseTemplateLabelValue[] = $arformspdfcreator->ParseTemplateLabelValue($parameter_value, $values, 1, $field_counter);
				
			}
			if(in_array('1',$ParseTemplateLabelValue))
			{
				return 1;
			}else{
				return 0;
			}
		}
	}
	
	function ParseTemplateLabelValue($singlecontent,$values,$flag=0, $field_counter)
	{
		global $ARFPDF_LABEL_SHORTCODE, $ARFPDF_FIELD_SHORTCODE, $ARFPDF_SHORTCODE_OVER, $ARFPDF_VALUE_SHORTCODE, $ARFPDF_ENTRY_ID_SHORTCODE, $ARFPDF_LOOP_FIRST, $ARFPDF_LOOP_LAST, $ARFPDF_LOOP_VAR, $ARFPDF_LOOP_VAR_ONLY, $ARFPDF_LOOP_VAR_TO, $ARFPDF_IF_CONDITION_START, $ARFPDF_IF_CONDITION_END, $ARFPDF_IF_OR_CONDITION, $ARFPDF_IF_AND_CONDITION, $ARFPDF_FIELDTYPE_SHORTCODE, $ARFPDF_MODULE_SHORTCODE, $ARFPDF_SIGNATURE_SHORTCODE_START, $ARFPDF_SIGNATURE_SHORTCODE_END, $arformspdfcreator;
		
		$PARSED_FIELD_ID = 0;
		/* Code Start for Get Label*/
		$field_id = '';
		$pattern_for_label = '/' . preg_quote($ARFPDF_LABEL_SHORTCODE, '/') . '/';
		$is_label_available = preg_match_all($pattern_for_label, $singlecontent, $content_labels_arr);
		if ($is_label_available>0) {
			foreach($content_labels_arr[0] as $content_label_arr)
			{
				$parts = @explode($ARFPDF_LABEL_SHORTCODE,$singlecontent);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					if(strtolower($field_id)==$ARFPDF_LOOP_VAR_ONLY && $field_counter>0)
					{
						$field_id = $field_counter;
					}
					$get_label_value = $arformspdfcreator->get_label($values[$field_id]);
					$singlecontent = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,$get_label_value,$singlecontent);
					$PARSED_FIELD_ID = $field_id;
				}else {
					$singlecontent = str_replace($ARFPDF_LABEL_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,'',$singlecontent);
				}
			}
			$values_field_counter = $arformspdfcreator->get_label($values[$field_counter]);
		}
		/* Code End for Get Label*/
		
		
		/* Code Start for Get Value*/
		$field_id = '';
		$pattern_for_value = '/' . preg_quote($ARFPDF_VALUE_SHORTCODE, '/') . '/';
		$is_value_available = preg_match_all($pattern_for_value, $singlecontent, $content_values_arr);
		if ($is_value_available>0) {
			foreach($content_values_arr[0] as $content_value_arr)
			{
				$parts = @explode($ARFPDF_VALUE_SHORTCODE,$singlecontent);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					if(strtolower($field_id)==$ARFPDF_LOOP_VAR_ONLY && $field_counter>0)
					{
						$field_id = $field_counter;
					}
					$get_value_value = $arformspdfcreator->get_value($values[$field_id]);
					$singlecontent = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,$get_value_value,$singlecontent);
					$PARSED_FIELD_ID = $field_id;
				}else {
					$singlecontent = str_replace($ARFPDF_VALUE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,'',$singlecontent);
				}
			}
			$values_field_counter = $arformspdfcreator->get_value($values[$field_counter]);
		}
		//echo "singlecontent====>".$singlecontent;
		/* Code End for Get Value*/
		
		
		/* Code Start for Get FieldType*/
		$field_id = '';
		$pattern_for_fieldtype = '/' . preg_quote($ARFPDF_FIELDTYPE_SHORTCODE, '/') . '/';
		$is_fieldtype_available = preg_match_all($pattern_for_fieldtype, $singlecontent, $content_fieldtypes_arr);
		if ($is_fieldtype_available>0) {
			foreach($content_fieldtypes_arr[0] as $content_fieldtype_arr)
			{
				$parts = @explode($ARFPDF_FIELDTYPE_SHORTCODE,$singlecontent);
				$myidpart = @explode($ARFPDF_FIELD_SHORTCODE,$parts[1]);
				$myid = @explode("]",$myidpart[1]);
				if(count($myid)>1)
				{
					$field_id = $myid[0];
					if(strtolower($field_id)==$ARFPDF_LOOP_VAR_ONLY && $field_counter>0)
					{
						$field_id = $field_counter;
					}
					$get_fieldtype_value = $arformspdfcreator->get_fieldtype($values[$field_id]);
					$singlecontent = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,$get_fieldtype_value,$singlecontent);
					$PARSED_FIELD_ID = $field_id;
				}else {
					$singlecontent = str_replace($ARFPDF_FIELDTYPE_SHORTCODE.$ARFPDF_FIELD_SHORTCODE.$myid[0].$ARFPDF_SHORTCODE_OVER,'',$singlecontent);
				}
			}
			$values_field_counter = $arformspdfcreator->get_fieldtype($values[$field_counter]);
		}
		/* Code End for Get FieldType*/
		
		
		/* Code Start for Get MODULE*/
		if($field_counter>0)
		{
			$field_id = '';
			$pattern_for_module = '/' . preg_quote($ARFPDF_MODULE_SHORTCODE, '/') . '/';
			$singlecontent_module = strtolower($singlecontent);
			
			$is_module_available = preg_match_all($pattern_for_module, $singlecontent_module, $content_modules_arr);
			
			if ($is_module_available>0) {
				foreach($content_modules_arr[0] as $content_module_arr)
				{
					$parts = @explode($ARFPDF_MODULE_SHORTCODE,$singlecontent_module);
					$myidpart = @explode(' ',$parts[1]);
					$myid = @explode("]",$myidpart[1]);
					if(count($myid)>1)
					{
						$field_id = trim($myid[0]);
						$chkforcondition_false = explode("!=",$field_id);
						$chkforcondition_true = explode("==",$field_id);

						if(count($chkforcondition_false)>1)
						{
							$modultewith = $chkforcondition_false[0];
							$modultewith_val = $chkforcondition_false[1];
							$calculate_module_val = $field_counter%$modultewith;
							
							$singlecontent = $calculate_module_val ."!=".$modultewith_val;
						}
						else 
						{
							$modultewith = $chkforcondition_true[0];
							$modultewith_val = $chkforcondition_true[1];
							$calculate_module_val = $field_counter%$modultewith;
							
							$singlecontent = $calculate_module_val ."==".$modultewith_val;
						}
					}
					else {
						$singlecontent = str_replace($pattern_for_module,'',$singlecontent);
					}
				}
			}
			/* Code End for Get Label*/
		}
		
		
		if($singlecontent!="")
		{
			$exp_singlecontent = explode("==",$singlecontent);
			$exp_singlecontent_neq = explode("!=",$singlecontent);
			if(count($exp_singlecontent)>1)
			{
				if($exp_singlecontent[0]==$exp_singlecontent[1])
				{
					return 1;
				}
			}else if(count($exp_singlecontent_neq)>1) {
				if($exp_singlecontent_neq[0]!=$exp_singlecontent_neq[1])
				{
					return 1;
				}
			}else if(count($exp_singlecontent)<=1 && count($exp_singlecontent_neq)<=1 && $field_counter>0)
			{
				if($PARSED_FIELD_ID==$field_counter)
				{
					return 1;
				}
			}
		}
		return 0;
	}
	
		
		function arf_pdf_get_template_header($form_name)
		{
			global $arf_pdfcreator;
			$header = array (
				'L' => array (
				  'content' => '{PAGENO} / {nb}',
				  'font-size' => 10,
				  'font-style' => 'B',
				  'font-family' => 'opensansregularbold',
				  'color'=>'#000000'
				),
				'C' => array (
				  'content' => $form_name,
				  'font-size' => 18,
				  'font-style' => 'B',
				  'font-family' => 'opensansregularbold',
				  'color'=>'#000000',
				),
				'R' => array (
				  'content' => '',
				  'font-size' => 18,
				  'font-style' => 'B',
				  'font-family' => 'opensansregularbold',
				  'color'=>'#000000'
				),
				'line' => 1,
			);
						
			$arf_pdfcreator->DefHeaderByName('ARForms PDFCreator Header',$header);
			
			$arf_pdfcreator->SetHeaderByName('ARForms PDFCreator Header');
					
		}
		
		function arf_pdf_get_template_footer($form, $content)
		{
			global $arf_pdfcreator, $ARFPDF_SIGNATURE_SHORTCODE_START, $ARFPDF_SIGNATURE_SHORTCODE_END;
			
			$delimiter = '#';
			$signaturematches = $delimiter . preg_quote($ARFPDF_SIGNATURE_SHORTCODE_START, $delimiter) 
								. '(.*?)(.*?)' 
								. preg_quote($ARFPDF_SIGNATURE_SHORTCODE_END, $delimiter) 
								. $delimiter 
								. 's';
			$signaturevalue = preg_match_all($signaturematches, $content, $signaturevalues);
			
			$powered_by_content = 'Powered by ARForms';
			if($signaturevalue>0)
			{
				foreach($signaturevalues[2] as $k => $v)
				{
					$powered_by_content = $v;
				}
			}
			
			$powered_by_content = str_replace(array("\n", "<br />", "<br>", "<br/>", "  "), ' ', $powered_by_content);
			
			$footer = array (
				'L' => array (
				  'content' => __('Entry Date','ARForms-Pdfcreator').' : '.$form->created_date,
				  'font-size' => 10,
				  'font-style' => 'B',
				  'font-family' => 'opensansregular',
				  'color'=>'#000000'
				),
				'C' => array (
				  'content' => '',
				  'font-size' => 18,
				  'font-style' => 'B',
				  'font-family' => 'opensansregularbold',
				  'color'=>'#000000'
				),
				'R' => array (
				  'content' => $powered_by_content,
				  'font-size' => 10,
				  'font-style' => 'R',
				  'font-family' => 'opensansregular',
				  'color'=>'#000000'
				),
				'line' => 1,
			);
			
			$arf_pdfcreator->DefFooterByName('ARForms PDFCreator Footer', $footer);
				
			$arf_pdfcreator->SetFooterByName('ARForms PDFCreator Footer');
		}
}
?>