<?php
/**
 * This plugin apply autosize to all textarea elements
 */
elgg_register_event_handler ( 'init', 'system', 'autogrow_textarea_init' );
function autogrow_textarea_init() {
	elgg_extend_view ( 'page/elements/footer', 'autogrow_textarea/footer', 499 );
	elgg_register_js ( 'jquery.autosize', 'mod/autogrow_textarea/vendors/autosize/jquery.autosize.min.js', 'footer' );
}

