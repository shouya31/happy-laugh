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
      <div class="sm:hidden border border-black" style="width: 90%; margin: 50px auto;">
      <div class="text-lg lg:text-4xl font-black tracking-widest center m-5"><?php single_cat_title(); ?>　記事一覧</div>
        <div class="relative px-6">
          <div class="divide-y divide-black">
            <div class="category-sp-description border-b border-black text-xl pt-4 pb-4"><?php echo category_description(); ?></div>
            <div class="flex pt-4 pb-4" style="flex-wrap: wrap;">
              <?php
                foreach ( $child_ids as $category_id ): ?>
                  <a href="<?php echo get_category_link( $category_id ); ?>" class="text-xs border border-black rounded-full mr-2" style="padding: 4px 10px; font-size:8px;"><?php echo get_the_category_by_ID( $category_id ) ?></a>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /SP版カテゴリ説明 -->

      <!-- カテゴリ記事 -->

      <div class="hidden sm:block col-start-2 col-end-8">
        <div class="text-4xl border-b-4 border-black pl-2 pb-4 mb-12 font-bold"><?php single_cat_title(); ?></div>

        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'category' => $now_category,
              'post_status' => 'publish',
              'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
              'paged' => $paged,
              'orderby'     => 'date',
              'order' => 'DESC',
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ): $the_query->the_post();
                // サムネイルのURL取得ロジック
                $thumbnail_id = get_post_thumbnail_id();
                $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
                $category = get_the_category();
                $author = get_userdata($post->post_author);
          ?>

						<a href="<?php echo get_permalink( $post->ID ); ?>" class="effect_bg w-full flex mb-10" style="border-radius: 20px;">
							<div class="h-56 w-1/3  bg-cover bg-center" style="background-image: url('<?php echo $eye_img[0] ?>'); border-radius: 20px;">
                <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2"  style="border-radius:20px 0px 20px 0px;">
                <?php
                if ( $category[1]->cat_name ){
                  echo $category[1]->cat_name;
                } else {
                  echo $category[0]->cat_name;
                }
              ?>
                </div>
							</div>
							<div class="h-56 w-2/3" style="padding: 20px;">
								<div class="flex justify-between mb-2">
									<div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
									<div class="flex">
										<div class="h-4 w-4 bg-baby bg-cover bg-center"><?php echo get_avatar( $author->ID ); ?></div>
										<div class="text-xs text-gray-300 ml-2">
                    <?php echo $author->display_name; ?>
                    </div>
									</div>
								</div>
								<div class="text-xl mb-3"><?php echo $post->post_title; ?></div>
								<div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
							</div>
						</a>
          <?php
            endwhile;
            endif;
          ?>
				</div>
      <!-- /カテゴリ記事 -->


      <div class="sm:hidden mb-8">
        <div class="text-xl font-bold border-b-4 border-black p-2 mb-2"><?php single_cat_title(); ?></div>
        <?php
						$postslist = get_posts( "category=$now_category&numberposts=$numberposts&order=DESC&orderby=date" );
						foreach ( $postslist as $post ) {

            // サムネイルのURL取得ロジック
            $thumbnail_id = get_post_thumbnail_id();
            $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
            $category = get_the_category();
					?>

          <a href="<?php the_permalink(); ?>" class="effect_bg mb-6 mt-6">
            <div class="effect_bg h-32 w-full flex mb-6 mt-6">
              <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
                <div class="w-1/3 bg-black flex justify-center"></div>
              </div>
              <div class="h-full w-2/3 text-sm break-words font-verdana p-3">
                <div class="w-full flex justify-between">
                  <div class="text-xs mb-3 text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
                  <div class="flex">
                    <div class="h-4 w-4 bg-cover bg-no-repeat bg-center"><?php echo get_avatar( $author->ID ); ?></div>
                    <div class="text-sm text-gray-300 ml-2"><?php echo $author->display_name; ?></div>
                  </div>
                </div>
                <?php
                  if(mb_strlen($post->post_title)>30):
                    $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
                  else:
                    echo $post->post_title;
                  endif;
                ?>
                <div class="flex mb-2 mt-2">
                  <div class="ranking-category text-xs border border-black rounded-full p-1">
                    <?php
                      $postcat = get_the_category();
                      if ( $postcat[1]->name ){
                        echo $postcat[1]->name;
                      } else {
                        echo $postcat[0]->name;
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </a>
        <?php } ?>
      </div>

      <!-- ランキング -->
      <div class="sm:hidden mt-16">
      <?php get_template_part( 'template-parts/mobile-ranking-article-type2' ); //RANKING読み込み ?>
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