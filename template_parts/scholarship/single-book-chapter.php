<div class="category-entry-meta">
	<?php aps_scholarship_author(); ?>.
	"<?php the_title(); ?>."
	In <em><?php the_field('scholarship_book_chapter_book_title'); ?></em><?php aps_scholarship_editor(); ?>.
	<?php the_field('scholarship_book_chapter_place'); ?>:
	<?php the_field('scholarship_book_chapter_publisher'); ?>,
	<?php the_field('scholarship_date'); ?><?php
	aps_scholarship_page_numbers(); ?>.
</div>
