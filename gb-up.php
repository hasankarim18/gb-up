<?php

/**
 * Plugin Name: Gutenberg Up
 * Plugin URI: https://example.com/
 * Description: A group of custom gutenberg blocks
 * Version: 1.0.0
 * Author: Hasan
 * Author URI: https://yourwebsite.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: gb-31
 * Domain Path: /i18n
 */



namespace Hasan\GbUp;



// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

define('GB_UP_PATH', plugin_dir_path(__FILE__));
define('GB_UP_URL', plugin_dir_url(__FILE__));




if (!class_exists(GbUp::class) && is_readable(__DIR__ . '/vendor/autoload.php')) {

    require_once __DIR__ . '/vendor/autoload.php';
}



class_exists(GbUp::class) && GbUp::instance()->init();