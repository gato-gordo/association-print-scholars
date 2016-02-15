<?php query_posts("s='$s'&category_name=scholarship"); ?>
	<?php if (have_posts()) : ?>
		<?php $blogResults=0; ?>

		<?php while (have_posts()) : the_post(); ?>
			<?php
				$blogResults++;
			?>
		<?php endwhile; ?>
		
		<h2 class="text-underline"><?php echo $blogResults; ?> in Scholarship</h2>
		
		<?php  $count = 0; ?>
		<?php while (have_posts()) : the_post(); $count++; ?>

			<?php if (0 == $count%6) {
			echo '<p class="gg-button gg-click-to-reveal search-view-more">Show All Results in this Section<i class="fa fa-caret-down"></i></a><div class="gg-hidden">';
			} ?>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
	
		<?php endwhile; endif; ?>

	</div>