

	<div class="category-label">
		<span class="text-left">Exhibition Information</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_news_author(); ?></span>
	</div>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php if (get_field('news_exhibition_working_title') == 'Yes'):
		echo '(Working title)';
	endif; ?></a></h2>

	<div>
		<?php aps_news_exhibition_curators(); ?>
	</div>
	<div>
		<?php the_field('news_exhibition_venue_name'); ?>,
		<?php the_field('news_city'); ?>,
		<?php aps_news_state(); ?>
		<?php the_field('news_country'); ?>.
		<?php the_field('news_exhibition_start_date'); ?> -
		<?php the_field('news_exhibition_end_date'); ?>.
	</div>
	<div>
		<?php aps_news_exhibition_artists(); ?>
	</div>