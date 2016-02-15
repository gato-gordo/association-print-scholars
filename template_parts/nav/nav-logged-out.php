<ul id="logged-out-nav">
	<li id="join"><a href="<?php the_field('join_us', 'option'); ?>">Join</a></li>
	<li id="loginout"><?php wp_loginout($_SERVER['REQUEST_URI']); ?></li>
	<li id="search"><?php get_template_part('template_parts/search/searchform', 'global'); ?></li>
</ul>
