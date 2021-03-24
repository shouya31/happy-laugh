<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>

    <!-- ここからPICKUP -->
    <?php get_template_part( 'template-parts/top-slide' ); //FVのスライダー読み込み ?>
    <!-- PICKUPここまで -->

    <!-- ここからPCメインコンテンツ -->
    <div class="hidden lg:grid grid-cols-2 grid-cols-11 mb-32">
      <?php get_template_part( 'template-parts/recommend-article' ); //RECOMMEND記事読み込み ?>
      <?php get_template_part( 'sidebar' ); //サイドバー読み込み ?>
      <?php get_template_part( 'template-parts/new-article' ); //NEW投稿一覧読み込み ?>
    </div>
    <!-- PCメインコンテンツここまで -->

    <!-- ここからmobileメインコンテンツ -->
    <div class="lg:hidden w-screen mb-12 px-4">
      <!-- ここからスイッチ -->
      <div class="h-14 w-full flex border-t border-gray-300">
        <div class="w-1/2 flex justify-center items-center border-b border-gray-300">
          <label class="w-full font-bold text-xl text-center tracking-widest py-2" for="new-toggle">NEW</label>
        </div>
        <div class="w-1/2 flex justify-center items-center border-l border-b border-gray-300">
          <label class="w-full font-bold text-xl text-center tracking-widest py-2" for="recommend-toggle">RECOMMEND</label>
        </div>
      </div>
      <!-- スイッチここまで -->

      <!-- ここから投稿 -->
      <input type="radio" class="hidden" name="new-recommend-switch" id="new-toggle" checked="checked" />

      <div id="new">
        <?php get_template_part( 'template-parts/mobile-new-article' ); //NEW投稿一覧読み込み ?>
        <input type="radio" class="hidden" name="new-recommend-switch" id="recommend-toggle" />
      </div>

      <div id="recommend">
        <?php get_template_part( 'template-parts/mobile-recommend-article' ); //RECOMMEND投稿一覧読み込み ?>
      </div>
      <!-- 投稿ここまで -->
    </div>
    <!-- mobileメインコンテンツここまで -->

    <div class="lg:hidden">
      <!-- SP_RANKING -->

      <?php get_template_part( 'template-parts/mobile-ranking-article' ); //RANKING読み込み ?>
      <!-- /SP_RANKING -->

      <!-- SP_CATEGORY -->
      <?php get_template_part( 'template-parts/side-category' ); //CATEGORY一覧読み込み ?>
      <!-- /SP_CATEGORY -->
    </div>

    <!-- ここから帯 -->
    <div class="h-480 w-screen bg-bottom bg-cover flex justify-center items-center" style="height: 480px;background-image: url('/wp-content/themes/affinger5/images/writer-intro.png');">
      <div class="h-240 w-3/4 bg-white bg-opacity-25 flex flex-col justify-around justify-center items-center p-4" style="height: 360px;">
        <div class="h-24 w-11/12 lg:w-5/6 text-2xl text-center break-words">
          texttexttexttext<br>
          texttexttexttext<br>
          texttexttexttext
        </div>
        <a href="/writers" class="h-12 w-3/4 lg:w-2/5 flex justify-center items-center bg-gray-900 rounded-full">
          <div class="text-white text-center">
            ライター一覧
          </div>
        </a>
      </div>
    </div>
    <!-- 帯ここまで -->

    <!-- ここからFooter -->
    <?php get_footer(); ?>
