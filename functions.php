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

function custom_selective_refresh($wp_customize) {
    $wp_customize->selective_refresh->add_partial('blogname', array(
        'selector' => '.welcome-section h1 .scouts-teal',
        'render_callback' => 'site-title',
    ));
    $wp_customize->selective_refresh->add_partial('custom_logo', array(
        'selector' => '.navbar-brand',
        'render_callback' => 'site-title',
    ));
    $wp_customize->selective_refresh->add_partial('main_menu', array(
        'selector' => '#main-menu-menu',
        'render_callback' => 'header-menu',
    ));
}
add_action( 'customize_register', 'custom_selective_refresh' );

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
    $wp_customize->selective_refresh->add_partial( 'charity_number', array(
        'selector' => '#charity_number',
        'render_callback' => 'charity_number',
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

function add_homepage_settings_to_customizer($wp_customize) {
    $wp_customize->add_section( 'homepage_links' , array(
        'title'      => __( 'Homepage Links', 'scoutstheme' ),
        'priority'   => 30,
    ));
    $wp_customize->add_setting(
        'sfl_fom_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sfl_fom_target',
        array(
            'label'      => __( 'Skills For Life > Find Out More', 'textdomain' ),
            'description' => __( 'Page that "Find Out More" link in "Skills For Life" points to', 'textdomain' ),
            'settings'   => 'sfl_fom_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'sfl_fom_target', array(
        'selector' => '#sfl_fom',
        'render_callback' => 'sfl_fom_target',
    ) );
    $wp_customize->add_setting(
        'sfl_jt_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'sfl_jt_target',
        array(
            'label'      => __( 'Skills For Life > Join Today', 'textdomain' ),
            'description' => __( 'Page that "Join Today" link in "Skills For Life" points to', 'textdomain' ),
            'settings'   => 'sfl_jt_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'sfl_jt_target', array(
        'selector' => '#sfl_jt',
        'render_callback' => 'sfl_jt_target',
    ) );

    $wp_customize->add_setting(
        'welcome_fom_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'welcome_fom_target',
        array(
            'label'      => __( 'Welcome > Find Out More', 'textdomain' ),
            'description' => __( 'Page that "Find Out More" link in "Welcome" points to', 'textdomain' ),
            'settings'   => 'welcome_fom_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'welcome_fom_target', array(
        'selector' => '#welcome_fom',
        'render_callback' => 'welcome_fom_target',
    ) );
    $wp_customize->add_setting(
        'welcome_jt_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'welcome_jt_target',
        array(
            'label'      => __( 'Welcome > Join Today', 'textdomain' ),
            'description' => __( 'Page that "Join Today" link in "Welcome" points to', 'textdomain' ),
            'settings'   => 'welcome_jt_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'welcome_jt_target', array(
        'selector' => '#welcome_jt',
        'render_callback' => 'welcome_jt_target',
    ) );
    $wp_customize->add_setting(
        'section_beavers_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'section_beavers_target',
        array(
            'label'      => __( 'Sections > Beavers', 'textdomain' ),
            'description' => __( 'Page that "Beavers" button in Sections list points to', 'textdomain' ),
            'settings'   => 'section_beavers_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'section_beavers_target', array(
        'selector' => '#section_btn_beavers',
        'render_callback' => 'section_beavers_target',
    ) );
    $wp_customize->add_setting(
        'section_cubs_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'section_cubs_target',
        array(
            'label'      => __( 'Sections > Cubs', 'textdomain' ),
            'description' => __( 'Page that "Cubs" button in Sections list points to', 'textdomain' ),
            'settings'   => 'section_cubs_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'section_cubs_target', array(
        'selector' => '#section_btn_cubs',
        'render_callback' => 'section_cubs_target',
    ) );
    $wp_customize->add_setting(
        'section_scouts_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'section_scouts_target',
        array(
            'label'      => __( 'Sections > Scouts', 'textdomain' ),
            'description' => __( 'Page that "Scouts" button in Sections list points to', 'textdomain' ),
            'settings'   => 'section_scouts_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'section_scouts_target', array(
        'selector' => '#section_btn_scouts',
        'render_callback' => 'section_scouts_target',
    ) );
    $wp_customize->add_setting(
        'section_explorers_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'section_explorers_target',
        array(
            'label'      => __( 'Sections > Explorers', 'textdomain' ),
            'description' => __( 'Page that "Explorers" button in Sections list points to', 'textdomain' ),
            'settings'   => 'section_explorers_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'section_explorers_target', array(
        'selector' => '#section_btn_explorers',
        'render_callback' => 'section_explorers_target',
    ) );
    $wp_customize->add_setting(
        'section_network_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'section_network_target',
        array(
            'label'      => __( 'Sections > Network', 'textdomain' ),
            'description' => __( 'Page that "Network" button in Sections list points to', 'textdomain' ),
            'settings'   => 'section_network_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'section_network_target', array(
        'selector' => '#section_btn_network',
        'render_callback' => 'section_network_target',
    ) );
    $wp_customize->add_setting(
        'av_fom_target',
        array(
            'default' => '',
            'type' => 'option',
            'capability' => 'edit_theme_options'
        )
    );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'av_fom_target',
        array(
            'label'      => __( 'Adult Volunteers > Find Out More', 'textdomain' ),
            'description' => __( 'Page that "Find Out More" link in "Adult Volunteers" points to', 'textdomain' ),
            'settings'   => 'av_fom_target',
            'priority'   => 10,
            'section'    => 'homepage_links',
            'type'       => 'dropdown-pages',
        )
    ) );
    $wp_customize->selective_refresh->add_partial( 'av_fom_target', array(
        'selector' => '#av_fom',
        'render_callback' => 'av_fom_target',
    ) );
}
add_action( 'customize_register', 'add_homepage_settings_to_customizer' );

//$format = get_post_format();
//if ( current_theme_supports( 'post-formats', $format ) ) {
//    printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
//        sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentysixteen' ) ),
//        esc_url( get_post_format_link( $format ) ),
//        get_post_format_string( $format )
//    );
//}

#Auto Update Functionality
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/west-sussex-scouts/county-wordpress-theme',
    __FILE__,
    'county-wordpress-theme'
);

#//Optional: If you're using a private repository, specify the access token like this:
#$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');
require get_template_directory() . '/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';
