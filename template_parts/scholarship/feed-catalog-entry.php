<div>
	<?php aps_scholarship_author(); ?>. <a href="<?php the_permalink(); ?>">
	"<?php the_title(); ?>."</a>
	<em><?php the_field('scholarship_catalog_entry_exhibition_catalog_title'); ?></em>,
	<?php the_field('scholarship_catalog_entry_publisher'); ?>:
	<?php the_field('scholarship_catalog_entry_place_of_publication'); ?>,
	<?php the_field('scholarship_date'); ?>.
</div>


