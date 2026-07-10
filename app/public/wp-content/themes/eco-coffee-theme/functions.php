<?php
function eco_coffee_enqueue_styles() {
    // මේකෙන් style.css එකේ වෙලාව (Time) බලලා අලුත්ම එක load කරනවා
    wp_enqueue_style(
        'main-style', 
        get_stylesheet_uri(), 
        array(), 
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'eco_coffee_enqueue_styles');
?>

<?php
// Menu support එක register කිරීම
function eco_coffee_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'eco-coffee'),
    ));
}
add_action('after_setup_theme', 'eco_coffee_setup');