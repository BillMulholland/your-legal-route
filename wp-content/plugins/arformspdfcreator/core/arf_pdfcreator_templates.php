<?php
	class ARF_pdfcreator_template{
		
		function get_arf_pdf_templates(){
		
			$templates = array();
			$template_dir_path = ARF_PDFCREATOR_DIR.'/core/templates/';
			$templates_list = glob($template_dir_path.'*.*');
			if(count($templates_list>0))
			{
				foreach($templates_list as $file) {
					$file_key = str_replace($template_dir_path,'',$file);
					$file_value = str_replace('.php','',$file_key);
					$file_value = str_replace('_',' ',$file_value);
					$templates[$file_key] = $file_value;
				}
			}
			return $templates;
		}
		
		function get_arfpdf_template($form_id){
			
			global $wpdb;
			
			$frm_opt = $wpdb->get_results( $wpdb->prepare( 'SELECT options FROM '.$wpdb->prefix.'arf_forms WHERE id = %d', $form_id ) );
			
			$options = maybe_unserialize($frm_opt[0]->options);
			
			return $options['arf_pdf_template'];
		}
		
		function arf_get_template_html($templatename, $arf_pdfcreator, $form_id, $entry_id)
		{
			global $wpdb, $arfrecordmeta, $arformspdfcreator;
			
			$form = $wpdb->get_row( $wpdb->prepare("SELECT form_id,created_date FROM ".$wpdb->prefix."arf_entries WHERE id = %d", $entry_id) );
				
			$created_date = strtotime($form->created_date);
			
			$form_name = $wpdb->get_row( $wpdb->prepare( "SELECT name FROM ".$wpdb->prefix."arf_forms WHERE id = %d", $form_id ) );
	
			$form_name = stripslashes_deep( strip_tags($form_name->name) );
				
			$filename = ARF_PDFCREATOR_DIR.'/core/templates/'.$templatename;
			
			$entry_ids = array( $entry_id );
			
			$get_form_fields = $wpdb->get_results( $wpdb->prepare( "SELECT id, name, type, field_options FROM ".$wpdb->prefix."arf_fields WHERE form_id = %d and type not in ('captcha', 'break', 'imagecontrol') ORDER BY field_order", $form_id ) );
			
			$values = array();
			$cntr = 1;
			foreach($get_form_fields as $field)
			{
				$field->field_options	= maybe_unserialize( $field->field_options );  
				
				$field_values 	= $wpdb->get_row( $wpdb->prepare( "SELECT entry_value FROM ".$wpdb->prefix."arf_entry_values WHERE field_id = %d and entry_id = %d", $field->id, $entry_id ) );
				
				$values[$cntr] = (object) array_merge((array)$field, (array)$field_values); 
				$cntr++;
			}
			
			ob_start();
			
			include($filename);	
			  
			$content = ob_get_contents();
			
			$header_content = $arformspdfcreator->arf_pdf_get_template_header($form_name);
			
			$footer_content = $arformspdfcreator->arf_pdf_get_template_footer($form, $content);
						
			$content = $arformspdfcreator->ARFPDF_Convert_Shortcode_values($values, $content, $entry_id);
			
			//echo $content;
			//exit;
			
			ob_end_clean();	  
			
			return $content;
		}
		
	}
?>