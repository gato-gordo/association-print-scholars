<?php 

/** 
*  Template Name: Create
**/

?>
<?php acf_form_head(); ?>


<?php  get_header(); ?>


<?php if(is_user_logged_in()): ?>

	<?php
	/*  
	  Parse the query string into class name corresponding to the subcategory for the kind of post that the user wants to create.
	*/
	?>

	<?php $subclass_name = MemberManageableResource::subclass_name_from_get($_GET) ?>

	<?php
	/*
		If there is no query string (or a query string ResourceInterface can't handle), then show the form to to pick a subcategory.  Otherwise, show the form to create a post for the designated subcategory.
	*/
	?>
	<?php if(!isset($subclass_name)): ?>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
	<?php  else: ?> 
		<h1><?php $subclass_name::the_form_header(); ?></h1>
		<?php if(strpos( $subclass_name, 'Scholarship') !== false && !isset($_GET['updated'])): ?>
			<div class="explanatory-text">
				<p>Please enter your scholarship below, noting the required fields. All entries will be automatically formatted into bibliographic citations. There is no need to add any additional punctuation.</p>
			</div>
		<?php endif; ?>
		<?php $subclass_name::create();  ?>
	<?php endif; ?>

<?php else: ?>

	<p>This page is restriced to APS members only.  <a href="<?php the_field('join_us', 'option'); ?>">Join APS</a> </p>

<?php endif; ?>

<?php get_footer(); ?>