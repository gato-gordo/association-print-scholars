<?php

class NewsArtMarket extends News {
	static $category_id = 27;
	static $acf_id = 1000;
	static $postfix = 'art-market';

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

class NewsApsNews extends News {
	static $category_id = 29;
	static $acf_id = 999;
	static $postfix = 'aps-news';

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

class NewsCollection extends News {
	static $category_id = 26;
	static $acf_id = 1004;
	static $postfix = 'collection';

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

class NewsConferenceOrSymposium extends News {
	static $category_id = 25;
	static $acf_id = 1006;
	static $postfix = 'conference-or-symposium';

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

class NewsExhibitionInformation extends News {
	static $category_id = 23;
	static $acf_id = 1010;
	static $postfix = 'exhibition-information';

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

class NewsLecture extends News {
	static $category_id = 24;
	static $acf_id = 1017;
	static $postfix = 'lecture';

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

class NewsNewEdition extends News {
	static $category_id = 30;
	static $acf_id = 1023;
	static $postfix = 'new-edition';

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

class NewsProfessional extends News {
	static $category_id = 28;
	static $acf_id = 1029;
	static $postfix = 'professional';

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

class NewsAwardsOrPrizes extends News {
	static $category_id = 40;
	static $acf_id = 1798;
	static $postfix = 'awards-or-prizes';

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

class NewsGeneralAnnouncement extends News {
	static $category_id = 43;
	static $acf_id = 1905;
	static $postfix = 'general-announcement';

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