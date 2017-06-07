<!DOCTYPE html>
<html lang="en">
<head>
	<title>LEVELUPSocialMedia.com</title>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name ="viewport" content="width = device-width, initial-scale = 1.0">

    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png"/>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"/>  <!--Apparently you don't need this link but i kept it anyway-->

    <!-- Styles --> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<header class="site-header">
		
		<div class="site-header__menu-icon">
        	<div class="site-header__menu-icon__middle"></div>
      	</div>

		<nav class="wrapper site-header__nav">
			
			<a class="site-header__logo" href="<?php bloginfo('url') ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/levelup-arrow.svg" alt="up arrow"/>
				<p>LevelUp<span>Social Media</span></p>
			</a>

			<ul class="site-header__main-menu">
				<a class="site-header__main-menu__links" href="under-construction">Case Studies</a>
				<a class="site-header__main-menu__links site-header__main-menu__links__btn" href="#work-with-us">
					Work With Us
				</a>
			</ul>
		</nav>

	</header>