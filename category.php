<?php get_header(); ?>
  <?php
  global $post;
  $categories = get_the_category( $post->ID );
    $now_category = get_query_var('cat');
    // array_pop($categories);
    $separator  = ' ';
    $output     = '';
  ?>
    <!-- メインコンテンツ -->
    <div class="sm:grid sm:grid-cols-12 px-4 sm:p-0 sm:mb-32">
      <!-- パンくず-->
      <div class="hidden sm:block col-start-2 col-end-9 pt-2 sm:pt-8">
        <div class="text-xs text-gray-300 pl-4 mb-4 sm:mb-16">Home > ファッション</div>
      </div>
      <!-- /パンくず-->
      <!-- PC版カテゴリ説明 -->
      <div class="hidden sm:block col-start-3 col-end-11 px-16">
        <div class="text-3xl lg:text-4xl font-black tracking-widest center mb-10"><?php single_cat_title(); ?>　記事一覧</div>
        <?php
          $child_ids = get_term_children($now_category, 'category');
          if (count($child_ids) > 1): ?>
          <div class="divide-y-4 divide-black border-2 border-black py-8 px-16 mb-24">
            <div class="mb-8"><?php echo category_description(); ?></div>
            <div class="flex pt-8">

                <?php
                foreach ( $child_ids as $category_id ): ?>
                  <a href="<?php echo get_category_link( $category_id ); ?>" class="text-xs border border-black rounded-full mr-2" style="padding: 4px 10px;"><?php echo get_the_category_by_ID( $category_id ) ?></a>
                <?php endforeach ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <!-- /PC版カテゴリ説明 -->

      <!-- SP版カテゴリ説明 -->
      <div class="sm:hidden border border-black">
        <div class="relative px-6">
          <div class="divide-y divide-black">
            <div class="border-b border-black pt-16 pb-4">「男性・女性服」、「スニーカー」、「ファッション小物」といった、ファッションに関わるものを紹介します。</div>
            <div class="flex pt-4 pb-16">
              <div class="text-xs border border-black rounded-full p-1 mr-2">カテゴリー</div>
              <div class="text-xs border border-black rounded-full p-1 mr-2">カテゴリー</div>
            </div>
          </div>
        </div>
      </div>
      <!-- /SP版カテゴリ説明 -->

      <!-- カテゴリ記事 -->

      <div class="hidden sm:block col-start-2 col-end-8">
        <div class="text-4xl border-b-4 border-black pl-2 pb-4 mb-12 font-bold"><?php single_cat_title(); ?></div>

					<?php
						$postslist = get_posts( "category=$now_category&numberposts=$numberposts&order=DESC&orderby=date" );
						foreach ( $postslist as $post ) {

            // サムネイルのURL取得ロジック
            $thumbnail_id = get_post_thumbnail_id();
            $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
            $category = get_the_category();
					?>

						<a href="<?php echo get_permalink( $post->ID ); ?>" class="w-full flex mb-10">
							<div class="h-56 w-1/3  bg-cover bg-center" style="background-image: url('<?php echo $eye_img[0] ?>');">
                <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2"><?php echo $category[0]->cat_name ?></div>
							</div>
							<div class="h-56 w-2/3 py-1 pl-8">
								<div class="flex justify-between mb-4">
									<div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
									<div class="flex">
										<div class="h-4 w-4 bg-baby bg-cover bg-center"><?php echo get_avatar( $author ); ?></div>
										<div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
									</div>
								</div>
								<div class="text-2xl mb-3"><?php echo $post->post_title; ?></div>
								<div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
							</div>
						</a>
					<?php } ?>
				</div>
      <!-- /カテゴリ記事 -->

      <!-- ランキング -->
      <div class="sm:hidden mt-16">
        <div class="text-xl font-bold border-b-4 border-black p-2 mb-4">RANKING</div>
        <input type="radio" name="writer-switch" checked="checked" class="hidden" id="writer-toggle-1" />
        <div class="px-2" id="writer-articles-1">
          <a href="/" class="h-24 w-full flex mb-6">
            <div class="h-full w-1/3 bg-flower bg-cover bg-center"></div>
            <div class="h-full w-2/3 text-sm break-words py-1 pl-8">
              テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </div>
          </a>
				</div>
      </div>
      <!-- /ライター -->

      <!-- カテゴリ一覧 -->
      <div class="sm:hidden">
        <div class="text-xl font-bold border-b-4 border-black mb-8 p-2">
          CATEGORY
        </div>
        <div class="flex flex-col mb-4">
          <a href="/category/コスメ" class="text-sm text-gray-500 font-semibold mb-2">コスメ</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">イエベ</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">ブルベ</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">ポーチの中身</a>
        </div>
        <div class="flex flex-col mb-4">
          <a href="/category/占い・恋愛" class="text-sm text-gray-500 font-semibold mb-2">占い・恋愛</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">占い</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">恋愛</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">心理テスト</a>
        </div>
        <div class="flex flex-col mb-4">
          <a href="/category/ファッション" class="text-sm text-gray-500 font-semibold mb-2">ファッション</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">韓国アパレル</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">20代向け</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">30~40代向け</a>
        </div>
        <div class="flex flex-col mb-4">
          <a href="/category/ライフスタイル" class="text-sm text-gray-500 font-semibold mb-2">ライフスタイル</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">瞑想、ヨガ</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">格安SIM</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">ダイエット</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">保険</a>
        </div>
        <div class="flex flex-col mb-4">
          <a href="/category/ライター一覧" class="text-sm text-gray-500 font-semibold mb-2">アカウント一覧</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">節約チャンネル</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">スタディオンデマンド</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">ライフスタイルチャンネル</a>
          <a href="/" class="text-sm text-gray-400 mb-2 pl-4">ダイエットチャンネル</a>
        </div>
      </div>
      <!-- /カテゴリ一覧 -->

      <!-- サイドバー -->
				<?php get_sidebar( 'type2' )  ?>
      <!-- /サイドバー -->
    </div>
    <!-- /メインコンテンツ -->
<?php get_footer(); ?>