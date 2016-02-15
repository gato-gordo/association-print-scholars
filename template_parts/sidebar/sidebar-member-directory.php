<div id="members-dir-actions" class="category-filters">

	<div class="number-members-filter filter">
		<h2>Members Per Page</h2>
		<form action="" method="get">
			<select name="Members Per Page">
				<option disabled selected> -- select an option -- </option>
				<option value="25">25</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="all">All</option>
			</select>
			<button type="submit">Submit</button>
		</form>
	</div>
	<div class="last-name-search filter">
		<h2>Find by last name</h2>
		<div class="last-name-search-list">
		<?php aps_bp_last_name_nav(); ?>
		</div>
	</div>
	<div class="keyword-search filter">
		<h2>Search by name/keyword</h2>
		<div id="members-dir-search" class="dir-search" role="search">
			<?php bp_directory_members_search_form(); ?>
		</div><!-- #members-dir-search -->
	</div>

</div>