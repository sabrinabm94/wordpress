<?php
add_action('wp_enqueue_scripts', 'scripts');
add_action('widgets_init', 'register_sidebars');
add_filter('post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3);
add_filter('login_errors', 'custom_login_error_message');
add_filter('the_generator', 'remove_wp_version');

if (has_post_thumbnail()) {
  the_post_thumbnail();
}

function scripts()
{
  $parenthandle = 'parent-style';
  $theme = wp_get_theme();

  wp_enqueue_style(
    $parenthandle,
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    $theme->parent()->get('Version')
  );

  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/assets/css/style.css',
    array($parenthandle),
    $theme->get('Version')
  );

  //css
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
  //wp_enqueue_style('back-to-top-css', get_template_directory_uri() . '/assets/css/back_to_top.css', array(), @filemtime(get_stylesheet_directory() . '/assets/css/back_to_top.css'));
  //wp_enqueue_style('post-navegation-css', get_template_directory_uri() . '/assets/css/post_navegation.css', array(), @filemtime(get_stylesheet_directory() . '/assets/css/post_navegation.css'));
  wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/styles.css', array(), @filemtime(get_stylesheet_directory() . '/assets/css/styles.css'));

  //js
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'));
  //wp_enqueue_script('progress-bar-js', get_template_directory_uri() . '/assets/js/progress_bar.js', array('jquery', 'bootstrap-js'), @filemtime(get_stylesheet_directory() . '/assets/js/progress_bar.js'));
  //wp_enqueue_script('post-navegation-js', get_template_directory_uri() . '/assets/js/post_navegation.js', array('jquery'), @filemtime(get_stylesheet_directory() . '/assets/js/post_navegation.js'));
  wp_enqueue_script('scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'bootstrap-js', 'progress-bar-js','post-navegation-js'), @filemtime(get_stylesheet_directory() . '/assets/js/scripts.js'));
}

function remove_wp_version()
{
  return '';
}

function custom_login_error_message()
{
  $custom_error_msgs = [
    '<strong>Usuário ou senha incorreta, tenta novamente.</strong>',
  ];
  return $custom_error_msgs[array_rand($custom_error_msgs)];
}
