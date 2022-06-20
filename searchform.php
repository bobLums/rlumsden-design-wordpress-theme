<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label for="search"></label>
	<input type="text" name="s" id="search" value="<?php the_search_query();?>" required> 
	<button type="submit">Search</button>
</form>