<div class="category-entry-meta">
	<?php aps_scholarship_author(); ?>.
	"Review: <em><?php the_title(); ?></em> by
	<?php the_field('scholarship_review_book_author'); ?>."
	<em><?php the_field('scholarship_review_journal_title'); ?></em>
	<?php aps_scholarship_volume_and_issue(); ?>
	(<?php the_field('scholarship_date'); ?>)<?php aps_scholarship_page_numbers(); ?>.
</div>
