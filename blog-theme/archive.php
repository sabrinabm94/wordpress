<?php
/* 
	template name: archive
*/
get_header(); ?>
<main class="main page page-archive">
	<section class="section">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<?php 
					// the query
					$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
					<?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<div class="post">
								<a class="image" href="<?php the_permalink(); ?>">
									<?php
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'large');
									?>
									<div class="box-image bg" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
									<h1 class="title"><?php the_title(); ?></h1>
								</a>
								<span class="date">Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
								<div class="text"><?php the_content(); ?></div>
							</div>
						</div>
					<?php 
					endwhile;
					endif
				?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
