<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flathatnews
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fhnews' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fhnews' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<img src="<?php echo $https://runningbreezy.files.wordpress.com/2013/12/sherlock.jpeg;?>">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fhnews' ), 'fhnews', '<a href="https://github.com/benjamin-marks" rel="designer">Benjamin Marks</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
