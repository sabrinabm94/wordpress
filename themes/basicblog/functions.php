<?php
	add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
	add_action('template_redirect', 'enqueue');
	add_action('widgets_init', 'register_sidebar_main');
	add_action('widgets_init', 'register_sidebar_footer');
	add_action('widgets_init', 'register_sidebar_comments');
	add_action('widgets_init', 'register_sidebar_last_posts');
	add_action('init', 'register_menus');
	add_filter('body_class', 'add_class_body');
	if (has_post_thumbnail()) {
		the_post_thumbnail();
	}
		
	function enqueue() {
		wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css');
		wp_enqueue_style('resets_css', get_template_directory_uri() . '/assets/css/resets.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/resets.css' ) );
		wp_enqueue_style('styles_css', get_template_directory_uri() . '/assets/css/styles.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/styles.css' ) );

		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
		wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'));

	}

	function wpb_autolink_featured_images($html, $post_id, $post_image_id) {	
		if (!is_singular()) { 
			$html = '<a href="' . get_permalink($post_id) . '" title="' . esc_attr(get_the_title($post_id)) . '">' . $html . '</a>';
			return $html;
		} else { 
			return $html;
		}
	}

	function register_sidebar_main() {
		register_sidebar(
			array(
				'id' => 'sidebar_main',
				'name' => __('Sidebar Main'),
				'description' => __('Main Sidebar'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
	}

	function register_sidebar_footer() {
		register_sidebar(
			array(
				'id' => 'sidebar_footer',
				'name' => __('Sidebar Footer'),
				'description' => __('Sidebar for footer'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
	}

	function register_sidebar_comments() {
		register_sidebar(
			array(
				'id' => 'sidebar_comments',
				'name' => __('Sidebar Comments'),
				'description' => __('Sidebar for comments'),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>'
			)
		);
	}

	function register_sidebar_last_posts() {
		register_sidebar(
			array(
				'id' => 'sidebar_last_posts',
				'name' => __('Sidebar Last Posts'),
				'description' => __('Sidebar for last posts'),
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
				'header-menu' => __('Header Menu'), 
				'footer-category' => __('Footer Category'),
				'footer-institutional' => __('Footer Institutional'),
			)
		);
	}

	function add_class_body($classes) {
		global $post;
		if (isset( $post)) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}

	function create_service_custom_post_type() {
		$labels = array(
			'name'                => _x( 'Services', 'Post Type General Name', 'twentytwenty' ),
			'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'twentytwenty' ),
			'menu_name'           => __( 'Services', 'twentytwenty' ),
			'parent_item_colon'   => __( 'Parent Service', 'twentytwenty' ),
			'all_items'           => __( 'All Services', 'twentytwenty' ),
			'view_item'           => __( 'View Service', 'twentytwenty' ),
			'add_new_item'        => __( 'Add New Service', 'twentytwenty' ),
			'add_new'             => __( 'Add New', 'twentytwenty' ),
			'edit_item'           => __( 'Edit Service', 'twentytwenty' ),
			'update_item'         => __( 'Update Service', 'twentytwenty' ),
			'search_items'        => __( 'Search Service', 'twentytwenty' ),
			'not_found'           => __( 'Not Found', 'twentytwenty' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
		);
		
		$args = array(
			'label'               => __( 'services', 'twentytwenty' ),
			'description'         => __( 'Service news and reviews', 'twentytwenty' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'genres' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	
		);
		
		register_post_type( 'services', $args );
	}
