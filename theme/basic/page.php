<?php get_header(); ?>
	<main class="main">
		<section class="page">
			<div class="col-md-8">
					<div class="box-text">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php
							global $post;
							$content = $post->post_content;

							if ( !empty( $content ) ) :
								echo $content;
							endif;
						?>
					</div>
				</div>
				<div class="col-md-4">
					<?php get_sidebar('sidebar_page'); ?>
				</div>
		</section>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</main>
<?php get_footer(); ?>