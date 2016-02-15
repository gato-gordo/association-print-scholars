<?php 

//Syncs author data

function aps_acf_save_post( $post_id ) {
    
    // bail early if no ACF data
    if( empty($_POST['acf']) ) {
        
        return;
        
    }

    $prefix = 'scholarship_';
    if(isset($_POST['acf']['field_54bd76d81a75b']) && $_POST['acf']['field_54bd76d81a75b'] == "Yes"){
        if(isset($_POST['acf']['field_550882e8f1622'])){
            $author_member = $_POST['acf']['field_550882e8f1622'];
        } else {
            return;
        }
        $user = get_userdata($author_member);
        $user_name = $user->display_name;
        $_POST['acf']['field_54b1bd94e7850'] = $user_name;
    } else {
        $_POST['acf']['field_54bd76d81a75b'] == "No";
        unset($_POST['acf']['field_550882e8f1622']);
    }

    if(isset($_POST['acf']['field_5501f238b6a2a']) && $_POST['acf']['field_5501f238b6a2a'] == 'Yes'){
        if(isset($_POST['acf']['field_5501f10fb6a26'])){
            foreach($_POST['acf']['field_5501f10fb6a26'] as &$secondary_author_fields){
                if(isset($secondary_author_fields['field_5501f1afb6a28']) && $secondary_author_fields['field_5501f1afb6a28'] == "Yes"){
                    $author_member = $secondary_author_fields['field_5508832a3cfe5'];
                    $user = get_userdata($author_member);
                    $user_name = $user->display_name;
                    $secondary_author_fields['field_5501f205b6a29'] = $user_name;
                } else {
                    $secondary_author_fields['field_5501f1afb6a28'] = "No";
                    $secondary_author_fields['field_5508832a3cfe5'] = NULL;
                }
            }
        } else {
            return;
        }
    }
    
}

// run after ACF saves the $_POST['acf'] data
add_action('acf/save_post', 'aps_acf_save_post', 1);






/* These Filters Change the Labels on the Create/Update Forms Appropriately */

/************************************************************/

// Field: scholarship_date
// Default Label: "Publication Date (four digit year, for example: 2004)"
function acf_change_scholarship_date_label($field ){
    switch($_GET['scholarship_category']){
    	case 'Film':
    		$field['label'] = "Release Date";
    		break;
        case 'Exhibition Curated':
            $field['label'] = "Exhibition Year";
    }

    return $field;
}

add_filter('acf/load_field/key=field_54b1bd12e784e', 'acf_change_scholarship_date_label', 10, 3);

/************************************************************/


/************************************************************/

// Field: scholarship_is_author_member 
// Default Label: "Is the author an APS member?"

function acf_change_scholarship_is_author_member_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Is the director an APS member?";
            break;
        case 'Exhibition Curated':
            $field['label'] = "Is curator an APS member?";
            break;
    }
    return $field;
}

add_filter('acf/load_field/key=field_54bd76d81a75b', 'acf_change_scholarship_is_author_member_label', 10, 3);

/************************************************************/


// Field: scholarship_author_member
// Default Label: "Author" 

function acf_change_scholarship_author_member_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Director";
            break;
        case "Exhibition Curated":
            $field['label'] = "Curator";
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_550882e8f1622', 'acf_change_scholarship_author_member_label', 10, 3);

/************************************************************/


// Field: scholarship_author
// Default Label: "Author" 

function acf_change_scholarship_author_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Director";
            break;
        case "Exhibition Curated":
            $field['label'] = "Curator";
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_54b1bd94e7850', 'acf_change_scholarship_author_label', 10, 3);

/************************************************************/

// Field: scholarship_are_there_secondary_authors
// Default Label: "Are there additional authors?"

function acf_change_are_there_secondary_authors_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Are there additional directors?";
            break;
        case "Exhibition Curated":
            $field['label'] = "Are there additional curators?";
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_5501f238b6a2a', 'acf_change_are_there_secondary_authors_label', 10, 3);

/************************************************************/
// Field: scholarship_secondary_authors
// Default Label: "Additional Authors"

function acf_change_secondary_authors_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Additional Directors";
            break;
        case "Exhibition Curated":
            $field['label'] = "Additional Curators";
            break;
    }
    return $field;
}

add_filter('acf/load_field/key=field_5501f10fb6a26', 'acf_change_secondary_authors_label', 10, 3);

/************************************************************/
// Field (repeater subfield): scholarship_is_author_member
// Default Label: "Is the additional author an APS member?"

function acf_change_is_secondary_author_member_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Is additional director an APS member?";
            break;
        case "Exhibition Curated":
            $field['label'] = "Is additional curator an APS member?";
            break;
    }
    return $field;
}

add_filter('acf/load_field/key=field_5501f1afb6a28', 'acf_change_is_secondary_author_member_label', 10, 3);

/************************************************************/
// Field (repeater subfield): scholarship_author_member
// Default Label: "Additional Author"

