<?php
/* 
	template name: post
*/
get_header(); ?>
<main class="main post">
	<section class="section">
		<div class="post">
			<a href="<?php the_permalink(); ?>">
			<?php
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
			?>
				<img class="image" src="<?php echo $thumb_url[0]; ?>">
				<h1 class="title"><?php get_title(); ?></h1>
			</a>
			<div class="text"><?php get_content(); ?></div>
		</div>
	</section>
</main>
<?php get_footer(); ?>