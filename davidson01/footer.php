<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package davidson01
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'davidson01_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="row align-items-center">
						<div class="site-info col-md-4 text-nowrap">							

						<p>&copy; <?php echo date("Y"); ?> <a href="http://www.candicedavidson.com">Candice Davidson</a></p>
						</div><!-- .site-info -->

						<div class="attrib col">
							<p>Attributions: Marble and Peonies Desktop Collection Stock Photography by <a href="https://www.hercreativestudio.com">Her Creative Studio</a></p>
							<p>Cloud Computing / Settings icons by Vectors Market, Coding icon by Freepik | <a href="http://www.flaticon.com">Flaticon</a></p>
						</div>
					</div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

