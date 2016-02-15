<div class="category-entry-meta">

	<div>
		<?php aps_news_organizer('conference'); ?>
	</div>
	<div>
		<?php aps_news_venue('conference'); ?>
		<?php the_field('news_city'); ?>,
		<?php aps_news_state(); ?>
		<?php the_field('news_country'); ?>
	</div>
	<div>
		<?php the_field('news_conference_start_date'); ?><?php aps_news_end_date(); ?>,
		<?php the_field('news_conference_time'); ?>
	</div>

</div>