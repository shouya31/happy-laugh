<?php

		global $wp_query;
		if( isset ( $wp_query ) ){
			if( is_single() or is_page() ){
				$postID = get_the_ID();
				$column1 = get_post_meta( $postID, 'columnck', true );
			}else{
				$column1 = '';
			}


		$stdata11 = get_option( 'st-data11' );
		if ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'yes' ) || ( is_front_page() && $stdata11 === 'yes' ) || ( $column1 === 'yes' && !is_front_page() && !is_archive() ) ) {
		} elseif ( ( isset($GLOBALS['stdata77']) && $GLOBALS['stdata77'] === 'lp' ) || ( is_front_page() && $stdata11 === 'lp' ) || ( $column1 === 'lp' && !is_front_page() && !is_archive() ) ) {
		} else {

	?>
<div class="grid-span-2 col-start-8 col-end-11 w-full flex flex-col justify-self-center pl-20 pr-6">
	<?php get_template_part( 'searchform' ); //検索バー読み込み ?>
	<?php get_template_part( 'template-parts/ranking-article' ); //ランキング投稿一覧読み込み ?>
</div>
<!-- /#side -->
<?php }
} ?>
