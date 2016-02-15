

<div class="category-label">
	<span class="text-left">Art Market News</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>
<div class="category-sub-label">
	<span class="text-left">Posted by: <?php aps_news_author(); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php the_field('news_art_market_institution_name'); ?>
<div>
<div>
	<?php the_field('news_city'); ?>,
	<?php aps_news_state(); ?>
	<?php the_field('news_country'); ?>
<div>
<div>
	<?php the_field('news_art_market_date'); ?>
	<?php aps_news_time(); ?>
<div>