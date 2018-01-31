<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package croutdoortours
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=ABeeZee|Open+Sans:400,300,700|Roboto+Slab' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo-fixed"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" /></a>
       <header class="header">
            <div class="header-container">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" /></a>
               
                <?php
				wp_nav_menu(array(
					'theme_location' => 'header',
					'menu_id' => 'header-menu',
					'container' => 'nav',
					'container_class' => 'header-menu',
					'container_id' => '',
					'menu_class' => 'header-menu-ul',
				));
				?>

                <div class="header-social">
                    <a href="#" class="header-social-link"><i class="icon-facebook"></i></a>
                    <a href="#" class="header-social-link"><i class="icon-google-plus"></i></a>
                    <a href="#" class="header-social-link"><i class="icon-youtube"></i></a>
                </div>
                
                <button id="btn-menu" class="header-btn-menu">
                    <i class="icon-menu"></i>
                </button>
                 
                
            </div>   
            
        </header>

