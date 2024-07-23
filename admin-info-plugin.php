<?php
/**
 * Plugin Name: Admin Info Plugin
 * Description: A plugin to manage admin information and display widgets in the dashboard.
 * Version: 1.0
 * Author: Your Name
 * Text Domain: admin-info-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Autoload classes via Composer
require_once __DIR__ . '/vendor/autoload.php';

use AdminInfoPlugin\AdminInfoPlugin;

// Initialize the plugin
$adminInfoPlugin = new AdminInfoPlugin();
$adminInfoPlugin->init();
