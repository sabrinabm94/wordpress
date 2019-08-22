<?php 
/* 
	template name: home
*/
get_header(); ?>
<main class="main page page-home">
	<section class="section intro">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="box-image bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/colors.jpg);">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-12 col-md-12">
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
				<div class="box-text">
					
				</div>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('sidebar_page'); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>