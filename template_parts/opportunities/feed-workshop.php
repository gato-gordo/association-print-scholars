<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php the_field('opportunities_workshop_venue'); ?><br/>
</div>
<div>
	Organizer: <?php the_field('opportunities_workshop_organizer'); ?><br/>
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