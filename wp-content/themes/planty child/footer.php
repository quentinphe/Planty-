<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<p style="text-align: center;"><a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>">Mentions légales</a></p>
		</div>
	</footer>

<?php 
	
?>
	</div><!-- #page -->
<?php  
	wp_footer(); 
?>
	</body>
</html>
