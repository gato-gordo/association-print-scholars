<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_news_organizer('conference'); ?>
</div>
<div>
	<?php aps_news_venue('conference'); ?>
	<?php the_field('news_city'); ?>,
	<?php aps_news_state(); ?>
	<?php the_field('news_country'); ?>
<div>
</div>
	<?php the_field('news_conference_start_date'); ?><?php aps_news_end_date(); ?>,
	<?php the_field('news_conference_time'); ?>
</div>