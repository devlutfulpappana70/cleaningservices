<?php
/**
 * washup customizer
 *
 * @package washup
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function washup_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'washup_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Washup Customizer', 'washup' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'washup' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'washup' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'washup' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'washup' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'washup' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'washup' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'washup' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'washup' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'washup' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'washup' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'washup' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'event_settings', [
        'title'       => esc_html__( 'Event Settings ', 'washup' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'washup' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'washup' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'washup' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'washup_customizer',
    ] );
}

add_action( 'customize_register', 'washup_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];    

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_sticky_hide',
        'label'    => esc_html__( 'Header Sticky On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_search',
        'label'    => esc_html__( 'Header Search On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_header_lang',
        'label'    => esc_html__( 'language On/Off', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    // contact button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_button_text',
        'label'    => esc_html__( 'Button Text', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Contact Us', 'washup' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'washup_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'washup_button_link',
        'label'    => esc_html__( 'Button URL', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'washup_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // phone button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_phone_button_text',
        'label'    => esc_html__( 'Phone Button Text', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Contact Us', 'washup' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'washup_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_phone_button_link',
        'label'    => esc_html__( 'Phone Button URL', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'washup_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_phone_num',
        'label'    => esc_html__( 'Phone Number', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+5204654544', 'washup' ),
        'priority' => 10,
    ];    

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_mail_id',
        'label'    => esc_html__( 'Mail ID', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'demo@example.com', 'washup' ),
        'priority' => 10,
    ];    

    // time
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_office_time',
        'label'    => esc_html__( 'Office Time', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Sun - Fri: 8.00am - 10.00pm', 'washup' ),
        'priority' => 10,
    ];    

    // address
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_address',
        'label'    => esc_html__( 'Address', 'washup' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '24/21, 2nd Rangpur, Sapla', 'washup' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'washup' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'washup' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'washup' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_topbar_pinterest_url',
        'label'    => esc_html__( 'Pinterest Url', 'washup' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'washup' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'washup' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'washup' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'washup' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2'   => get_template_directory_uri() . '/inc/img/header/header-2.png',
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'washup' ),
        'description' => esc_html__( 'Upload Your Logo.', 'washup' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/resources/logo-1.png',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'seconday_logo',
        'label'       => esc_html__( 'Header Secondary Logo', 'washup' ),
        'description' => esc_html__( 'Header Logo Black', 'washup' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/images/resources/footer-logo.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'washup' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];  
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'washup_side_logo',
        'label'       => esc_html__( 'Logo Side', 'washup' ),
        'description' => esc_html__( 'Logo Side', 'washup' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/images/resources/footer-logo1.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'washup_extra_address',
        'label'    => esc_html__( 'Office Address', 'washup' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'washup' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'washup_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'washup' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+666 888 0000', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'washup_extra_email',
        'label'    => esc_html__( 'Email ID', 'washup' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'demo@example.com', 'washup' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'washup' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'washup' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/images/backgrounds/page-header-img1.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'washup' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'washup' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#222',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'washup' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Hide', 'washup' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_page_sidebar_hide',
        'label'    => esc_html__( 'Blog Page Sidebar On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'washup_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'washup' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'washup' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'washup' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'washup' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'washup' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2'   => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'washup' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'washup' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'washup' ),
            '3' => esc_html__( 'Widget Number 3', 'washup' ),
            '2' => esc_html__( 'Widget Number 2', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'washup_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'washup' ),
        'description' => esc_html__( 'Footer Background Image.', 'washup' ),
        'section'     => 'footer_setting',
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'washup' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'washup' ),
        'section'     => 'footer_setting',
        'default'     => '#004a94',
        'priority'    => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'washup' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'washup' ),
            'off' => esc_html__( 'Disable', 'washup' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_copyright',
        'label'    => esc_html__( 'Copy Right', 'washup' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright © 2023 Washup. All Rights Reserved.', 'washup' ),
        'priority' => 10,
    ];  
      
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function washup_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_color_option_prim',
        'label'       => __( 'Primary Color', 'washup' ),
        'description' => __( 'Site main color.', 'washup' ),
        'section'     => 'color_setting',
        'default'     => '#004a94',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_color_option_sec',
        'label'       => __( 'Secondary Color', 'washup' ),
        'description' => __( 'Site secondary color.', 'washup' ),
        'section'     => 'color_setting',
        'default'     => '#052944',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_color_option_body',
        'label'       => __( 'Body Color', 'washup' ),
        'description' => __( 'Site body color.', 'washup' ),
        'section'     => 'color_setting',
        'default'     => '#606060',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_color_option_black',
        'label'       => __( 'Black Color', 'washup' ),
        'description' => __( 'Site black color.', 'washup' ),
        'section'     => 'color_setting',
        'default'     => '#03041D',
        'priority'    => 10,
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'washup_color_option_white',
        'label'       => __( 'White Color', 'washup' ),
        'description' => __( 'Site white color.', 'washup' ),
        'section'     => 'color_setting',
        'default'     => '#fff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'washup_color_fields' );

// 404
function washup_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'washup_404_bg',
        'label'       => esc_html__( '404 Image.', 'washup' ),
        'description' => esc_html__( '404 Image.', 'washup' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_error_title',
        'label'    => esc_html__( 'Not Found Title', 'washup' ),
        'section'  => '404_page',
        'default'  => esc_html__( '404', 'washup' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_error_subtitle',
        'label'    => esc_html__( 'Not Found Subtitle', 'washup' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'washup' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'washup_error_desc',
        'label'    => esc_html__( '404 Description Text', 'washup' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'washup' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'washup_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'washup' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'washup' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'washup_404_fields' );

/**
 * Added Fields
 */
function washup_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'washup' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'washup_typo_fields' );

/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function washup_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'washup' ) ) {
        $value = Kirki::get_option( washup_get_theme(), $name );
    }

    return apply_filters( 'washup_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function washup_get_theme() {
    return 'washup';
}