<?php
/* 
	template name: Single
*/
get_header(); ?>
<main class="main page page-single">
	<section class="section">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="post">
					<?php
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
					?>
					<div class="box-image bg" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
					<div class="container">
						<h1 class="title"><?php the_title(); ?></h1>
						<span class="date"><?php the_time('d M') ?></span>
						<!-- <h4 class="author">By <?php the_author() ?></h4> -->
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
			</div>
		</div>
	</section>
	<section class="tags container">
		<?php the_tags( '<ul class="tags-list"><li class="tags-list-item">', '</li><li class="tags-list-item">', '</li></ul>' ); ?>
	</section>
	<section class="related-posts container">
		<h2 class="main-title">Related Posts</h2>
		<?php relatedPostsByCategory(the_category()); ?>
	</section>
</main>
<?php get_footer(); ?>