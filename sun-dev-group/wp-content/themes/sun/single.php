<?php
/* 
	template name: Single
*/
get_header(); ?>
<main class="main page page-single">
	<section class="section container">
		<div class="row">
			<div class="col-md-8">
				<div class="post">
					<a href="<?php the_permalink(); ?>">
					<?php
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
					?>
						<div class="box-image bg" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
						<h1 class="title"><?php the_title(); ?></h1>
					</a>
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
			<div class="col-md-4">
				<?php dynamic_sidebar('sidebar'); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>