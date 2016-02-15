<div class="category-label">
	<span class="text-left">Review</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	"Review: <em><?php the_title(); ?></em> by
	<?php the_field('scholarship_review_book_author'); ?>."
	<em><?php the_field('scholarship_review_journal_title'); ?></em>
	<?php aps_scholarship_volume_and_issue(); ?>
	(<?php the_field('scholarship_date'); ?>)<?php aps_scholarship_page_numbers(); ?>.
</div>
