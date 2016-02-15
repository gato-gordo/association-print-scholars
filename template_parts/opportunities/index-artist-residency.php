
	<div class="category-label">
		<span class="text-left">Artist Residency</span>
		<span class="text-right">Posted: <?php echo get_the_date('m/d/Y'); ?></span>
	</div>
	<div class="category-sub-label">
		<span class="text-left">Posted by: <?php aps_opportunities_author(); ?></span>
		<span class="text-right">Expires: <?php the_field('opportunities_expiration_date'); ?></span>
	</div>

	<div class="featured-image">
		<?php 
            $image = get_field('featured_image');
            $size = 'thumbnail'; 
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
            }
        ?>
	</div>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div>
		<?php aps_opportunities_artist_residency_organizer('artist_residency'); ?>
	</div>
	<div>
		<?php the_field('opportunities_artist_residency_venue'); ?>
	</div>
	<div>
		<?php the_field('opportunities_city'); ?>,
		<?php aps_opportunities_state(); ?>
		<?php the_field('opportunities_country'); ?>
	</div>
	<div>
		<?php aps_opportunities_date_range('artist_residency'); ?>
	</div>
	<div>
		Application due: <?php the_field('opportunities_expiration_date'); ?>
	</div>