<?php
/* 
	template name: 404
*/
get_header(); ?>
<main class="main page page-404">
	<section class="section">
		<div class="row">
			<div class="col-md-6">
				<div class="box-text">
					<h1 class="title">404</h1>
					<h2 class="subtitle">Page not founded, try again.</h2>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/404.png" alt="page not founded, try again." class="image">
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>