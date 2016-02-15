<div class="category-entry-meta">

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

</div>