<?php 
	$author = get_current_user_id();
	$category = get_manage_category();
	$cat_id = get_cat_ID($category);
	$args = array('author' => $author, 'cat' => $cat_id);
	$query = new WP_Query( $args );
?>


<?php if($cat_id == 4): ?>
	<div class="explanatory-text">
		<p>
		Please post your scholarship to the site. Posting allows members and visitors to find your work easily and identify experts with specific research interests.
		</p>

		<p>
		Posts will appear simultaneously in the scholarship tab of your profile and in the scholarship news feed. You may also post scholarship for other print scholars and tag them so that the articles appear in their profiles (if they are APS members).
		</p>
	</div>
<?php endif; ?>



<h2>Items You've Created</h2>

<?php if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>

	<div class="manage-item">
		<h3><?php the_title(); ?></h3>
		<?php
			$sub_category = $category::get_child_category($post->ID);
			$link = get_page_link(1126) . '?' . strtolower($category) . '_category=' . urlencode($sub_category) . '&post_id=' . $post->ID; 
		?>
			<a href="<?php the_permalink(); ?>">View</a>  |	<a href="<?php echo $link; ?>">Edit</a> | <a href="<?php echo get_delete_post_link( ); ?>">Delete</a>


	</div>

<?php endwhile; else: ?>
	<p>You have not created any <?php echo $category; ?> items yet.</p>
<?php endif; wp_reset_query(); ?>

<div class="category-actions">
	<a href="<?php the_field('create_' . strtolower($category) . '_item_link', 'option'); ?>"><i class="fa fa-plus"></i>Create <?php echo $category; ?> Item</a>
</div>