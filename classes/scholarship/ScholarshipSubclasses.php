<?php

class ScholarshipArticle extends Scholarship {
	static $category_id = 10;
	static $acf_id = 1078;
	static $postfix = 'article';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){
		parent::create(self::$category_id, self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipBlogPost extends Scholarship {
	static $category_id = 13;
	static $acf_id = 1083;
	static $postfix = 'blog-post';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipBookChapter extends Scholarship {
	static $category_id = 9;
	static $acf_id = 1088;
	static $postfix = 'book-chapter';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}

	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipBookOrExhibitionCatalog extends Scholarship {
	static $category_id = 7;
	static $acf_id = 1085;
	static $postfix = 'book-or-exhibition-catalog';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipConferencePaper extends Scholarship {
	static $category_id = 16;
	static $acf_id = 1093;
	static $postfix = 'conference-paper';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipDigitalHumanities extends Scholarship {
	static $category_id = 15;
	static $acf_id = 1095;
	static $postfix = 'digital-humanities';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipDissertationOrMAThesis extends Scholarship {
	static $category_id = 12;
	static $acf_id = 1097;
	static $postfix = 'dissertation-or-ma-thesis';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipFilm extends Scholarship {
	static $category_id = 14;
	static $acf_id = 1103;
	static $postfix = 'film';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);

	}
}

class ScholarshipReview extends Scholarship {
	static $category_id = 11;
	static $acf_id = 1105;
	static $postfix = 'review';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipCatalogEntry extends Scholarship {
	static $category_id = 41;
	static $acf_id = 1803;
	static $postfix = 'catalog-entry';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}

class ScholarshipExhibitionCurated extends Scholarship {
	static $category_id = 42;
	static $acf_id = 1807;
	static $postfix = 'exhibition-curated';

	static function the_form_header(){
		parent::the_form_header(self::$category_id);
	}

	static function create(){;
		parent::create(self::$category_id , self::$acf_id);
	}
	static function update($post_id){
		parent::update($post_id, self::$category_id, self::$acf_id);
	}
	static function show($prefix){
		parent::show($prefix, self::$postfix);
	}
}