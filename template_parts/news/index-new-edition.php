

	<div class="category-label">
		<span class="text-left">New Edition</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_news_author(); ?></span>
	</div>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div>
		<?php the_field('news_new_edition_artist'); ?>,
		<?php the_title(); ?> (<?php the_field('news_new_edition_date'); ?>),
		<?php the_field('news_new_edition_medium'); ?>,
		<?php the_field('news_new_edition_dimensions'); ?><?php aps_news_publisher(); ?>.
	</div>