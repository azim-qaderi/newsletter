<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://amu.tv
 * @since      1.0.0
 *
 * @package    Amu_Newsletter
 * @subpackage Amu_Newsletter/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Amu_Newsletter
 * @subpackage Amu_Newsletter/public
 * @author     Azim Qaderi <azim.qaderi@amu.tv>
 */
class Amu_Newsletter_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Amu_Newsletter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Amu_Newsletter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/amu-newsletter-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Amu_Newsletter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Amu_Newsletter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/amu-newsletter-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'amu-mailchimp', plugin_dir_url( __FILE__ ) . 'js/mailchimp.js', array( 'jquery' ), $this->version, false );
	}

	// Newsletter Subscription Shortcode
	public function register_shortcodes() {

		add_shortcode( 'newsletter', 'newsletter_shortcode' );

		/**
		 * 
		 * @param string $location - footer/page
		 */
		function newsletter_shortcode( $location ) {

			ob_start();

			$class = 'newsletter-footer';

			if( isset( $location['location'] ) && $location['location'] == 'page' ) {
				$class = 'newsletter-page';
			}
			echo "<div class='". $class ."'>";
			include plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/amu-newsletter-public-display.php';
			echo "</div>";

			$return_html = ob_get_contents();
			ob_end_clean();
			return $return_html;
		}

	}

}
