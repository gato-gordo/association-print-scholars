<?php

function aps_news_author(){
	$id = get_the_author_meta('ID');
	$link = bp_core_get_user_domain( $id);
	if( isset($link)){
		echo '<a href="' . 	$link . '">' . get_the_author() . '</a>';		
	} else {
		the_author();
	}
}

function aps_news_exhibition_curators(){
	$curators = get_field('news_exhibition_curators');
	if($curators){
		echo $curators . '.<br>';
	}
}

function aps_news_exhibition_artists(){
	$artists = get_field('news_exhibition_artists');
	if($artists){
		echo 'Exhibiting artist(s): ' . $artists . '.';
	}
}

function aps_news_lecture_organizers(){
	$organizers = get_field('news_lecture_organizers');
	if($organizers){
		echo "Organized by $organizers <br>";
	}
}

function aps_news_organizer($subcategory){
	$organizer = get_field('news_' . $subcategory . '_organizer');
	if($organizer){
		echo "$organizer <br>";
	}
}

function aps_news_venue($subcategory){
	$venue = get_field('news_' . $subcategory . '_venue_name');
	if($venue){
		echo "$venue <br>";
	}
}

function aps_news_time(){
	$time = get_field('news_art_market_time'); 
	if($time){
		echo ", $time"; 
	}
}

function aps_news_state(){
	$state = get_field('news_state');
	if($state){
		echo $state . ',';
	}
}

function aps_news_end_date(){
	$date = get_field('news_conference_end_date');
	if($date){
		echo "-$date";
	}
}

function aps_news_publisher(){
	$publisher = get_field('news_new_edition_publisher');
	if($publisher){
		echo ", $publisher";
	}
}