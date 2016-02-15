<?php 

/** 
*  Home Page
*  @package WordPress
*  @subpackage APS
**/

?>

<?php  get_header(); ?>

<section id="mission-statement">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; endif; ?>

</section>

<section id="feeds">
	<div id="feed-row">

		<?php $count = 1; while(has_sub_field('feature_box')):  ?>
			<div class="feature-box" id="feature-box-<?php echo $count; ?>">
				<?php if(get_sub_field('feed')): ?>
				<?php 
					$category_id = get_sub_field('feed_category');
					$args = array('cat' => $category_id, 'posts_per_page' => 3);
					$feed_query = new WP_Query($args); 
				?>
					<h1>
						<a href="<?php echo get_category_link($category_id); ?>">
							<?php the_sub_field('feature_box_heading'); ?>
						</a>
					</h1>
					<?php 
						if($feed_query->have_posts()): while($feed_query->have_posts()): $feed_query->the_post();
							$parent_category = get_cat_name( $category_id ) ;
							$child_category = $parent_category::get_child_category(get_the_id());
							$class_name = nameToClassName($parent_category, $child_category);
							echo '<div class="feature-box-content">';
							$class_name::show('feed');
							echo '</div>';
						endwhile; endif; wp_reset_query();
					?>
				<?php else: ?>
					<h1>
						<?php the_sub_field('feature_box_heading'); ?>
					</h1>
					<div class="feature-box-content">
					<?php the_sub_field('feature_box_content'); ?>
					</div>
				<?php endif; ?>
			</div>

		<?php $count += 1; endwhile; ?>

	</div>
</section>

<?php if(!is_user_logged_in()): ?>
	<!-- SIGN UP BUTTON -->
	<section class="sign-up sign-up-footer">
		<a href="<?php the_field('join_us', 'option'); ?>">Join APS</a>
	</section>
<?php endif; ?>

<?php get_footer(); ?>