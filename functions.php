<?php
add_theme_support( 'custom-logo', array(
	'height'      => 76,
	'width'       => 100,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'post-formats', array( 'aside', 'quote' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_theme_support( 'title-tag' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => esc_html__( 'Footer Links', 'theme-textdomain' ),
		)
	);
}

add_action( 'init', 'register_my_menus' );

function custom_selective_refresh( $wp_customize ) {
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector'        => '.welcome-section h1 .scouts-teal',
		'render_callback' => 'site-title',
	) );
	$wp_customize->selective_refresh->add_partial( 'custom_logo', array(
		'selector'        => '.navbar-brand',
		'render_callback' => 'site-title',
	) );
	$wp_customize->selective_refresh->add_partial( 'main_menu', array(
		'selector'        => '#main-menu-menu',
		'render_callback' => 'header-menu',
	) );
}

add_action( 'customize_register', 'custom_selective_refresh' );

function add_charity_number_to_customizer( $wp_customize ) {
	$wp_customize->add_setting(
		'charity_number',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options'
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'charity_number',
		array(
			'label'       => __( 'Charity Number', 'textdomain' ),
			'description' => __( 'Your charity number', 'textdomain' ),
			'settings'    => 'charity_number',
			'priority'    => 10,
			'section'     => 'title_tagline',
			'type'        => 'text',
		)
	) );
	$wp_customize->selective_refresh->add_partial( 'charity_number', array(
		'selector'        => '#charity_number',
		'render_callback' => 'charity_number',
	) );
}

add_action( 'customize_register', 'add_charity_number_to_customizer' );

function add_social_media_to_customizer( $wp_customize ) {
	$wp_customize->add_section( 'social_media', array(
		'title'    => __( 'Social Media Info', 'scoutstheme' ),
		'priority' => 30,
	) );
	$wp_customize->add_setting(
		'twitter_handle',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options'
		)
	);
	$wp_customize->add_setting(
		'facebook_handle',
		array(
			'default'    => '',
			'type'       => 'option',
			'capability' => 'edit_theme_options'
		)
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'twitter_handle',
		array(
			'label'       => __( 'Twitter name', 'textdomain' ),
			'description' => __( 'Your Twitter name. eg. @WestSussexScout', 'textdomain' ),
			'settings'    => 'twitter_handle',
			'priority'    => 10,
			'section'     => 'social_media',
			'type'        => 'text',
		)
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'facebook_handle',
		array(
			'label'       => __( 'Facebook URL', 'textdomain' ),
			'description' => __( 'Your Facebook URL. eg. https://en-gb.facebook.com/WSScouts/', 'textdomain' ),
			'settings'    => 'facebook_handle',
			'priority'    => 10,
			'section'     => 'social_media',
			'type'        => 'text',
		)
	) );
}

add_action( 'customize_register', 'add_social_media_to_customizer' );

function add_homepage_settings_to_customizer( $wp_customize ) {
	$wp_customize->add_section( 'homepage_links', array(
		'title'    => __( 'Homepage Links', 'scoutstheme' ),
		'priority' => 30,
	) );

	$setting_defaults    = array(
		'setting_name' => '',
		'label'        => '',
		'description'  => '',
		'type'         => 'dropdown-pages',
		'capability'   => 'edit_theme_options',
		'selector'     => '',
		'section'      => 'homepage_links'
	);
	$front_page_settings = [
		array(
			'setting_name' => 'sfl_fom_target',
			'label'        => 'Skills For Life > Find Out More',
			'description'  => 'Page that "Find Out More" link in "Skills For Life" points to',
			'selector'     => '#sfl_fom'
		),
		array(
			'setting_name' => 'sfl_jt_target',
			'label'        => 'Skills For Life > Join Today',
			'description'  => 'Page that "Join Today" link in "Skills For Life',
			'selector'     => '#sfl_jt'
		),
		array(
			'setting_name' => 'welcome_fom_target',
			'label'        => 'Welcome > Find Out More',
			'description'  => 'Page that "Find Out More" link in "Welcome" points to',
			'selector'     => '#welcome_fom'
		),
		array(
			'setting_name' => 'welcome_jt_target',
			'label'        => 'Welcome > Join Today',
			'description'  => 'Page that "Join Today" link in "Welcome" points to',
			'selector'     => '#welcome_jt'
		),
		array(
			'setting_name' => 'section_beavers_target',
			'label'        => 'Sections > Beavers',
			'description'  => 'Page that "Beavers" button in Sections list points to',
			'selector'     => '#section_btn_beavers'
		),
		array(
			'setting_name' => 'section_cubs_target',
			'label'        => 'Sections > Cubs',
			'description'  => 'Page that "Cubs" button in Sections list points to',
			'selector'     => '#section_btn_cubs'
		),
		array(
			'setting_name' => 'section_scouts_target',
			'label'        => 'Sections > Scouts',
			'description'  => 'Page that "Scouts" button in Sections list points to',
			'selector'     => '#section_btn_scouts'
		),
		array(
			'setting_name' => 'section_explorers_target',
			'label'        => 'Sections > Explorers',
			'description'  => 'Page that "Explorers" button in Sections list points to',
			'selector'     => '#section_btn_explorers'
		),
		array(
			'setting_name' => 'section_network_target',
			'label'        => 'Sections > Network',
			'description'  => 'Page that "Network" button in Sections list points to',
			'selector'     => '#section_btn_Network'
		),
		array(
			'setting_name' => 'av_fom_target',
			'label'        => 'Adult Volunteers > Find Out More',
			'description'  => 'Page that "Find Out More" link in "Adult Volunteers" points to',
			'selector'     => '#av_fom'
		),
	];

	$index = 1;
	foreach ( $front_page_settings as $setting ) {
		foreach ( $setting_defaults as $key => $value ) {
			if ( ! array_key_exists( $key, $setting ) ) {
				$setting[ $key ] = $value;
			};
		};
		$wp_customize->add_setting(
			$setting['setting_name'],
			array(
				'default'    => '',
				'type'       => 'option',
				'capability' => $setting['capability']
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			$setting['setting_name'],
			array(
				'label'       => __( $setting['label'], 'textdomain' ),
				'description' => __( $setting['description'], 'textdomain' ),
				'settings'    => $setting['setting_name'],
				'priority'    => $index,
				'section'     => $setting['section'],
				'type'        => $setting['type'],
			)
		) );
		$wp_customize->selective_refresh->add_partial( $setting['label'],
			array(
				'selector'        => $setting['selector'],
				'render_callback' => $setting['setting_name'],
			)
		);
		$index ++;
	}
}

add_action( 'customize_register', 'add_homepage_settings_to_customizer' );

#Auto Update Functionality
require 'vendor/yahnis-elsts/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/west-sussex-scouts/county-wordpress-theme',
	__FILE__,
	'county-wordpress-theme'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets('/.*\.zip/');

require 'vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
