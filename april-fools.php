<?php
/*
Plugin Name: April Fools
Description: This plugin turns the WordPress admin bar pink for only certain users.
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
Version: 1.1
License: GPL2
*/
add_action( 'admin_print_styles', 'af_prank' );
add_action( 'wp_print_styles', 'af_prank' );
function af_prank() {
	$user_id      = get_current_user_id();
	$victim      = 1; // CHANGE THIS TO BE USER ID OF YOUR VICTIM
	$april_one    = '1 April';
	$current_date = date( 'j F' );
	if ( $current_date == $april_one ) {
		if ( $user_id == $victim ) {
			?>
			<style type="text/css">
				#wpcontent #wpadminbar {
					background: #DD30E4;
				}
			</style>
		<?php
		} else {
		}
	} else {
	}
}