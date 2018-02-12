<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(''); ?> </title>

    <?php wp_head(); ?>
</head>

<body>

    <!-- peloader starts here -->
    <!--	<div class="caregardener-preloader-wrap">
		<div class="sk-folding-cube">
		  <div class="sk-cube1 sk-cube"></div>
		  <div class="sk-cube2 sk-cube"></div>
		  <div class="sk-cube4 sk-cube"></div>
		  <div class="sk-cube3 sk-cube"></div>
		</div>
	</div>-->

    <!-- top header section -->
    <section id="top-header-area">
        <div class="container">
            <div class="row">
                <div class="header-contact-info col-lg-6 col-md-6 col-sm-7">
                    <ul>
                        <li><a href=""><i class="fa fa-phone"></i> (123) 456 789</a></li>
                        <li><a href=""><i class="fa fa-envelope"></i> Info@gardencare.com</a></li>
                    </ul>
                </div>
                <div class="header-search col-lg-6 col-md-6  col-sm-5">
                    <li class="pull-right">
                        <form action="#">
                            <input type="text" placeholder=" Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </div>
            </div>
        </div>
    </section>


    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo pull-left">
                <a href="index.html">
					<img src="img/logo.png" alt="Awesome Image"/>
				</a>
            </div>
            <div class="top-info pull-right">
                <div class="info-box">
                    <div class="text-box">
                        <p><span class="highlighted">Follow Us:</span></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="text-box">
                        <p>Tyche collins, downtown <br>victoria, Australia</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="icon-box">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="text-box">
                        <p>Mon - Sat 9.00 - 19.00 <br>Sunday Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->


    <!-- start mainmenu -->
    <nav class="mainmenu-navigation stricky">
        <div class="container mainmenu-gradient-bg">
            <div class="navigation pull-left">
                <div class="nav-header">
                    <button><i class="fa fa-bars"></i></button>
                </div>
                
                <?php wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'container' => 'div',
                        'container_class' => 'nav-footer',
                        'menu_class' => 'nav sub-menu',
                        'menu_id' => 'menu',
                        'depth' => '3',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                        
                        ));
                        ?>
                
            </div>
            <div class="search-wrapper pull-right">
                <ul class="nav">
                    <li class="search-wrapper pull-right"><a class="search" href="contact-us.html">Make an appointment</a></li>
                </ul>
            </div>
        </div>
    </nav>