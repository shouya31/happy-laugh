<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>

    <!-- ここからPICKUP -->
    <div class="hidden lg:block h-560 w-full lg:flex justify-center items-center lg:mt-16 mb-48">
      <?php get_template_part( 'template-parts/top-slide' ); //FVのスライダー読み込み ?>


    </div>
    <!-- PICKUPここまで -->

    <!-- mobilePICKUPここから -->
    <div class="lg:hidden">
      <div class="h-64 bg-cover bg-no-repeat bg-center bg-coffee">
        <div class="w-1/4 bg-white flex justify-center">
          <div class="text-xs text-yellow-800 pt-2 pb-2">
            CAFE
          </div>
        </div>
      </div>
      <div class="p-4">
        <div class="text-2xl mb-2">title</div>
        <div class="text-xs text-gray-300 mb-2">2021.03.04</div>
        <div class="flex">
          <div class="h-6 w-6 bg-contain bg-no-repeat bg-baby"></div>
          <div class="flex items-center">
            <div class="text-xs text-gray-300 ml-2">user</div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobilePICKUPここから -->

    <!-- ここからPCメインコンテンツ -->
    <div class="hidden lg:grid grid-cols-2 lg:grid-cols-11 border-t border-gray-300 lg:border-none lg:mb-32">
      <!-- ここからNEWS -->
      <div class="grid-span-1 lg:col-start-2 lg:col-end-8 flex flex-col pl-16">
        <div class="h-14 w-full lg:h-20 lg:w-11/12 flex justify-center items-center lg:justify-start lg:items-start border-b-2 border-gray-900 lg:border-b-4 lg:border-gray-900 mb-10">
          <div class="lg:text-5xl font-verdana tracking-wider lg:font-bold">
            NEW
          </div>
        </div>

        <!-- ここから投稿 -->
        <?php get_template_part( 'template-parts/new-article' ); //投稿一覧読み込み ?>

        <!-- 投稿ここまで -->

        <!-- ここからREADMORE -->
        <div class="hidden lg:block w-full lg:w-11/12 lg:flex justify-center items-center mt-8">
          <div class="h-16 w-40 flex justify-center items-center border-4 border-gray-900">
            <div class="text-1xl text-center font-verdana">
              READ MORE
            </div>
          </div>
        </div>
        <!-- READMOREここまで-->
      </div>
      <!-- NEWSここまで -->

      <!-- ここからRANKING -->
      <?php get_template_part( 'sidebar' ); //サイドバー読み込み ?>
      <!-- RANKINGここまで -->
    </div>
    <!-- PCメインコンテンツここまで -->

    <!-- ここからmobileメインコンテンツ -->
    <div class="lg:hidden w-screen">
      <!-- ここからスイッチ -->
      <div class="h-14 w-full flex border-t border-gray-300">
        <div class="w-1/2 flex justify-center items-center border-b border-gray-900">
          <label class="w-full font-verdana text-xl text-center tracking-widest py-2" for="new-toggle">NEW</label>
        </div>
        <div class="w-1/2 flex justify-center items-center border-l border-b border-gray-300">
          <label class="w-full font-verdana text-xl text-center tracking-widest py-2" for="ranking-toggle">RECOMMEND</label>
        </div>
      </div>
      <!-- スイッチここまで -->

      <!-- ここから投稿 -->
      <input type="radio" class="hidden" name="new-ranking-switch" id="new-toggle" checked="checked"></input>
      <div class="grid grid-cols-2" id="new">
        <?php get_template_part( 'template-parts/mobile-new-article' ); //NEW投稿一覧読み込み ?>
      </div>
      <input type="radio" class="hidden" name="new-ranking-switch" id="ranking-toggle"></input>
      <div class="w-full grid grid-cols-2" id="ranking">
        <?php get_template_part( 'template-parts/mobile-ranking-article' ); //NEW投稿一覧読み込み ?>
      </div>
      <!-- 投稿ここまで -->

      <!-- ここからREADMORE -->
      <div class="lg:hidden w-full flex justify-center pt-8 pb-16">
        <div class="w-5/12 flex justify-center border-2 border-gray-900">
          <div class="text-sm font-extralight pt-2 pb-2">READ MORE</div>
        </div>
      </div>
      <!-- READMOREここまで -->
    </div>
    <!-- mobileメインコンテンツここまで -->

    <!-- ここから帯 -->
    <div class="h-480 w-screen bg-bottom bg-cover flex justify-center items-center">
      <div class="h-240 w-3/4 lg:w-1/2 bg-white bg-opacity-25 flex flex-col justify-around justify-center items-center p-4">
        <div class="h-24 w-11/12 lg:w-5/6 text-2xl text-center break-words">
          texttexttexttext<br>
          texttexttexttext<br>
          texttexttexttext
        </div>
        <div class="h-10 w-3/4 lg:w-2/5 flex justify-center items-center bg-gray-900">
          <div class="text-white text-center">
            ライター一覧
          </div>
        </div>
      </div>
    </div>
    <!-- 帯ここまで -->

    <!-- ここからFooter -->
    <?php get_footer(); ?>
