<?php

function aps_scholarship_author(){
	$echo_string = "";
	if( get_field('scholarship_is_author_member') == 'Yes'){
		$echo_string .= '<a href="' . 	bp_core_get_user_domain( get_field('scholarship_author_member')['ID'] )
			. '">' . get_field('scholarship_author') . '</a>';
	} else {
		$echo_string .= get_field('scholarship_author');
	}
	if(get_field('scholarship_are_there_secondary_authors') === "Yes"){
		while(has_sub_field('scholarship_secondary_authors')){
			$echo_string .= ", ";
			if( get_sub_field('scholarship_is_author_member') == 'Yes'){
				$echo_string .= '<a href="' . 	bp_core_get_user_domain( get_sub_field('scholarship_author_member')['ID'] )
			. '">' . get_sub_field('scholarship_author') . '</a>';
			} else {
				$echo_string .= get_sub_field('scholarship_author');
			}
		}
	}
	echo $echo_string;
}

function aps_scholarship_editor(){
	$field = get_field('scholarship_book_chapter_editor');
	if($field){
		echo ", edited by $field";
	}
}

function aps_scholarship_volume_and_issue(){
	$volume = get_field('scholarship_article_volume');
	$issue = get_field('scholarship_article_issue_number');
	$echo_string = " ";
	if($volume){
		$echo_string .= $volume;
		if($issue){
			$echo_string = $echo_string . ", no. $issue";
		}
	}
	echo "$echo_string ";
}

function aps_scholarship_page_numbers(){
	if(has_category('scholarship-article')){
		$page_numbers = get_field('scholarship_article_pages');
	} else if (has_category('scholarship-book-chapter')){
		$page_numbers = get_field('scholarship_book_chapter_page_numbers');
	} else if (has_category('scholarship-review')){
		$page_numbers = get_field('scholarship_review_pages');	
	}
	if($page_numbers){
		echo ": $page_numbers";
	}
}

function aps_scholarship_state(){
	$state = get_field('scholarship_exhibition_curated_state');
	if($state){
		echo $state . ', ';
	}
}

function aps_scholarship_article_month(){
	$state = get_field('scholarship_article_journal_publication_month');
	if($state){
		echo $state . ' ';
	}
}
