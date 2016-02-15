<?php $bp_users = new BP_User_Query(array('search_terms' => $s)); ?>

<h2><?php printf( __( 'Your search for  "%s" turned up the following results.'), '<span>' . get_search_query() . '</span>' ); ?></h2>

<?php if (!have_posts() && $bp_users->total_users == 0) : ?>
<?php get_template_part('template_parts/article', 'emptysearch'); ?>
<?php endif;?>