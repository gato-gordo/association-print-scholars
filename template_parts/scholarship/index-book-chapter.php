<div class="category-label">
	<span class="text-left">Book Chapter</span>
	<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
</div>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div>
	<?php aps_scholarship_author(); ?>.
	"<?php the_title(); ?>."
	In <em><?php the_field('scholarship_book_chapter_book_title'); ?></em><?php aps_scholarship_editor(); ?>.
	<?php the_field('scholarship_book_chapter_place'); ?>:
	<?php the_field('scholarship_book_chapter_publisher'); ?>,
	<?php the_field('scholarship_date'); ?><?php
	aps_scholarship_page_numbers(); ?>.
</div>
