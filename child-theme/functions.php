<?php 
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    add_action('template_redirect', 'enqueue');
    add_action('widgets_init', 'register_sidebars');    

add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
if (has_post_thumbnail()) {
	the_post_thumbnail();
}

function enqueue_parent_styles() { 
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
} 
	
function enqueue() {
	wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css'); 
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/style.css' ) );
}

?>
