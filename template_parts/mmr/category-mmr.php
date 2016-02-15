
<?php  get_header(); ?>

<div id="sidebar" class="left-column">
	<?php get_sidebar(); ?>
</div>


<div class="right-column">
		<div class="header-explanatory-text">
		</div>

		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
					<?php 
						//Establishes whether Scholarship, News, or Opportunity
						$parent_category = MemberManageableResource::get_parent_category(get_the_id()); 
						$child_category = $parent_category::get_child_category(get_the_id());
						$class_name = nameToClassName($parent_category, $child_category);

					?>
					<div class="post">
						<div class="post-meta">
							<div class="category-entry-meta">

								<?php
									//Gets template for the approriate subcategory of Scholarship, News, or Opportunity
									$class_name::show('index'); 
									aps_mmr_abstract($parent_category, false);
			 						aps_mmr_research_interests();
				 				?>
				 				<div class="external-link"><?php aps_mmr_show_link(strtolower($parent_category)); ?></div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php get_template_part('template_parts/nav/nav', 'pagination'); ?>
		<?php else: ?>
			<?php get_template_part('template_parts/article', 'emptysearch'); ?>
		<?php endif; ?>
</div>

<?php get_footer(); ?>