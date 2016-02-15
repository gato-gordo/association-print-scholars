<?php aps_scholarship_author(); ?>.
"Review: <em><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></em> by
<?php the_field('scholarship_review_book_author'); ?>."
<em><?php the_field('scholarship_review_journal_title'); ?></em>
<?php aps_scholarship_volume_and_issue(); ?>
(<?php the_field('scholarship_date'); ?>)<?php aps_scholarship_page_numbers(); ?>.
