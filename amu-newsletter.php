<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://amu.tv
 * @since             1.1.0
 * @package           Amu_Newsletter
 *
 * @wordpress-plugin
 * Plugin Name:       Amu Newsletter
 * Plugin URI:        https://amu.tv
 * Description:       This plugin uses MailChimp API to send newsletter to customized MailChimp Audience Group.
 * Version:           1.1.0
 * Author:            Azim Qaderi
 * Author URI:        https://amu.tv
 * Text Domain:       amu-newsletter
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AMU_NEWSLETTER_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-amu-newsletter-activator.php
 */
function activate_amu_newsletter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-amu-newsletter-activator.php';
	Amu_Newsletter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-amu-newsletter-deactivator.php
 */
function deactivate_amu_newsletter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-amu-newsletter-deactivator.php';
	Amu_Newsletter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_amu_newsletter' );
register_deactivation_hook( __FILE__, 'deactivate_amu_newsletter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-amu-newsletter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_amu_newsletter() {

	$plugin = new Amu_Newsletter();
	$plugin->run();

}
run_amu_newsletter();
