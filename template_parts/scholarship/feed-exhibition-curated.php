<div>
	<?php aps_scholarship_author(); ?>.
	<em><a href="<?php the_permalink(); ?>">
	<?php the_title(); ?>.</a></em>
	<?php the_field('scholarship_exhibition_curated_exhibition_venue'); ?>:
	<?php the_field('scholarship_exhibition_curated_city'); ?>,
	<?php aps_scholarship_state(); ?>
	<?php the_field('scholarship_exhibition_curated_country'); ?>.
</div>
<div>
	<?php the_field('scholarship_date'); ?>
</div>