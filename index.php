<?php 

/** 
*  Fall Back for APS Theme
*  @package WordPress
*  @subpackage APS
**/

?>

<?php  get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>