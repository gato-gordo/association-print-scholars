<?php do_action( 'bp_before_profile_loop_content' ); ?>

<?php if(bp_has_profile()): ?>
<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#personal-info" data-toggle="tab" role="tab">Personal Info</a></li>
		<li role="presentation"><a href="#professional-info" data-toggle="tab" role="tab">Professional Info</a></li>
		<li role="presentation"><a href="#scholarship" data-toggle="tab" role="tab">Scholarship</a></li>
		<li role="presentation"><a href="#social-networking" data-toggle="tab" role="tab">Social Networking</a></li>
	</ul>
</div>

<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="personal-info">		
		<table class="profile-fields">
			<tr<?php bp_field_css_class(); ?>>
				<td class="label">Name</td>
				<td class="data"><?php echo bp_aps_get_linkable_name(); ?></td>
			</tr>
			<tr<?php bp_field_css_class(); ?>>
				<td class="label">Email</td>
				<td class="data">
					<a href="mailto:<?php echo bp_aps_get_xprofile_value('Email', false); ?>">
						<?php echo bp_aps_get_xprofile_value('Email', false); ?></a></td>
			</tr>
			<tr<?php bp_field_css_class(); ?>>
				<td class="label">Website</td>
				<td class="data"><?php echo bp_aps_get_xprofile_value('Website', false); ?></td>
			</tr>
			<tr<?php bp_field_css_class(); ?>>
				<td class="label">Phone</td>
				<td class="data"><?php echo bp_aps_get_xprofile_value('Phone', false); ?></td>
			</tr>
			<tr<?php bp_field_css_class(); ?>>
				<td class="label">Mailing Address</td>
				<td class="data">
					<p><?php echo bp_aps_get_linkable_location(true); ?></p>
				</td>
			</tr>					
		</table>
	</div>

	<div role="tabpanel" class="tab-pane" id="professional-info">
		<table class="profile-fields">
			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Degree</td>
				<td class="data"><?php echo bp_aps_get_linkable_degree(); ?></td>
			</tr>

			<?php bp_aps_show_extra_degrees(); ?>

			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Professional Affiliation</td>
				<td class="data"><?php echo bp_aps_get_linkable_affiliation(); ?></td>
			</tr>
			
			<?php bp_aps_show_extra_affiliations(); ?>

			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Research/Current Projects</td>
				<td class="data">
					<?php echo bp_aps_get_xprofile_value('Research/Current Projects', false); ?>
				</td>
			</tr>
			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Time Period Interests</td>
				<td class="data"><?php echo bp_aps_get_interests('Research Interests: Time Period'); ?></td>
			</tr>
			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Area Interests</td>
				<td class="data"><?php echo bp_aps_get_interests('Research Interests: Geographic Area') ?></td>
			</tr>
			<tr <?php bp_field_css_class(); ?>>
				<td class="label">Media Interests</td>
				<td class="data"><?php echo bp_aps_get_interests('Research Interests: Media'); ?></td>
			</tr>
			<tr <?php bp_field_css_class(); ?>>
				<td class="label">CV</td>
				<td class="data"><?php echo xprofile_get_field_data('CV (PDF only)'); ?></td>
			</tr>												
		</table>	
	</div>

	<div role="tabpanel" class="tab-pane" id="scholarship">

	<?php
		$author =  bp_displayed_user_id();
		$rows = $wpdb->get_results($wpdb->prepare( 
            "
            SELECT post_id
            FROM wp_postmeta
            WHERE
            		(meta_key = %s
            		AND meta_value  = %s)
            	OR
            		(meta_key LIKE %s 
            		AND meta_value = %s
            		)
            ",
            'scholarship_author_member',
            $author,
            'scholarship_secondary_authors_%_scholarship_author_member',
            $author
        ));

		$ids = array();
       	foreach($rows as $row){
       		$ids[] = $row->post_id;
       	}
       	if(!empty($ids)){
	       	$args = array('post__in' => $ids, 'meta_key' => 'scholarship_date', 'orderby' => 'meta_value');
	       	$author_query = new WP_Query($args);
	       	if($author_query->have_posts()): while($author_query->have_posts()): $author_query->the_post(); 
				$child_category = Scholarship::get_child_category(get_the_ID());
				$class_name = nameToClassName("Scholarship", $child_category);
	       	?>
	       		<div class="post">
					<div class="post-meta">
						<?php $class_name::show('feed'); ?>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_query(); }?> 

	</div>

	<div role="tabpanel" class="tab-pane" id="social-networking">
		<?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>
			<?php if(bp_get_the_profile_group_id() == 4): ?>
				<?php if ( bp_profile_group_has_fields() ) : ?>
					<?php do_action( 'bp_before_profile_field_content' ); ?>
					<div class="bp-widget <?php bp_the_profile_group_slug(); ?>">
						<table class="profile-fields">
							<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>
								<?php if ( bp_field_has_data() ) : ?>
									<tr<?php bp_field_css_class(); ?>>
										<?php

											$stripped_string = strip_tags(bp_get_the_profile_field_value());
											$found = strpos($stripped_string, 'http');					 
											if ($found === false){
												$stripped_string = 'http://' . $stripped_string;
											};

											$name = bp_get_the_profile_field_name();
											$url = '';
											switch($name){
												case 'Facebook':
													$alt = 'Facebook';
													$url = get_field('facebook_icon', 'option');
													break;
												case 'LinkedIn':
													$alt = 'LinkedIn';
													$url = get_field('linkedin_icon', 'option');
													break;
												case 'Twitter':
													$alt = 'Twitter';
													$url = get_field('twitter_icon', 'option');
													break;
												case 'Academia.edu':
													$alt = 'AcademiaEdu';
													$url = get_field('academia_icon', 'option');
													break;
												case 'Instagram':
													$alt = "Instagram";
													$url = get_field('instagram_icon', 'option');
													break;

											}

										?>
										<td class="data social-icon">
											<a target="_blank" href="<?php echo $stripped_string; ?>">
											<?php  
												if(!empty($url) && isset($alt)){
													echo '<img alt="' . $alt . '" src="' . $url . '" >';
												} else {
													echo 'Link';
												}
											?>
											</a>
										</td>
									</tr>
								<?php endif; ?>
								<?php do_action( 'bp_profile_field_item' ); ?>
							<?php endwhile; ?>
						</table>
					</div>
					<?php do_action( 'bp_after_profile_field_content' ); ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>

</div>

<?php endif; ?>


