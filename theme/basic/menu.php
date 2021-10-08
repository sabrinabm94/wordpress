<nav class="navbar hide-mobile">
    <div class="row">
        <picture class="picture col-sm-4 col-md-1">
            <a class="link" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Website logo"
                    class="logo" />
            </a>
        </picture>
        <div class="col-sm-8 col-md-11">
            <div class="menu">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar hide-desk">
    <picture class="picture">
        <a class="link" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Website logo"
                class="logo" />
        </a>
    </picture>
    <div class="col-sm-8 col-md-11">
        <div class="menu">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>
    </div>
</nav>