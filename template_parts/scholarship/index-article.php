<div class="category-label">
	<span class="text-left">Article</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	"<?php the_title(); ?>."
	<em><?php the_field('scholarship_article_journal_title'); ?></em>
	<?php aps_scholarship_volume_and_issue(); ?>
	(<?php aps_scholarship_article_month(); ?><?php the_field('scholarship_date'); ?>)<?php aps_scholarship_page_numbers(); ?>.
</div>



