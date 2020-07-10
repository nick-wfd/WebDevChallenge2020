<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo get_bloginfo('name').' - '.get_the_title(); ?></title>
  		<meta name="description" content="Mauris consequat libero metus, nec ultricies sem efficitur quis" />
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo get_bloginfo('name').' - '.get_the_title(); ?>" />
		<meta property="og:description" content="Mauris consequat libero metus, nec ultricies sem efficitur quis" />
		<meta property="og:url" content="<?php echo get_bloginfo('siteurl'); ?>" />
		<meta property="og:site_name" content="Methods" />
		<meta property="og:image" content="<?php echo bloginfo('template_directory').'/dist/img/og-image.png'?>" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:description" content="Mauris consequat libero metus, nec ultricies sem efficitur quis" />
		<meta name="twitter:title" content="<?php echo get_bloginfo('name').' - '.get_the_title(); ?>" />
		<meta name="twitter:site" content="@MethodsDigital" />
		<meta name="twitter:image" content="<?php echo bloginfo('template_directory').'/dist/img/og-image.png'?>" />
		<meta name="twitter:creator" content="@MethodsDigital" />
		<link data-size="32" rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory') ?>/dist/img/favicon-32x32.png">
        <link data-size="96" rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory') ?>/dist/img/favicon-96x96.png">
        <link data-size="16" rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory') ?>/dist/img/favicon-16x16.png">
		<?php wp_head(); ?>
		<link rel="stylesheet" href="//use.typekit.net/tyt5ajc.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css" media='all'>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="container d-flex flex-wrap flex-column">
				<nav class="c-nav">
					<div class="row align-items-center justify-content-between">
						<a class="logo">
							<span>Drone</span>Zone
						</a>
						<?php wp_nav_menu( array( 'menu' => 'main-navigation', 'container' => 'ul' ) ); ?>
						<button class="mob-menu o-btn o-btn--light">Menu</button>
					</div>
				</nav>
				<div class="row flex-grow-1 align-items-center">
					<div class="header-inner">
						<div class="header-content">
							<h1>Film your event with us!</h1>
							<p>Mauris consequat libero metus, nec ultricies sem efficitur quis. Mauris consequat libero metus, nec ultricies sem efficitur quis.</p>
							<div class="header-ctas">
								<a href="#" class="o-btn o-btn--light">Ask for price</a>
								<a href="#" class="o-btn">Watch our video</a>
							</div>
						</div>
					</div>
				</div>
				<div class="header-scroll-ind">
					<img src="<?php echo bloginfo('template_directory').'/dist/img/scroll-icon.png'?>">
					<p>Scroll down</p>
				</div>
			</div>
		</header>
