<?php

function aps_print_study_room(){
	$room = get_field('print_study_room_name');
	if($room){ ?>
	<tr>	
		<td>
			<h3>Study Room Name</h3>
		</td>
		<td>
			<?php echo $room; ?>
		</td>
	</tr><?php
	}
}
function aps_print_hours(){
	$hours = get_field('print_hours');
	if($hours){ ?>
	<tr>
		<td>
			<h3>Hours</h3>
		</td>
		<td>
			<?php echo $hours; ?>
		</td>
	</tr><?php
	}
}

function aps_print_location(){
	$city = get_field('print_city');
	$state = get_field('print_state');
	$country = get_field('print_country');
	$echo_string = "$city, ";
	if($state){
		$echo_string .="$state, ";
	}
	$echo_string .= $country;
	?>
	<tr> 
		<td>
			<h3>Location</h3>
		</td>
		<td>
			<?php echo $echo_string;  ?>
		</td>
	</tr><?php
}

function aps_print_online_catalog(){
	$catalogs = get_field('print_online_catalog');
	if($catalogs){ ?>
	<tr>
		<td>
			<h3>Online Catalog(s)</h3>
		</td>
		<td>
		<?php foreach($catalogs as $catalog):  ?>
			<div><a href="<?php echo $catalog['online_catalog_url']; ?>" target="_blank"><?php echo $catalog['online_catalog_url']; ?></a></div>
		<?php endforeach; ?>
		</td>
	</tr><?php
	}
}
function aps_print_contact_person(){
	$contacts = get_field('print_contact_person');
	if($contacts){ ?>
	<tr>
		<td>
			<h3>Contact Person/People</h3>
		</td>
		<td>
			<?php foreach($contacts as $contact){
				if($contact['name']){
					echo '<div><strong> ' . $contact['name'] .' </strong> </div>';
				}
				if($contact['email']){
					echo '<div>' . $contact['email'] . '</div>';
				}
				if($contact['phone']){
					echo '<div>' . $contact['phone'] . '</div>';
				}
			} ?>
		</td>
	</tr><?php
	}
}


