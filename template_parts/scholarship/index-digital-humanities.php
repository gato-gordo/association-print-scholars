<div class="category-label">
	<span class="text-left">Digital Humanities</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	<em><?php the_title(); ?></em>.
	<?php the_field('scholarship_digital_humanities_medium'); ?>,
	<?php the_field('scholarship_date'); ?>.
</div>