<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

define('RTARIA_PATH', get_template_directory());
define('RTARIA_URL', get_template_directory_uri());
define('RTARIA_STYLESHEET', get_stylesheet_uri());
define('RTARIA_ASSETS', RTARIA_URL . '/assets');
define('RTARIA_CSS', RTARIA_ASSETS . '/styles');
define('RTARIA_JS', RTARIA_ASSETS . '/js');
define('RTARIA_IMAGES', RTARIA_ASSETS . '/images');
define('RTARIA_FONTS', RTARIA_ASSETS . '/fonts');
define('RTARIA_TEXT_DOMAIN', wp_get_theme()->get('TextDomain'));
define('RTARIA_VIEW_NAME', 'views');
