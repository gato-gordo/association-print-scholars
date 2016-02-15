	<h2>Items You Are Tagged In</h2>

	<?php 
		$args = array('cat' => $cat_id, 'meta_query' => array( array('key' => 'scholarship_author_member', 'value' => $author) ) );
		$query = new WP_Query( $args );
	?>

	<?php if($query->have_posts()):  ?>
		<?php while($query->have_posts()): $query->the_post(); ?>
		<div class="manage-item">
			<?php the_title(); ?>
		<?php
			$sub_category = $category::getPostSubcategoryName($post->ID);
			$link = get_page_link(1126) . '?' . strtolower($category) . '_category='  . urlencode($sub_category) . '&post_id=' . $post->ID; 
		?>
			<a href="<?php the_permalink(); ?>">View</a>  |	<a href="<?php echo $link; ?>">Edit</a> | <a href="<?php echo get_delete_post_link( ); ?>">Delete</a>
		</div>
		<?php endwhile; ?>
	<?php else: ?>
		<p>You have not been tagged as the author of any scholarship items on the site.</p>
	<?php endif; wp_reset_query(); ?>