<?php
/**
*
* fieldconfig for gravity-forms-themes/Form Settings
*
* @package Gravity_Forms_Themes
* @author Wordpress Gurus support@wordpressgurus.net
* @license GPL-2.0+
* @link http://www.wordpressgurus.net
* @copyright 2015 Wordpress Gurus
*/


$group = array(
	'label' => __('Form Settings','gravity-forms-themes'),
	'id' => '1321014713',
	'master' => 'gft_id',
	'fields' => array(
		'gft_id'	=>	array(
			'label'		=> 	__('Gravity Form ID','gravity-forms-themes'),
          'caption'   =>  '',
			'type'		=>	'smalltextfield',
			'default'	=> 	'',
		),
		'gft_description'	=>	array(
			'label'		=> 	__('Gravity Form Description','gravity-forms-themes'),
          'caption'   =>  '',
			'type'		=>	'onoff',
			'default'	=> 	'*true||Yes,false||No',
			'inline'	=> 	true,
		),
		'gft_form_title'	=>	array(
			'label'		=> 	__('Gravity Form Title','gravity-forms-themes'),
          'caption'   =>  '',
			'type'		=>	'onoff',
			'default'	=> 	'*true||Yes,false||No',
			'inline'	=> 	true,
		),
		'gft_ajax'	=>	array(
			'label'		=> 	__('Ajax','gravity-forms-themes'),
          'caption'   =>  '',
			'type'		=>	'onoff',
			'default'	=> 	'*true||Yes,false||No',
			'inline'	=> 	true,
		),
		'gft_theme'	=>	array(
			'label'		=> 	__('Theme Set 1','gravity-forms-themes'),
			'caption'	=>	__('Make sure when you choose the theme from this set the Theme Set 2 or Others are blank.','gravity-forms-themes'),
			'type'		=>	'dropdown',
			'default'	=> 	'checkout||1. Checkout,bluegreen||2. Blue & Green,firenze||3. Firenze,techoffice||4. Tech Office,watermelon||5. Watermelon,flatui||6. Flat UI,circus||7. Circus III,chai||8. Afternoon Chai,mountains||9. Mountains,ventana||10. Ventana',
		),
		'theme_set_2'	=>	array(
			'label'		=> 	__('Theme Set 2','gravity-forms-themes'),
			'caption'	=>	__('Make sure when you choose the theme from this set the Theme Set 1 or Others are blank.','gravity-forms-themes'),
			'type'		=>	'dropdown',
			'default'	=> 	'thisgreen||11. This Green,dreams||12. Dreams Forever,dream||13. Dream,saltillo||14. Saltillo,skyblue||15. Sky Blue,granada||16. Granada,waterlime||17. Water Lime,ocean||18. Ocean,prored||19. Pro RED,coffee||20. Coffee',
		),
	),
	'styles'	=> array(
		'toggles.css',
	),
	'scripts'	=> array(
		'toggles.min.js',
	),
	'multiple'	=> false,
);

