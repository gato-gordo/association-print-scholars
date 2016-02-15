<table>
	<?php aps_print_study_room(); ?>
	<?php aps_print_hours(); ?>
	<?php aps_print_location(); ?>
	<?php aps_print_online_catalog(); ?>
	<?php aps_print_contact_person(); ?>
	<?php if(is_category('Print')): ?>
	<tr>
		<td>	
		</td>
		<td>
			<a href="<?php the_permalink(); ?>">View Listing Page</a>
		</td>
	</tr>
	<?php endif; ?>
</table>
