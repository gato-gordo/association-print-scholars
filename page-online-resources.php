<?php 
	/* Template Name: Online Resources */
	get_header(); 
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<?php the_content(); ?>

	<h1 class="online-resources-header">Friends of APS</h1>
	<div class="friend-of-aps-wrapper">
		<?php while(has_sub_field('friends_of_aps')): ?>
			<div class="friend-of-aps">
				<a href="<?php the_sub_field('friend_url') ?>" target="_blank">
					<img src="<?php the_sub_field('friend_logo') ?>" title="<?php the_sub_field('friend_name') ?>"/>
				</a>
			</div>
		<?php endwhile; ?>
	</div>

	<?php while(has_sub_field('resource_section')): ?>

		<h1 class="online-resources-header"><?php the_sub_field('resource_section_header') ?></h1>
		<?php while(has_sub_field('resource_listing')): ?>
			<a href="<?php the_sub_field('resource_listing_url') ?>" target="_blank">
				<?php the_sub_field('resource_listing_name') ?>
			</a><br/>
		<?php endwhile; ?>

	<?php endwhile; ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>