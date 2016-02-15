<?php do_action( 'bp_before_directory_members_page' ); ?>

<div id="buddypress">

	<div id="sidebar" class="left-column">
		<?php do_action( 'bp_before_directory_members' ); ?>
		<?php do_action( 'bp_before_directory_members_content' ); ?>
		<?php get_sidebar(); ?>
	</div>

	<div class="right-column">

		<?php do_action( 'bp_before_directory_members_tabs' ); ?>

		<form action="" method="post" id="members-directory-form" class="dir-form">

			<div id="members-dir-list" class="members dir-list">
				<?php bp_get_template_part( 'members/members-loop' ); ?>
			</div><!-- #members-dir-list -->

			<?php do_action( 'bp_directory_members_content' ); ?>

			<?php wp_nonce_field( 'directory_members', '_wpnonce-member-filter' ); ?>

			<?php do_action( 'bp_after_directory_members_content' ); ?>

		</form><!-- #members-directory-form -->

		<?php do_action( 'bp_after_directory_members' ); ?>

	</div>

</div><!-- #buddypress -->

<?php do_action( 'bp_after_directory_members_page' ); ?>