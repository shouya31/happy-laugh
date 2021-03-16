<div class="rounded-full border border-black mb-14">
	<form method="get" class="h-12 flex justify-center" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="hidden" for="s">
			<?php __( '', 'default' ); ?>
		</label>
		<input type="text" placeholder="&#xf002; SEARCH" value="<?php the_search_query(); ?>" name="s" class="text-center rounded-full" id="s" />
		<input type="submit" class="hidden" id="searchsubmit" />
	</form>
</div>
<!-- /stinger --> 
