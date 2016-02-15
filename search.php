<?php get_header(); ?>

<div class="content">
	
	<?php $s = get_search_query(); ?>

	<div class="search">

		<?php get_template_part('template_parts/search/search', 'header'); ?>

		<?php get_template_part('template_parts/search/searchloop', 'users'); ?>

		<?php get_template_part('template_parts/search/searchloop', 'news'); ?>

		<?php get_template_part('template_parts/search/searchloop', 'scholarship'); ?>

		<?php get_template_part('template_parts/search/searchloop', 'opportunities'); ?>

		<?php get_template_part('template_parts/search/searchloop', 'print'); ?>
	</div>
</div>

<?php get_footer(); ?>