<?php
/* 
	template name: page
*/
get_header(); ?>
<main class="main page">
    <div class="row">
        <section class="section col-md-8">
            <h2 class="title">
                <?php the_title(); ?>
            </h2>
            <?php
				global $post;
				$content = $post->post_content;

				if ( !empty( $content ) ) :
					?> <article class="article">
                <?php echo $content; ?>
            </article>
            <?php endif; 
			?>
        </section>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>