<?php get_header(); ?>
  <?php
  global $post;
    $categories = get_the_category( $post->ID );
    $now_category = get_query_var('cat');
    // array_pop($categories);
    $separator  = ' ';
    $output     = '';
		$userId = get_query_var('author');
		$user = get_userdata($userId);
  ?>
    <!-- メインコンテンツ -->
    <div class="sm:grid sm:grid-cols-12 px-4 sm:p-0 sm:mb-32">
      <!-- パンくず-->
      <div class="hidden sm:block col-start-2 col-end-9 pt-2 sm:pt-8">
        <div class="text-xs text-gray-300 pl-4 mb-4 sm:mb-16"><?php breadcrumbs(); ?></div>
      </div>
      <!-- /パンくず-->
      <!-- カテゴリ記事 -->
      <div class="hidden sm:block col-start-2 col-end-8">
        <div class="text-4xl border-b-4 border-black pl-2 pb-4 mb-12 font-bold"><?php echo $user->display_name; ?>さんの投稿</div>

					<?php
						$postslist = get_posts( "author=$userId&category=$now_category&numberposts=$numberposts&order=DESC&orderby=date" );
						foreach ( $postslist as $post ) {

            // サムネイルのURL取得ロジック
            $thumbnail_id = get_post_thumbnail_id();
            $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
            $category = get_the_category();
					?>

						<a href="<?php echo get_permalink( $post->ID ); ?>" class="effect_bg w-full flex mb-10" style="border-radius: 20px;">
							<div class="h-56 w-1/3  bg-cover bg-center" style="background-image: url('<?php echo $eye_img[0] ?>'); border-radius: 20px;">
                <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2" style="border-radius: 20px 0px 20px 0px;"><?php echo $category[0]->cat_name ?></div>
							</div>
							<div class="h-56 w-2/3 py-1" style="padding: 20px;">
								<div class="flex justify-between mb-4">
									<div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
									<div class="flex">
										<div class="h-4 w-4 bg-baby bg-cover bg-center"><?php echo get_avatar( $author ); ?></div>
										<div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
									</div>
								</div>
								<div class="text-xl mb-3"><?php echo $post->post_title; ?></div>
								<div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
							</div>
						</a>
					<?php } ?>
				</div>
      <!-- /カテゴリ記事 -->


      <div class="sm:hidden mb-8">
        <div class="text-xl font-bold border-b-4 border-black p-2 mb-4"><?php echo $user->display_name; ?>の投稿</div>
        <?php
						$postslist = get_posts( "author=$userId&category=$now_category&numberposts=$numberposts&order=DESC&orderby=date" );
						foreach ( $postslist as $post ) {

            // サムネイルのURL取得ロジック
            $thumbnail_id = get_post_thumbnail_id();
            $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
            $category = get_the_category();
					?>

        <div class="px-2">
          <a href="<?php echo get_permalink( $post->ID ); ?>" class="effect_bg h-24 w-full flex mb-6">
            <div class="h-full w-1/3 bg-flower bg-cover bg-center" style="background-image: url('<?php echo $eye_img[0] ?>');">
            </div>
            <div class="h-full w-2/3 text-sm break-words py-1 pl-8">
              <?php echo $post->post_title; ?>
            </div>
          </a>
        </div>
        <?php } ?>
      </div>

      <!-- ランキング -->
      <div class="sm:hidden mt-16">
      <?php get_template_part( 'template-parts/mobile-ranking-article' ); //RANKING読み込み ?>
      </div>
      <!-- /ライター -->

      <!-- カテゴリ一覧 -->
      <div class="sm:hidden">
        <?php get_template_part( 'template-parts/side-category' ); //CATEGORY一覧読み込み ?>
      </div>
      <!-- /カテゴリ一覧 -->

      <!-- サイドバー -->
				<?php get_sidebar( 'type2' )  ?>
      <!-- /サイドバー -->
    </div>
    <!-- /メインコンテンツ -->
<?php get_footer(); ?>