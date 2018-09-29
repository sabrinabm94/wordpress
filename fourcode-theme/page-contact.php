<?php
/* 
	template name: Contact
*/
get_header(); ?>
<main class="main page page-contact">
	<section class="section">
		<h1 class="main-title"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-sm-12 col-md-6 form">
				<h2 class="title">Send a message</h2>
				<?php do_shortcode('[contact-form-7 id="49"]'); ?>
			</div>
			<div class="col-sm-12 col-md-6 contacts">
				<?php
					global $post;
					$content = $post->post_content;

					if ( !empty( $content ) ) :
					    echo $content;
					endif;
				?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
