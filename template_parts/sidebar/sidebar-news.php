<div class="category-actions <?php the_logged_in_class(); ?>">
	<?php wp_nav_menu( array('menu' => 'News Actions' )); ?>
	<?php echo hidden_popup_content(); ?>
</div>

<div class="category-filters">

	<div class="sidebar-box">
		<div class="filter">
			<h2>Search by Keyword</h2>
			<?php get_template_part('template_parts/search/searchform', 'news'); ?>
		</div>
	</div>

	<div class="sidebar-box">
		<form action="<?php echo get_category_link(3); ?>" method="get">
			<p class="sidebar-explanatory-text">
				Please select any filter terms below and press the submit button to display results
			</p>
			<div class="filter category-filter" id="additive-filter">
				<h2>View by Type of News</h2>
				<select multiple id="news_category" size="8" class="multiSelect category-select" name="category[]">
					<?php News::getOptionsFromSubcategories(); ?>
				</select>
			</div>
			<div class="filter orderby-filter">
			<h2>Order By Posted Date </h2>
				<input type="radio" name="orderby" value="posted_ASC" ><span class="radio-label">Old to New</span><br/>
				<input type="radio" name="orderby" value="posted_DESC" ><span class="radio-label">New to Old</span>
			</div>
			<button type="submit" id="additive-filter-button">Submit</button>
		</form>
	</div>

</div>