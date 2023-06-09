<?php
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-amu-newsletter-mailchimp.php';

class Amu_Newsletter_Auto_Schedule{

    public function schedule_newsletter(){
        
        add_action( 'publish_news_letter', 'amu_newsletter_publish_newsletter' );

        if( !wp_next_scheduled( 'publish_news_letter' ) && $_ENV['PANTHEON_ENVIRONMENT'] == 'live' ) {
            $timezone = wp_timezone();
            $date = new DateTime( 'now', $timezone );
            $scheduleDate = $date->format( 'Y-m-d 08:00:00' );
            date_default_timezone_set(wp_timezone_string());

            wp_schedule_event( strtotime( $scheduleDate ), 'daily', 'publish_news_letter' );
        }


        function amu_newsletter_publish_newsletter(){

            // Get posts from post_order table
            global $sitepress;
            global $wpdb;
            $languages = $sitepress->get_active_languages();
            $currentLanguage = $sitepress->get_current_language();

            foreach( $languages as $lang ){
                $postsArray = array();
                $langCode = $lang['code'];
                $sitepress->switch_lang( $langCode );

                $posts = $wpdb->get_results( $wpdb->prepare("SELECT post_order FROM {$wpdb->prefix}posts_order WHERE post_section = '%s'", 'home_top' ) );
                $post_data = unserialize( $posts[0]->post_order );

                for( $i = 0; $i < 14; $i++ ){
                    if( $post_data[$langCode][$i] != '' ){
                        array_push( $postsArray, $post_data[$langCode][$i] );
                    } else {
                        $postList = get_posts(
                            array(
                                'post_type'         => 'post',
                                'post_status'       => 'publish',
                                'posts_per_page'    => 1,
                                'order'             => 'DESC',
                                'orderby'           => 'date',
                                'post__not_in'      => array_merge( get_option( 'sticky_posts' ), $postsArray ),
                                'suppress_filters'  => false,
                            )
                        );

                        array_push( $postsArray, $postList[0]->ID );
                    }
                }
                $title = 'AUTO | Amu Newsletter - ' . date('F j, Y') . ' | ' . $langCode;
                $timezone = wp_timezone();
                $date = new DateTime( 'now', $timezone );
                $postDateGMT = $date->format( 'Y-m-d H:i:s' );
                $my_post = array(
                    'post_type'         => 'amu_newsletter',
                    'post_title'        => $title,
                    'post_content'      => 'Amu Newsletter',
                    'post_status'       => 'publish',
                    'post_date'         => $postDateGMT, 
                    'post_author'       => 1
                );

                $postByTitle = get_page_by_title($title, OBJECT, 'amu_newsletter');

                if ( !$postByTitle || ( $postByTitle && $postByTitle->post_status != 'publish' ) ){
                    $post_id = wp_insert_post( $my_post );
                    update_post_meta($post_id, 'amu_newsletter', serialize( $postsArray ));

                    MailChimpMail::send_news_letter( $post_id );
                    update_post_meta($post_id, 'amu_newsletter_email_sent', 1 );
                }
                
            }

            $sitepress->switch_lang( $currentLanguage );
        }

    }        
}