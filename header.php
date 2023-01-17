<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body <?php body_class(); ?> >


  <header>

    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo( 'template_url' );?>/img/logo-bw.svg" alt="Black & White" class="imagen-menu"></a>

    <nav>
     <?php wp_nav_menu( array( 
                      'theme_location' => 'topmenu', 
                      'container' => 'false', 
                      'menu_class'=>'menu-principal') 
                      ); ?>
    </nav>

  </header>
  
  <main>