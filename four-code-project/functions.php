<?php
add_filter('post_thumbnail_html', 'autolink_featured_images', 10, 3);
add_action('template_redirect', 'enqueue');
add_action('widgets_init', 'register_my_sidebars');
add_action('init', 'register_menus');

add_theme_support('post-thumbnails');
if (has_post_thumbnail()) {
	the_post_thumbnail();
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function enqueue() {
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css ');
	wp_enqueue_style('resets-css', get_template_directory_uri() . '/assets/css/resets.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/resets.css' ) );
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), @filemtime( get_stylesheet_directory() . '/assets/css/style.css' ) );

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('boostrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick-js'));

	wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');
}

function register_my_sidebars() {
    register_sidebar(
        array(
	        'id' => 'sidebar',
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

function autolink_featured_images($html, $post_id, $post_image_id) {
	if (! is_singular()) { 
		$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
		return $html;
	} else { 
		return $html;
	}
}

function relatedPostsByCategory($category) {
	$the_query = new WP_Query( array( 'category_name' => $category, 'posts_per_page' => 3 ) ); 

	if ( $the_query->have_posts() ) {
		?>
		<div class="row">
			<?php		
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
							<div class="post">
								<a class="image" href="<?php the_permalink(); ?>">
									<?php
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'large');
									
										if(!is_null($thumb_url) && $thumb_url != '') {
											?>
											<div class="box-image bg" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
											<?php
										} else {
											?>
											<div class="box-image bg" style="background-image: url(http://localhost/repositores/oi/wp-includes/images/media/default.png);"></div>
											<?php
										}
									?>
									<h4 class="title"><?php the_title(); ?></h4>
								</a>
								<span class="date"><?php the_time('d M') ?> <br/> <?php the_author() ?> </span>
							</div>
						</div>
					<?php
				}
			}
			?>
		</div>
	<?php
	wp_reset_postdata();
}
?>
