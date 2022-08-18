<?php
/* 
	template name: singles
*/
get_header(); ?>
<main class="main single">
    <div class="row">
        <section class="section col-md-8">
            <small class="category">
                <?php
				$categories = get_the_category();
				if(!empty($categories)) {
					echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . 'Categoria: ' . esc_html( $categories[0]->name ) . '</a>';
				}
				?>
            </small>
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
            <small class="tags">
                <?php
				$tags = get_tags();
				$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );
				
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';
				echo $html;
				?>
            </small>
        </section>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>