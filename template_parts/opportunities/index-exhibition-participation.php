
	<div class="category-label">
		<span class="text-left">Exhibition Participation</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_opportunities_author(); ?></span>
		<span class="text-right">Expires: <?php the_field('opportunities_expiration_date'); ?></span>
	</div>

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