<?php

class Scholarship extends MemberManageableResource {

	static $category = "Scholarship";

	static function subCategoryNames(){
		$objects = self::subCategories();
		$subcategory_names = array();
		foreach($objects as $object){
			array_push($subcategory_names, $object->name);
		}
		return $subcategory_names;

	}

	static function subCategories(){
		$category_objects = get_categories( array('parent' => get_cat_ID('Scholarship') ) );
		return $category_objects;
	}

	/* Assumes user cannot assign multiple subcategories of Scholarship to a post */
	static function get_child_category($post_id){
		$sub_category_names = self::subCategoryNames();
		foreach($sub_category_names as $sub_category_name){
			if(has_category($sub_category_name, get_post($post_id) )){
				return $sub_category_name;
			}
		}
	}

	static function getOptionsFromSubcategories(){
		echo '<option disabled selected> -- select option(s) -- </option>';
		echo '<option value="all">All Subcategories</option>';
		$sub_category_names = self::subCategoryNames();
		foreach($sub_category_names as $sub_category_name){
			echo '<option value="scholarship-' . slug_from_name($sub_category_name) . '">' . $sub_category_name . '</option>';

		}
	}

	static function show($prefix, $postfix){
		get_template_part('template_parts/scholarship/' . $prefix . '-' . $postfix);
	}

	static function render_form($id, $update, $second_category, $second_field_group){
		while ( have_posts() ) : the_post();
				acf_form(array(
					'post_id'		=> $id,
					'new_post'		=> array(
						'post_category'  => array(4, $second_category),
						'post_status'		=> 'publish'
					),
					'field_groups' => array(1065, $second_field_group, 1131),
					'post_title' => true,
					'submit_value'		=> 'Submit',
					'updated_message' => $update
				));
		endwhile;
	}

	static function the_form_header($subcategory){
		echo self::$category . ": " . get_cat_name($subcategory);
	}

	static function create($subcategory, $subcategory_fieldgroup){
		$link = get_page_link(286);
		$update_message = 'Thank you for your entry. This scholarship item has been posted to our database. <a href="' . $link . '">Post another scholarship item</a>';
		self::render_form('new_post', $update_message, $subcategory, $subcategory_fieldgroup);
	}

	static function update($id, $subcategory, $subcategory_fieldgroup){
		$link = get_page_link(324);
		$update_message = 'Thank you. This scholarship item has been updated. <a href="'. $link . '">Manage more Scholarship items</a>';
		self::render_form($id, $update_message, $subcategory, $subcategory_fieldgroup);
	}
}