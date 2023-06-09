<?php
/**
 * 
 * This class is responsible for sending MailChimp email
 */

 class MailChimpMail{

    public static function send_news_letter( $post_id ) {
		
		// Use get_post_meta to retrieve an existing value from the database.
        $data = get_post_meta($post_id, 'amu_newsletter', true);
        $value = unserialize( $data );

		// Get current language
        $current_lang = apply_filters( 'wpml_current_language', NULL );
        $post_lang = apply_filters( 'wpml_post_language_details', NULL, $post_id );

        $lang = !empty( $post_lang['language_code'] ) ? $post_lang['language_code'] : $current_lang;

		$mailchimp = new MailchimpMarketing\ApiClient();
        $mailchimp->setConfig([
			'apiKey' => 'a129d99e28fc3c7d687fddcb5e756512-us13',
			'server' => 'us13'
		]);

        
        $listId = "33a11003ea"; // Amu TV Audience

        $interestGroupId = "5f506f1641"; // Language Category

        $interestEnglishLang = "389d903d5d";
        $interestFarsiLang = "b67c8674e1";
        $interestPashtohLang = "d367e0eeb1";

        $date = date("F j, Y");

        $interest = $interestEnglishLang;

        // Newsletter Content based on the language
        if( $lang == "fa" ){
            $htmlContent = newsletterContent_fa( $value );
            $interest = $interestFarsiLang;
        }

        if( $lang == "ps" ){
            $htmlContent = newsletterContent_ps( $value );
            $interest = $interestPashtohLang;
        }

        if( $lang == "en" ){
            $htmlContent = newsletterContent( $value );
            $interest = $interestEnglishLang;
        }

        // Create a new campaign
        $campaign = $mailchimp->campaigns->create([
            'type' => 'regular',
            'recipients' => array(
                'list_id' => $listId,
                'segment_opts' => array(
                    'match' => 'all',
                    'conditions' => array(
                        array(
                            'condition_type' => 'Interests',
                            'field' => 'interests-' . $interestGroupId,
                            'op' => 'interestcontains',
                            'value' => [$interest]
                        )
                    )
                )
            ),
            'settings' => array(
                'subject_line' => 'Amu TV Newsletter - ' . $date,
                'title' => 'Amu TV Newsletter - ' . $date . ' - ' . $lang,
                'from_name' => 'Amu TV',
                'reply_to' => 'newsletter@amu.tv',
            )
        ]);


        // Get the ID of the newly created campaign
        $campaignId = $campaign->id;

        $mailchimp->campaigns->setContent( $campaignId, [
            'html'  => $htmlContent
        ]);

        // Send the campaign
        $mailchimp->campaigns->send( $campaignId );

	}

 }