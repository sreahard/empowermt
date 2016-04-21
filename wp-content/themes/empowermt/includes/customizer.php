<?php

function empowermt_customizer( $wp_customize ) {

	class empowermt_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{
		}
	} 

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header Customizer
    */
    $wp_customize->add_section( 'empowermt_header' , array(
    	'title'       => __( 'Header', 'empowermt' ),
    	'priority'    => 200,
	) );

		/* Header - Logo */
		$wp_customize->add_setting( 'empowermt_header_logo' , array('sanitize_callback' => 'esc_url_raw'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_header_logo', array(
		    'label'    => __( 'Logo:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_logo',
		    'priority' => '1',
		) ) );

		/* Header - Title */
		$wp_customize->add_setting( 'empowermt_header_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Contact Us Now: ', 'empowermt')));
		$wp_customize->add_control( 'empowermt_header_title', array(
		    'label'    => __( 'Contact Title:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_title',
			'priority' => '2',
		) );

		/* Header - Subtitle */
		$wp_customize->add_setting( 'empowermt_header_subtitle', array('sanitize_callback' => 'esc_html','default' => __('+0-123-456-789','empowermt')) );
		$wp_customize->add_control( 'empowermt_header_subtitle', array(
		    'label'    => __( 'Contact telephone:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_subtitle',
			'priority' => '3',
		) );

		/* Header - YouTube link */
		$wp_customize->add_setting( 'empowermt_header_youtube', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'empowermt_header_youtube', array(
		    'label'    => __( 'YouTube link:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_youtube',
			'priority' => '4',
		) );

		/* Header - Facebook link */
		$wp_customize->add_setting( 'empowermt_header_facebook', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'empowermt_header_facebook', array(
		    'label'    => __( 'Facebook link:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_facebook',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'empowermt_header_googleplus' , array('sanitize_callback' => 'esc_url_raw',"default"=>"#"));
		$wp_customize->add_control( 'empowermt_header_googleplus', array(
		    'label'    => __( 'Google+ link:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_googleplus',
			'priority' => '5',
		) );

		/* Header - Google+ link */
		$wp_customize->add_setting( 'empowermt_header_twitter', array('sanitize_callback' => 'esc_url_raw',"default"=>"#") );
		$wp_customize->add_control( 'empowermt_header_twitter', array(
		    'label'    => __( 'Twitter link:', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_twitter',
			'priority' => '6',
		) );

		/* Header - Contact Form 7 - Title */
		$wp_customize->add_setting( 'empowermt_header_contactform7_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'empowermt_header_contactform7_title', array(
		    'label'    => __( 'Contact Form 7 - Title', 'empowermt' ),
		    'section'  => 'empowermt_header',
		    'settings' => 'empowermt_header_contactform7_title',
			'priority' => '7',
		) );

	
	/* Packages */
	
	// $wp_customize->add_section( 'empowermt_packages' , array(
	// 	'title'      => __('Packages','empowermt'),
	// 	'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'empowermt'),
	// 	'priority'   => 500,
	// ));
	$wp_customize->add_setting(
        'empowermt_packages',array('sanitize_callback' => 'empowermt_sanitize_notes'));
	
	$wp_customize->add_control( new empowermt_Theme_Support( $wp_customize, 'empowermt_packages',
	    array(
	        'section' => 'empowermt_packages',
	   )
	));
	
	/* custom colors */
	
	// $wp_customize->add_section( 'empowermt_custom_colors' , array(
	
	// 	'title'      => __('Custom colors','empowermt'),
	// 	'description' => __( "Change colors for the entire theme. This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'cw-business-lite'),
	// 	'priority'   => 501,
	// ));
	$wp_customize->add_setting(
        'empowermt_custom_colors',array('sanitize_callback' => 'empowermt_sanitize_notes'));
	
	$wp_customize->add_control( new empowermt_Theme_Support( $wp_customize, 'empowermt_custom_colors',
	    array(
	        'section' => 'empowermt_custom_colors',
	   )
	));
	
	/* Header image */
	
	// $wp_customize->add_section( 'empowermt_testimonials' , array(
	
	// 	'title'      => __('Testimonials','empowermt'),
	// 	'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/movatique/' target='_blank'>Get it now!</a>",'cw-business-lite'),
	// 	'priority'   => 502,
	// ));
	$wp_customize->add_setting(
        'empowermt_testimonials',array('sanitize_callback' => 'empowermt_sanitize_notes'));
	
	$wp_customize->add_control( new empowermt_Theme_Support( $wp_customize, 'empowermt_testimonials',
	    array(
	        'section' => 'empowermt_testimonials',
	   )
	));

    /********************************/
    /***      Front Page         ****/
    /********************************/
	
	if ( class_exists( 'WP_Customize_Panel' ) ):
	
		$wp_customize->add_panel( 'empowermt_frontpage_panel', array(
			'priority' => 40,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Front Page', 'cw-business-lite' )
		) );
	
		/** Subheader **/
		
		$wp_customize->add_section( 'empowermt_subheader_section' , array(
			'title'       => __( 'Subheader', 'empowermt' ),
			'priority'    => 1,
			'panel' => 'empowermt_frontpage_panel'
		) );

		/* Subheader Title */
		$wp_customize->add_setting( 'empowermt_frontpage_header_title', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'empowermt' ),
		    'section'  => 'empowermt_subheader_section',
		    'settings' => 'empowermt_frontpage_header_title',
			'priority' => 1,
		) );

		/* SubHeader Content */
		$wp_customize->add_setting( 'empowermt_frontpage_header_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.', 'empowermt')));
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'empowermt' ),
		            'section' 	=> 'empowermt_subheader_section',
		            'settings' 	=> 'empowermt_frontpage_header_content',
		            'priority' 	=> 2
		        )
		    )
		);

		/** Features **/
		
		$wp_customize->add_section( 'empowermt_features_section' , array(
			'title'       => __( 'Features', 'empowermt' ),
			'priority'    => 2,
			'panel' => 'empowermt_frontpage_panel'
		) );
		
		/* Features title */
		$wp_customize->add_setting( 'empowermt_frontpage_subheader_title', array('sanitize_callback' => 'esc_html','default' => __( 'Why Choose Us?', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
		    'settings' => 'empowermt_frontpage_subheader_title',
				'priority' => 1,
		) );

		/* Features - Firstly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_firstlybox_title', array('sanitize_callback' => 'esc_html','default' => __( 'Fast &amp; Safe', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
		    'settings' => 'empowermt_frontpage_firstlybox_title',
				'priority' => 2,
		) );

		/* Features - Firstly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_firstlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_features_section',
		            'settings' 	=> 'empowermt_frontpage_firstlybox_image',
		            'priority' 	=> 3
		        )
		    )
		);
		
		/* Features - Firstly Box - Link */
		$wp_customize->add_setting( 'empowermt_frontpage_firstlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'empowermt_frontpage_firstlybox_link', array(
		    'label'    => __( 'Features Box (first) - Link:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
			'priority' => 4,
		) );

		/* Features - Secondly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_secondlybox_title', array('sanitize_callback' => 'esc_html', 'default' => __( '24/ 7 Support', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
		    'settings' => 'empowermt_frontpage_secondlybox_title',
			'priority' => 5,
		) );

		/* Features - Secondly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_secondlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_features_section',
		            'settings' 	=> 'empowermt_frontpage_secondlybox_image',
		            'priority' 	=> 6
		        )
		    )
		);
		
		/* Features - Secondly Box - Link */
		$wp_customize->add_setting( 'empowermt_frontpage_secondlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'empowermt_frontpage_secondlybox_link', array(
		    'label'    => __( 'Features Box (two) - Link:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
			'priority' => 7,
		) );

		/* Features - Thirdly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_thirdlybox_title', array('sanitize_callback' => 'esc_html','default' => __( '100% Satisfaction', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
		    'settings' => 'empowermt_frontpage_thirdlybox_title',
			'priority' => 8,
		) );

		/* Features - Thirdly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_thirdlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_features_section',
		            'settings' 	=> 'empowermt_frontpage_thirdlybox_image',
		            'priority' 	=> 9
		        )
		    )
		);
		
		/* Features - Thirdly Box - Link */
		$wp_customize->add_setting( 'empowermt_frontpage_thirdlybox_link', array('sanitize_callback' => 'esc_url') );
		$wp_customize->add_control( 'empowermt_frontpage_thirdlybox_link', array(
		    'label'    => __( 'Features Box (three) - Link:', 'empowermt' ),
		    'section'  => 'empowermt_features_section',
			'priority' => 10,
		) );
		
		/** Main content **/
		
		$wp_customize->add_section( 'empowermt_main_content_section' , array(
			'title'       => __( 'Main content', 'empowermt' ),
			'priority'    => 3,
			'panel' => 'empowermt_frontpage_panel'
		) );
		
		/* Main Content - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_image', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/index-article-image.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_thecontent_image', array(
		            'label' 	=> __( 'Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_main_content_section',
		            'settings' 	=> 'empowermt_frontpage_thecontent_image',
		            'priority' 	=> 1
		        )
		    )
		);

		/* Main Content - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_title', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet et consectetuer adipiscing','empowermt')) );
		$wp_customize->add_control( 'empowermt_frontpage_thecontent_title', array(
		    'label'    => __( 'Title:', 'empowermt' ),
		    'section'  => 'empowermt_main_content_section',
		    'settings' => 'empowermt_frontpage_thecontent_title',
			'priority' => 2,
		) );

		/* Main Content - Content */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_content', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','empowermt')) );
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'empowermt' ),
		            'section' 	=> 'empowermt_main_content_section',
		            'settings' 	=> 'empowermt_frontpage_thecontent_content',
		            'priority' 	=> 3
		        )
		    )
		);
		
		/** Clients **/
		
		$wp_customize->add_section( 'empowermt_clients_section' , array(
			'title'       => __( 'Clients area', 'empowermt' ),
			'priority'    => 4,
			'panel' => 'empowermt_frontpage_panel'
		) );


		/* Our Clients - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Our Clients', 'empowermt' )));
		$wp_customize->add_control( 'empowermt_frontpage_ourclients_title', array(
		    'label'    => __( 'Title:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_title',
				'priority' => 1,
		) );

		/* Our Clients - Logo 1 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo1', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Logo 1:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_logo1',
		    'priority' => 2,
		) ) );
		/* Our Clients - Quote 1 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_quote1', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control ( $wp_customize, 'empowermt_frontpage_ourclients_quote1', array(
		    'label'    => __( 'Quote 1:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_quote1',
				'priority' => 3,
		) ) );

		/* Our Clients - Logo 2 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo2', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Logo 2:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_logo2',
		    'priority' => 4,
		) ) );
		/* Our Clients - Quote 2 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_quote2', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control ( $wp_customize, 'empowermt_frontpage_ourclients_quote2', array(
		    'label'    => __( 'Quote 2:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_quote2',
				'priority' => 5,
		) ) );

		/* Our Clients - Logo 3 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo3' , array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Logo 3:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_logo3',
		    'priority' => 6,
		) ) );
		/* Our Clients - Quote 3 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_quote3', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control ( $wp_customize, 'empowermt_frontpage_ourclients_quote3', array(
		    'label'    => __( 'Quote 3:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_quote3',
				'priority' => 7,
		) ) );
		/* Our Clients - Logo 4 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo4', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Logo 4:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_logo4',
		    'priority' => 8,
		) ) );
		/* Our Clients - Quote 4 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_quote4', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control ( $wp_customize, 'empowermt_frontpage_ourclients_quote4', array(
		    'label'    => __( 'Quote 4:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_quote4',
				'priority' => 9,
		) ) );		

		/* Our Clients - Logo 5 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo5', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Logo 5:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_logo5',
		    'priority' => 10,
		) ) );
		/* Our Clients - Quote 5 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_quote5', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control ( $wp_customize, 'empowermt_frontpage_ourclients_quote5', array(
		    'label'    => __( 'Quote 5:', 'empowermt' ),
		    'section'  => 'empowermt_clients_section',
		    'settings' => 'empowermt_frontpage_ourclients_quote5',
				'priority' => 11,
		) ) );
		// /* Our Clients - Logo 6 */
		// $wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo6', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo6', array(
		//     'label'    => __( 'Logo 6:', 'empowermt' ),
		//     'section'  => 'empowermt_clients_section',
		//     'settings' => 'empowermt_frontpage_ourclients_logo6',
		//     'priority' => 7,
		// ) ) );
	
	else:
		
		$wp_customize->add_section( 'empowermt_frontpage' , array(
			'title'       => __( 'Front Page', 'empowermt' ),
			'priority'    => 40,
		) );

		/* Front Page - Header Title */
		$wp_customize->add_setting( 'empowermt_frontpage_header_title', array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_header_title', array(
		    'label'    => __( 'Subheader Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_header_title',
			'priority' => '1',
		) );

		/* Front Page - Header Content */
		$wp_customize->add_setting( 'empowermt_frontpage_header_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.', 'empowermt')));
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_frontpage_header_content', array(
		            'label' 	=> __( 'Subheader Content:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_header_content',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Front Page - Subheader Title */
		$wp_customize->add_setting( 'empowermt_frontpage_subheader_title', array('sanitize_callback' => 'esc_html','default' => __( 'Why Choose Us?', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_subheader_title', array(
		    'label'    => __( 'Features Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_subheader_title',
			'priority' => '3',
		) );

		/* Front Page - Firstly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_firstlybox_title', array('sanitize_callback' => 'esc_html','default' => __( 'Fast &amp; Safe', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_firstlybox_title', array(
		    'label'    => __( 'Features Box (first) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_firstlybox_title',
			'priority' => '4',
		) );

		/* Front Page - Firstly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_firstlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_firstlybox_image', array(
		            'label' 	=> __( 'Features Box (first) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_firstlybox_image',
		            'priority' 	=> '5'
		        )
		    )
		);

		/* Front Page - Secondly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_secondlybox_title', array('sanitize_callback' => 'esc_html', 'default' => __( '24/ 7 Support', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_secondlybox_title', array(
		    'label'    => __( 'Features Box (two) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_secondlybox_title',
			'priority' => '6',
		) );

		/* Front Page - Secondly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_secondlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_secondlybox_image', array(
		            'label' 	=> __( 'Features Box (two) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_secondlybox_image',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Front Page - Thirdly Box - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_thirdlybox_title', array('sanitize_callback' => 'esc_html','default' => __( '100% Satisfaction', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_frontpage_thirdlybox_title', array(
		    'label'    => __( 'Features Box (three) - Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_thirdlybox_title',
			'priority' => '8',
		) );

		/* Front Page - Thirdly Box - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_thirdlybox_image', array('sanitize_callback' => 'esc_url_raw') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_thirdlybox_image', array(
		            'label' 	=> __( 'Features Box (three) - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_thirdlybox_image',
		            'priority' 	=> '9'
		        )
		    )
		);
		
		/* Front Page - The Content - Image */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_image', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/index-article-image.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_thecontent_image', array(
		            'label' 	=> __( 'The Content - Image:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_thecontent_image',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Front Page - The Content - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_title', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet et consectetuer adipiscing','empowermt')) );
		$wp_customize->add_control( 'empowermt_frontpage_thecontent_title', array(
		    'label'    => __( 'The Content - Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_thecontent_title',
			'priority' => '11',
		) );

		/* Front Page - The Content - Content */
		$wp_customize->add_setting( 'empowermt_frontpage_thecontent_content', array('sanitize_callback' => 'esc_html','default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','empowermt')) );
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_frontpage_thecontent_content', array(
		            'label' 	=> __( 'The Content - Content:', 'empowermt' ),
		            'section' 	=> 'empowermt_frontpage',
		            'settings' 	=> 'empowermt_frontpage_thecontent_content',
		            'priority' 	=> '12'
		        )
		    )
		);


		/* Front Page - Our Clients - Title */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_title' , array('sanitize_callback' => 'esc_html','default' => __( 'Our Clients', 'empowermt' )));
		$wp_customize->add_control( 'empowermt_frontpage_ourclients_title', array(
		    'label'    => __( 'Our Clients - Title:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_title',
			'priority' => '14',
		) );

		/* Front Page - Our Clients - Logo 1 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo1', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo1', array(
		    'label'    => __( 'Our Clients - Logo 1:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo1',
		    'priority' => '15',
		) ) );

		/* Front Page - Our Clients - Logo 2 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo2', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo2', array(
		    'label'    => __( 'Our Clients - Logo 2:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo2',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 3 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo3' , array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png'));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo3', array(
		    'label'    => __( 'Our Clients - Logo 3:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo3',
		    'priority' => '16',
		) ) );

		/* Front Page - Our Clients - Logo 4 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo4', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo4', array(
		    'label'    => __( 'Our Clients - Logo 4:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo4',
		    'priority' => '17',
		) ) );

		/* Front Page - Our Clients - Logo 5 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo5', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo5', array(
		    'label'    => __( 'Our Clients - Logo 5:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo5',
		    'priority' => '18',
		) ) );

		/* Front Page - Our Clients - Logo 6 */
		$wp_customize->add_setting( 'empowermt_frontpage_ourclients_logo6', array('sanitize_callback' => 'esc_url_raw','default' => get_template_directory_uri().'/images/logo_default.png') );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empowermt_frontpage_ourclients_logo6', array(
		    'label'    => __( 'Our Clients - Logo 6:', 'empowermt' ),
		    'section'  => 'empowermt_frontpage',
		    'settings' => 'empowermt_frontpage_ourclients_logo6',
		    'priority' => '19',
		) ) );
		
	endif;	

	/*
    ** Contact Customizer
    */
    $wp_customize->add_section( 'empowermt_contact' , array(
    	'title'       => __( 'Contact', 'empowermt' ),
    	'priority'    => 350,
	) );

		/* Contact - Sidebar - Map Title */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_map_title', array('sanitize_callback' => 'esc_html') );
		$wp_customize->add_control( 'empowermt_contact_sidebar_map_title', array(
		    'label'    => __( 'Sidebar - Map Title:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_map_title',
			'priority' => '1'
		) );

		/* Contact - Sidebar - Map */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_map', array('sanitize_callback' => 'esc_html','<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24213.52815864553!2d-73.94996325246885!3d40.658740929386724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1402317770383" height="450" frameborder="0" style="border:0"></iframe>') );
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_contact_sidebar_map', array(
		            'label' 	=> __( 'Sidebar - Map (iframe):', 'empowermt' ),
		            'section' 	=> 'empowermt_contact',
		            'settings' 	=> 'empowermt_contact_sidebar_map',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Contact - Sidebar - Title */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_title', array('sanitize_callback' => 'esc_html','default' => __( 'More about us', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_title', array(
		    'label'    => __( 'Sidebar - Title:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_title',
			'priority' => '3'
		) );

		/* Contact - Sidebar - Address 1 */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_address1', array('sanitize_callback' => 'esc_html','default' => __( 'United States', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_address1', array(
		    'label'    => __( 'Sidebar - Country Address:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_address1',
			'priority' => '4'
		) );

		/* Contact - Sidebar - Address 2 */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_address2', array('sanitize_callback' => 'esc_html','default' => __( 'New York', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_address2', array(
		    'label'    => __( 'Sidebar - City Address:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_address2',
			'priority' => '5'
		) );

		/* Contact - Sidebar - Address 3 */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_address3', array('sanitize_callback' => 'esc_html','default' => __( '412 Broadway #2, New York, NY 10013', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_address3', array(
		    'label'    => __( 'Sidebar - Street Address:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_address3',
			'priority' => '6'
		) );

		/* Contact - Sidebar - Content */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_content' , array('sanitize_callback' => 'esc_html','default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labo ris nisi ut aliquip ex ea commodo consequat.', 'empowermt' )));
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_contact_sidebar_content', array(
		            'label' 	=> __( 'Sidebar - Content:', 'empowermt' ),
		            'section' 	=> 'empowermt_contact',
		            'settings' 	=> 'empowermt_contact_sidebar_content',
		            'priority' 	=> '7'
		        )
		    )
		);

		/* Contact - Sidebar - Phone */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_phone', array('sanitize_callback' => 'esc_html','default' => __('+1-888-587-8421','empowermt')) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_phone', array(
		    'label'    => __( 'Sidebar - Phone:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_phone',
			'priority' => '9'
		) );

		/* Contact - Sidebar - Website */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_website', array('sanitize_callback' => 'esc_html','default' => __('<a href="https://themeisle.com/themes/empowermt/" title="Movatique">Movatique</a>','empowermt')) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_website', array(
		    'label'    => __( 'Sidebar - Website:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_website',
			'priority' => '11'
		) );

		/* Contact - Sidebar - Email */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_email', array('sanitize_callback' => 'esc_html','default' => __('info@movatique','empowermt')) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_email', array(
		    'label'    => __( 'Sidebar - Email:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_email',
			'priority' => '13'
		) );

		/* Contact - Sidebar - Socials Title */
		$wp_customize->add_setting( 'empowermt_contact_sidebar_socials_title', array('sanitize_callback' => 'esc_html','default' => __( 'Our social network', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_contact_sidebar_socials_title', array(
		    'label'    => __( 'Sidebar - Socials Title:', 'empowermt' ),
		    'section'  => 'empowermt_contact',
		    'settings' => 'empowermt_contact_sidebar_socials_title',
			'priority' => '14'
		) );

	/*
    ** 404 Customizer
    */
    $wp_customize->add_section( 'empowermt_404' , array(
    	'title'       => __( '404 Page', 'empowermt' ),
    	'priority'    => 400,
	) );

		/* 404 - Title */
		$wp_customize->add_setting( 'empowermt_404_title', array('sanitize_callback' => 'esc_html','default' => __( '404 Error', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_404_title', array(
		    'label'    => __( '404 - Title:', 'empowermt' ),
		    'section'  => 'empowermt_404',
		    'settings' => 'empowermt_404_title',
			'priority' => '1',
		) );

		/* 404 - Title */
		$wp_customize->add_setting( 'empowermt_404_subtitle', array('sanitize_callback' => 'esc_html','default' => __( 'The page does not exist', 'empowermt' )) );
		$wp_customize->add_control( 'empowermt_404_subtitle', array(
		    'label'    => __( '404 - Subtitle:', 'empowermt' ),
		    'section'  => 'empowermt_404',
		    'settings' => 'empowermt_404_subtitle',
			'priority' => '2',
		) );

		/* 404 - Content */
		$wp_customize->add_setting( 'empowermt_404_content', array('sanitize_callback' => 'esc_html','default' => __( 'Oops, I screwed up and you discovered my fatal flaw. Well, we\'re not all perfect, but we try.  Can you try this again or maybe visit our <a title="themeIsle" href="'. home_url() .'">Home Page</a> to start fresh.  We\'ll do better next time.', 'empowermt' )) );
		$wp_customize->add_control( new empowermt_Textarea_Control( $wp_customize, 'empowermt_404_content', array(
		            'label' 	=> __( '404 - Content', 'empowermt' ),
		            'section' 	=> 'empowermt_404',
		            'settings' 	=> 'empowermt_404_content',
		            'priority' 	=> '3'
		        )
		    )
		);

}
add_action( 'customize_register', 'empowermt_customizer' );


/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 */

function empowermt_customize_preview_js() {

	wp_enqueue_script( 'empowermt_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}

add_action( 'customize_preview_init', 'empowermt_customize_preview_js' );

function empowermt_registers() {

	wp_register_script( 'empowermt_customizer_script', get_template_directory_uri() . '/js/empowermt_customizer.js', array("jquery"), '20120206', true  );

	wp_enqueue_script( 'empowermt_customizer_script' );

}

add_action( 'customize_controls_enqueue_scripts', 'empowermt_registers' );

if( class_exists( 'WP_Customize_Control' ) ):
	class empowermt_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>