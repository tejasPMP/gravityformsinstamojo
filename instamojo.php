<?php
/*
Plugin Name: Gravity Forms instamojo Standard Add-On
Plugin URI: http://www.ganguli.com
Description: Integrates Gravity Forms with instamojo Payments Standard, enabling end users to purchase goods and services through Gravity Forms.
Version: 1.0
Author: Charan Raj T C
Author URI: http://www.coresoft.co.in/charanraj.tc
Text Domain: gravityformsinstamojo
*/


define( 'GF_INSTAMOJO_VERSION', '1.0' );

add_action( 'gform_loaded', array( 'GF_Instamojo_Bootstrap', 'load' ), 5 );

class GF_Instamojo_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-instamojo.php' );

		GFAddOn::register( 'GFInstamojo' );
	}
}

function gf_instamojo() {
	return GFInstamojo::get_instance();
}
