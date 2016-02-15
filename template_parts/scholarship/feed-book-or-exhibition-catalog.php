<div>
	<?php aps_scholarship_author(); ?>.
	<em><a href="<?php the_permalink(); ?>">
	<?php the_title(); ?>.</a></em>
	<?php the_field('scholarship_book_place'); ?>:
	<?php the_field('scholarship_book_publisher'); ?>,
	<?php the_field('scholarship_date'); ?>.
</div>
