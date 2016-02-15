<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_opportunities_organizer(); ?>
</div>
<div>
	<?php aps_opportunities_venue(); ?>
	<?php the_field('opportunities_city'); ?>,
	<?php aps_opportunities_state(); ?>
	<?php the_field('opportunities_country'); ?>
</div>
<div>
	<?php the_title(); ?>
</div>
<div>
	Abstracts due: <?php the_field('opportunities_expiration_date'); ?>
</div>
<div>
	<?php aps_opportunities_con_date(); ?>
</div>