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
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function add_charity_number_to_customizer($wp_customize) {
 $wp_customize->add_setting(
	'charity_number',
	array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options'
 	)
);
 $wp_customize->add_control( new WP_Customize_Control(
	 $wp_customize,
	 'charity_number',
	 array(
			 'label'      => __( 'Charity Number', 'textdomain' ),
			 'description' => __( 'Your charity number', 'textdomain' ),
			 'settings'   => 'charity_number',
			 'priority'   => 10,
			 'section'    => 'title_tagline',
			 'type'       => 'text',
		)
	) );
}
add_action( 'customize_register', 'add_charity_number_to_customizer' );

function add_social_media_to_customizer($wp_customize) {
	$wp_customize->add_section( 'social_media' , array(
        'title'      => __( 'Social Media Info', 'scoutstheme' ),
        'priority'   => 30,
    ));
	$wp_customize->add_setting(
	   'twitter_handle',
	   array(
		   'default' => '',
		   'type' => 'option',
		   'capability' => 'edit_theme_options'
		)
   );
   $wp_customize->add_setting(
	'facebook_handle',
	array(
		'default' => '',
		'type' => 'option',
		'capability' => 'edit_theme_options'
	 )
	);
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'twitter_handle',
		array(
				'label'      => __( 'Twitter name', 'textdomain' ),
				'description' => __( 'Your Twitter name. eg. @WestSussexScout', 'textdomain' ),
				'settings'   => 'twitter_handle',
				'priority'   => 10,
				'section'    => 'social_media',
				'type'       => 'text',
		   )
	   ) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'facebook_handle',
		array(
				'label'      => __( 'Facebook URL', 'textdomain' ),
				'description' => __( 'Your Facebook URL. eg. https://en-gb.facebook.com/WSScouts/', 'textdomain' ),
				'settings'   => 'facebook_handle',
				'priority'   => 10,
				'section'    => 'social_media',
				'type'       => 'text',
		   )
	   ) );
   }
add_action( 'customize_register', 'add_social_media_to_customizer' );

$format = get_post_format();
if ( current_theme_supports( 'post-formats', $format ) ) {
	printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
		sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentysixteen' ) ),
		esc_url( get_post_format_link( $format ) ),
		get_post_format_string( $format )
	);
}
#Auto Update Functionality
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/west-sussex-scouts/generic-wordpress-theme',
	__FILE__,
	'generic-wordpress-theme'
);

#//Optional: If you're using a private repository, specify the access token like this:
#$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

require get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'header-menu' => esc_html__( 'Header', 'theme-textdomain' ),
) );


?>
