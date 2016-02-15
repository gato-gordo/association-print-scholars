<?php 

//validate get data

add_action('pre_get_posts', 'aps_filters');

function aps_filters( $query ){
	// validate
	if( !is_admin() && $query->is_main_query() ):

		if(is_category('scholarship') || is_category('news') || is_category('opportunities')){

			$query = aps_subcategory_filters($query);
		

			if (is_category('Scholarship')){
				$query = aps_scholarship_filters($query);
			}

			if(is_category('Opportunities')){
				$query = aps_opportunities_filters($query);
			}

			if(is_category('News')){
				$query = aps_news_filters($query);
			}
		}


		if (is_category('Print')){
				$query = aps_print_filters($query);
		}


		$query = aps_paginate($query);

	endif;

	// always return
	return $query;

}


function aps_opportunities_filters($query){

    $status = $_GET['status'];
    if( isset($status) && $status != "both"){

        $query->set('meta_query', array(
            'relation' => 'OR',
            array(
                'key'     => 'opportunities_current_or_expired',
                'value'    => $status,
                'compare' => '==',
            ),
         ));
    }

    $order = $_GET['orderby'];
    if (isset($order)){
        $position = strpos($order, "expiration");
        if($position !== false){
            $order = str_replace("expiration_", "", $order);
            $query->set('meta_key', 'opportunities_expiration_date');
            $query->set('orderby', 'meta_value');
            $query->set('order', $order);
        }
        $position = strpos($order, "posted");
        if($position !== false){
            $order = str_replace("posted_", "", $order);
            $query->set('orderby', 'date');
            $query->set('order', $order);
        }
    }

	return $query;
}

function aps_news_filters($query){
    $order = $_GET['orderby'];
    if ( isset($order) ){
        $position = strpos($order, "posted");
        if($position !== false){
            $order = str_replace("posted_", "", $order);
            $query->set('orderby', 'date');
            $query->set('order', $order);
        }
    }

	return $query;

}

function aps_scholarship_filters($query){
	$status = $_GET['status'];
    if( isset($status) && $status != 'both'){
        $query->set('meta_query', array(
            'relation' => 'OR',
            array(
                'key'     => 'scholarship_forthcoming_or_complete',
                'value'    => $status,
                'compare' => '==',
            ),
         ));
    }

    $order = $_GET['orderby'];
    if( isset($order)){
        $position = strpos($order, "pubdate");
        if($position !== false){
            $order = str_replace("pubdate_", "", $order);
            $query->set('meta_key', 'scholarship_date');
            $query->set('orderby', array('meta_value' => $order, 'date' =>
		  'DESC'));
        }
        $position = strpos($order, "posted");
        if($position !== false){
            $order = str_replace("posted_", "", $order);
            $query->set('orderby', 'date');
            $query->set('order', $order);
        }
    }

	return $query;
}

function aps_paginate($query){
	if(is_category()){
		$paged = ( $query->get('paged') ) ? $query->get('paged') : 1;
		$posts_per_page = NULL;
		if (is_category('Print') ){
			$posts_per_page = 50;

		} else {
			$posts_per_page = 10; 
		}
		$query->set('posts_per_page', $posts_per_page);
		$query->set('page', $paged);
	}
	return $query;
}

function aps_subcategory_filters($query){
	if ( isset($_GET['category'] )){
		$names = implode(',', $_GET['category']);
		if($names != "all" && !in_array('all', (array)$names)){
			$query->set('category_name', $names);
		}
	}
	return $query;

}

function aps_print_filters($query){
	if(isset($_GET['city'])){
		$query->set('meta_key', 'print_city');
		$query->set('meta_value', $_GET['city']);
	} else if(isset($_GET['state'])){
		$query->set('meta_key', 'print_state');
		$query->set('meta_value', $_GET['state']);
	} else if (isset($_GET['country'])){
		$query->set('meta_key', 'print_country');
		$query->set('meta_value', $_GET['country']);
	}

	if( isset($_GET['orderby']) ){
		$order = $_GET['orderby'];
		$position = strpos($order, "city");
		if($position !== false){
			$order = str_replace("city_", "", $order);
			$query->set('meta_key', 'print_city');
	    	$query->set('orderby', 'meta_value');
	    	$query->set('order', $order);
		}
		$position = strpos($order, "posted");
		if($position !== false){
			$order = str_replace("posted_", "", $order);
	    	$query->set('orderby', 'date');
	    	$query->set('order', $order);
		}
	}
	return $query;
}
