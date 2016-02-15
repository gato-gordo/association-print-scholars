<div class="category-entry-meta">

	<div>
		<?php aps_opportunities_exhibition_title(); ?>
		<?php the_field('opportunities_curatorial_opportunity_venue'); ?>
	</div>
	<div>
		<?php the_field('opportunities_city'); ?>,
		<?php aps_opportunities_state(); ?>
		<?php the_field('opportunities_country'); ?>
	</div>
	<div>
		<?php aps_opportunities_curatorial_dates(); ?>
	</div>
	<div>
		Due date: <?php the_field('opportunities_expiration_date'); ?>
	</div>

</div>