function acf_change_secondary_author_member_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Additional Director";
            break;
        case "Exhibition Curated":
            $field['label'] = "Additional Curator";
            break;
    }
    return $field;
}

add_filter('acf/load_field/key=field_5508832a3cfe5', 'acf_change_secondary_author_member_label', 10, 3);

/************************************************************/
// Field (repeater subfield): scholarship_author
// Default Label: "Secondary Author"

function acf_change_secondary_author_label($field ){

    switch($_GET['scholarship_category']){
        case 'Film':
            $field['label'] = "Additional Director";
            break;
        case "Exhibition Curated":
            $field['label'] = "Additional Curator";
            break;
    }
    return $field;
}

add_filter('acf/load_field/key=field_5501f205b6a29', 'acf_change_secondary_author_label', 10, 3);

/************************************************************/
// Field: scholarship_abstract
// Default Label: "Abstract"

//Filter not implmented at the moment
function acf_change_scholarship_abstract_label($field ){
    switch($_GET['scholarship_category']){
        case 'Book Chapter':
            $field['label'] = "Essay Abstract";
            break;
        case 'Film':
        case 'Book':
        case 'Blog Post';
        case 'Conference Paper':
        case 'Dissertation':
        case 'Exhibition Catalog':
        case 'Review':
            $field['label'] = $_GET['scholarship_category'] . " Abstract";
            break;
        case 'Digital Humanities':
        case 'Exhibition Curated': 
            $field['label'] = "Description";
            break;
    }

    return $field;
}

//add_filter('acf/load_field/key=field_54d674d9a74cd', 'acf_change_scholarship_abstract_label', 10, 3);

/************************************************************/

//Field: scholarship_url
//Default Label: "URL"
function acf_change_scholarship_url_label($field){
    switch($_GET['scholarship_category']){
        case 'Blog Post':
        case 'Digital Humanities':
        case 'Film':
            $field['required'] = 1;
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_54d674bea74cc', 'acf_change_scholarship_url_label', 10, 3);

/************************************************************/
//Field: scholarship_url
//Default Label: "URL"
function acf_change_scholarship_publication_date_label($field){
    switch($_GET['scholarship_category']){
        case 'Conference Paper':
            $field['label'] = "Conference Date";
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_54b1bd12e784e', 'acf_change_scholarship_publication_date_label', 10, 3);

/************************************************************/


//Field: opportunities_expiration_date
//Default Label: "Expiration Date"
function acf_change_expiration_date_label($field){
    switch($_GET['opportunities_category']){
        case 'Job':
        case 'Internship':
        case 'Fellowship Or Grant':
        case 'Artist Residency':
        case 'Workshop':
            $field['label'] = "Application Due Date";
            break;
        case "Call For Papers":
            $field['label'] = "Abstract Due Date";
            break;
        case "Curatorial Opportunity":
            $field['label'] = "Proposal Due Date";
        case "Exhibition":
            $field['label'] = "Submission Due Date";
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_54b1b850036b0', 'acf_change_expiration_date_label', 10, 3);

/************************************************************/

//Field: opportunities_description
//Default Label: "Description"

function acf_change_opportunities_description($field){
    switch($_GET['opportunities_category']){
        case 'Call For Papers or Proposals':
        case 'Curatorial Opportunity':
        case 'Exhibition Partcipation':
        case 'Fellowship Or Grant':
        case 'Internship':
        case 'Job':
            $field['required'] = 1;
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_550da42986972', 'acf_change_opportunities_description', 10, 3);


/************************************************************/

//Field: news_description
//Default Label: "Description"

function acf_change_news_description($field){
    switch($_GET['news_category']){
        case 'Collection':
        case 'New Edition':
            $field['required'] = 1;
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_550da052fe23f', 'acf_change_news_description', 10, 3);

/************************************************************/

//Field: news_city
//Default Label: "City"

function acf_change_news_city_required($field){
    switch($_GET['news_category']){
        case 'Art Market':
        case 'Awards or Prizes':
        case 'Collection':
        case 'Conference or Symposium':
        case 'Exhibition Information':
        case 'General Announcement':
        case 'Lecture':
        case 'Professional':
            $field['required'] = 1;
            break;
    }

    return $field;
}

/************************************************************/

add_filter('acf/load_field/key=field_54bd6ad27d3f3', 'acf_change_news_city_required', 10, 3);


//Field: news_country
//Default Label: "Country"

function acf_change_news_country_required($field){
    switch($_GET['news_category']){
        case 'Art Market':
        case 'Awards or Prizes':
        case 'Collection':
        case 'Conference or Symposium':
        case 'Exhibition Information':
        case 'General Announcement':
        case 'Lecture':
        case 'Professional':
            $field['required'] = 1;
            break;
    }

    return $field;
}

add_filter('acf/load_field/key=field_54e4e7594849d', 'acf_change_news_country_required', 10, 3);

/************************************************************/

