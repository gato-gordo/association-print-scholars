<?php
/**
 * The Footer of the APS Theme
 *
 * @package WordPress
 * @subpackage APS
 */
	?>

		</section><!-- #main-content -->

		<footer>

			<section id="colophon">

				<div class="footer-column" id="footer-column-1">
					<p>All content c. <?php echo date("Y"); ?> Association of Print Scholars</p>
				</div>
				<div class="footer-column" id="footer-column-2">
					<p><a href="mailto:<?php the_field('info_email_address', 'option'); ?>"><?php the_field('info_email_address', 'option'); ?></a></p>
				</div>
				<div class="footer-column" id="footer-column-3">
					<p>Website by <a href="http://www.gatogordoweb.com" target="_blank">Gato Gordo Digital Creative</a></p>
				</div>

			<section>


		</footer>

	</section><!-- #content -->

	<?php wp_footer(); ?>
</body>

</html>