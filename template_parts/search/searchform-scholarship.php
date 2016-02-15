<form method="get" id="searchform" action="<?php echo get_category_link(4); ?>">
	<div>
		<input type="text" size="put_a_size_here" name="s" id="s" value="Search Scholarship" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
		<input type="hidden" name="cat" id="cat" value="4" />
		<input type="submit" id="searchsubmit" value="Submit" class="btn" />
	</div>
</form>