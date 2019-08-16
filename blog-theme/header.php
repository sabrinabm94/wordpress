<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name=description content="<?php bloginfo('description'); ?>"/>
	<meta name=keywords content=""/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="row">
			<div class="col-sm-6">
				<div class="logo bg" style="background-image: url(<?php the_field('logo-header', 'option'); ?>);"></div>
			</div>
			<div class="col-sm-6">
				<button class="btn button-black">Newsletter</button>
			</div>
		</div>
	</header>