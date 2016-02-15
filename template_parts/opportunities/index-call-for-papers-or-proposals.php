
	<div class="category-label">
		<span class="text-left">Call for Papers or Proposals</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_opportunities_author(); ?></span>
		<span class="text-right">Expires: <?php the_field('opportunities_expiration_date'); ?></span>
	</div>

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
		Abstracts due: <?php the_field('opportunities_expiration_date'); ?>
	</div>
	<div>
		<?php aps_opportunities_con_date(); ?>
	</div>