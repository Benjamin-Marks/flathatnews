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
<style>
	.toggle-nav {
		display:none;
	}

	@media screen and (max-width: 700px) {
	
		.menu {
			position:relative;
			display:inline-block;
		}

		.menu ul.active {
			display:none;
		}

		.menu ul:after {
			width:0px;
			height:0px;
			position:absolute;
			top:0%
			left:22px;
			content:'';
			transform:translate(0%, -100%);
		}

		.menu a {
			display:block;
		}

		.toggle-nav {
			padding:20px;
			float:left;
			display:inline-block;
			box-shadow:0px 1px 1px rgba(0,0,0,0.15);
			border-radius:3px;
			background:#303030;
			text-shadow:0px 1px 0px rgba(0,0,0,0.5);
			color:#777;
			font-size:20px;
			transition:color linear 0.15s;
		}
		
		.toggle-nav:hover, .toggle-nav.active {
			text-decoration:none;
			color:#66a992;
		}
		
		.search-form {
			margin:12px 0px 0px 20px;
			float:left;
		}
 
		.search-form input {
			box-shadow:-1px 1px 2px rgba(0,0,0,0.1);
		}
	}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<span class="icon-twitter">Twitter</span>
    <img src=file:///C:/Users/Andrew/Documents/Websites/local.wordpress.dev/wp-content/themes/flathatnews/img/logo.png />
<h1>TEST TEXT</h1>
<h1>SO MUCH TEST TEXT</h1>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fhnews' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img src=<?php echo "http://wmpeople.wm.edu/img/theme3/theme3.jpg"?>>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h2>Freedom of the press!</h2>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sherlock.jpeg" alt="" width="" height="" />
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!-- MENU INFORMATION WILL GO HERE -->
			<nav class="menu">
				<ul class="active">
					<li><a href="http://flathatnews.com/">Home</a></li>
					<li><a href="http://flathatnews.com/category/news/">News</a></li>
					<li><a href="http://flathatnews.com/category/variety/">Variety</a></li>
					<li><a href="http://flathatnews.com/category/sports/">Sports</a></li>
					<li><a href="http://flathatnews.com/category/blogs/">Blogs</a></li>
					<li><a href="http://flathatnews.com/category/opinions/">Opinions</a></li>
				</ul>
				
				<a class="toggle-nav" href="">&#9776;</a>
				
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
