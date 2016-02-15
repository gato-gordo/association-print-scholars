	<?php $bp_users = new BP_User_Query(array('search_terms' => $s)); ?>

		<?php if($bp_users->total_users > 0): ?>
			<h2 class="text-underline"><?php echo $bp_users->total_users; ?> in Members</h2>
			<?php foreach ($bp_users->user_ids as $bp_user_id): ?>
				<a href="<?php echo bp_core_get_user_domain( $bp_user_id ); ?>"><?php echo $bp_users->results[$bp_user_id]->display_name; ?></a><br>
			<?php endforeach; ?>
		<?php endif; ?>