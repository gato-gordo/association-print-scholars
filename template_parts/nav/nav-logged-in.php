<ul id="logged-in-nav">
	<li id="loginout"><?php wp_loginout($_SERVER['REQUEST_URI']); ; ?></li>
	<li><a href="<?php echo bp_loggedin_user_domain(); ?>">Profile</a></li>
	<li><a href="<?php echo pmpro_url("account"); ?>">Account Info</a></li>
	<li id="search"><?php get_template_part('template_parts/search/searchform', 'global'); ?></li>
</ul>