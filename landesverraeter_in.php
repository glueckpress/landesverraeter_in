<?php
/**
 * Plugin Name: Landesverraeter_in
 * Description: Schaltet dem ersten Aufruf jeder beliebigen URL deiner Site eine statische HTML-Seite vor. Dabei wird ein Cookie gesetzt, der die Anzeige der statische Seite beim nächsten Aufruf verhindert. Zum originalen Inhalt der aufgerufenen URL reicht ein Aktualisieren der statischen Seite im Browser.
 * Version:     0.1
 * Author:      glueckpress
 * License:     GNU General Public License v3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if( ! defined( 'ABSPATH' ) )
	exit;

/**
 * Commit Landesverrat.
 *
 * @return void
 */
function landesverraeter_in__load_plugin() {

	add_filter( 'template_include', 'landesverraeter_in__show_static_content', 0, 2 );
}
add_action( 'plugins_loaded' , 'landesverraeter_in__load_plugin' );

/**
 * Redirect to static page, set cookie.
 *
 * @param  string $template
 * @return string
 */
function landesverraeter_in__show_static_content( $template ) {

	$cookie_name   = 'landesverraeter_in';
	$cookie_value  = sanitize_key( time() );
	$cookie_expire = apply_filters( 'landesverraeter_in__cookie_expire', HOUR_IN_SECONDS );

	if( ! isset( $_COOKIE[ $cookie_name ] ) ) {
		setcookie( $cookie_name, $cookie_value, time() + ( $cookie_expire ), '/' );
		$template = trailingslashit( dirname( __FILE__ ) ) . 'inc/index.php';
	}

	return $template;
}
