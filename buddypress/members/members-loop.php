<?php

/**
 * BuddyPress - Members Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter()
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

	<?php  do_action( 'bp_before_members_loop' ); ?>

	<?php  $filters = aps_bp_prepare_member_filters($_GET); ?>



	<?php if ( bp_has_members( $filters ) ) : ?>

			<div id="pag-top" class="pagination">
				<div class="pag-count" id="member-dir-count-top">
					<?php bp_members_pagination_count(); ?>
				</div>
				<div class="pagination-links" id="member-dir-pag-top">
					<?php bp_members_pagination_links(); ?>
				</div>
			</div>

			<?php do_action( 'bp_before_directory_members_list' ); ?>

			<ul id="member-list-labels" class="item-list">
				<li>
					<div class="member-list-cell col-1">
					</div>
					<div class="member-list-cell col-2">
						<label>Name</label>
					</div>
					<div class="member-list-cell col-3">
						<label>Location</label>
					</div>
					<div class="member-list-cell col-4">
						<label>Institution</label>
					</div>
					<div class="clear"></div>
				</li>
			</ul>

			<ul id="members-list" class="item-list" role="main">

			<?php while ( bp_members() ) : bp_the_member(); ?>

				<li>
					<div class="member-list-cell col-1 item-avatar">
						<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar(); ?></a>
					</div>
					<div class="member-list-cell col-2 item-name">
						<a href="<?php bp_member_permalink(); ?>"><?php echo bp_aps_get_member_display_name();  ?></a>
					</div>
					<div class="member-list-cell col-3 item-location">
						<?php echo bp_aps_get_linkable_location(); ?>
					</div>
					<div class="member-list-cell col-4 item-institution">
						<?php echo bp_aps_get_xprofile_value('Professional Affiliation: Name of institution'); ?>
					</div>

					<div class="clear"></div>
				</li>

			<?php endwhile; ?>

			</ul>

			<?php do_action( 'bp_after_directory_members_list' ); ?>

			<?php bp_member_hidden_fields(); ?>

			<div id="pag-bottom" class="pagination">
				<div class="pag-count" id="member-dir-count-bottom">
					<?php bp_members_pagination_count(); ?>
				</div>
				<div class="pagination-links" id="member-dir-pag-bottom">
					<?php bp_members_pagination_links(); ?>
				</div>
			</div>

		<?php else: ?>
			<div id="message" class="info">
				<p><?php _e( "Sorry, no members were found.", 'buddypress' ); ?></p>
			</div>

		<?php endif; ?>

		<?php do_action( 'bp_after_members_loop' ); ?>

