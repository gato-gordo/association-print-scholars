<div class="category-label">
	<span class="text-left">Conference Paper</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>. "<?php the_title(); ?>," <?php the_field('scholarship_conference_paper_conference_name'); ?> (<?php the_field('scholarship_date'); ?>).
</div>