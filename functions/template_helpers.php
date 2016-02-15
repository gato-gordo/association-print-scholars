<?php


function the_logged_in_class(){
	if(is_user_logged_in()){
		echo 'logged-in'; 
	} else {
		echo 'logged-out';
	}
}

function hidden_popup_content(){
	return '<div class="gg-hidden" id="sign-up-popup">' .
			'<p>Would you like to post on APS? <a href="' .
			get_field('join_us', 'option') .
			'">Become a member</a> of APS today, or ' .
			wp_loginout($_SERVER['REQUEST_URI'], false) .
			'</p></div>';
}

add_filter( 'template_include', 'search_page_redirect', 99 );

function search_page_redirect( $template ) {
	if ( !$_GET['searchtype'] == 'global' && is_category( )  ) {
		$new_template = locate_template( array( 'category.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	} else if ($_GET['searchtype'] == 'global'){
		$new_template = locate_template( array( 'search.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}

	return $template;
}


function get_manage_category(){
	$category = NULL;
	if(is_page(320)){
		$category = 'News';
	} elseif (is_page(326)){
		$category = 'Opportunities';
	} elseif (is_page(324)){
		$category = 'Scholarship';
	}
	return $category;
}