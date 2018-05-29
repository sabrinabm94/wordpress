<?php
add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
add_action('template_redirect', 'enqueue');
add_action('widgets_init', 'register_my_sidebars');
add_action('init', 'register_menus');
function enqueue() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/boostrap.min.css');
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css'); 
	wp_enqueue_style('resets-css', get_template_directory_uri() . '/assets/css/resets.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/resets.css' ) );
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/style.css' ) );

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('jquery'));

}
function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
	if (! is_singular()) { 
		$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
		return $html;
	} else { 
		return $html;
	}
}
function register_my_sidebars() {
    register_sidebar(
        array(
	        'id' => 'sidebar_page',
	        'name' => __( 'Sidebar Page' ),
	        'description' => __( 'A short description of the sidebar.' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>'
    	)
    );
    register_sidebar(
        array(
	        'id' => 'sidebar_footer',
	        'name' => __( 'Sidebar Footer' ),
	        'description' => __( 'A short description of the sidebar.' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>'
    	)
    );
}
function register_menus() {
	register_nav_menus (
		array(
			'header-menu' => __('Main Menu'), 
		)
	);
}
if (has_post_thumbnail()) {
	the_post_thumbnail();
}
?>
