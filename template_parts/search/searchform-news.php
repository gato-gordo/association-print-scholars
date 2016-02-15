<form method="get" id="searchform" action="<?php echo get_category_link(3); ?>">
	<div>
		<input type="text" name="s" id="s" value="Search News" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
		<input type="hidden" name="cat" id="cat" value="3" />
		<input type="submit" id="searchsubmit" value="Submit" class="btn" />
	</div>
</form>