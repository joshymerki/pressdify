<?php
/**
 * Plugin Name:       Pressdify
 * Description:       Wordpress to pdf in no time with PrintCSS
* Plugin URI:					https://morntag.com
 * Version:           0.1.3
 * Requires at least: 5.7
 * Requires PHP:      7.2
 * Author:            morntag.com
 * Author URI:				https://morntag.com
 */

require_once __DIR__ . '/classes/template.php';
require_once __DIR__ . '/classes/pdf.php';

require_once __DIR__ . '/activate.php';
require_once __DIR__ . '/bulk_action.php';

if(get_option('magazine_show_button_in_editor') == 1){
	require_once __DIR__ . '/editor_button.php';
}

require_once __DIR__ . '/options.php';
require_once __DIR__ . '/theme.php';
require_once __DIR__ . '/widget.php';
require_once __DIR__ . '/shortcode.php';
require_once __DIR__ . '/rest.php';