
	<div class="category-label">
		<span class="text-left">Curatorial Opportunity</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_opportunities_author(); ?></span>
		<span class="text-right">Expires: <?php the_field('opportunities_expiration_date'); ?></span>
	</div>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div>
		<?php aps_opportunities_exhibition_title(); ?>
	</div>
	<div>
		<?php the_field('opportunities_curatorial_opportunity_venue'); ?>
	</div>
	<div>
		<?php the_field('opportunities_city'); ?>,
		<?php aps_opportunities_state(); ?>
		<?php the_field('opportunities_country'); ?>
	</div>
	<div>
		<?php aps_opportunities_curatorial_dates(); ?>
	</div>
	<div>
		Due date: <?php the_field('opportunities_expiration_date'); ?>
	</div>