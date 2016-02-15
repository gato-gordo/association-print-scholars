<?php

/** 
* Template Name: Manage
**/

?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php if(is_user_logged_in()): ?>

	<?php get_template_part('template_parts/manage/loop', 'created'); ?>


	<?php if($category == "Scholarship"): ?>

		<?php get_template_part('template_parts/manage/loop', 'tagged'); ?>

	<?php endif; ?>

<?php else: ?>

	<p>This page is restriced to APS members only.  <a href="<?php the_field('join_us', 'option'); ?>">Join APS</a> now. </p>

<?php endif; ?>

<?php get_footer(); ?>