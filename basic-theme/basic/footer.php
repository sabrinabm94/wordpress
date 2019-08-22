    <footer class="footer">
    	<navbar class="navbar">
            <div class="row">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 footer-sidebar">
                    <?php dynamic_sidebar('sidebar_footer'); ?>
                </div>
                <div class="col-sm-12 col-md-6 footer-menu">
                    <h1 class="title">Pages</h1>
                    <?php wp_nav_menu(
                        array('theme_location' => 'footer-menu')); 
                    ?>
                </div>
            </div>
    	</navbar>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>