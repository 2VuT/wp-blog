<?php
	/**
	 * Welcome Page Initiation
	*/

	include get_template_directory() . '/candidthemes/about/welcome.php';

    /** Plugins **/
    $p_plugins = array(
    // *** Companion Plugins
    'companion_plugins' => array(),
        
    // *** Recommended Plugins
    'recommended_plugins' => array(
        // Free Plugins
        'free_plugins' => array(
            
            'one-click-demo-import' => array(
                'slug' 		=> 'one-click-demo-import',
                'filename' 	=> 'one-click-demo-import.php',
                'class' 	=> 'One Click Demo Import'
            ),
            'candid-advanced-toolset' => array(
                'slug' 		=> 'candid-advanced-toolset',
                'filename' 	=> 'candid-advanced-toolset.php',
                'class' 	=> 'Candid Advanced Toolset'
            ),
        ),
        
        // Pro Plugins
        'pro_plugins' => array(
        )
    ),
);

	$strings = array(
		// Welcome Page General Texts
		'welcome_menu_text' 		=> esc_html__( 'Refined Magazine Setup', 'refined-magazine' ),
		'theme_short_description' 	=> esc_html__( 'Fast &nbsp; | &nbsp; Light  &nbsp; | &nbsp; Powerful', 'refined-magazine' ),
        'theme_description' 	=> esc_html__( 'A free news and magazine theme. Refined Magazine is easy to use modern Free WordPress theme with lots of useful features. It is search engine optimized theme with built in schema.org structured data to rank your website on search engines griper. It comes with dummy data so that even a layman can easily setup it. Furthermore, Refined Magazine is best ever crafted free WordPress theme for Blog, news and Magazine. Refined Magazine is a simple, easy to use, modern and creative, user friendly WordPress theme with typography, fonts and color options. In addition Refined Magazine is responsive, cross browser compatible and child theme ready. Refined Magazine comes with added custom widgets for social, recent post and author, sticky sidebar options, footer widget, sidebar options, meta option, copyright option, off-canvas menu, social options etc.', 'refined-magazine' ),

		// Plugin Action Texts
		'install_n_activate' 	=> esc_html__('Install and Activate', 'refined-magazine'),
		'deactivate' 			=> esc_html__('Deactivate', 'refined-magazine'),
		'activate' 				=> esc_html__('Activate', 'refined-magazine'),

		// Recommended Plugins Section
		'pro_plugin_title' 			=> esc_html__( 'Pro Plugins', 'refined-magazine' ),
		'pro_plugin_description' 	=> esc_html__( 'Take Advantage of some of our Premium Plugins.', 'refined-magazine' ),
		'free_plugin_title' 		=> esc_html__( 'Free Plugins', 'refined-magazine' ),
		'free_plugin_description' 	=> esc_html__( 'These Free Plugins might be handy for you.', 'refined-magazine' ),

		// Demo Actions
		'activate_btn' 		=> esc_html__('Activate', 'refined-magazine'),
		'installed_btn' 	=> esc_html__('Activated', 'refined-magazine'),
		'demo_installing' 	=> esc_html__('Installing Demo', 'refined-magazine'),
		'demo_installed' 	=> esc_html__('Demo Installed', 'refined-magazine'),
		'demo_confirm' 		=> esc_html__('Are you sure to import demo content ?', 'refined-magazine'),
		'pro_link'			=> 'https://candidthemes.com/themes/refined-magazine-pro/',
		'doc_link'			=> 'https://docs.candidthemes.com/refined-magazine/',
        'video_link'		=> 'https://www.youtube.com/watch?v=xCePkS6t4UU&t=1s',

		//free vs pro
		'free_vs_pro' => array(

            'features' => array(
                'Preloader Options' => array('Available','Available'),
                'Theme Option Panel'=> array('Customizer Based','Customizer Based Settings'),
                'Custom Widgets'=> array('9+','14+'),
                'Widgets Settings'=> array('Limited','As per Required'),
                'Free Demos'=> array('5','10'),
                'Header Types'=> array('2','4'),
                'Featured Section Types'=> array('Default','3'),
                'Breaking News'=> array('Default','2 Locations'),
                'Single Page Advertisement'=> array('No','Yes'),
                'One Click Demo Import'=> array('Yes','Yes'),
                'Typography Style & Colors' => array('No', 'Yes'),
                'Colors' => array('Yes Limited', 'Yes More Options'),
                'Header and Footer Types' => array('Default', '3 Types'),
                'Social Sharings' => array('Yes', 'Yes'),
                'Related Posts' => array('Yes Limited Options', 'Yes More Options'),
                'Hide Theme Credit Link' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                'Blog Page Column' => array('1', '2', 'dashicons-yes', 'dashicons-yes'),
                'Responsive Layout' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                'Translations Ready' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                'SEO' => array('Optimized', 'Optimized'),
                'Support' => array('Yes', 'High Priority Dedicated Support'),
                'Move Comment Form' => array('No', 'Move Comment Form Above Comments'),
                'Underline on Link on Post' => array('No', 'Yes'),
                'Plugins Breadcrumb' => array('Yes', 'Yes'),
                'Video Widget' => array('No', 'Yes'),
                'Hide Content in Widget' => array('No', 'Yes'),
                'Grid Post Widget' => array('Yes', 'Yes Added Settings'),
                'Three Category Column' => array('No', 'Yes'),
                '125*125 Advertisement' => array('Up to 4', 'Up to 8'),
                'WooCommerce Support' => array('No', 'Yes'),
                'Sidebar Layout Options' => array('4 Layouts', '5 layouts/Global and Individual'),
                'Meta Options' => array('Yes Limited', 'Yes More Options'),
                'Need More Settings' => array('Buy Pro', 'Buy Pro'),
            ),
        ),
	);

	/**
	 * Initiating Welcome Page
	*/
	$my_theme_wc_page = new Refined_Magazine_Welcome( $p_plugins, $strings );
