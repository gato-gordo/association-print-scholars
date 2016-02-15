<div class="category-entry-meta">

	<div>
		<?php the_field('news_lecture_lecturer'); ?>
	</div>
	<div>
		<?php aps_news_lecture_organizers(); ?>
		<?php aps_news_venue('lecture'); ?>
		<?php the_field('news_city'); ?>,
		<?php aps_news_state(); ?>
		<?php the_field('news_country'); ?>
	</div>
	<div>
		<?php the_field('news_lecture_date'); ?>,
		<?php the_field('news_lecture_time'); ?>
	</div>

</div>