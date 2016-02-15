<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php the_field('opportunities_job_employer'); ?>,
	<?php the_field('opportunities_city'); ?>,
	<?php aps_opportunities_state(); ?>
	<?php the_field('opportunities_country'); ?>	
</div>
<div>
	Applications due: <?php the_field('opportunities_expiration_date'); ?>
</div>