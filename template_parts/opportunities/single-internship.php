<div class="category-entry-meta">

	<div>
		<?php the_field('opportunities_internship_employer'); ?>,
		<?php the_field('opportunities_city'); ?>,
		<?php aps_opportunities_state(); ?>
		<?php the_field('opportunities_country'); ?>
	</div>
	<div>
		Applications due: <?php the_field('opportunities_expiration_date'); ?>
	</div>

</div>