<?php
function mytheme_enqueue_styles() {
    // Main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Responsive stylesheet (depends on main-style)
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/responsive.css', array('main-style'), '1.0');

     wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(),      // dependencies (like jQuery)
        '1.0.0',      // version
        true          // load in footer (true = before </body>)
    );
       wp_enqueue_style(
        'ibm-plex-font', 
        get_template_directory_uri() . '/assets/css/IBM_Plex_Sans/font.css'
    );
    
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
function register_services_post_type() {
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
    ));
}
add_action('init', 'register_services_post_type');


// function fn_nav_menu(){
//     register_nav_menus(array(
//         'primary_menu' => __('Primary Menu', 'text_domain'),
//         'footer_menu' => __('Footer Menu', 'text_domain'),
//     ));

// }
// add_action('init', 'fn_nav_menu');
?>

