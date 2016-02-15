<div class="category-label">
	<span class="text-left">Dissertation or MA Thesis</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	"<?php the_title(); ?>."
	<?php the_field('scholarship_dissertation_type'); ?>,
	<?php the_field('scholarship_dissertation_university'); ?>,
	<?php the_field('scholarship_date'); ?>.
</div>