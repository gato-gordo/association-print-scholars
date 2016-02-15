<?php

/***** Begin Members Directory Filters *****/

/**
*  Changes default ordering of member directory from first name to last name.
*/
function aps_bp_alphabetize_by_last_name( $bp_user_query) {
	if ( 'alphabetical' == $bp_user_query->query_vars['type'] )
		$bp_user_query->uid_clauses['orderby'] = "ORDER BY substring_index(u.display_name, ' ', -1)";
	}
add_action ( 'bp_pre_user_query', 'aps_bp_alphabetize_by_last_name', 10);


/**
*  Excludes certain members from directory pased on parameters passed in through sidebar forms or set as defaults.
*  Called by members-loop.php
*/
function aps_bp_prepare_member_filters($query_array){

	//Grab $_GET and set up filters
	if(isset($query_array['Members'])){
		$custom_ids = aps_bp_last_name_filter($query_array['Members']);
	} elseif (isset( $query_array['Members_Per_Page'] ) ){
		$per_page = aps_bp_per_page_filter($query_array['Members_Per_Page']);
	}
	
	//Always show members alphabetically, rather than last active
    $filters = 'type=alphabetical';

    //If last name parameter is set, only show members whose last name begins with that parameter
	if(isset($custom_ids)){
	  $filters .= '&include=' . implode(' ', $custom_ids);
	}

	//Exclude administrators from query
	$user_query = new WP_User_Query( array( 'role' => 'Administrator', 'fields' => 'ID' ) );
	$exclude_string = implode("," , $user_query->results);
	$filters .= "&exclude=" . $exclude_string;

	//Set number of members per page, defaults to 25
	$filters .= '&per_page=';
	if(isset($per_page)){
		$filters .=  $per_page;
	} else {
		$filters .= 25;
	}
	return $filters;

}

/**
* Constructs Buddypress query for users whose last name begins with a cetain letter of the alphabet
 */
function aps_bp_last_name_filter($query_string){
	$pattern = '/^[A-Z]$/';
	$filter_letter = NULL;
	if (preg_match($pattern, $query_string)){
		$filter_letter = $query_string;
	}

	$custom_ids = NULL;
	if(isset($filter_letter)){
		global $wpdb;
		$the_field = xprofile_get_field_id_from_name('Last Name');
		$user_query_string = "SELECT user_id FROM {$wpdb->prefix}bp_xprofile_data WHERE field_id = $the_field AND LEFT(value, 1) = \"$filter_letter\"";
    	$custom_ids = $wpdb->get_col($user_query_string);
    }
    return $custom_ids;
}

/**
* Sets number of members per page to return in member directory.
*/
function aps_bp_per_page_filter($query_string){
	switch($query_string) {
		case 50: 
			$per_page = 50;
			break;
		case 100:
			$per_page = 100;
			break;
		case all:
			$per_page = 100000;
			break;
		default: 	
			$per_page = NULL;
	}
	return $per_page;
}


/***** End Members Directory Filters *****/

/**
* Syncs Buddypress first and last name profile fields and WordPress User fields upon new user registration.
*/
function aps_bp_set_bp_name_fields($user_id){
	$info = get_userdata( $user_id );
               			   
    if (isset($info->first_name) && function_exists('xprofile_set_field_data')){
		xprofile_set_field_data( "First Name", $user_id, $info->first_name);
	}
	if (isset($info->first_name) && function_exists('xprofile_set_field_data')){
		xprofile_set_field_data( "Last Name", $user_id, $info->last_name);
	}
}

add_action("user_register", "aps_bp_set_bp_name_fields");


/***** Begin Buddypress Template Helpers *****/


/**
* Generates the navigation menu of last_name letters in Buddypress Member Directory sidebar
*/
function aps_bp_last_name_nav() {
	$this_page = bp_get_members_directory_permalink();
   	for ($i=0;$i<26 ;++$i ){
		$this_letter = chr(ord('A') + $i);
		$letter_link = add_query_arg('Members', $this_letter, bp_get_members_directory_permalink());
		echo "<a title=\"$this_letter\" href=\"$letter_link\">$this_letter</a>";
	}
}

function bp_aps_get_member_display_name($show_last_comma_first = true){
   	$display_name = "";
   	$last_name = bp_get_member_profile_data( 'field=Last Name' );
   	$first_name = bp_get_member_profile_data( 'field=First Name' );
   	if($show_last_comma_first) {
		if($last_name){
  			$display_name .= $last_name;
  			if($first_name){
  				$display_name .= ", $first_name";
  			}
  		}
  	} else {
  		if($first_name){
  			$display_name .= $first_name;
  			if($last_name){
  				$display_name .= " $last_name";
  			}
  		}
  	}
  	return $display_name;
}

function bp_aps_get_xprofile_value($field_name, $linkable = true){
	$field_value = bp_get_member_profile_data( 'field=' . $field_name);
	$return = '';
	if($field_value){
		if($linkable){
			$return = bp_aps_wrap_value_in_link($field_value);
		} else {
			$return = $field_value;
		}
	}
	return $return;
}

