<?php

class Opportunities extends MemberManageableResource {

	static $category = "Opportunities";

	static function subCategoryNames(){
		$objects = self::subCategories();
		$subcategory_names = array();
		foreach($objects as $object){
			array_push($subcategory_names, $object->name);
		}
		return $subcategory_names;

	}

	static function subCategories(){
		$category_objects = get_categories( array('parent' => get_cat_ID('Opportunities') ) );
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


	static function show($prefix, $postfix){
		get_template_part('template_parts/opportunities/' . $prefix . '-' . $postfix);
	}

	static function getOptionsFromSubcategories(){
		echo '<option disabled selected> -- select option(s) -- </option>';
		echo '<option value="all">All Subcategories</option>';
		$sub_category_names = self::subCategoryNames();
		foreach($sub_category_names as $sub_category_name){
			echo '<option value="opportunities-' . slug_from_name($sub_category_name) . '">' . $sub_category_name . '</option>';

		}
	}
	static function render_form($id, $update, $second_category, $second_field_group){
		while ( have_posts() ) : the_post();
				acf_form(array(
					'post_id'		=> $id,
					'new_post'		=> array(
						'post_category'  => array(5, $second_category),
						'post_status'		=> 'pending'
					),
					'field_groups' => array(1031, $second_field_group, 1131),
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
		$link = get_page_link(284);
		$update_message = 'Thank you for your entry. This Opportunities item has been submitted and is pending review by an editor before publication. <a href="' . $link . '">Post another Opportunities item</a>';
		self::render_form('new_post', $update_message, $subcategory, $subcategory_fieldgroup);
	}

	static function update($id, $subcategory, $subcategory_fieldgroup){
		$link = get_page_link(326);
		$update_message = 'Thank you. This Opportunities item has been updated. <a href="'. $link . '">Manage more Opportunities items</a>';
		self::render_form($id, $update_message, $subcategory, $subcategory_fieldgroup);
	}
}