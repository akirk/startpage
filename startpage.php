<?php
/**
 * Plugin name: Startpage
 * Plugin author: Alex Kirk
 * Plugin URI: https://github.com/akirk/startpage
 * Version: 0.1
 *
 * Description: DCreate your own browser startpage within your WordPress.
 *
 * License: GPL2
 * Text Domain: startpage
 * Domain Path: /languages/
 *
 * @package Startpage
 */

/**
 * This file loads all the dependencies the Startpage plugin.
 */

defined( 'ABSPATH' ) || exit;

include __DIR__ . '/class-startpage.php';

add_action( 'plugins_loaded', array( 'Startpage', 'init' ) );
