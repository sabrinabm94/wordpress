<?php
/* 
	template name: 404
*/
get_header(); ?>
<main class="main page page-not-found">
	<section class="section intro">
		<div class="row">
			<div class="col-12">
				<h1 class="main-title"><?php the_title(); ?></h1>
				<h2 class="main-description">
					<?php echo the_content(); ?>
				</h2>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
