<?php
/**
*
* fieldconfig for gravity-forms-themes/Customize
*
* @package Gravity_Forms_Themes
* @author Wordpress Gurus support@wordpressgurus.net
* @license GPL-2.0+
* @link http://www.wordpressgurus.net
* @copyright 2015 Wordpress Gurus
*/


$group = array(
	'label' => __('Customize','gravity-forms-themes'),
	'id' => '315914412',
	'master' => 'gft_width',
	'fields' => array(
		'gft_width'	=>	array(
			'label'		=> 	__('Width','gravity-forms-themes'),
			'caption'	=>	__('Set the width of the form in percentage.','gravity-forms-themes'),
			'type'		=>	'slider',
			'default'	=> 	'0,100|98|%',
			'inline'	=> 	true,
		),
		'gft_fonts'	=>	array(
			'label'		=> 	__('Fonts','gravity-forms-themes'),
          'caption'   =>  '',
			'type'		=>	'dropdown',
			'default'	=> 	'google||Google Fonts,custom||Custom Fonts',
		),
		'gft_font_name'	=>	array(
			'label'		=> 	__('Font Name','gravity-forms-themes'),
			'caption'	=>	__('for Google Fonts e.g Lato and for Custom Fonts e.g Arial or your own theme font name.','gravity-forms-themes'),
			'type'		=>	'smalltextfield',
			'default'	=> 	'',
		),
	),
	'styles'	=> array(
		'simple-slider.css',
	),
	'scripts'	=> array(
		'simple-slider.min.js',
	),
	'multiple'	=> false,
);

