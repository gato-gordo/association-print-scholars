<div class="category-entry-meta">

	<div>
		<?php aps_news_exhibition_curators(); ?>
	</div>
	<div>
		<?php the_field('news_exhibition_venue_name'); ?>,
		<?php the_field('news_city'); ?>,
		<?php aps_news_state(); ?>
		<?php the_field('news_country'); ?>.
		<?php the_field('news_exhibition_start_date'); ?>-
		<?php the_field('news_exhibition_end_date'); ?>.
	</div>
	<div>
		<?php aps_news_exhibition_artists(); ?>
	</div>
	
</div>