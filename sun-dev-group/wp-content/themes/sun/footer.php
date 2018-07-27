    <footer class="footer">
    	<navbar class="navbar">
            <div class="row">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="logo-big" />
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h5 class="title">Pages</h5>
                    <?php wp_nav_menu(
                        array('theme_location' => 'footer-menu')); 
                    ?>
                </div>
                <div class="col-sm-12 col-md-4">
                    <?php dynamic_sidebar('sidebar_footer'); ?>
                </div>
            </div>
    	</navbar>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>