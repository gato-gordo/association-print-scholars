<?php 

/** 
*  Fall Back for APS Theme
*  @package WordPress
*  @subpackage APS
**/

?>

<?php  get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<div class="print-room-entry">

		<!-- LINK BACK TO CATEGORY -->
		<a href="<?php echo get_category_link(get_cat_id('Print')); ?>">Back to Print Directory</a>

		<h2><?php the_field('print_institution_name'); ?></h2>
		<p class="city"><?php the_field('print_city'); ?></p>
		<?php get_template_part('template_parts/print/article', 'print'); ?>
		<p>
		This page was last updated <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>.  Are you affiliated with this institution? Please <a href="mailto:info@printscholars.org?Subject=Print%20Directory%20Correction" target="_top">contact us</a> if you have corrections or updates to this listing.
		</p>
	</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>