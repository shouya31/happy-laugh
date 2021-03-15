<div id="search" class="search-custom-d mb-14">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="hidden" for="s">
			<?php __( '', 'default' ); ?>
		</label>
		<input type="text" placeholder="<?php echo esc_attr( st_get_search_form_placeholder() ); ?>" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" value="&#xf002;" class="fa" id="searchsubmit" />
	</form>
</div>
<!-- /stinger --> 
