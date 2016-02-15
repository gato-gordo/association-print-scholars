<div class="category-actions <?php the_logged_in_class(); ?>">
	<?php wp_nav_menu( array('menu' => 'Scholarship Actions' )); ?>
	<?php echo hidden_popup_content(); ?>
</div>

<div class="category-filters">

	<div class="sidebar-box">
		<div class="filter">
			<h2>Search by Keyword</h2>
			<?php get_template_part('template_parts/search/searchform', 'scholarship'); ?>
		</div>
	</div>

	<div class="sidebar-box">
		<form method="get" action="<?php echo get_category_link(4); ?>">
			<p class="sidebar-explanatory-text">
				Please select any filter terms below and press the submit button to display results
			</p>
			<div class="filter category-filter" id="additive-filter">
				<h2>View by Scholarship Type</h2>
				<select multiple id="scholarship_category" class="multiSelect category-select" name="category[]">
					<?php Scholarship::getOptionsFromSubcategories(); ?>
				</select>
			</div>
			<div class="filter status-filter">
				<h2>Filter By Publication Status</h2>
				<input type="radio" name="status" value="complete" ><span class="radio-label">Complete</span><br/>
				<input type="radio" name="status" value="forthcoming" ><span class="radio-label">Forthcoming</span><br />
				<input type="radio" name="status" value="both" ><span class="radio-label">Both</span><br/>
			</div>
			<div class="filter orderby-filter">
			<h2>Order By Date </h2>
				<h3>Publication Date</h3>
				<input type="radio" name="orderby" value="pubdate_ASC" ><span class="radio-label">Old to New</span><br/>
				<input type="radio" name="orderby" value="pubdate_DESC" ><span class="radio-label">New to Old</span>
				<h3>Posted on Website Date</h3>
				<input type="radio" name="orderby" value="posted_ASC" ><span class="radio-label">Old to New</span><br/>
				<input type="radio" name="orderby" value="posted_DESC" ><span class="radio-label">New to Old</span>
			</div>
			<button type="submit" id="additive-filter-button">Submit</button>
		</form>
	</div>

</div> 