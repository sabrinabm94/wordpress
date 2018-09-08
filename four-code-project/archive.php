<?php
/* 
	template name: Archive
*/
get_header(); ?>
<main class="main page page-archive">
	<section class="section">
		<h1 class="main-title"><?php the_title(); ?></h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="row page-container">
						<?php
							global $post;
							$content = $post->post_content;

							if ( !empty( $content ) ) :
							    echo $content;
							endif;
						?>
					</div>
					<div class="row posts">
						<?php 
						// the query
						$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
						<?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="post">
									<a class="image" href="<?php the_permalink(); ?>">
										<?php
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'large');
										
											if(!is_null($thumb_url) && $thumb_url != '') {
												?>
												<div class="box-image bg" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
												<?php
											} else {
											?>
												<div class="box-image bg" style="background-image: url(http://localhost/repositores/oi/wp-includes/images/media/default.png);"></div>
												<?php
											} 
										?>
										<h4 class="title"><?php the_title(); ?></h4>
									</a>
									<span class="date"><?php the_time('d M') ?> <br/> <?php the_author() ?> </span>
									<div class="resume"><?php //the_content(); ?></div>
								</div>
							</div>
						<?php 
						endwhile;
						endif
					?>
					</div>
				</div>
				<!-- 
				<div class="col-sm-12 col-md-4">
					<?php dynamic_sidebar('sidebar'); ?>
				</div> 
				-->
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
