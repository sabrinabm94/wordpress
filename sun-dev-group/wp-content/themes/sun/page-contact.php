<?php
/* 
	template name: Contact
*/
get_header(); ?>
<main class="main page page-contact">
	<section class="section">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title"><?php the_title(); ?></h1>
				<?php
					global $post;
					$content = $post->post_content;

					if ( !empty( $content ) ) :
					    echo $content;
					endif;
				?>
			</div>
			<div class="col-md-6">
				<?php do_shortcode('[contact-form-7 id="49"]'); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
