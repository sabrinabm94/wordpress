<?php
/* 
	template name: 404
*/
get_header(); ?>
<main class="main not-founded">
    <div class="row">
        <section class="section col-md-8">
            <h2 class="title">
                Not founded.
            </h2>
        </section>
        <aside class="aside-bar col-md-4">
            <?php dynamic_sidebar('sidebar_main'); ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>