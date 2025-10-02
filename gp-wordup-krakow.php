<?php
/**
 * Plugin Name:       GP WordUP Kraków
 * Plugin URI:        https://blog.meloniq.net/gp-wordup-krakow/
 *
 * Description:       Learn something new about GlotPress & WordUP Kraków each time you visit the admin area.
 * Tags:              glotpress, wordup, krakow
 *
 * Requires at least: 4.9
 * Requires PHP:      7.4
 * Version:           1.0
 *
 * Author:            MELONIQ.NET
 * Author URI:        https://meloniq.net/
 *
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Text Domain:       gp-wordup-krakow
 *
 * Requires Plugins:  glotpress
 *
 * @package Meloniq\GpWordUpKrakow
 */

namespace Meloniq\GpWordUpKrakow;

use GP;

// If this file is accessed directly, then abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'GPWUK_TD', 'gp-wordup-krakow' );


/**
 * GP Init Setup.
 *
 * @return void
 */
function gp_init() {
	global $gpwuk_conference;

	require_once __DIR__ . '/src/class-facts.php';

	$gpwuk_conference['facts'] = new Facts();
}
add_action( 'gp_init', 'Meloniq\GpWordUpKrakow\gp_init' );
