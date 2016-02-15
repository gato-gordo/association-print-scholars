
<?php  get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<?php
			//Determine whether News, Opportunities, or Scholarship
			$post_id = get_the_id();
			$parent_category = MemberManageableResource::get_parent_category($post_id);
			$category_id = get_cat_id($parent_category);
			$child_category = $parent_category::get_child_category($post_id);
			$class_name = nameToClassName($parent_category, $child_category);
		?>

		<div class="post">

			<?php aps_mmr_back_link($parent_category, $category_id); ?>

			<h2><?php the_title(); ?></h2>

			<div class="post-meta">
				<?php  $class_name::show('single');	?>
		 	</div>
		 	<?php aps_mmr_abstract($parent_category, true); ?>

		 	<div class="external-link"><?php aps_mmr_show_link(strtolower($parent_category)); ?></div>

		 	<?php aps_mmr_research_interests(); ?>

		 	<?php aps_mmr_comments(); ?>
		</div>
		
<?php endwhile; endif; ?>
<?php get_footer(); ?>