<?php

function aps_mmr_show_link($prefix){
	$field_name = $prefix . '_url';
	$field_value = get_field($field_name);
	if($field_value){
		echo '<a href="' .  $field_value . '" target="_blank">External Link</a>';
	}
}


function aps_mmr_abstract($parent_category, $single = true){	
	if(has_category('Scholarship')){
		$tail = '_abstract';
	} else {
		$tail = '_description';
	}
	$acf_string = strtolower($parent_category) . $tail;
	$field = get_field($acf_string);
	if($field){
		if($single){
			echo '<div>' . $field . '</div>';
		} else {
			echo '<div class="abstract-wrapper"><div class="abstract">' .
			$field . '</div></div>';
		}
	}
}


function aps_mmr_back_link($parent_category, $category_id){
	echo '<a href="' . get_category_link($category_id) . '">Back to '. $parent_category . '</a>';
}

function aps_mmr_comments(){
	if(has_category('News') || has_category('Opportunities')){
		get_template_part('template_parts/comments/comments', 'single');
	}
}

function aps_mmr_research_interests(){
	$fields = array();
	$fields_with_empties = [get_field('geographic_area'),  get_field('time_period'), get_field('media')];
	foreach($fields_with_empties as $the_fields){
		if(!empty($the_fields)){
			foreach($the_fields as $field){
				$fields[] = $field;
			}
		}
	}
	if(count($fields) > 0){
		echo  '<div class="research-areas">Relevant research areas: ' . aps_mmr_wrap_research_areas($fields) . '</div>';
	}
}

function aps_mmr_wrap_research_areas($fields_array){
	$wrapped_fields = [];
	$length = count($fields_array);
	for($i = 0; $i < $length; $i++ ){
		$encode = urlencode($fields_array[$i]);
		$link = '<a href="?searchtype=global&s='. $encode .'">' . $fields_array[$i] . '</a>';
		array_push($wrapped_fields, $link);
	}
	return join(', ', $wrapped_fields);
}