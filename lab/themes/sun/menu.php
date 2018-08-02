<navbar class="navbar hide-mobile">
	<div class="row">
		<div class="col-sm-4 col-md-1">	
	        <a href="<?php echo get_site_url(); ?>">
	            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="logo-mini" />
	        </a>
		</div>
		<div class="col-sm-8 col-md-11">
			<div class="menu">
				<?php wp_nav_menu(
	                array('theme_location' => 'header-menu')); 
			    ?>
		    </div>
		</div>
	</div>
</navbar>
<nav class="navbar navbar-light light-blue lighten-4 hide-desk">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
    	<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" class="logo" />
    </a>
    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#menu-mobile" aria-controls="menu-mobile"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="dark-blue-text">
        	<i class="fa fa-bars fa-1x"></i>
        </span>
    </button>
    <div class="collapse navbar-collapse" id="menu-mobile">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="menu">
					<?php wp_nav_menu(
		                array('theme_location' => 'header-menu')); 
				    ?>
			    </div>
            </li>
        </ul>
    </div>
</nav>
