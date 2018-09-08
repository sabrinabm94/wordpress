<?php 
/* 
	template name: Home
*/
get_header(); ?>
<main class="page page-home">
	<section class="section slider">
	<?php 
		$slides = 'repeater_slider_home';
		if(have_rows($slides)):
		    while (have_rows($slides)) : the_row();
		        ?>
		        <div class="slider-item bg" style="background-image: url(<?php the_sub_field('image'); ?>);">
		        	<h2 class="title"><?php the_sub_field('title'); ?></h2>
					<a class="link" href="<?php the_sub_field('link'); ?>" target="_self">
						<button class="button">See More</button>
					</a>
				</div>
				<?php 
		    endwhile;
		endif;
	?>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<?php //dynamic_sidebar('sidebar'); ?>
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
	</section>
</main>
<?php get_footer(); ?>