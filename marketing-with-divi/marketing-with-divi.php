<?php
/*
Plugin Name: Marketing With Divi
Plugin URI:  http://philippstracker.com/
Description: Eine Sammlung von tollen Divi Modulen
Version:     1.0.0
Author:      Philipp Stracker
Author URI:  https://philippstracker.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: evrdm-marketing-with-divi
Domain Path: /languages

Marketing With Divi is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Marketing With Divi is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Marketing With Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'evrdm_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function evrdm_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/MarketingWithDivi.php';
}
add_action( 'divi_extensions_init', 'evrdm_initialize_extension' );
endif;
