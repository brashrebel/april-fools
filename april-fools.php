<?php
/*
Plugin Name: April Fools
Description: Just some holiday fun.
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
Version: 1.0
License: GPL2
*/
add_action('admin_print_styles', 'kjm_prank');
add_action('wp_print_styles', 'kjm_prank');
function kjm_prank() {
	$user_id = get_current_user_id();
	$april_one = '1 April';
	$current_date = date('j F');
	if ($current_date == $april_one) { 
		if ($user_id == 4 || $user_id == 6 || $user_id == 91 || $user_id == 103) { ?>
		<style type="text/css">
		#wpcontent #wpadminbar {
			background: #DD30E4;
		}
		</style>
			<?php } else { }
		} else { }
}
?>