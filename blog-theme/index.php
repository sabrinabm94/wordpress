<?php
/* 
	template name: index
*/
get_header(); ?>
<main class="main index">
	<?php 
	// the query
	$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); 
	?>
	<section class="intro">
		<h1 class="title">Blog</h1>
	</section>
	<section class="posts">
		<?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			<?php if (has_post_thumbnail()) : ?>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="post">
						<a class="image" href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
							<h1 class="title"><?php the_title(); ?></h1>
							<div class="post-thumbnail bg" style="background-image: url(<?php the_post_thumbnail(); ?></div>
						</a>
					</div>
				</div>
			<?php endif; ?>
		<?php 
		endwhile;
		endif
		?>
	</section>
</main>
<?php get_footer(); ?>
