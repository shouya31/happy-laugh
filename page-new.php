<?php
/*
Template Name:最新記事
*/
$st_is_ex    = st_is_ver_ex();
$st_is_ex_af = st_is_ver_ex_af();
?>

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
        <div class="text-xs text-gray-300 pl-4 mb-4 sm:mb-16"><?php breadcrumbs(); ?></div>
      </div>
      <!-- /パンくず-->
      <!-- PC版カテゴリ説明 -->
      <div class="hidden sm:block col-start-3 col-end-11 px-16">
        <div class="text-3xl lg:text-4xl font-black tracking-widest center mb-10">最新記事 一覧</div>
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

      <div class="grid-span-1 lg:col-start-2 lg:col-end-8 flex flex-col pl-16">
        <div class="w-11/12 text-5xl font-bold border-b-4 border-black pl-1 pb-5 mb-8">
          NEW
        </div>

        <?php
          $paged = get_query_var('paged') ?: 1;
          $args = array(
            'paged' => $paged,
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ): $the_query->the_post() ?>

        <?php
          $author = get_the_author_meta('id');
          $author_img = get_avatar($author);
          $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
          if(preg_match($imgtag, $author_img, $imgurl)){
            $authorimg = home_url().$imgurl[2];
          }
        ?>

        <a href="<?php the_permalink(); ?>" class="w-full flex mb-12">
          <div class="h-56 w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
            <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2">
              <?php if (!is_category() && has_category()): ?>
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              <?php endif; ?>
              </div>
          </div>
          <div class="h-56 w-2/3 py-1 pl-8">
            <div class="flex justify-between mb-1">
              <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
              <div class="flex">
                <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
                <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
              </div>
            </div>
            <div class="text-2xl mb-3"><?php the_title(); ?></div>
            <div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
          </div>
        </a>
        <?php
          endwhile;
        endif;
        ?>
        <?php
          pagination( $the_query->max_num_pages, $paged );
          wp_reset_postdata();
        ?>

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


      <!-- サイドバー -->
				<?php get_sidebar( 'type2' )  ?>
      <!-- /サイドバー -->
    </div>
    <!-- /メインコンテンツ -->
<?php get_footer(); ?>