function bp_aps_wrap_value_in_link($value){
	return '<a href="' . bp_get_members_directory_permalink() . '?s=' . urlencode($value) . '">' . $value . '</a>';
}

function bp_aps_get_linkable_location($full = false){
	$location_anchors = '';
	$street = bp_aps_get_xprofile_value('Mailing Address: Street');
	$city = bp_aps_get_xprofile_value('Mailing Address: City');
	$state = bp_aps_get_xprofile_value('Mailing Address: State or Province');
	$zip = bp_aps_get_xprofile_value('Mailing Address: ZIP');
	$country = bp_aps_get_xprofile_value('Mailing Address: Country');
	if($city != ''){
		$location_anchors .= $city;
		if($state !='' || $country !=''){
			$location_anchors .= ', ';
		}
	}
	if($state != ''){
		$location_anchors .= $state;
		if($country != ''){
			$location_anchors .= ', ';
		}
	}
	if($country != ''){
		$location_anchors .= $country;
	}

	if($full){ 
		if($street){
			$location_anchors = $street . '<br>' . $location_anchors;
		}
		if($zip){
			$location_anchors .= " $zip";
		}
	}
	return $location_anchors;
}

function bp_aps_get_linkable_name(){
	$location_anchors = '';
	$first_name = bp_aps_get_xprofile_value('First Name');
	$last_name = bp_aps_get_xprofile_value('Last Name');
	if($first_name != ''){
		$location_anchors .= $first_name;
		if($last_name !=''){
			$location_anchors .= ' ';
		}
	}
	if($last_name != ''){
		$location_anchors .= $last_name;
	}
	return $location_anchors;
}

function bp_aps_get_linkable_degree($prefix = ''){
	$university = bp_aps_get_xprofile_value($prefix . 'Degree: University');
	$degree = bp_aps_get_xprofile_value($prefix . 'Degree: Degree type', false);
	$department = bp_aps_get_xprofile_value($prefix . 'Degree: Department');
	$year = bp_aps_get_xprofile_value($prefix . 'Degree: Year', false);
	$return = '';
	if($degree != ''){
		$return .= $degree;
		if($department != ''){
			$return .= ' in ';
		} else {
			$return .= '<br>';
		}
	}
	if($department != ''){
		$return .= $department . '<br>';
	}
	if($university != ''){
		$return .= $university;
		if($year != ''){
			$return .= ', ';
		} else {
			$return .= '<br>';
		}
	}
	if($year != ''){
		$return .= $year . '<br>';
	}
	return $return;
}

function bp_aps_show_extra_degrees(){
	$second = bp_aps_get_linkable_degree('Second ');
	if(!empty($second)): ?>
		<tr <?php bp_field_css_class(); ?>>
			<td class="label">Second Degree</td>
			<td class="data"><?php echo $second; ?></td>
		</tr>
	<?php endif;
	$third =  bp_aps_get_linkable_degree('Third ');
	if(!empty($third)): ?>
		<tr <?php bp_field_css_class(); ?>>
			<td class="label">Third Degree</td>
			<td class="data"><?php echo $third; ?></td>
		</tr>
	<?php endif;
}

function bp_aps_get_linkable_affiliation($prefix = ''){
	$title = bp_aps_get_xprofile_value($prefix . 'Professional Affiliation: Title of your position/role', false);
	$institution = bp_aps_get_xprofile_value($prefix . 'Professional Affiliation: Name of institution');
	$return = '';
	if($title != ''){
		$return .= $title;
		if($institution != ''){
			$return .= ', ';
		}
	}
	if($institution != ''){
		$return .= $institution;
	}
	return $return;
}

function bp_aps_get_interests($collection_query){
	$return = '';
	$collection_string = bp_aps_get_xprofile_value($collection_query, false);
	if($collection_string != ''){
		$collection_array = explode(', ', $collection_string);
		foreach($collection_array as $single){
			$return .= bp_aps_wrap_value_in_link($single) . comma_if_not_last($collection_array, $single);
		}
	}
	return $return;
}

function comma_if_not_last($collection, $single){
	return $single != end($collection) ? ', ' : '';
}


function bp_aps_show_extra_affiliations(){
	$second = bp_aps_get_linkable_affiliation('Second ');
	if(!empty($second)): ?>
		<tr <?php bp_field_css_class(); ?>>
			<td class="label">Second Professional Affiliation</td>
			<td class="data"><?php echo $second; ?></td>
		</tr>
	<?php endif;
	$third =  bp_aps_get_linkable_affiliation('Third ');
	if(!empty($third)): ?>
		<tr <?php bp_field_css_class(); ?>>
			<td class="label">Third Professional Affiliation</td>
			<td class="data"><?php echo $third; ?></td>
		</tr>
	<?php endif;
}