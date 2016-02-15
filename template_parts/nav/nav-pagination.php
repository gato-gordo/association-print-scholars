<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>

 	<nav class="pagination">
 	 	<?php echo paginate_links(); ?>
 	 </nav>

<?php } ?>