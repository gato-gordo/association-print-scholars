<?php if(has_category('Print')): ?>
	<?php get_template_part('template_parts/print/single', 'print'); ?>
<?php else: ?>
	<?php get_template_part('template_parts/mmr/single', 'mmr'); ?>
<?php endif; ?>