<?php
/* 
	template name: archive
*/
get_header(); ?>
<main class="main archive">
    <div class="row">
        <section class="section col-md-8">
            <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
			$the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="post">
                <small class="category">
                    <?php $categories = get_the_category();
								if(!empty($categories)) {
									echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . 'Categoria: ' . esc_html( $categories[0]->name ) . '</a>';
								} ?>
                </small>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <h2 class="title">
                        <?php the_title(); ?>
                    </h2>
                </a>
                <archive class="archive">
                    <?php the_content(); ?>
                </archive>
            </div>
            <?php endwhile;
				wp_reset_postdata(); ?>
            <?php else: ?>
            <p class="text">Not founded.</p>
            <?php endif; ?>
        </section>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>