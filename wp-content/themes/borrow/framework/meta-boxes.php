<?php

/**
 * Register meta boxes
 *
 * @since 1.0
 *
 * @param array $meta_boxes
 *
 * @return array
 */
if ( is_admin() ) {
	function borrow_register_meta_boxes( $meta_boxes ) {
		$prefix = '_cmb_';
		$meta_boxes[] = array(
			'id'       => 'format_detail',
			'title'    => esc_html__( 'Format Details', 'borrow' ),
			'pages'    => array( 'post' ),
			'context'  => 'normal',
			'priority' => 'high',
			'autosave' => true,
			'fields'   => array(
				array(
					'name'             => esc_html__( 'Image', 'borrow' ),
					'id'               => $prefix . 'image',
					'type'             => 'image_advanced',
					'class'            => 'image',
					'max_file_uploads' => 1,
				),
				array(
					'name'  => esc_html__( 'Gallery', 'borrow' ),
					'id'    => $prefix . 'images',
					'type'  => 'image_advanced',
					'class' => 'gallery',
				),
				array(
					'name'  => esc_html__( 'Quote', 'borrow' ),
					'id'    => $prefix . 'quote',
					'type'  => 'textarea',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'quote',
				),
				array(
					'name'  => esc_html__( 'Author', 'borrow' ),
					'id'    => $prefix . 'quote_author',
					'type'  => 'text',
					'class' => 'quote',
				),
				array(
					'name'  => esc_html__( 'Audio', 'borrow' ),
					'id'    => $prefix . 'link_audio',
					'type'  => 'oembed',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'audio',
					'desc' => 'Ex: https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/139083759',
				),
				array(
					'name'  => esc_html__( 'Video', 'borrow' ),
					'id'    => $prefix . 'link_video',
					'type'  => 'oembed',
					'cols'  => 20,
					'rows'  => 2,
					'class' => 'video',
					'desc' => 'Example: <b>http://www.youtube.com/embed/0ecv0bT9DEo</b> or <b>http://player.vimeo.com/video/47355798</b>',
				),			
				array(
					'name'             => esc_html__( 'Image 2', 'borrow' ),
					'id'               => $prefix . 'image2',
					'type'             => 'image_advanced',
					'class'            => 'image gallery quote video audio standard',
					'max_file_uploads' => 1,
				),
			),
		);
		$meta_boxes[] = array(
			'id'       => 'page_settings',
			'title'    => esc_html__( 'Page Settings', 'borrow' ),
			'pages'    => array( 'page', 'team','bank_account','credit_card','ot_lenders','forex' ),
			'context'  => 'normal',
			'priority' => 'high',
			'autosave' => true,
			'fields'   => array(		
				array(//disable bg
	                'name' => esc_html__( 'Just breadcrunb', 'borrow' ),
	                'desc' => esc_html__( 'If checked, Disable Section Background image Subheader.', 'borrow' ),
	                'id'   => $prefix . 'disable_bg',
	                'type' => 'checkbox',
	            ),
				array(
					'name'             	=> esc_html__( 'Background image subheader', 'borrow' ),
					'desc'				=> esc_html__( 'upload image', 'borrow' ),
					'id'               	=> $prefix . 'subheader_image',
					'type'             	=> 'image_advanced',			
					'max_file_uploads' 	=> 1,
				),			
				array(
	                'name' => esc_html__( 'Action Text', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'action_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Action Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'action_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text the left', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the left', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_1',
	                'type' => 'text',
	            ),		
				array(
	                'name' => esc_html__( 'Button Text the right', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the right', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_2',
	                'type' => 'text',
	            ),		
			),

		);
		$meta_boxes[] = array(
			'id'         => 'team',
			'title'      => esc_html__( 'Team Details', 'borrow' ),
			'pages'      => array( 'team' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
			'fields' => array(
				array(
	                'name' => esc_html__( 'Location', 'borrow' ),
	                'desc' => esc_html__( 'Location of team', 'borrow' ),
	                'id'   => $prefix . 'job',
	                'type' => 'text',
	            ),
			
			)
		);

		$meta_boxes[] = array(
			'id'         => 'loan_setting',
			'title'      => esc_html__( 'Loan Details', 'borrow' ),
			'pages'      => array( 'service','loan' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),	
				array(
					'name'             => esc_html__( 'Upload icon image for loan.', 'borrow' ),
					'desc' 			   => esc_html__( 'Used in the "OT Loan" element with Style "Grid Style with Icon Image"', 'borrow' ),
					'id'               => $prefix . 'image_service',
					'type'             => 'image_advanced',			
					'max_file_uploads' => 1,
				),		
				array(
					'name'             	=> esc_html__( 'Background image subheader', 'borrow' ),
					'desc'				=> esc_html__( 'If not upload background image, it is use image default for all page setup in theme option.', 'borrow' ),
					'id'               	=> $prefix . 'subheader_image',
					'type'             	=> 'image_advanced',			
					'max_file_uploads' 	=> 1,
				),		
				array(
	                'name' => esc_html__( 'rate number', 'borrow' ),
	                'desc' => esc_html__( 'Enter the number. Ex 12.5%', 'borrow' ),
	                'id'   => $prefix . 'rate_number',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Rate Text', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'rate_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text the left', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the left', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_1',
	                'type' => 'text',
	            ),		
				array(
	                'name' => esc_html__( 'Button Text the right', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text for button in header page.', 'borrow' ),
	                'id'   => $prefix . 'text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link Button the right', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'link_out_2',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 1', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_1',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 1', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_1',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 2', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_2',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 2', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_2',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 3', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_3',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 3', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_3',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 4', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_4',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 4', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_4',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 5', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_5',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 5', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_5',
	                'type' => 'text',
	            ),			
				array(
	                'name' => esc_html__( 'Text Nav menu 6', 'borrow' ),
	                'desc' => esc_html__( 'Enter the text', 'borrow' ),
	                'id'   => $prefix . 'nav_text_6',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Link nav menu 6', 'borrow' ),
	                'desc' => esc_html__( 'Add link.', 'borrow' ),
	                'id'   => $prefix . 'nav_link_6',
	                'type' => 'text',
	            ),	
			)
		);

		$meta_boxes[] = array(
			'id'         => 'loan',
			'title'      => esc_html__( 'Loan Offer', 'borrow' ),
			'pages'      => array( 'loan' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			//'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
			'fields' => array(
				array(
	                'name' => esc_html__( 'Title', 'borrow' ),
	                'desc' => esc_html__( 'Title of Loan Offers', 'borrow' ),
	                'id'   => $prefix . 'loan_offers',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Purpose Field', 'borrow' ),
	                'desc' => esc_html__( 'Purpose text of Loan Offers', 'borrow' ),
	                'id'   => $prefix . 'loan_purpose',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Purpose List', 'borrow' ),
	                'desc' => esc_html__( 'Purpose list of Loan Offers', 'borrow' ),
	                'id'   => $prefix . 'loan_list_purpose',
	                'type' => 'wysiwyg',
	            ),
				array(
	                'name' => esc_html__( 'Button text', 'borrow' ),
	                'desc' => esc_html__( 'Button text of Loan Offers', 'borrow' ),
	                'id'   => $prefix . 'loan_offers_btext',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Button Link of Loan Offers', 'borrow' ),
	                'id'   => $prefix . 'loan_offers_link',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Icon', 'borrow' ),
	                'desc' => esc_html__( 'icon of Loan Offers. Find more here', 'borrow' ),
	                'id'   => $prefix . 'loan_offers_icon',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Title Icon', 'borrow' ),
	                'desc' => esc_html__( 'Title icon of Loan Offers.', 'borrow' ),
	                'id'   => $prefix . 'offers_icon_title',
	                'type' => 'text',
	            ),
			
			)
		);

		$meta_boxes[] = array(
			'id'         => 'credit_card_setting',
			'title'      => esc_html__( 'Credit Card Details', 'borrow' ),
			'pages'      => array( 'credit_card' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),								
				array(// 6-2018
	                'name' => esc_html__( 'Annual Fee', 'borrow' ),
	                'desc' => esc_html__( 'Add Annual Fee', 'borrow' ),
	                'id'   => $prefix . 'annual_fee',
	                'type' => 'text',
	            ),								
				array(// 6-2018
	                'name' => esc_html__( 'Rewards Rate', 'borrow' ),
	                'desc' => esc_html__( 'Add Annual Fee', 'borrow' ),
	                'id'   => $prefix . 'Rate_rewards',
	                'type' => 'text',
	            ),					
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Short Content', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except',
	                'type' => 'wysiwyg',
	            ),
				array(
	                'name' => esc_html__( 'Short Content style 2', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except2',
	                'type' => 'wysiwyg',
	            ),
			)
		);
		// May-2020
		$meta_boxes[] = array(
			'id'         => 'forex_setting',
			'title'      => esc_html__( 'Forex Details', 'borrow' ),
			'pages'      => array( 'forex' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Established', 'borrow' ),
	                'desc' => esc_html__( 'Add Established', 'borrow' ),
	                'id'   => $prefix . 'established',
	                'type' => 'text',
	            ),								
				array(
	                'name' => esc_html__( 'Location', 'borrow' ),
	                'desc' => esc_html__( 'Add Location', 'borrow' ),
	                'id'   => $prefix . 'location',
	                'type' => 'text',
	            ),								
				array(
	                'name' => esc_html__( 'Regulation', 'borrow' ),
	                'desc' => esc_html__( 'Add Regulation', 'borrow' ),
	                'id'   => $prefix . 'regulation',
	                'type' => 'text',
	            ),					
				array(
	                'name' => esc_html__( 'Offices', 'borrow' ),
	                'desc' => esc_html__( 'Add Offices', 'borrow' ),
	                'id'   => $prefix . 'offices',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Broker type', 'borrow' ),
	                'desc' => esc_html__( 'Add broker type', 'borrow' ),
	                'id'   => $prefix . 'broker_type',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Leverage', 'borrow' ),
	                'desc' => esc_html__( 'Add Leverage.', 'borrow' ),
	                'id'   => $prefix . 'leverage',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Deposit', 'borrow' ),
	                'desc' => esc_html__( 'Add Deposit.', 'borrow' ),
	                'id'   => $prefix . 'deposit',
	                'type' => 'text',
	            ),
				array(
					'name'             => esc_html__( 'Spreads img.', 'borrow' ),
					'desc' 			   => esc_html__( 'Upload Image', 'borrow' ),
					'id'               => $prefix . 'spreads',
					'type'             => 'image_advanced',			
					'max_file_uploads' => 1,
				),	
				array(
	                'name' => esc_html__( 'Spreads Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text.', 'borrow' ),
	                'id'   => $prefix . 'spreads_stt',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Instruments', 'borrow' ),
	                'desc' => esc_html__( 'Add Instruments.', 'borrow' ),
	                'id'   => $prefix . 'instruments',
	                'type' => 'text',
	            ),
				array(
	                'name' => esc_html__( 'Platforms', 'borrow' ),
	                'desc' => esc_html__( 'Add Platforms.', 'borrow' ),
	                'id'   => $prefix . 'platforms',
	                'type' => 'text',
	            ),
				array(
					'name'  => esc_html__( 'Funding methods', 'borrow' ),
					'id'    => $prefix . 'asd',
					'type'  => 'image_advanced',
				),
			)
		);

		$meta_boxes[] = array(
			'id'         => 'forex_single_setting',
			'title'      => esc_html__( 'Forex Single', 'borrow' ),
			'pages'      => array( 'forex' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(				
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text_s',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link_s',
	                'type' => 'text',
	            ),	
			)
		);

		$meta_boxes[] = array(
			'id'         => 'lender_setting',
			'title'      => esc_html__( 'Lender Details', 'borrow' ),
			'pages'      => array( 'ot_lenders' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
	                'name' => esc_html__( 'Subtitle', 'borrow' ),
	                'desc' => esc_html__( 'Add subtitle', 'borrow' ),
	                'id'   => $prefix . 'subtitle',
	                'type' => 'textarea',
	            ),	
	            array(
	                'name' => esc_html__( 'Advertised Rate Title', 'borrow' ),
	                'desc' => esc_html__( 'Add Advertised Rate Title', 'borrow' ),
	                'id'   => $prefix . 'advertised_title',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Advertised Rate Number', 'borrow' ),
	                'desc' => esc_html__( 'Add Advertised Rate Number', 'borrow' ),
	                'id'   => $prefix . 'advertised_number',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Comparison Rate Title', 'borrow' ),
	                'desc' => esc_html__( 'Add Comparison Rate Title', 'borrow' ),
	                'id'   => $prefix . 'comparison_title',
	                'type' => 'text',
	            ),
	            array(
	                'name' => esc_html__( 'Comparison Rate Number', 'borrow' ),
	                'desc' => esc_html__( 'Add Comparison Rate Number', 'borrow' ),
	                'id'   => $prefix . 'comparison_number',
	                'type' => 'text',
	            ),						
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Estimated APR', 'borrow' ),
	                'desc' => esc_html__( 'Input Estimated APR', 'borrow' ),
	                'id'   => $prefix . 'estimated_apr',
	                'type' => 'text',
	            ),								
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Min. Credit Score', 'borrow' ),
	                'desc' => esc_html__( 'Input Min. Credit Score', 'borrow' ),
	                'id'   => $prefix . 'min_credit_score',
	                'type' => 'text',
	            ),								
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Available Terms', 'borrow' ),
	                'desc' => esc_html__( 'Input Available Terms', 'borrow' ),
	                'id'   => $prefix . 'available_terms',
	                'type' => 'text',
	            ),								
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Monthly Payment', 'borrow' ),
	                'desc' => esc_html__( 'Input Monthly Payment', 'borrow' ),
	                'id'   => $prefix . 'monthly_payment',
	                'type' => 'text',
	            ),										
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Fixed APR', 'borrow' ),
	                'desc' => esc_html__( 'Input Fixed APR', 'borrow' ),
	                'id'   => $prefix . 'fixed_apr',
	                'type' => 'text',
	            ),										
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Variable APR', 'borrow' ),
	                'desc' => esc_html__( 'Input Variable APR', 'borrow' ),
	                'id'   => $prefix . 'variable_apr',
	                'type' => 'text',
	            ),										
				array(// UPDATE 6-2018
	                'name' => esc_html__( 'Terms', 'borrow' ),
	                'desc' => esc_html__( 'Input Terms', 'borrow' ),
	                'id'   => $prefix . 'terms_year',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Short Content', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except',
	                'type' => 'wysiwyg',
	            ),
			)
		);

