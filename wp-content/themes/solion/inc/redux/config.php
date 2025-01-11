<?php

if (!class_exists('Redux'))
    {
    return;
    }
function newIconFont() 
    { 
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome-all.css' );
    }

add_action( 'redux/page/solion_options/enqueue', 'newIconFont' );

$opt_name = "solion_options";
$theme    = wp_get_theme();
$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title'        => esc_html__( 'Solion Options', 'solion' ),
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => false,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => 3,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
);
Redux::setArgs( $opt_name, $args );

Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Bar', 'solion') ,
    'id' => esc_html__('topbar', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'headingsection1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'solion' ),
            'id'        => 't_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'solion' ),
            'id'        => 't_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Address', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 't_icon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 't_text1',
            'type'      => 'text',
            'default'   => esc_html__( 'California, TX 70240', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'solion' ),
            'id'        => 't_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'solion' ),
            'id'        => 't_title2',
            'type'      => 'text',
            'default'   => esc_html__( 'Email', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 't_icon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-envelope-open', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 't_text2',
            'type'      => 'text',
            'default'   => esc_html__( 'Info@gmail.com', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 3', 'solion' ),
            'id'        => 't_3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'solion' ),
            'id'        => 't_title3',
            'type'      => 'text',
            'default'   => esc_html__( 'OFFICE HOURS', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 't_icon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-clock', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 't_text3',
            'type'      => 'text',
            'default'   => esc_html__( 'Office Hours: 8:00 AM – 7:45 PM', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 4', 'solion' ),
            'id'        => 't_4',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'solion' ),
            'id'        => 't_title4',
            'type'      => 'text',
            'default'   => esc_html__( 'Phone', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 't_icon4',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fas fa-phone', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 't_text4',
            'type'      => 'text',
            'default'   => esc_html__( '+123 456 7890', 'solion' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Social Icons', 'solion') ,
    'id' => esc_html__('socialicons', 'solion') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'headingsection3',
            'type'      => 'text',
            'default'   => esc_html__( 'Connect With Us', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section One', 'solion' ),
            'id'        => 'se1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'sicon1',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-facebook-f', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'solion' ),
            'id'        => 'sl1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section Two', 'solion' ),
            'id'        => 'se2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'sicon2',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-twitter', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'solion' ),
            'id'        => 'sl2',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'solion' ),
            'indent'    => true
        ),

         array(
            'title'     => esc_html__( 'Section Three', 'solion' ),
            'id'        => 'se3',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'sicon3',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'type'      => 'text',
            'default'   => esc_html__( 'fab fa-linkedin-in', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'solion' ),
            'id'        => 'sl3',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'solion' ),
            'indent'    => true
        ),


        
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Buttons', 'solion') ,
    'id' => esc_html__('button-s', 'solion') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Quote Button', 'solion' ),
            'id'        => 'qtebt',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Text', 'solion' ),
            'id'        => 'qttext',
            'type'      => 'text',
            'default'   => esc_html__( 'Get a Quote', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Button Link', 'solion' ),
            'id'        => 'qtlink',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'solion' ),
            'indent'    => true
        ),



        
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Additional Links', 'solion') ,
    'id' => esc_html__('additional', 'solion') ,
    'icon' => 'fas fa-heading',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'headingsection2',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'solion' ),
            'id'        => 'addtionalmenu1',
            'type'      => 'text',
            'default'   => esc_html__( 'Additional Links', 'solion' ),
            'readonly' => true,
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'solion') ,
    'id' => esc_html__('header', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Favicon', 'solion' ),
            'id'        => 'favicon',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/favicon.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'solion' ),
            'id'        => 'logo_start',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Logo', 'solion' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Sticky Logo', 'solion' ),
            'id'        => 'sticky-logo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Title', 'solion' ),
            'id'        => 'h_title1',
            'type'      => 'text',
            'default'   => esc_html__( 'Request a Quote', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Link', 'solion' ),
            'id'        => 'h_link1',
            'type'      => 'text',
            'default'   => esc_html__( '#', 'solion' ),
            'indent'    => true
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'solion') ,
    'id' => esc_html__('footer', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'fields' => array(

        array(
            'title'     => esc_html__( 'Footer Logo', 'solion' ),
            'id'        => 'footerlogo',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo-light.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Footer Logo Version 2', 'solion' ),
            'id'        => 'footerlogo-sticky',
            'type'      => 'media',
            'default'  => array(
                'url'=> get_template_directory_uri() . '/img/logo.png'
                ), 
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Description', 'solion' ),
            'id'        => 'footerdes',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Happen active county. Winding for the morning am shyness evident to poor. Garrets because elderly new.', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'CopyRight Text', 'solion' ),
            'id'        => 'copyright',
            'type'      => 'textarea',
            'default'   => esc_html__( '&copy; Copyright 2021. solion WordPres Theme By WordPressRiver', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'solion' ),
            'id'        => 'addtionalmenu',
            'type'      => 'text',
            'default'   => esc_html__( 'Footer Menu', 'solion' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Company Links', 'solion') ,
    'id' => esc_html__('companylinkshead', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'companylinks',
            'type'      => 'text',
            'default'   => esc_html__( 'Company', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'solion' ),
            'id'        => 'c1',
            'type'      => 'text',
            'default'   => esc_html__( 'Company Links', 'solion' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Solutions Links', 'solion') ,
    'id' => esc_html__('solutionlinkshead', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'solutionlinks',
            'type'      => 'text',
            'default'   => esc_html__( 'Solutions', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Menu Location', 'solion' ),
            'id'        => 'sol1',
            'type'      => 'text',
            'default'   => esc_html__( 'Solution Links', 'solion' ),
            'readonly' => true,
            'indent'    => true
        ),

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Contact Info', 'solion') ,
    'id' => esc_html__('contactinfofooter', 'solion') ,
    'icon' => 'far fa-arrow-alt-circle-up',
    'subsection' => true,
    'fields' => array(

        array(
            'title'     => esc_html__( 'Heading', 'solion' ),
            'id'        => 'contactinfo1',
            'type'      => 'text',
            'default'   => esc_html__( 'Contact Info', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 1', 'solion' ),
            'id'        => 'c_1',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'footertitle1',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'default'   => esc_html__( 'fas fa-map-marker-alt', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 'footertext1',
            'type'      => 'textarea',
            'default'   => esc_html__( '5919 Trussville Crossings Pkwy', 'solion' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text Line 2', 'solion' ),
            'id'        => 'footertext11',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Birmingham AL 35235', 'solion'),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Section 2', 'solion' ),
            'id'        => 'c_2',
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'footertitle2',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'default'   => esc_html__( 'fas fa-envelope', 'solion' ),
            'indent'    => true
        ),

        array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 'footertext2',
            'type'      => 'textarea',
            'default'   => esc_html__( 'Info@gmail.com', 'solion' ),
            'indent'    => true
        ),

        
        array(
            'title'     => esc_html__( 'Section 3', 'solion' ),
            'id'        => 'c_3',
            'type'      => 'section',
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Icon Class', 'solion' ),
            'id'        => 'footertitle3',
            'type'      => 'text',
            'description' => esc_html__( 'Paste Font-Aweosme Icon Class', 'solion' ),
            'default'   => esc_html__( 'fas fa-phone', 'solion' ),
            'indent'    => true
        ),


       array(
            'title'     => esc_html__( 'Text', 'solion' ),
            'id'        => 'footertext3',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123-456-7890', 'solion' ),
            'indent'    => true
        ),
        
        array(
            'title'     => esc_html__( 'Text Line 2', 'solion' ),
            'id'        => 'footertext33',
            'type'      => 'textarea',
            'default'   => esc_html__( '+123-456-7890', 'solion' ),
            'indent'    => true
        ),


    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Styling', 'solion') ,
    'id' => esc_html__('solion_color', 'solion') ,
    'icon' => 'fas fa-edit',
    'fields' => array(
    array(
            'id'        => 'main_color_solion',
            'title'     => esc_html__( 'Main Theme Color', 'solion' ),
            'subtitle'  => esc_html__( 'The main color of the site.', 'solion' ),
            'type'      => 'select',
            'options'   => array(
                '2'     => esc_html__( 'Sky Blue', 'solion' ),
                '1'     => esc_html__( 'Strong Blue', 'solion' ),
                '3'     => esc_html__( 'Orange', 'solion' ),
                '4'     => esc_html__( 'Pink', 'solion' ),
                '5'     => esc_html__( 'Green', 'solion' ),
                '6'     => esc_html__( 'Purple', 'solion' ),
                '7'     => esc_html__( 'Custom Colors', 'solion' ),
            ),
            'default'   => '1',
            'indent'    => true,
        ),

    array(
            'title'     => esc_html__( 'Custom Color Option', 'solion' ),
            'id'        => 'customcolors',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'main_color_solion', 'equals', '7' ),
        ),

    array(
            'title'     => esc_html__( 'Choose Main Theme Color', 'solion' ),
            'id'        => 'colorcode',
            'type'      => 'color',
            'default'  => '#104cba',
            'validate' => 'color',
            'transparent' => false,
            'required'  => array( 'main_color_solion', 'equals', '7' ),
        ),

    array(
        'title'     => esc_html__( 'Choose Theme Gradient Color', 'solion' ),
        'id'       => 'color-gra',
        'type'     => 'color_gradient',
        'default'  => array(
            'from' => 'rgba(0,16,45,1)',
            'to'   => 'rgba(0,89,252,1)', 
        ),
    'transparent' => false,
    'required'  => array( 'main_color_solion', 'equals', '7' ),
    ),
)
));