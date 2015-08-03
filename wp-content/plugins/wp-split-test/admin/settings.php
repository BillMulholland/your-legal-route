<?php
    
    global $wpdb;
	$Pages = array();
	$Pages = $wpdb->get_results("SELECT `ID`, `post_title` FROM ".$wpdb->posts." WHERE `post_status`='publish' AND `post_type`='page' ORDER BY `ID` ASC");
	if(is_array($Pages) && count($Pages))
	{
		// Make <option> array of all pages
		$Pages_select = array();
		foreach($Pages as $page)
		{
			$Pages_select[] = array($page->ID, $page->post_title);
		}
	}

	BhittaniPlugin_AdminMarkup::select(array(
		'title' => 'Select Page',
		'description' => 'Select a page that will handle the rotations.
		                  <br /><strong>Note:</strong> Create a fresh page with no content and come back here to select that page',
		'field' => 'bp_uur_settings_rotator',
		'options' => array_merge_recursive(array(array(0, '-')), $Pages_select),
		'value' => get_option('bp_uur_settings_rotator')
	));
	
?>