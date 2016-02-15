<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_opportunities_artist_residency_organizer('artist_residency'); ?>
</div>
<div>
	<?php the_field('opportunities_artist_residency_venue'); ?><br/>
</div>
<div>
	<?php the_field('opportunities_city'); ?>,
	<?php aps_opportunities_state(); ?>
	<?php the_field('opportunities_country'); ?><br/>
</div>
<div>
	<?php aps_opportunities_date_range('artist_residency'); ?>
</div>
<div>
	Application due: <?php the_field('opportunities_expiration_date'); ?>
</div>