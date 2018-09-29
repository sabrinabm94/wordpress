<?php get_header(); ?>
<main class="main page page-single">
	<section class="section container">
		<div class="col-md-12">
			<div class="box-text">
				<h1 class="title"><?php the_title(); ?></h1>
				<span class="date"><?php the_time('d M') ?></span>
				<?php
					global $post;
					$content = $post->post_content;

					if ( !empty( $content ) ) :
					    echo $content;
					endif;
				?>
			</div>
		</div>
		<!--
		 <div class="col-md-4">
			<?php get_sidebar('sidebar'); ?>
		</div> 
		-->
	</section>
</main>
<?php get_footer(); ?>