<?php
    $Offers = get_option('bp_uur_offers');
	if(!$Offers)
	{
		$Offers = array();
	}

	$offer_html = '
	<p class="__offers_add_btns _hidden">
	    <a href="#" class="button _right _hidden" rel="uur-add-offer">Add</a>
		<a href="#" class="button _right _hidden" rel="uur-edit-offer">Update</a>
		<a href="#" class="button _right _hidden" rel="uur-remove-offer">Remove</a>
		<a href="#" class="button" rel="uur-cancel-offer">Cancel</a>
    </p>
    <div class="bf-red __bf_msg _hidden"></div>
    <div class="__offers_table">
    <h4>To use these offers, just insert the relevant URL as anchor links in your page content</h4>
	<p><a href="#" class="button-primary" rel="uur-show-add-offer">Add Rotation</a></p>
    <table class="widefat __table_offers">
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
			$url = (!empty($Url_parsed['query']) ? ($url . '&') : ($url . '/?')) . 'offer=1&uur=';
        }

        $offer_key = 1;
		foreach($Offers as $key => $offer)
		{
			$offer_html .= '
            <tr class="row">
                <td width="16">'.($offer_key++).'</td>
                <td width="80">'.$offer['profile'].'</td>
                <td>'.($url ? ($url.$key) : 'Select a page for rotations in the settings tab first').'</td>
                <td width="18">'.$offer['rotations'].'</td>
                <td width="18"><a href="#'.$key.'" title="Stats" rel="uur-show-stats-offer"><img src="'.$image_chart.'" alt="Stats" /></a></td>
            	<td width="18"><a href="#'.$key.'" title="Remove" rel="uur-show-remove-offer"><img src="'.$image_remove.'" alt="Remove" /></a></td>
            </tr>';
            $offer_html .= '
            <tr class="_hidden" id="_offer_'.$key.'">
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
            foreach($offer['rotation'] as $R)
            {
            	$offer_html .= '<tr>';
            	$offer_html .= '<td>'.$R['url'].'</td>';
            	$offer_html .= '<td>'.$R['traffic'].'%</td>';
            	$offer_html .= '<td>'.(isset($R['count']) ? $R['count'] : 0).'</td>';
            	$offer_html .= '</tr>';
            }
            $offer_html .= '
                        </tbody>
                    </table>
            	</td>
            </tr>
            ';
		}
		$offer_html .= '
        </tbody>
    </table>
	</div>';

    BhittaniPlugin_AdminMarkup::html($offer_html);

    echo '<div class="__offers_add _hidden">';

	BhittaniPlugin_AdminMarkup::input(array(
		'title' => 'Profile',
		'description' => 'Profile name',
		'field' => 'bp_uur_offers[profile]',
		'class' => '__offer_fields'
	));

	BhittaniPlugin_AdminMarkup::input(array(
		'title' => 'Rotations',
		'description' => 'How many urls will this profile rotate',
		'field' => 'bp_uur_offers[rotations]',
		'class' => '__offer_fields __offer_rotations'
	));
	
	echo '</div>';

?>
