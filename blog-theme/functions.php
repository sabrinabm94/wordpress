<?php
	add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
	add_action('template_redirect', 'enqueue');
	add_action('init', 'register_menus');
	add_action('widgets_init', 'mytheme_widgets_init');
	add_filter('body_class', 'add_class_body');

	allowPostThumbnails();
	configureAcf();
	
	function configureAcf() {
		if(function_exists('acf_add_options_page')) {
			activeOptionsPage();
			createCustomOptionsPage("Sliders", "Sliders", "sliders", "edit_posts", false);
		}
	}

	function allowPostThumbnails() {
		if(function_exists('add_theme_support')) {
			add_theme_support('post-thumbnails');
		}

		if(has_post_thumbnail()) {
			the_post_thumbnail();
		}
	}

	function activeOptionsPage() {
		acf_add_options_page();
	}

	function createCustomOptionsPage($pageTitle, $menuTitle, $menuSlug, $role, $redirect) {
		acf_add_options_page(array(
			'page_title' 	=> $pageTitle,
			'menu_title'	=> $menuTitle,
			'menu_slug' 	=> $menuSlug,
			'capability'	=> $role,
			'redirect'		=> $redirect
		));
	}
		
	function enqueue() {
		wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css'); 
		wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'); 
		wp_enqueue_style('resets-css', 'https://github.com/sabrinabgbc/front-end-environment/blob/master/default-files/scss/resets.scss'); 
		wp_enqueue_style('style-css', 'https://github.com/sabrinabgbc/front-end-environment/blob/master/default-files/scss/style.scss');
		wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/css/style.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/style.css' ) );

		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
		wp_enqueue_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'));
		wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
		wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), @filemtime( get_stylesheet_directory() . '/assets/js/scripts.js' ) );
	}

	function wpb_autolink_featured_images($html, $post_id, $post_image_id) {	
		if (!is_singular()) { 
			$html = '<a href="' . get_permalink($post_id) . '" title="' . esc_attr(get_the_title($post_id)) . '">' . $html . '</a>';
			return $html;
		} else { 
			return $html;
		}
	}

	function register_menus() {
		register_nav_menus (
			array(
				'header-menu' => __('Main Menu'),
				'footer-menu' => __('Footer Menu'), 
			)
		);
	}

	function mytheme_widgets_init() {
		register_sidebar( array (
			'name' => __( 'Main Sidebar', 'your-text-domain' ),
			'id' => 'sidebar-1',
			'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'your-text-domain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	}

	function add_class_body($classes) {
		global $post;
		if (isset( $post)) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
?>
