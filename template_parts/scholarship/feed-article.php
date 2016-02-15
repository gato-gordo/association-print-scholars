<div>
	<?php aps_scholarship_author(); ?>. <a href="<?php the_permalink(); ?>">
	"<?php the_title(); ?>."</a>
	<em><?php the_field('scholarship_article_journal_title'); ?></em>
	<?php aps_scholarship_volume_and_issue(); ?>
	(<?php aps_scholarship_article_month(); ?><?php the_field('scholarship_date'); ?>)<?php aps_scholarship_page_numbers(); ?>.
</div>


