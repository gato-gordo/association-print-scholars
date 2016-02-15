<?php if(is_category('Print')): ?>
	<?php get_template_part('template_parts/print/category', 'print'); ?>
<?php else: ?>
	<?php get_template_part('template_parts/mmr/category', 'mmr'); ?>
<?php endif; ?>