<?php
/**
 * The header for RCC theme
 *
 */
?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dawning+of+a+New+Day&family=Lato:ital@0;1&family=Lexend+Deca&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php wp_head();?>
</head>

<body <?php body_class();?>>
  <div id="page" class="site">
    <header class="" role="banner">
      <div class="site-top-header">
            <a class="navbar-brand" href="#"><i class="far fa-clock"></i>  Bussiness Hours</a>
            <a class="navbar-brand" href="#"><i class="fas fa-phone-alt"></i>  Call:540.273.6685</a>
            <div class="right-side">
              <a class="appointment" href="#"><i class="fas fa-calendar-check"></i></a>
              <a class="appointment" href="https://dev.childressagency.com/rcc/contact/">Schedule appointment</a>
              <ul class="social-icons">
                <li><a class="navbar-brand" href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a class="navbar-brand" href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a class="navbar-brand" href="#"><i class="fab fa-twitter-square"></i></a></li>
              </ul>
            </div>

            </button>
         </div><!--navbar-wrapper-->

         	<!--  The Navbar Area  -->
<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

  <h2 id="main-nav-label" class="sr-only">
    <?php esc_html_e('Main Navigation', 'understrap');?>
  </h2>

  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- The WordPress Menu goes here -->
    <?php wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navbarNavDropdown',
        'menu_class' => 'navbar-nav ml-auto',
        'fallback_cb' => '',
        'menu_id' => 'main-menu',
        'depth' => 2,
        'walker' => new RCC_WP_Bootstrap_Navwalker(),
    )
);?>
  </div><!-- .container -->

</nav><!-- .site-navigation -->
    <?php if( get_field('hero_background_image') ): ?>
        <div class="hero">
            <div class="hero-bg-image" style="background-image: url(<?php the_field('hero_background_image'); ?>)"></div>
            <?php if ( is_front_page() ): ?>
				<img class="hero-logo" src="<?php bloginfo('template_url');?>/images/logo.svg"/>
            <?php endif; ?>
            
            <?php if ( !is_front_page() ): ?>
				<div class="hero-text"> 
    				<?php if( get_field('hero_caption') ): ?>
                        <h1><?php the_field('hero_caption'); ?></h1>
                    <?php endif; ?>
                    <?php if( get_field('hero_paragraph') ): ?>
                        <h2><?php the_field('hero_paragraph'); ?></h2>
                    <?php endif; ?>
                </div>  
            <?php endif; ?>
            
            
        </div>
    <?php endif; ?>
     
     </header>