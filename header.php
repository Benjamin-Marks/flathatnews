<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flathatnews
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script type="text/javascript" href="<?php echo get_template_directory_uri();?>/js/scrolleffect.js"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/fonts/icomoon.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" />
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fhnews' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="mobile-menu" role="navigation">
			<ul class="active">
				<li><a href="http://flathatnews.com/">Home</a></li>
				<li><a href="http://flathatnews.com/category/news/">News</a></li>
				<li><a href="http://flathatnews.com/category/variety/">Variety</a></li>
				<li><a href="http://flathatnews.com/category/sports/">Sports</a></li>
				<li><a href="http://flathatnews.com/category/blogs/">Blogs</a></li>
				<li><a href="http://flathatnews.com/category/opinions/">Opinions</a></li>
			</ul>
			<a class="toggle-nav" href="#">&#9776;</a>
			<form class="search-form">
				<input type="text" placeholder="search for articles">
				<button>Search</button>
			</form>
		</nav>

  		<nav class="desktop-menu" role="navigation">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Opinions</a></li>
					<li><a href="#">Variety</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Videos</a></li>
				
				 	<li>
        			 	<div class="container-1">
        			 	<span class="icon"><i class="fa fa-search"></i></span>
             				<input type="search" id="search" placeholder="Search..." />
              				  
              				</div></li>
				</ul>
   
		</nav>

		<script type="text/javascript">
			//Script for loading the mobile dropdown menu
			jQuery(document).ready(function() {
				jQuery('.toggle-nav').click(function(e) {
					jQuery(this).toggleClass('active');
					jQuery('.mobile-menu ul').toggleClass('active');
	 				e.preventDefault();
				});
			});
		</script>
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
