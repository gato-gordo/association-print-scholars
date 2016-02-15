<div class="category-entry-meta">
	<div>
		<?php aps_opportunities_organizer(); ?>
	</div>
	<div>
		<?php aps_opportunities_venue(); ?>
		<?php the_field('opportunities_city'); ?>, <?php aps_opportunities_state(); ?><?php the_field('opportunities_country'); ?>
	</div>
	<div>
		Abstracts due: <?php the_field('opportunities_expiration_date'); ?>
	</div>
	<div>
		<?php aps_opportunities_con_date(); ?>
	</div>

</div>