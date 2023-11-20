<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CO/LAB_Agency_Partner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 


?>
<div class="start_theme">

<section class="header">



<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <h2 class="logos-colab clw">
            COLAB.<span class="hlf-lgo">AGENCY</span>
            </h2>
        <!-- <img src="<?php echo get_field('site_logo','option'); ?>" alt="" class="header-logo"> -->
	    </a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-sharp fa-solid fa-bars"></i></span>
        </button>
  <!-- Collect the nav links from WordPress -->
  <div class="collapse navbar-collapse" id="bootstrap-nav-collapse">         
   
        <!-- The WordPress Custom Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'header-menu', // The name of the registered menu location                   
                    'menu_class'  => 'navbar-nav mr-auto',
                    'walker'  => new WP_Bootstrap_Mega_Navwalker()
                )
            );
            ?>

            <div class="right-header">
                <div class="toggle">
                     <label class="switch" >
                            <input type="checkbox" id="theme-toggle">
                            <span class="slider">
                            <svg class="slider-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation"><path fill="none" d="m4 16.5 8 8 16-16"></path></svg> 
                            </span>
                        </label>
                </div>

                <a href="" class="nav-btn"> LET'S BE PARTNER </a>
            </div>
        </div>
    </div>
</nav>
</section>