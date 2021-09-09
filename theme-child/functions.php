<?php 
  add_action('wp_enqueue_scripts', 'scripts');
  add_action('widgets_init', 'register_sidebars');
  add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);

  if (has_post_thumbnail()) {
	the_post_thumbnail();
   }

  function scripts() {
      $parenthandle = 'parent-style';
      $theme = wp_get_theme();

      wp_enqueue_style($parenthandle, get_stylesheet_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
      );

      wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.css',
        array($parenthandle),
        $theme->get('Version')
      );

      wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array ('jquery'), 1.1, true);
  }
?>
