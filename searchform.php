<div class="rounded-full border border-black mb-14">
	<form method="get" class="flex justify-center" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label class="hidden" for="s">
			<?php __( '', 'default' ); ?>
		</label>
		<div class="w-full flex">
			<input type="submit" value="&#xf002;" class="fa w-2/3 text-right" id="searchsubmit" />
			<input type="text" placeholder="SEARCH" value="<?php the_search_query(); ?>" name="s" id="s" />
		</div>
	</form>
</div>
<!-- /stinger --> 
