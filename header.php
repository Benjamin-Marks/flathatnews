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

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/fonts/icomoon.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/scrolleffect.js"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" />
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fhnews' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav class="mobile-menu" role="navigation">
			<ul class = "mobile-headers">
				<li id="mobile-toggle">
					<a class="toggle-nav icon-menu" href="#"></a>
				</li>
				<li id="mobile-search" class="icon-search" ></li>
			</ul>
			<form class="search-form active">
				<input type="text" placeholder="search for articles" />
				<button>Search</button>
			</form>
			<ul class="dropdown active">
				<li><a href="http://flathatnews.com/">Home</a></li>
				<li><a href="http://flathatnews.com/category/news/">News</a></li>
				<li><a href="http://flathatnews.com/category/variety/">Variety</a></li>
				<li><a href="http://flathatnews.com/category/sports/">Sports</a></li>
				<li><a href="http://flathatnews.com/category/blogs/">Blogs</a></li>
				<li><a href="http://flathatnews.com/category/opinions/">Opinions</a></li>
			</ul>

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
        				<div class="container">
    <form class="searchbox icon-search">
        <input type="search" placeholder="Search" name="search" class="searchbox-input icon-search" onkeyup="buttonUp();" required>
        <input type="submit" class="icon-search">
        <span class="searchbox-icon icon-search"></span>
    </form>
</div>

		<script type="text/javascript">
			//Script for loading the mobile dropdown menu
			jQuery(document).ready(function() {
				jQuery('.toggle-nav').click(function(e) {
					jQuery(this).toggleClass('active');
					jQuery('.mobile-menu .dropdown').toggleClass('active');
	 				e.preventDefault();
				});
			});
		</script>
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
