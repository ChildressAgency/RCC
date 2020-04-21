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