<?php 
 add_action('widgets_init', function() {
    register_widget('widget_category');
});

class widget_category extends WP_Widget {
	function __construct() {
		parent::__construct(
			'widget_category', // base ID
			'Widget de categorias', //title
			array( 'description' => esc_html__('Widget de categorias', 'text_domain'),) // description
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		
		echo '<div class="widget-banner">';
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		echo '<div class="widget-banner-content">
				<h4 class="title">' . $instance['description'] . '</h4>
				<img class="img" src="' . $instance['image_url'] . '" alt="image-banner">
				<a class="link" href="' . $instance['button_link'] . '"><button class="button mk-button mk-button--size-large mk-button--corner-rounded">'. $instance['button_title'] .'</button></a>
			</div>
		';
		
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form($instance) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		$description = ! empty( $instance['description'] ) ? $instance['description'] : esc_html__( 'New description', 'text_domain' );
		$image_url = ! empty( $instance['image_url'] ) ? $instance['image_url'] : esc_html__( 'New image_url', 'text_domain' );
		$button_title = ! empty( $instance['button_title'] ) ? $instance['button_title'] : esc_html__( 'New button_title', 'text_domain' );
		$button_link = ! empty( $instance['button_link'] ) ? $instance['button_link'] : esc_html__( 'New button_link', 'text_domain' );
		?>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_attr_e( 'Description:', 'text_domain' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>">
			</p>
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'image_url' ) ); ?>"><?php esc_attr_e( 'Image URL:', 'text_domain' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image_url' ) ); ?>" type="text" value="<?php echo esc_attr( $image_url ); ?>">
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_title' ) ); ?>"><?php esc_attr_e( 'Button Title:', 'text_domain' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_title' ) ); ?>" type="text" value="<?php echo esc_attr( $button_title ); ?>">
			</p>

			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>"><?php esc_attr_e( 'Button Link:', 'text_domain' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_link' ) ); ?>" type="text" value="<?php echo esc_attr( $button_link ); ?>">
			</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update($new_instance, $old_instance) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		$instance['image_url'] = ( ! empty( $new_instance['image_url'] ) ) ? strip_tags( $new_instance['image_url'] ) : '';
		$instance['button_title'] = ( ! empty( $new_instance['button_title'] ) ) ? strip_tags( $new_instance['button_title'] ) : '';
		$instance['button_link'] = ( ! empty( $new_instance['button_link'] ) ) ? strip_tags( $new_instance['button_link'] ) : '';

		return $instance;
	}
}
