<?php

/*
Plugin Name: Split Test URL Redirect Rotator
Plugin URI: http://lab-o-matic.com/
Description: Manage URL rotations on your website to split test offers and landing pages. Set pages to redirect to another URL based on a custom weighted percentage and track the rotations.
Version: 1.0
Author: Lab-o-Matic
Author URI: http://lab-o-matic.com/
*/

require_once 'bhittani-framework/plugin.php';

if(!class_exists('BhittaniPlugin_UltimateUrlRotator')) :

	class BhittaniPlugin_UltimateUrlRotator extends BhittaniPlugin
	{
		private $_Menus;
		
		public function __construct($id, $nick, $ver)
		{
			parent::__construct($id, $nick, $ver);
			$this->_Menus = array();
		}
		/** function/method
		* Usage: return file uri
		* Arg(1): string
		* Return: string
		*/
		public static function file_uri($path)
		{
			return plugins_url($path, __FILE__);
		}
		/** function/method
		* Usage: return absoulte file path
		* Arg(1): string
		* Return: string
		*/
		public static function file_path($path)
		{
			return dirname(__FILE__).'/'.$path;
		}
		/** function/method
		* Usage: hook js admin
		* Arg(0): null
		* Return: void
		*/
		public function js_admin()
		{
			$Params = array();
			$Params['nonce'] = wp_create_nonce($this->id);
			$Params['func_landings'] = 'uur_admin_ajax_landings_manager';
			$Params['func_offers'] = 'uur_admin_ajax_offers_manager';
			$Params['image_chart'] = self::file_uri('admin/chart.png');
	        $Params['image_remove'] = self::file_uri('admin/error.png');
	        $Params['landing_url'] = BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Landing URL <span></span>',
				'description' => 'Enter landing url',
				'field' => 'bp_uur_landings[rotation][url]',
				'class' => '__landing_url'
			), false) . BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Weightage for URL <span></span>',
				'description' => 'Enter traffic weightage in percentage. e.g. 25',
				'field' => 'bp_uur_landings[rotation][traffic]',
				'class' => '__landing_url __traffic'
			), false);
			$Params['offer_url'] = BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Offer URL <span></span>',
				'description' => 'Enter offer url',
				'field' => 'bp_uur_offers[rotation][url]',
				'class' => '__offer_url'
			), false) . BhittaniPlugin_AdminMarkup::input(array(
				'title' => 'Weightage for URL <span></span>',
				'description' => 'Enter traffic weightage in percentage. e.g. 25',
				'field' => 'bp_uur_offers[rotation][traffic]',
				'class' => '__offer_url __traffic'
			), false);
			$this->enqueue_js('js_admin', self::file_uri('admin/js-admin.js'), $this->ver, array('bhittaniplugin_admin_script'), $Params);
		}
		/** function/method
		* Usage: css_admin helper
		* Arg(0): null
		* Return: void
		*/
		public function css_admin()
		{
			$this->enqueue_css('css_admin', self::file_uri('admin/css-admin.css'));
		}
		/** function/method
		* Usage: hook css admin
		* Arg(0): null
		* Return: void
		*/
		public function scripts()
		{
			foreach($this->_Menus as $menu)
			{
				add_action('admin_print_styles-'.$menu, array(&$this, 'css_admin'));
				add_action('admin_print_scripts-'.$menu, array(&$this, 'js_admin'));
			}
		}
		/** function/method
		* Usage: Setting defaults on activation
		* Arg(0): null
		* Return: void
		*/
		public function activate()
		{
			$ver_current = $this->ver;
			$ver_previous = parent::get_options('bp_uur');
			if(!$ver_previous)
			{
			    parent::update_options(array(
					'bp_uur' => $ver_current,
				));
			}
		}
		/** function/method
		* Usage: helper for hooking (registering) the menu
		* Arg(0): null
		* Return: void
		*/
		public function menu()
		{
			// Create main menu tab
			$this->_Menus[] = add_options_page(
				$this->nick.' - Settings', 
				$this->nick, 
	            'manage_options', 
				$this->id.'_settings', 
				array(&$this, 'options_general'),
				self::file_uri('admin/icon.png')
			);
		}
		/** function/method
		* Usage: show options/settings form page
		* Arg(0): null
		* Return: void
		*/
		public function options_page($opt)
		{ 
			if (!current_user_can('manage_options')) 
			{
				wp_die( __('You do not have sufficient permissions to access this page.') );
			}
			$sidebar = false;
			$h3 = $this->nick;
			$image_chart = self::file_uri('admin/chart.png');
			$image_remove = self::file_uri('admin/error.png');
			include self::file_path('admin/admin.php');
		}
		/** function/method
		* Usage: show general options
		* Arg(0): null
		* Return: void
		*/
		public function options_general()
		{ 
			$this->options_page('general');
		}

		public function filter_admin_options($Options)
		{
			unset($Options['bp_uur_landings']);
			unset($Options['bp_uur_offers']);
			return $Options;
		}

		protected function ajax($option)
		{
			$Response = array();

			$Landings = parent::get_options($option);
			if(!is_array($Landings))
			{
				$Landings = array();
			}
			
			$is_remove = (isset($_POST['_remove']) && is_numeric($_POST['_remove'])) ? $_POST['_remove'] : false;
			if($is_remove!==false)
			{
				if(array_key_exists($is_remove, $Landings))
				{
					unset($Landings[$is_remove]);
					parent::update_options(array($option => $Landings));
				}
				$Response['success'] = 'true';
				echo json_encode($Response);
			    die();
			}

			$is_edit = (isset($_POST['_edit']) && is_numeric($_POST['_edit'])) ? $_POST['_edit'] : false;
			
			$Landing = $_POST[$option];

			$error = false;
			
			if(is_array($Landing))
			{
				if($is_edit===false)
				{
					$Landings[] = $Landing;
					end($Landings);
                    $last_id=key($Landings);
				}
				else
				{
					$Landings[$is_edit] = $Landing;
				}
				parent::update_options(array($option => $Landings));
			}
			else
			{
				$error = true;
			}
			
			if(!$error)
			{
				$Response['key'] = ($is_edit===false) ? $last_id : $is_edit;
			    $Response['success'] = 'true';
			}
			return $Response;
		}

		public function uur_admin_ajax_landings_manager()
		{
			header('content-type: application/json; charset=utf-8');
			check_ajax_referer($this->id);
			echo json_encode($this->ajax('bp_uur_landings'));
			die();
		}

		public function uur_admin_ajax_offers_manager()
		{
			header('content-type: application/json; charset=utf-8');
			check_ajax_referer($this->id);
			echo json_encode($this->ajax('bp_uur_offers'));
			die();
		}
		
		public function uur()
		{
			if(is_page() && get_the_ID()==parent::get_options('bp_uur_settings_rotator'))
			{
				$id = isset($_GET['uur']) && is_numeric($_GET['uur']) ? $_GET['uur'] : false;

				$table_name = isset($_GET['offer']) ? 'bp_uur_offers' : 'bp_uur_landings';
				
				$Table = parent::get_options($table_name);

				if($id!==false && is_array($Table) && array_key_exists($id, $Table))
				{
					$Rotations = $Table[$id]['rotation'];

					$Rand = array();
					foreach($Rotations as $key=>$Rotation)
					{
						for($i = 1; $i <= $Rotation['traffic']; $i++)
						{
							$Rand[] = $key;
						}
					}
					
					$key = rand(0, 99);

					$url = $Rotations[$Rand[$key]]['url'];

					$Table[$id]['rotation'][$Rand[$key]]['count'] = array_key_exists('count', $Rotations[$Rand[$key]])
					? ($Rotations[$Rand[$key]]['count'] + 1)
					: 1;
					
					parent::update_options(array($table_name => $Table));

					wp_redirect($url);
					die();
				}
			}
		}
	}

	$bhittani_uur_obj = new BhittaniPlugin_UltimateUrlRotator('bhittani_plugin_uur', 'Split Test URL Rotator', '1.0');
    
	// Setup
    register_activation_hook(__FILE__, array($bhittani_uur_obj, 'activate'));
	
	// Head Scripts
	add_action('admin_init', array($bhittani_uur_obj, 'scripts'));
	
	// Menu
	add_action('admin_menu', array($bhittani_uur_obj, 'menu'));

	// Filters
	add_filter('bf_admin_options', array($bhittani_uur_obj, 'filter_admin_options'));
    
    // AJAX
    // admin
	add_action('wp_ajax_uur_admin_ajax_landings_manager', array($bhittani_uur_obj, 'uur_admin_ajax_landings_manager'));
	add_action('wp_ajax_uur_admin_ajax_offers_manager', array($bhittani_uur_obj, 'uur_admin_ajax_offers_manager'));

    // Main Hooks
	add_action('wp', array($bhittani_uur_obj, 'uur'));

endif;

?>