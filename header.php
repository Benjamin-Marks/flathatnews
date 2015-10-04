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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
	$(document).ready(function() {
		$('.toggle-nav').click(function(e) {
			$(this).toggleClass('active');
			$('.menu ul').toggleClass('active');
	 
			e.preventDefault();
		});
	});
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<span class="icon-twitter">Twitter</span>
    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" />
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fhnews' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img src=<?php echo "http://wmpeople.wm.edu/img/theme3/theme3.jpg"?>>
			<?php if ( is_front_page() && is_home() ) : ?>
				
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- MENU INFORMATION WILL GO HERE -->
			<nav class="mobile-menu">
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
			



			<?php /*

			IGNORE ME 

			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fhnews' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			*/?>
		</nav><!-- #site-navigation -->
		<html>
			<body>
  			<div class="nav"></div>
			 <div class="container"></div>
			<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Opinions</a></li>
			<li><a href="#">Variety</a></li>
			<li><a href="#">Sports</a></li>
			<li><a href="#">Videos</a></li>
			</ul>
			<form name="form1" method="post" action="searchresults.php">
			<input name="search" type="text" size="40" maxlength="100" />
			<input type="submit" name="submit" value="Search" />
			</form> 
			</body>
			</html>
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
