

<div class="category-label">
	<span class="text-left">Awards or Prizes</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>
<div class="category-sub-label">
	<span class="text-left">Posted by: <?php aps_news_author(); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
<?php the_field('news_awards_or_prizes_awarding_institution'); ?>
</div>
<div>
Winner: <?php the_field('news_awards_or_prizes_award_winner'); ?>
</div>
<div>
	<?php the_field('news_city'); ?>,
	<?php aps_news_state(); ?>
	<?php the_field('news_country'); ?>
</div>