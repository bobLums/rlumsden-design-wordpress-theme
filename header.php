<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php 
            if ( is_post_type_archive( 'projects' ) ) {
                echo 'Projects';
            } else {
                echo get_the_title();
			}
         ?></title>
        <meta name="description" content="Graphic design, web design and wordpress development for creators, entrepreneurs and small creators.">
        <meta property="og:image" content="/wp-content/uploads/2022/03/robert-lumsden-design-og.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />

        <?php if ( is_front_page() ){
                echo '<link rel="canonical" href="https://robertlumsden.design/">';  
		    }

        ?>
		<?php wp_head();?>
        <link rel="stylesheet" href="https://use.typekit.net/qmg0jmj.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C300italic%2C400%2C500%2C700&amp;ver=5.5.3" type="text/css" media="all">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&family=Work+Sans:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet"> 
	</head>
    <?php if ( is_singular( 'projects' ) ): ?>
        	<body>
                	<div class="w-100 myhero" style="background-image:url('<?php 
                                $image = the_field('hero');
                            ?>');">
                            <header>
		                        <nav class="navbar navbar-expand-lg navbar-light">
                                        <div class="container-lg navcont">
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                                                <a class="navbar-brand" href="<?php echo home_url() ?>">
                                                    <img src="/wp-content/uploads/2022/02/RL-monogram-blue.png" alt="Robert Lumsden Monogram" width="50" height="50" class="navbar-brand-img">
                                                </a>
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'main-menu',
                                                    'container' => false,
                                                    'menu_class' => '',
                                                    'fallback_cb' => '__return_false',
                                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                                    'depth' => 2,
                                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                                ));
                                                ?>
                                                <a class="nav-link" href="https://www.instagram.com/robertlumsden.design/" target="_blank">
                                                    <img src="/wp-content/uploads/2022/03/rl-insta.png" alt="insta" width="30" height="30" class="">
                                                </a>
                                            </div>
                                        </div>
                                </nav>
		                    </header>
	                </div>
                <div class="content-wrap">
		    <div class="container-lg">
    <?php else: ?>
    	<body>
		<header>
		    <nav class="navbar navbar-expand-lg navbar-light">
                                        <div class="container-lg navcont">
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
                                                <a class="navbar-brand" href="<?php echo home_url() ?>">
                                                    <img src="/wp-content/uploads/2022/02/RL-monogram-blue.png" alt="Robert Lumsden Monogram" width="50" height="50" class="navbar-brand-img">
                                                </a>
                                                <?php
                                                wp_nav_menu(array(
                                                    'theme_location' => 'main-menu',
                                                    'container' => false,
                                                    'menu_class' => '',
                                                    'fallback_cb' => '__return_false',
                                                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                                    'depth' => 2,
                                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                                ));
                                                ?>
                                                <a class="nav-link" href="https://www.instagram.com/robertlumsden.design/" target="_blank">
                                                    <img src="/wp-content/uploads/2022/03/rl-insta.png" alt="insta" width="30" height="30" class="">
                                                </a>
                                            </div>
                                        </div>
                                </nav>
		</header>
        <div class="content-wrap">
		    <div class="container-lg">
    <?php endif; ?>

