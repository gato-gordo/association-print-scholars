<?php

function aps_opportunities_author(){
	$id = get_the_author_meta('ID');
	$link = bp_core_get_user_domain( $id);
	if( isset($link)){
		echo '<a href="' . 	$link . '">' . get_the_author() . '</a>';		
	} else {
		the_author();
	}
}

function aps_opportunities_venue(){
	$venue = get_field('opportunities_call_for_papers_venue');
	if($venue){
		echo $venue . ', ';
	}
}

function aps_opportunities_organizer(){
	$organizer = get_field('opportunities_call_for_papers_organizer'); 
	if($organizer){
		echo "$organizer";
	}
}

function aps_opportunities_artist_residency_organizer(){
	$organizer = get_field('opportunities_artist_residency_organizer'); 
	if($organizer){
		echo "$organizer<br/>";
	}
}

function aps_opportunities_exhibition_organizer(){
	$organizer = get_field('opportunities_artist_residency_organizer'); 
	if($organizer){
		echo "$organizer<br/>";
	}
}

function aps_opportunities_exhibition_title(){
	$title = get_field('opportunities_curatorial_opportunity_exhibition_title');
	if($title){
		echo "$title <br>";
	}
}

function aps_opportunities_date_range($subcategory){
	$start_date = get_field('opportunities_' . $subcategory . '_start_date'); 
	$end_date =  get_field('opportunities_' . $subcategory . '_end_date');
	$echo_string = "";
	if($start_date){
		$echo_string .= $start_date;
		if($end_date){
			$echo_string .= ' - ' . $end_date;
		}
	} else if ($end_date){
		$echo_string .= $end_date;
	}
	if(!empty($echo_string)){
		echo "$echo_string <br>";
	}
}

function aps_opportunities_state(){
	$state = get_field('opportunities_state');
	if($state){ 
		echo $state . ', '; 
	}
}

function aps_opportunities_curatorial_dates(){
	$start_date = get_field('opportunities_curatorial_opportunity_start_date');
	$end_date = get_field('opportunities_curatorial_opportunity_end_date');
	if($start_date || $end_date){
		if($start_date && $end_date){
			echo "$start_date to $end_date";
		} else if ($start_date && !$end_date){
			echo $start_date;
		} else {
			echo $end_date;
		}
	}
}

function aps_opportunities_con_date(){
	$date = get_field('opportunities_call_for_papers_conference_date'); 
	if($date){
		echo "Conference date: $date";
	}
}


