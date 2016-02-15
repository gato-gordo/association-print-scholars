<div class="category-actions <?php the_logged_in_class(); ?>">
	<?php wp_nav_menu( array('menu' => 'Opportunities Actions' )); ?>
	<?php echo hidden_popup_content(); ?>
</div>

<div class="category-filters">

	<div class="sidebar-box">
		<div class="filter">
			<h2>Search by Keyword</h2>
			<?php get_template_part('template_parts/search/searchform', 'opportunities'); ?>
		</div>
	</div>
	
	<div class="sidebar-box">
		<form action="<?php echo get_category_link(5); ?>" method="get">
			<p class="sidebar-explanatory-text">
				Please select any filter terms below and press the submit button to display results
			</p>
			<div class="filter category-filter" id="additive-filter">
				<h2>View by Opportunity Type</h2>
				<select multiple id="opportunities_category" class="multiSelect category-select" name="category[]">
					<?php Opportunities::getOptionsFromSubcategories(); ?>
				</select>
			</div>
			<div class="filter status-filter">
				<h2>Filter By Expiration Status</h2>
				<input type="radio" name="status" value="current" ><span class="radio-label">Current</span><br/>
				<input type="radio" name="status" value="archived" ><span class="radio-label">Archived</span><br />
				<input type="radio" name="status" value="both" ><span class="radio-label">Both</span><br/>
			</div>
			<div class="filter orderby-filter">
			<h2>Order By Date </h2>
				<h3>Expiration Date</h3>
				<input type="radio" name="orderby" value="expiration_ASC" ><span class="radio-label">Soonest to Latest</span><br/>
				<input type="radio" name="orderby" value="expiration_DESC" ><span class="radio-label">Latest to Soonest</span>
				<h3>Posted on Website Date</h3>
				<input type="radio" name="orderby" value="posted_ASC" ><span class="radio-label">Old to New</span><br/>
				<input type="radio" name="orderby" value="posted_DESC" ><span class="radio-label">New to Old</span>
			</div>
			<button type="submit" id="additive-filter-button">Submit</button>
		</form>
	</div>

</div>