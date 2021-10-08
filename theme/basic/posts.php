<?php
/* 
	template name: posts
*/
get_header(); ?>
<main class="main posts">
    <div class="row">
        <div class="col-md-8">
            <section class="section post">
                <?php 
					$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>4)); ?>
                <?php if ( $wpb_all_query->have_posts() ) : while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="post">
                        <a href="<?php the_permalink(); ?>">
                            <picture class="picture">
                                <?php 
											$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,'large'); ?>
                                <div class="featured-image"
                                    style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>
                            </picture>
                        </a>
                        <h2 class="title">
                            <?php the_title(); ?>
                        </h2>
                        <archive class="archive">
                            <?php the_content(); ?>
                        </archive>
                        <span class="date">Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
                    </div>
                </div>
                <?php 
					endwhile;
					endif
				?>
            </section>
            <section class="section last-posts">
                <?php dynamic_sidebar('register_sidebar_last_posts'); ?>
            </section>
            <section class="section last-comments">
                <?php dynamic_sidebar('register_sidebar_comments'); ?>
            </section>
        </div>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>