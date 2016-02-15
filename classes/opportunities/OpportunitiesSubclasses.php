<?php

class OpportunitiesCallForPapersOrProposals extends Opportunities {
	static $category_id = 17;
	static $acf_id = 1037;
	static $postfix = 'call-for-papers-or-proposals';

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

class OpportunitiesCuratorialOpportunity extends Opportunities {
	static $category_id = 21;
	static $acf_id = 1041;
	static $postfix = 'curatorial-opportunity';

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
 	  
class OpportunitiesExhibitionParticipation extends Opportunities {
	static $category_id = 22;
	static $acf_id = 1045;
	static $postfix = 'exhibition-participation';

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

class OpportunitiesFellowshipOrGrant extends Opportunities {
	static $category_id = 20;
	static $acf_id = 1049;
	static $postfix = 'fellowship-or-grant';

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

class OpportunitiesInternship extends Opportunities {
	static $category_id = 19;
	static $acf_id = 1051;
	static $postfix = 'internship';

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

class OpportunitiesJob extends Opportunities {
	static $category_id = 18;
	static $acf_id = 1053;
	static $postfix = 'job';

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

class OpportunitiesWorkshop extends Opportunities {
	static $category_id = 38;
	static $acf_id = 1210;
	static $postfix = 'workshop';

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

class OpportunitiesArtistResidency extends Opportunities {
	static $category_id = 37;
	static $acf_id =  1205;
	static $postfix = 'artist-residency';

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

class OpportunitiesApsOpportunity extends Opportunities {
	static $category_id = 39;
	static $acf_id =  1220;
	static $postfix = 'aps-opportunity';

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