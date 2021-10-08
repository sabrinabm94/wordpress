<?php
/* 
	template name: categories
*/
get_header(); ?>
<main class="main categories">
    <div class="row">
        <section class="section col-md-8">
            <?php 
                $category_id = get_query_var( 'cat' );
                $category = get_term( $category_id, 'category' );
                $parent = $category->parent ? $category->parent : $category_id;
                $args = array(
                    'show_count' => false,
                    'hide_empty' => false,
                    'title_li' => '',
                    'show_option_none' => '',
                    'echo' => false
                );
                if ( $category->parent ) {
                    $args['child_of'] = $category->parent;
                    $args['exclude'] = $category_id; 
                }
                else {
                    $args['child_of'] = $category_id;
                }
                $categories_list = wp_list_categories( $args );
                if ( $categories_list ) { ?>
            <ul class="list">
                <?php echo $categories_list; ?>
            </ul>
            <?php }
            ?>
        </section>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>