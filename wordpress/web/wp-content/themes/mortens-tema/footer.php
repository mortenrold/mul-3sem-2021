<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mortens-tema
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mortens-tema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mortens-tema' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mortens-tema' ), 'mortens-tema', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
			<p>&copy; Interfacedesign.net</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