// UPDATE 6 - 2018
		$meta_boxes[] = array(
			'id'         => 'bank_account_setting',
			'title'      => esc_html__( 'Banh Account Details', 'borrow' ),
			'pages'      => array( 'bank_account' ), // Post type
			'context'    => 'normal',
	        'priority'   => 'high',
	        'show_names' => true, // Show field names on the left
			'fields' => array(			
				array(
	                'name' => esc_html__( 'Description', 'borrow' ),
	                'desc' => esc_html__( 'Add Description', 'borrow' ),
	                'id'   => $prefix . 'detail',
	                'type' => 'textarea',
	            ),	
				array(
	                'name' => esc_html__( 'Earn Label', 'borrow' ),
	                'desc' => esc_html__( 'Input text', 'borrow' ),
	                'id'   => $prefix . 'earn_label',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Earn', 'borrow' ),
	                'desc' => esc_html__( 'input earn p.a', 'borrow' ),
	                'id'   => $prefix . 'max_earn',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Short Content', 'borrow' ),
	                'desc' => esc_html__( 'Add short content for "OT Credit Card Grid" element.', 'borrow' ),
	                'id'   => $prefix . 'except',
	                'type' => 'wysiwyg',
	            ),	
				array(
	                'name' => esc_html__( 'Button Text', 'borrow' ),
	                'desc' => esc_html__( 'Add text for button', 'borrow' ),
	                'id'   => $prefix . 'btn_text',
	                'type' => 'text',
	            ),	
				array(
	                'name' => esc_html__( 'Button Link', 'borrow' ),
	                'desc' => esc_html__( 'Add link for button, leave a blank do not show button.', 'borrow' ),
	                'id'   => $prefix . 'btn_link',
	                'type' => 'text',
	            ),	
			)
		);


		return $meta_boxes;
	}
	add_filter( 'rwmb_meta_boxes', 'borrow_register_meta_boxes' );
}

