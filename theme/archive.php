<?php
/* 
	template name: posts
*/
get_header(); ?>
<main class="main posts">
	<section class="section">
		<?php if(have_posts()):while(have_posts)):the_post(); ?>
			<div class="post">
				<a href="<?php the_permalink(); ?>">
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
				?>
					<img class="image" src="<?php echo $thumb_url[0]; ?>">
					<h1 class="title"><?php get_title(); ?></h1>
				</a>
				<span>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
				<div class="text"><?php get_content(); ?></div>
			</div>
		<?php 
			endwhile;
			endif
		?>
	</section>
</main>
<?php get_footer(); ?>
