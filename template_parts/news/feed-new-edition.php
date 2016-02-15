<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php the_field('news_new_edition_artist'); ?>,
	<?php the_title(); ?> (<?php the_field('news_new_edition_date'); ?>),
	<?php the_field('news_new_edition_medium'); ?>,
	<?php the_field('news_new_edition_dimensions'); ?><?php aps_news_publisher(); ?>.
</div>