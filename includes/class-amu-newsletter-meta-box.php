<?php
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-amu-newsletter-mailchimp.php';

class AmuNewsItems
{
    /**
     * Adds the meta box container.
     */
    public function add_meta_box($post_type)
    {
        // Limit meta box to certain post types.
        $post_types = array('amu_newsletter');

        if (in_array($post_type, $post_types)) {
            add_meta_box(
                'newsletter_items',
                __('Newsletter Content', 'amu-newsletter'),
                array($this, 'render_meta_box_content'),
                $post_type,
                'advanced',
                'high'
            );
        }
    }

    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save($post_id)
    {

        /*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

        // Check if our nonce is set.
        if (!isset($_POST['amu_newsletter_nonce'])) {
            return $post_id;
        }

        $nonce = $_POST['amu_newsletter_nonce'];

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'amu_newsletter')) {
            return $post_id;
        }


        // Check the user's permissions.
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } else {
            if (!current_user_can('edit_post', $post_id)) {
                return $post_id;
            }
        }


        $data = $_POST['news_id'];
        

        // Update the meta field.
        update_post_meta($post_id, 'amu_newsletter', serialize( $data ));

        if( get_post_meta($post_id, 'amu_newsletter_email_sent', true) != 1 && get_post_status( $post_id ) === 'publish' ){
            MailChimpMail::send_news_letter( $post_id );
            update_post_meta($post_id, 'amu_newsletter_email_sent', 1 );
        }

    }


    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content($post)
    {

        // Add an nonce field so we can check for it later.
        wp_nonce_field('amu_newsletter', 'amu_newsletter_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $data = get_post_meta($post->ID, 'amu_newsletter', true);
        $value = unserialize( $data );

        // Get current language
        $current_lang = apply_filters( 'wpml_current_language', NULL );
        $post_lang = apply_filters( 'wpml_post_language_details', NULL, $post->ID );

        $lang = !empty( $post_lang['language_code'] ) ? $post_lang['language_code'] : $current_lang;

        // Display the form, using the current value.
?>

        <div class="newsletter-container">

            <div class="newsletter-wrapper">

                <?php 
                    $count = '';
                    $title = "Main Top News";
                    for( $i = 0; $i <= 12; $i++ ) : 
                    
                        if( $count != '' ) {
                            $count++;
                        }
                        if( $i == 1 ) {
                            $count = 1;
                            $title = "Latest News";       
                        }

                        if( $i == 7 ) {
                            $count = 1;
                            $title = "More in the News";  
                        }
          
                    
                ?>

                <div class="news-item">

                    <label for="">
                        <?php _e($title . " " . $count, 'amu-newsletter'); ?>
                    </label>

                    <input type="text" class="news_title <?php echo $lang == "fa" || $lang == "ps" ? "rtl" : ""; ?>" name="news_title[]" value="<?php echo !empty( $value[$i] ) ? get_the_title( $value[$i] ) : ""; ?>" data-lang="<?php echo $lang; ?>" required>
                    <input type="hidden" class="news_id" name="news_id[]" value="<?php echo !empty( $value[$i] ) ? $value[$i] : ""; ?>">

                </div>

                <?php if( $i == 0 || $i == 6 ) : ?>
                    <hr class="seperator">
                <?php endif; ?>

                <?php endfor; ?>        

            </div>

        </div>

<?php
    }
}
