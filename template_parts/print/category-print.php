<?php  get_header(); ?>


<?php if(!is_user_logged_in()): ?>

	<p>Print room directory is only available to APS members.</p>

<?php else: ?>

	<div id="sidebar" class="left-column">
		<?php get_sidebar(); ?>
	</div>

	<div class="right-column">
		<p id="print-room-info">Click on a print room to view more information<br/>
		Please contact each collection directly before making any travel arrangements.</p>

		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				 <div class="print-room-entry">
					<div class="gg-click-to-reveal">
						<h2>
							<?php the_field('print_institution_name'); ?>
							<span class="city"><?php the_field('print_city'); ?></span>
						</h2>
					</div>
					<div class="gg-hidden">
						<?php get_template_part('template_parts/print/article', 'print'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php get_template_part('template_parts/nav/nav', 'pagination'); ?>

		<?php else: ?>
			<?php get_template_part('template_parts/article', 'emptysearch'); ?>
		 <?php endif; ?>

	</div>
<?php endif; ?>




<?php get_footer(); ?>