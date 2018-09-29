    <footer class="footer">
    	<navbar class="navbar">
            <div class="row">
                <?php if(function_exists('wp_pagenavi')) { 
                    wp_pagenavi(); 
                } ?>
            </div>
            <div class="row">
                <div class="col-6 col-sm-3 col-md-4 footer-menu">
                    <?php wp_nav_menu(
                        array('theme_location' => 'footer-menu')); 
                    ?>
                </div>
                <div class="col-6 col-sm-3 col-md-4 logo">
                    <a class="link" href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="logo-big" />
                    </a>
                </div>
                <div class="col-12 col-sm-5 col-md-4 footer-sidebar">
                    <?php dynamic_sidebar('sidebar_footer'); ?>
                    <ul class="social-list">
                        <li class="social-list-item">
                            <a href="" target="_blank" class="link">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="social-list-item">
                            <a href="" target="_blank" class="link">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    	</navbar>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>