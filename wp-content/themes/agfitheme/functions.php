<?php 

// Load Theme CSS
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/grid.css');
	wp_enqueue_style( 'lbox', get_template_directory_uri() . '/lightbox.css');
}
add_action('wp_enqueue_scripts','theme_styles');

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function theme_js() {
	wp_enqueue_script('themejs',get_template_directory_uri() . '/js/digital.js',array('jquery'));
	wp_enqueue_script('lbox',get_template_directory_uri() . '/js/lightbox.min.js',array('themejs'));
}
add_action('wp_enqueue_scripts','theme_js');
?>