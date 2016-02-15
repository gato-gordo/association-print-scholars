<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php the_field('news_art_market_institution_name'); ?>
</div>
<div>
	<?php the_field('news_city'); ?>,
	<?php aps_news_state(); ?>
	<?php the_field('news_country'); ?>
</div>
<div>
	<?php the_field('news_art_market_date'); ?>
	<?php aps_news_time(); ?>
</div>