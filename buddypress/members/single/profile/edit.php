<?php do_action( 'bp_before_profile_edit_content' );

if ( bp_has_profile( 'profile_group_id=' . bp_get_current_profile_group_id() ) ) :



		while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

			<form action="<?php bp_the_profile_group_edit_form_action(); ?>" method="post" id="profile-edit-form" class="standard-form <?php bp_the_profile_group_slug(); ?>">

				<?php do_action( 'bp_before_profile_field_content' ); ?>

				<h4><?php printf( __( "Editing '%s' Profile Group", "buddypress" ), bp_get_the_profile_group_name() ); ?></h4>

				<?php if ( bp_profile_has_multiple_groups() ) : ?>
					<ul class="button-nav">

						<?php bp_profile_group_tabs(); ?>

					</ul>
				<?php endif ;?>

			<?php // Profile Group 3 is Skipped.  That is the Scholarship tab.  That tab is populated by a WordPress loop. See else block below.  ?>
			<?php if (bp_get_current_profile_group_id() != 3): ?>

				<div class="clear"></div>
				
				<div>
					<p>The information you enter will be visible publicly. You can modify your privacy settings by clicking on the red “change” links below. <span class="emphasis">Before navigating away from this tab, make sure to scroll down and save your changes.</span></p>
				</div>
				<?php // If block only runs in Social Media tab. ?>
				<?php if (bp_get_current_profile_group_id() == 4): ?>
				<div>
					<p><span class="emphasis">Paste the full urls for your social media profiles into the respective fields below.</span></p>
				</div>
				<?php endif; ?>

				<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

					<?php
					/* If block inserts explanatory text before certain profile field areas.  Field ids found via the Dashboard in Users > Profile Fields */

					?>
					<?php if (bp_get_the_profile_field_id() == 15){ ?>
						<h2>Education</h2>
					<?php } else if (bp_get_the_profile_field_id() == 24) { ?>
						<h2>Professional Affiliations</h2>
						<div class="explanatory-text">
							<p>Please provide any current professional affiliation(s), such as any institutions where you work, teach, or freelance, or any publications to which you contribute. Enter as many affiliations as needed.</p>
						</div>
					<?php } else if (bp_get_the_profile_field_id() == 6) { ?>
						<h2>Research</h2>
					<?php } else if (bp_get_the_profile_field_id() == 9) { ?>
						<h2>Mailing Address</h2>
						<div class="explanatory-text">
							<p>Enter an optional address (work, home, or other) where you would like to receive professional correspondence.</p>
						</div>

					<?php } ?>

					<div<?php bp_field_css_class( 'editfield' ); ?>>

						<?php
						$field_type = bp_xprofile_create_field_type( bp_get_the_profile_field_type() );
						$field_type->edit_field_html();

						do_action( 'bp_custom_profile_edit_fields_pre_visibility' );
						?>

						<?php if ( bp_current_user_can( 'bp_xprofile_change_field_visibility' ) ) : ?>
							<p class="field-visibility-settings-toggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
								<?php printf( __( 'This field can be seen by: <span class="current-visibility-level">%s</span>', 'buddypress' ), bp_get_the_profile_field_visibility_level_label() ) ?> <a href="#" class="visibility-toggle-link"><?php _e( 'Change', 'buddypress' ); ?></a>
							</p>

							<div class="field-visibility-settings" id="field-visibility-settings-<?php bp_the_profile_field_id() ?>">
								<fieldset>
									<legend><?php _e( 'Who can see this field?', 'buddypress' ) ?></legend>

									<?php bp_profile_visibility_radio_buttons() ?>

								</fieldset>
								<a class="field-visibility-settings-close" href="#"><?php _e( 'Close', 'buddypress' ) ?></a>
							</div>
						<?php else : ?>
							<div class="field-visibility-settings-notoggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
								<?php printf( __( 'This field can be seen by: <span class="current-visibility-level">%s</span>', 'buddypress' ), bp_get_the_profile_field_visibility_level_label() ) ?>
							</div>
						<?php endif ?>

						<?php do_action( 'bp_custom_profile_edit_fields' ); ?>

						<p class="description"><?php bp_the_profile_field_description(); ?></p>
					</div>

				<?php endwhile; ?>

				<?php do_action( 'bp_after_profile_field_content' ); ?>

				<div class="submit">
					<input type="submit" name="profile-group-edit-submit" id="profile-group-edit-submit" value="<?php esc_attr_e( 'Save Changes', 'buddypress' ); ?> " />
				</div>

				<input type="hidden" name="field_ids" id="field_ids" value="<?php bp_the_profile_field_ids(); ?>" />

				<?php wp_nonce_field( 'bp_xprofile_edit' ); ?>
				
			<?php else: ?>

				<a href="<?php echo get_home_url() . '/manage-page/manage-scholarship/'; ?>">Manage My Scholarship Items</a>


			<?php endif; ?>

			</form>

		<?php endwhile; ?>


<?php endif; ?>

<?php do_action( 'bp_after_profile_edit_content' ); ?>
