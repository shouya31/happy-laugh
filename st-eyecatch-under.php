<?php 
/**
* st-topin.phpにもアイキャッチに関する別記述あり
*/
$postID = get_queried_object_id();
if  ( st_is_home_check() ) { // 投稿ページ（メインページ）
	$postID = get_option( 'page_for_posts' );
}
$eyecatchset = get_post_meta( $postID, 'eyecatch_set', true );

if ( has_post_thumbnail() && (( isset($GLOBALS['stdata53']) && $GLOBALS['stdata53'] === 'yes' ) || ( isset( $eyecatchset ) && $eyecatchset === 'yes' ))) { ?>
	<div class="<?php st_eyecatch_class(); ?> <?php if(trim($GLOBALS['stdata217']) !== ''){ echo 'st-eyecatch-under'; } //アイキャッチ画像がタイトル下の場合 ?>">
		<?php the_post_thumbnail('full'); ?>

	<?php //クレジット表示
	if( is_single() or is_page() ){
		$stcopyurl = get_post_meta( $postID, 'st_copyurl', true );
		$stcopyright = get_post_meta( $postID, 'st_copyright', true );
	}else{
		$stcopyurl = '';
		$stcopyright = '';
	}

	if ( trim( $stcopyright ) !== '' ) {
		if ( isset($GLOBALS['stdata241']) && $GLOBALS['stdata241'] === 'photo' ) { // ポラロイドデザイン ?>	
			<p id="caption-attachment" class="wp-caption-text"><i class="fa fa-copyright" aria-hidden="true"></i><?php echo esc_url( get_home_url()); ?></p>
		<?php } else { ?>
			<p class="eyecatch-copyurl"><i class="fa fa-copyright" aria-hidden="true"></i><?php echo esc_url( get_home_url()); ?></p>
		<?php }
	} elseif ( trim( $stcopyurl ) !== '' ) {
		if ( isset($GLOBALS['stdata241']) && $GLOBALS['stdata241'] === 'photo' ) { // ポラロイドデザイン ?>		
			<p id="caption-attachment" class="wp-caption-text"><i class="fa fa-camera-retro" aria-hidden="true"></i><?php echo stripslashes( $stcopyurl ); ?></p>
		<?php } else { ?>
			<p class="eyecatch-copyurl"><i class="fa fa-camera-retro" aria-hidden="true"></i><?php echo stripslashes( $stcopyurl ); ?></p>
		<?php }
	}elseif((!empty(get_post(get_post_thumbnail_id())->post_excerpt)) && (trim($GLOBALS['stdata75']) !== '' && $GLOBALS['stdata75'] === 'yes')){ //キャプションがあり且つ表示にチェックが入っている場合
		if ( isset($GLOBALS['stdata241']) && $GLOBALS['stdata241'] === 'photo' ) { // ポラロイドデザイン ?>		
			<p id="caption-attachment" class="wp-caption-text"><i class="fa fa-camera-retro" aria-hidden="true"></i><?php echo get_post(get_post_thumbnail_id())->post_excerpt;?></p>
		<?php } else { ?>
			<p class="eyecatch-copyurl"><i class="fa fa-camera-retro" aria-hidden="true"></i><?php echo get_post(get_post_thumbnail_id())->post_excerpt;?></p>
		<?php  }
	}else{
	}
	?>

	</div>
<?php	
}
