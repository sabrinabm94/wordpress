<?php
/* 
	template name: contact
*/
get_header(); ?>
<main class="main contact">
    <div class="row">
        <div class="col-md-8">
            <section class="section">
                <h2 class="title">
                    <?php the_title(); ?>
                </h2>
                <?php
					global $post;
					$content = $post->post_content;

					if( !empty( $content ) ) :?>
                <article class="article">
                    <?php echo $content; ?>
                </article>
                <?php endif; 
				?>
            </section>
            <section class="form">
                <?php do_shortcode('[contact-form-7 id="1"]'); ?>
            </section>
        </div>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>