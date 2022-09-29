<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devgrocery
 */

?>

	<footer id="colophon" class="site-footer">

		<h2>&copy; <?php the_date('Y'); ?> - <?php bloginfo('name'); ?></h2>	

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
