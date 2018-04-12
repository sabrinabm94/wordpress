<?php
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

if (has_post_thumbnail()) {
	the_post_thumbnail();
}

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
	if (! is_singular()) { 
		$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
		return $html;
	} else { 
		return $html;
	}
}

?>
