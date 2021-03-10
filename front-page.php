<?php
/*
Template Name: TOPページ
*/
?>

<?php get_header(); ?>

    <!-- ここからPICKUP -->
    <div class="hidden lg:block h-560 w-full lg:flex justify-center items-center lg:mt-16 mb-48">
    <?php
      echo do_shortcode('[smartslider3 slider="2"]');
      ?>
      <!-- <div class="h-560 w-3/5 bg-cover bg-no-repeat bg-center">
        <div class="w-1/6 flex justify-center bg-white">
          <div class="text-red-300 pt-2 pb-2">
            CAFE
          </div>
        </div>
        <div class="h-560 w-full flex flex-col justify-center items-center">
            <div class="w-4/5 text-white text-4xl text-center mb-4">
              タイトルタイトルタイトルタイトルタイトル<br>
              タイトルタイトルタイトル
            </div>
            <div class="w-full flex justify-center relative">
              <div class="absolute right-2/3 text-white">2021.03.01</div>
              <div class="flex">
                <div class="h-8 w-8 bg-contain bg-no-repeat bg-baby"></div>
                <div class="text-white ml-4">User</div>
              </div>
            </div>
        </div>
      </div> -->
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
        <div class="h-14 w-full lg:h-24 lg:w-9/12 flex justify-center items-center lg:justify-start lg:items-start border-b-2 border-gray-900 lg:border-b-8 lg:border-gray-900 mb-12">
          <div class="text-2xl lg:text-6xl lg:font-bold font-verdana">
            NEW
          </div>
        </div>

        <!-- ここから投稿 -->
        <?php get_template_part( 'template-parts/new-article' ); //投稿一覧読み込み ?>

        <!-- 投稿ここまで -->

        <!-- ここからREADMORE -->
        <div class="hidden lg:block w-full lg:w-11/12 lg:flex justify-center items-center mt-8">
          <div class="h-20 w-96 flex justify-center items-center border-4 border-gray-900">
            <div class="text-3xl text-center font-verdana">
              READ MORE
            </div>
          </div>
        </div>
        <!-- READMOREここまで-->
      </div>
      <!-- NEWSここまで -->

      <!-- ここからRANKING -->
        <?php get_template_part( 'template-parts/ranking-article' ); //ランキング投稿一覧読み込み ?>
      <!-- RANKINGここまで -->
    </div>
    <!-- PCメインコンテンツここまで -->

    <!-- ここからmobileメインコンテンツ -->
    <div class="lg:hidden w-screen">
      <!-- ここからスイッチ -->
      <div class="w-full flex border-t border-gray-300">
        <div class="w-1/2 border-b border-gray-900 flex justify-center items-center">
          <div class="text-2xl font-light pt-2 pb-2 font-verdana">
            NEW
          </div>
        </div>
        <div class="w-1/2 border-l border-b border-gray-300 flex justify-center items-center">
          <div class="text-2xl font-light pt-2 pb-2 font-verdana">
            RANKING
          </div>
        </div>
      </div>
      <!-- スイッチここまで -->

      <!-- ここから投稿 -->
      <div class="w-full grid grid-cols-2 grid-rows-4">
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
        <div class="h-72 w-full flex flex-col items-center p-4">
          <div class="h-5/6 w-full bg-cover bg-center bg-flower">
            <div class="w-3/5 flex justify-center bg-white">
              <div class="text-xs text-red-300 pt-2 pb-2">category</div>
            </div>
          </div>
          <div class="h-2/6 w-full text-xl pt-2 pb-2">title</div>
          <div class="h-1/6 w-full flex flex-col">
            <div class="w-full text-xs text-gray-300">2021.03.05</div>
            <div class="w-full flex items-center">
              <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"></div>
              <div class="text-xs text-gray-300 ml-2">user</div>
            </div>
          </div>
        </div>
      </div>
      <!-- 投稿ここまで -->

      <!-- ここからREADMORE -->
      <div class="w-full flex justify-center pt-8 pb-16">
        <div class="w-5/12 flex justify-center border-4 border-gray-900">
          <div class="font-extralight pt-2 pb-2">READ MORE</div>
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
