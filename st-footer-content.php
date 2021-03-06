<!-- フッターのメインコンテンツ -->

<?php if ( get_option( 'st_icon_logo' ) ): //アイコンロゴ画像がある時 ?>
	<div id="st-footer-logo">
		<div id="st-icon-logo">
			<?php if ( is_front_page() ): ?>
				<img src="<?php echo esc_url( get_option( 'st_icon_logo' ) ); ?>" >
			<?php else: ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_option( 'st_icon_logo' ) ); ?>" ></a>
			<?php endif; ?>
		</div>
<?php endif; ?>

	<div id="st-text-logo">

		<h3 class="footerlogo">
		<!-- ロゴ又はブログ名 -->
		<?php if ( !is_home() || !is_front_page() ): ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php endif; ?>
			<?php if  ( get_option( 'st_footer_logo' )) : //フッター用ロゴ画像がある時 ?>	
				<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_footer_logo' ) ); ?>" >
			<?php else: //フッター用ロゴ画像が無い時 ?>
				<?php if  ( get_option( 'st_logo_image' ) && (st_headerfooter_logo()) ): //ヘッダーロゴ画像があり併用する時 ?>
					<img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url( get_option( 'st_logo_image' ) ); ?>" >
				<?php else: //ロゴ画像が無い時 ?>
					<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php if ( !is_home() || !is_front_page() ): ?>
			</a>
		<?php endif; ?>
		</h3>
		<?php if(trim($GLOBALS['stdata102']) === ''): ?>
			<p class="footer-description">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
			</p>
		<?php endif; ?>
	</div>
		
<?php if ( get_option( 'st_icon_logo' ) ): //アイコンロゴ画像がある時 ?>
	</div><!-- /#st-footer-logo -->
<?php endif; ?>

<?php if(trim($GLOBALS['stdata206']) === ''): ?>
	<div class="st-footer-tel">
		<?php get_template_part( 'st-header-widget' ); //電話番号とヘッダー用ウィジェット ?>
	</div>
<?php endif; ?>
