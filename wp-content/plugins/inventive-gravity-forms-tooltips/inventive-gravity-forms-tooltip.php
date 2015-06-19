<?php
/*
Plugin Name: Inventive gravity forms tooltip
Plugin URI: http://www.inventive3d.com
Description: Show tooltip on hover over gravity forms fields
Version: 0.17
Author: Inventive3d
Author URI: http://www.inventive3d.com
License: GPL2

Copyright 2015 Inventive3d (info@inventive3d.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA

*/

function load_1nventive_gravity_tooltip_script() {
wp_enqueue_script( '1nventive_gravity_tooltip_js', plugins_url( 'js/script.js' , __FILE__ ), '1.5', true );
wp_register_style( '1nventive_gravity_tooltip_css', plugins_url( 'style.css' , __FILE__ ), '1.5', true );
wp_enqueue_style( '1nventive_gravity_tooltip_css' );
}

add_action( 'wp_enqueue_scripts', 'load_1nventive_gravity_tooltip_script' );


function load_1nventive_gravity_tooltip_admin_script() {
wp_register_style( '1nventive_gravity_admin_tooltip_css', plugins_url( 'style.css' , __FILE__ ), '1.5', true );
wp_enqueue_style( '1nventive_gravity_admin_tooltip_css' );
}

add_action( 'admin_enqueue_scripts', 'load_1nventive_gravity_tooltip_admin_script' );


function inventive_gravity_tooltip_div() {
    echo '<div class="inventive-gravity-tooltip inventive-gravity-tooltip-left" id="inventive-gravity-tooltip">
	<div id="inventive-arrow" class="inventive-arrow-right"></div>
	<div class="inventive-tooltip-container"></div>
	</div>';
}
add_action('wp_footer', 'inventive_gravity_tooltip_div');


?>