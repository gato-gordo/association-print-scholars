<div class="category-filters">

	<div class="filter">
		<h2>Search by Keyword</h2>
		<?php get_template_part('template_parts/search/searchform', 'print'); ?>
	</div>

	<div class="filter">
		<h2>View by Location</h2>
		<form method="get" action="<?php echo get_category_link(6); ?>">
			<input type="text" name="city" placeholder="City">
			<button type="submit">Submit</button>
		</form>
		<form method="get" action="<?php echo get_category_link(6); ?>" id="state-filter">
			<input type="text" name="state" placeholder="State/Province">
			<button type="submit">Submit</button>
		</form>
		<form method="get" action="<?php echo get_category_link(6); ?>" id="country-filter">
			<input type="text" name="country" placeholder="Country">
			<button type="submit">Submit</button>
		</form>
	</div>

	<div class="filter orderby-filter ">
		<form method="get" action="<?php echo get_category_link(6); ?>">
			<h2>Order By </h2>
				<h3>City Name</h3>
				<input type="radio" name="orderby" value="city_ASC" > A - Z <br/>
				<input type="radio" name="orderby" value="city_DESC" > Z - A
				<h3>Posted on Website Date</h3>
				<input type="radio" name="orderby" value="posted_ASC" >Old to New<br/>
				<input type="radio" name="orderby" value="posted_DESC" >
				New to Old
			</div>
			<button type="submit" id="additive-filter-button">Submit</button>
		</form>
	</div>

</div>