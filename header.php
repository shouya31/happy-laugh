<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> <?php st_html_class(); ?> style="margin-top: 0px !important;">
	<!--<![endif]-->
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <?php if ( is_front_page() && !is_paged() ): ?>
			<meta name="robots" content="index,follow">
		<?php elseif ( is_search() or is_404() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( !is_category() && !is_tag() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_paged() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_attachment() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( ! is_front_page() && trim($GLOBALS["stdata9"]) !== '' &&  ($GLOBALS["stdata9"]) == $post->ID ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_category() && trim($GLOBALS["stdata15"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_tag() && trim($GLOBALS["stdata420"]) !== ''): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" >

		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover">
		<meta name="format-detection" content="telephone=no" >
		<meta name="referrer" content="no-referrer-when-downgrade"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

    <title>HappyLaugh MAGAZINE</title>

    <?php wp_head(); ?>
		<?php get_template_part( 'analyticstracking' ); //アナリティクスコード ?>
		<?php get_template_part( 'st-ogp' ); //OGP設定 ?>
		<?php get_template_part( 'st-richjs' ); //効果追加 ?>
		<?php get_template_part( 'a-header-code' ); //ヘッダーに挿入するコード ?>
	</head>
  <body>
    <!-- ヘッダー -->
    <header class="shadow-lg">
      <!-- ロゴ -->
      <a href="/" class="flex flex-col items-center py-1">
        <div class="text-1xl lg:text-xl font-bold tracking-widest">ハピラフ</div>
        <div class="text-2xl lg:text-4xl font-black tracking-widest" style="font-family: system-ui;">MAGAZINE</div>
      </a>
      <!-- /ロゴ -->

      <!-- メニュー -->
      <div class="hidden lg:flex justify-center pt-4 pb-4">
        <div class="w-7/12 flex justify-around text-xs">
          <a href="/category/コスメ" class="flex items-center">
            <div class="h-6 w-6 bg-cosme bg-cover mr-4"></div>
            <div>コスメ</div>
          </a>
          <a href="/category/占い・恋愛" class="flex items-center">
            <div class="h-6 w-6 bg-love bg-cover mr-4"></div>
            <div>占い・恋愛</div>
          </a>
          <a href="/category/ファッション" class="flex items-center">
            <div class="h-6 w-6 bg-fashion bg-cover mr-4"></div>
            <div>ファッション</div>
          </a>
          <a href="/category/ライフスタイル" class="flex items-center">
            <div class="h-6 w-6 bg-lifestyle bg-cover mr-4"></div>
            <div>ライフスタイル</div>
          </a>
          <a href="/category/アカウント一覧" class="flex items-center">
            <div class="h-6 w-6 bg-youtube bg-cover mr-4"></div>
            <div>アカウント一覧</div>
          </a>
        </div>
      </div>
      <!-- /メニュー -->
    </header>
    <!-- /ヘッダー -->
