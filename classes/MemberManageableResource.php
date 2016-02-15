<?php

class MemberManageableResource {
	static $parent_categories = array('Scholarship', 'Opportunities', 'News', 'Print');

	static function get_parent_category($post_id){
		foreach (self::$parent_categories as $category) {
			if(has_category($category, get_post($post_id) )){
				return $category;
			}
		}
		return NULL;
	}

	static function subclass_name_from_get($get_array){
		$subcategory_class_name = NULL;
		foreach (self::$parent_categories as $category) {
			$variable = strtolower($category) . '_category';
			if (isset($get_array[$variable])){
				$sub_category = $get_array[$variable];
				$subcategory_class_name = nameToClassName($category, $sub_category);
				break;
			}
		}
		return $subcategory_class_name;
	}

}


function nameToClassName($parent, $child){
		$name_with_spaces = strtolower($parent . ' ' . $child);
  		$class_name =	str_replace(' ', '',
  							ucwords($name_with_spaces)
  						);
        return $class_name;
}

function slug_from_name($category_name){
	return str_replace(' ', '-', strtolower($category_name));
}
