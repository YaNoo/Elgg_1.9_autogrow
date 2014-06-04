<?php
/**
 * Describe plugin here
 */

elgg_register_event_handler('init', 'system', 'my_plugin_init');

function autogrow_textarea_init() {
	// Rename this function based on the name of your plugin and update the
	// elgg_register_event_handler() call accordingly

	// Register a script to handle (usually) a POST request (an action)
// 	$base_dir = elgg_get_plugins_path() . 'my_plugin/actions/my_plugin';
// 	elgg_register_action('my_plugin', "$base_dir/my_action.php");

	// Extend the main CSS file
	elgg_extend_view('page/elements/footer', 'autogrow_textarea/footer');

	
	elgg_register_js('jquery.autosize', 'mod/autogrow_area/vendors/autosize/jquery.autosize.min.js', 'footer');
	
	
	// Add a menu item to the main site menu
// 	$item = new ElggMenuItem('my_plugin', elgg_echo('my_plugin:menu'), 'my_url');
// 	elgg_register_menu_item('site', $item);
}