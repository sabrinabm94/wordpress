<?php 
/* 
	template name: Home
*/
get_header(); ?>
<main class="main page page-home">
	<section class="section intro">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php //dynamic_sidebar('sidebar'); ?>
				<div class="text">
					<?php
						global $post;
						$content = $post->post_content;

						if ( !empty( $content ) ) :
						    echo $content;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php wp_footer(); ?>