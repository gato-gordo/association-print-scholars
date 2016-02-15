<?php

/** 
* Template Name: Update 
**/

?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

<?php
	
	$subclass_name = MemberManageableResource::subclass_name_from_get($_GET);
	?><h1><?php $subclass_name::the_form_header(); ?></h1><?php
	$subclass_name::update($_GET['post_id']);
?>


<?php get_footer(); ?>