    <footer class="footer">
        <navbar class="navbar">
            <div class="row">
                <?php if(function_exists('wp_pagenavi')) { 
                    wp_pagenavi(); 
                } ?>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 footer-sidebar">
                    <?php dynamic_sidebar('sidebar_footer'); ?>
                </div>
                <div class="col-sm-4 col-md-4 footer-menu">
                    <h2 class="title">Instituicional</h2>
                    <?php wp_nav_menu(
                        array('theme_location' => 'footer-institutional')
                    ); 
                    ?>
                </div>
                <div class="col-sm-4 col-md-4 footer-menu">
                    <h2 class="title">Categorias</h2>
                    <?php wp_nav_menu(
                        array('theme_location' => 'footer-category')
                    ); 
                    ?>
                </div>
            </div>
        </navbar>
    </footer>
    <?php wp_footer(); ?>
    </body>
    </html>