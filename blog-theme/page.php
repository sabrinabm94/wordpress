<?php
/* 
	template name: page
*/
get_header(); ?>
<main class="main page">
	<section class="section intro">
		<div class="row">
			<div class="col-12">
				<h1 class="main-title"><?php the_title(); ?></h1>
				<h2 class="main-description">
					<?php echo the_content(); ?>
				</h2>

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
