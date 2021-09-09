<?php
/* 
	template name: single
*/
get_header(); ?>
<main class="main">
	<section class="post">
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
				<?php dynamic_sidebar('sidebar_page'); ?>
			</div>
		</div>
	</section>
</main>
<!-- Google Adsense -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-6277753814725446"
    data-ad-slot="9725549306"
    data-ad-format="auto"
    data-full-width-responsive="true">
</ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php get_footer(); ?>