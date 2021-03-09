<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="i7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> <?php st_html_class(); ?>>
	<!--<![endif]-->
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,viewport-fit=cover">
		<meta name="format-detection" content="telephone=no" >
		<meta name="referrer" content="no-referrer-when-downgrade"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tailwind.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>HappyLaugh MAGAZINE</title>
	</head>
  <body>
    <!-- ヘッダー -->
    <header class="shadow-xl">
      <!-- ロゴ -->
      <div class="flex flex-col items-center pt-4 pb-4 lg:mb-8">
        <div class="text-lg lg:text-4xl font-semibold">ハピラフ</div>
        <div class="text-3xl lg:text-6xl font-black">MAGAZINE</div>
      </div>
      <!-- /ロゴ -->

      <!-- メニュー -->
      <div class="hidden lg:flex justify-center border-b-2 border-gray-300 pt-4 pb-4">
        <div class="w-3/6 flex justify-around">
          <div>Home</div>
          <div>Ranking</div>
          <div>Categories</div>
          <div>Writer</div>
        </div>
      </div>
      <div class="hidden lg:flex justify-center pt-4 pb-4">
        <div class="w-5/6 flex justify-around">
          <div>category1</div>
          <div>category2</div>
          <div>category3</div>
          <div>category4</div>
        </div>
      </div>
      <!-- /メニュー -->
    </header>
    <!-- /ヘッダー -->
