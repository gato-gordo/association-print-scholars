<div class="category-entry-meta">

	<div>
		<?php the_field('opportunities_workshop_venue'); ?>
	</div>
	<div>
		Organizer: <?php the_field('opportunities_workshop_organizer'); ?>
	</div>
	<div>
		<?php the_field('opportunities_city'); ?>,
		<?php aps_opportunities_state(); ?>
		<?php the_field('opportunities_country'); ?>
	</div>
	<div>
		<?php aps_opportunities_date_range('workshop'); ?>
	</div>
	<div>
		Application due: <?php the_field('opportunities_expiration_date'); ?>
	</div>

</div>