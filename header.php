<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Filtrabem
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="<?php bloginfo('template_directory'); ?>/assets/img/icons/favicon.ico" rel="icon">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header id="site-header" class="header">
	  <div class="container">
      <div class="header-logo">
        <a href="<?php echo esc_html(home_url('/')); ?>" title="FiltraBem | Home"><img class="img-block" src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo.png" alt="FiltrabBem Logo"></a>
      </div>
      <?php
        // Argumentos para o menu principal
        $menu_args = array(
          'theme_location' => 'header',
          'container' => 'nav',
          'container_class' => 'main-nav',
          'menu_class' => 'nav-links clearfix'
        );
        
        // Gerando menu
        wp_nav_menu( $menu_args );
      ?>
      <div class="nav-btn-box">
        <button class="nav-btn" id="js-nav-btn">
          <span><!-- menu button bar --></span>
          <span><!-- menu button bar --></span>
          <span><!-- menu button bar --></span>
        </button>
      </div>
    </div>
  </header>
