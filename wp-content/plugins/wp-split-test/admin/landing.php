<?php
    $Landings = get_option('bp_uur_landings');
	if(!$Landings)
	{
		$Landings = array();
	}

	$landing_html = '
	<p class="__landings_add_btns _hidden">
	    <a href="#" class="button _right _hidden" rel="uur-add-landing">Add</a>
		<a href="#" class="button _right _hidden" rel="uur-edit-landing">Update</a>
		<a href="#" class="button _right _hidden" rel="uur-remove-landing">Remove</a>
		<a href="#" class="button" rel="uur-cancel-landing">Cancel</a>
    </p>
    <div class="bf-red __bf_msg _hidden"></div>
    <div class="__landings_table">
	<p><a href="#" class="button-primary" rel="uur-show-add-landing">Add Rotation</a></p>
    <table class="widefat __table_landings">
        <thead>
            <tr>
                <th>#</th>
                <th>Profile</th>
                <th>URL</th>
                <th>Rotations</th>
				<th></th>
				<th></th>
            </tr>
        </thead>
		<tfoot>
            <tr>
                <th>#</th>
                <th>Profile</th>
                <th>URL</th>
                <th>Rotations</th>
				<th></th>
				<th></th>
            </tr>
        </thead>
        <tbody>';

        $url = get_option('bp_uur_settings_rotator') ? get_permalink(get_option('bp_uur_settings_rotator')) : false;
        if($url)
        {
        	$url = rtrim($url, '/');
			$Url_parsed = parse_url($url);
			$url = (!empty($Url_parsed['query']) ? ($url . '&') : ($url . '/?')) . 'uur=';
        }

        $landing_key = 1;
		foreach($Landings as $key => $landing)
		{
			$landing_html .= '
            <tr class="row">
                <td width="16">'.($landing_key++).'</td>
                <td width="80">'.$landing['profile'].'</td>
                <td>'.($url ? ($url.$key) : 'Select a page for rotations in the settings tab first').'</td>
                <td width="18">'.$landing['rotations'].'</td>
                <td width="18"><a href="#'.$key.'" title="Stats" rel="uur-show-stats-landing"><img src="'.$image_chart.'" alt="Stats" /></a></td>
            	<td width="18"><a href="#'.$key.'" title="Remove" rel="uur-show-remove-landing"><img src="'.$image_remove.'" alt="Remove" /></a></td>
            </tr>';
            $landing_html .= '
            <tr class="_hidden" id="_landing_'.$key.'">
            	<td colspan="6">
            	    <table class="widefat">
            	    <thead>
            	        <tr>
            	            <th>URL</th>
            	            <th>Weight</th>
            	            <th>Views</th>
            	        </tr>
            	    </thead>
            	    <tbody>';
            foreach($landing['rotation'] as $R)
            {
            	$landing_html .= '<tr>';
            	$landing_html .= '<td>'.$R['url'].'</td>';
            	$landing_html .= '<td>'.$R['traffic'].'%</td>';
            	$landing_html .= '<td>'.(isset($R['count']) ? $R['count'] : 0).'</td>';
            	$landing_html .= '</tr>';
            }
            $landing_html .= '
                        </tbody>
                    </table>
            	</td>
            </tr>
            ';
		}
		$landing_html .= '
        </tbody>
    </table>
	</div>';

    BhittaniPlugin_AdminMarkup::html($landing_html);

    echo '<div class="__landings_add _hidden">';

	BhittaniPlugin_AdminMarkup::input(array(
		'title' => 'Profile',
		'description' => 'Profile name',
		'field' => 'bp_uur_landings[profile]',
		'class' => '__landing_fields'
	));

	BhittaniPlugin_AdminMarkup::input(array(
		'title' => 'Rotations',
		'description' => 'How many urls will this profile rotate',
		'field' => 'bp_uur_landings[rotations]',
		'class' => '__landing_fields __landing_rotations'
	));
	
	echo '</div>';

?>
