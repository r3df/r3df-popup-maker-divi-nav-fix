<?php
/*
Plugin Name:	R3DF - Popup Maker / Divi nav fix
Description:    Patch for issue with Popup Maker not working in Divi mobile nav
Plugin URI:		http://r3df.com/
Version: 		1.0.0
Text Domain:	r3df-popup-maker-divi-nav-fix
Domain Path: 	/lang/
Author:         R3DF
Author URI:     http://r3df.com
Author email:   plugin-support@r3df.com
Copyright: 		R-Cubed Design Forge
*/

/*  Copyright 2015 R-Cubed Design Forge

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( __FILE__ == $_SERVER['SCRIPT_FILENAME'] ) {
	die();
}

add_action( 'wp_enqueue_scripts', 'r3df_popup_maker_divi_nav_fix', 100000 );

function r3df_popup_maker_divi_nav_fix() {
	// Get the plugin version (added to css file loaded to clear browser caches on change)
	$plugin = get_file_data( __FILE__, array( 'Version' => 'Version' ) );

	// Register and enqueue the general css
	wp_register_script( 'r3df-popup-maker-divi-nav-fix', plugins_url( 'js/r3df-popup-maker-divi-nav-fix.js', __FILE__ ), array( 'et-builder-modules-global-functions-script' ), $plugin['Version'], true );
	wp_enqueue_script( 'r3df-popup-maker-divi-nav-fix' );
}
