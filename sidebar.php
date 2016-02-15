<?php 
	if(is_category('Scholarship')){
		get_template_part('template_parts/sidebar/sidebar', 'scholarship');
	} elseif(is_category('News')){
		get_template_part('template_parts/sidebar/sidebar', 'news');
	} elseif(is_category('Opportunities')){
		get_template_part('template_parts/sidebar/sidebar', 'opportunities');
	} elseif(is_page('Member Directory')){
		get_template_part('template_parts/sidebar/sidebar', 'member-directory');
	} elseif (is_category('Print')) {
		get_template_part('template_parts/sidebar/sidebar', 'print');
	} else {
		echo 'No sidebar for this page.  Contact administrator';
	}
?>