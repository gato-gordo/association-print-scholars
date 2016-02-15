
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_opportunities_exhibition_organizer(); ?>
</div>
<div>
	<?php the_field('opportunities_exhibition_venue'); ?>
</div>
<div>
	<?php the_field('opportunities_city'); ?>,
	<?php aps_opportunities_state(); ?>
	<?php the_field('opportunities_country'); ?>
</div>
<div>
	<?php the_field('opportunities_exhibition_start_date'); ?> to
	<?php the_field('opportunities_exhibition_end_date'); ?>
</div>
<div>
	Submissions due: <?php the_field('opportunities_expiration_date'); ?>
</div>