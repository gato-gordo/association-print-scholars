<div class="category-label">
	<span class="text-left">Catalog Entry</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	"<?php the_title(); ?>."
	<em><?php the_field('scholarship_catalog_entry_exhibition_catalog_title'); ?></em>,
	<?php the_field('scholarship_catalog_entry_publisher'); ?>:
	<?php the_field('scholarship_catalog_entry_place_of_publication'); ?>,
	<?php the_field('scholarship_date'); ?>.
</div>


