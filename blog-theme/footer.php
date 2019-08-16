    <footer class="footer">
        <nav class="navbar">
            <div class="row">
                <div class="col-sm-4">
                    <?php
                    $repeater = 'footer-social-repeater';
                    $link = 'link';
                    $name = 'name';
                    $option = 'option';

                        wp_nav_menu(array('theme_location' => 'footer-menu'));
                    ?>
                </div>
                <div class="col-sm-4">
                    <div class="logo bg" style="background-image: url(<?php the_field('logo-footer', $option); ?>);"></div>
                </div>
                <div class="col-sm-4">
                    <?php
                        if( have_rows($repeater, $option) ): ?>
                            <ul class="inline-list social-list">
                            <?php while( have_rows($repeater, $option) ): the_row(); ?>
                                <li class="social-list-item">
                                    <a href="<?php the_sub_field($link); ?>" class="link">
                                        <?php the_sub_field($name); ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif;
                    ?>
                </div>
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>