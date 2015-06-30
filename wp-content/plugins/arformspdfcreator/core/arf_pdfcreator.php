<?php
	
	require_once('../../../../wp-load.php');
	
	global $arf_pdfcreator, $wpdb, $arf_templates;
	
	$id = $_REQUEST['entry_id'];
	
	$requested_template = $_REQUEST['arf_pdf_template'];
	
	$style = file_get_contents(ARF_PDFCREATOR_URL.'/css/arformspdfcreator.css');
	
	$arf_pdfcreator->WriteHTML($style,1);
	
	$arf_pdfcreator->useLang = true;
		
	$form = $wpdb->get_results( $wpdb->prepare("SELECT form_id,created_date FROM ".$wpdb->prefix."arf_entries WHERE id = %d", $id) );
	
	$form_id = $form[0]->form_id;
	
	$form_name = $wpdb->get_results( $wpdb->prepare( "SELECT name FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form_id ) );
	
	$form_name = stripslashes_deep( strip_tags($form_name[0]->name) );
	
	$arf_pdfcreator->SetTitle($form_name);
	
	$arf_pdfcreator->SetAutoFont();
	
	$chktemplate = substr($requested_template, -4);
	if($chktemplate==".php")
	{
		$arftemplatename = $requested_template;
	}else {
		$arftemplatename = "template_".$requested_template.".php";
	}
	
	if( $requested_template == 'default_template' )
		$arftemplatename = "template_default.php";
	
	$template_dir_path = ARF_PDFCREATOR_DIR.'/core/templates/';
	
	if( !file_exists($template_dir_path.$arftemplatename) )
			$arftemplatename = "template_default.php";
	
	$htmlcontent = $arf_templates->arf_get_template_html($arftemplatename, $arf_pdfcreator, $form_id, $id);
	
	$arf_pdfcreator->WriteHTML($htmlcontent);	
		
	$wp_upload_dir 	= wp_upload_dir();
		
	$upload_main_dir = 	$wp_upload_dir['basedir'].'/arforms/';
	
	$pdffilename 	= 'ARForms_'.time().'.pdf';
	
	$arf_pdfcreator->Output($pdffilename, 'I');
	
?>