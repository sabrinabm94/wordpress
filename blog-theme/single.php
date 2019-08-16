<?php
/* 
	template name: single
*/
get_header(); ?>
<main class="main single">
	<section class="intro">
		<h1 class="title"><?php the_title(); ?></h1>
	</section>
	<section class="post">
		<header class="post-header">
			<?php
				echo '<a class="post-thumbnail" rel="lightbox">'; 
					the_post_thumbnail('large');
				echo '</a>';
			?>
		</header>
		<div class="text">
			<?php
				global $post;
				$content = $post->post_content;

				if ( !empty( $content ) ) :
					echo $content;
				endif;
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
