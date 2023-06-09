<?php

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/amu-newsletter-template.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/amu-newsletter-template-fa.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/amu-newsletter-template-ps.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-amu-newsletter-mailchimp.php';


/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://amu.tv
 * @since      1.0.0
 *
 * @package    Amu_Newsletter
 * @subpackage Amu_Newsletter/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Amu_Newsletter
 * @subpackage Amu_Newsletter/admin
 * @author     Azim Qaderi <azim.qaderi@amu.tv>
 */
class Amu_Newsletter_Admin {

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
	 * The Metabox of the Post.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $metaBox
	 */


	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/amu-newsletter-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/amu-newsletter-admin.js', array( 'jquery' ), $this->version, false );
		wp_localize_script( $this->plugin_name, 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	}

	public function amu_newsletter_post_type() {

		register_post_type('amu_newsletter',
			array(
				'labels'      => array(
					'name'          => __('Newsletter', 'amu-newsletter'),
					'singular_name' => __('Newsletter', 'amu-newsletter'),
				),
					'public'      			=> true,
					'has_archive' 			=> false,
					'exclude_from_search'	=> true,
					'publicly_queryable'	=> false,
					'show_in_nav_menus'		=> false,
					'menu_position'			=> 10,
					'menu_icon'				=> 'dashicons-email-alt',
					'supports'				=> array(
						'title',
					),
			)
		);
	}


	public function send_newsletter_on_publish( $new_status, $old_status, $post ) {
		if ( 'publish' === $new_status && 'future' === $old_status && 'amu_newsletter' === get_post_type( $post ) ) {
			MailChimpMail::send_news_letter( $post->ID );
			update_post_meta( $post->ID, 'amu_newsletter_email_sent', 1 );
		}
	}


}
