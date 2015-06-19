<?php
/**
 * @package   Gravity_Forms_Themes
 * @author    Wordpress Gurus <support@wordpressgurus.net>
 * @license   GPL-2.0+
 * @link      http://www.wordpressgurus.net
 * @copyright 2015 Wordpress Gurus
 *
 * @wordpress-plugin
 * Plugin Name: Gravity Forms Themes (shared on wplocker.com)
 * Plugin URI:  http://www.wordpressgurus.net
 * Description: Apply beautiful ready made themes to your gravity forms.
 * Version:     1.00
 * Author:      Wordpress Gurus
 * Author URI:  http://www.wordpressgurus.net
 * Text Domain: gravity-forms-themes
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-gravity-forms-themes.php' );

require_once( plugin_dir_path( __FILE__ ) . '/includes/widget-gravity_forms_themes.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'Gravity_Forms_Themes', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Gravity_Forms_Themes', 'deactivate' ) );

// Load instance
add_action( 'plugins_loaded', array( 'Gravity_Forms_Themes', 'get_instance' ) );
//Gravity_Forms_Themes::get_instance();
?>