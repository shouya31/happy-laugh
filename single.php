<?php get_header(); ?>

<?php
  $author = get_the_author_meta('id');
  $author_img = get_avatar($author);
  $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
  if(preg_match($imgtag, $author_img, $imgurl)){
    $authorimg = home_url().$imgurl[2];
  }
?>


  <!-- メインコンテンツ -->
	<div class="sm:grid sm:grid-cols-12 px-4 sm:p-0 mb-16 sm:mb-32">
      <div class="col-start-2 col-end-9 pt-2 sm:pt-8">
        <div class="text-xs text-gray-300 mb-4 sm:mb-16">
					<!--ぱんくず -->
					<?php if ( get_post_type() == 'post' ): ?>
						<div
							id="breadcrumb"<?php if ( $show_post_info ): ?> class="st-post-data-breadcrumb"<?php endif; ?>>
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo home_url(); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( $GLOBALS['stdata141'] ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="1"/>
								</li>

								<?php
								$category = get_the_category();
								$cat_id   = (int) $category[0]->cat_ID;
								$cat_ids  = array( $cat_id );

								while ( $cat_id !== 0 ) {
									$category  = get_category( $cat_id );
									$cat_id    = $category->parent;
									$cat_ids[] = $cat_id;
								}

								array_pop( $cat_ids );

								$cat_ids = array_reverse( $cat_ids );
								$i       = 2;
								?>

								<?php foreach ( $cat_ids as $cat_id ): ?>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
										<a href="<?php echo get_category_link( $cat_id ); ?>" itemprop="item">
											<span
												itemprop="name"><?php echo esc_html( get_cat_name( $cat_id ) ); ?></span>
										</a>
										&gt;
										<meta itemprop="position" content="<?php echo $i; ?>"/>
									</li>
									<?php $i ++; ?>
								<?php endforeach; ?>
							</ol>

							<?php if ( $show_post_info ):    // ヘッダーに記事データ挿入時はhetry用に出力 ?>
								<h1 class="entry-title st-css-no"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif;    // タイトル ?></h1>
							<?php endif; ?>
						</div>
					<?php elseif ( ! is_attachment() ): ?>
						<div id="breadcrumb"<?php if ( $show_post_info ): ?> class="st-post-data-breadcrumb"<?php endif; ?>>
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo esc_url( home_url() ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( $GLOBALS['stdata141'] ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="1"/>
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo get_post_type_archive_link( $post_type ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="2"/>
								</li>
							</ol>

							<?php if ( $show_post_info ):    // ヘッダーに記事データ挿入時はhetry用に出力 ?>
								<h1 class="entry-title st-css-no"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif;    // タイトル ?></h1>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<!--/ ぱんくず -->
        </div>
        <!-- PC版 -->
        <div class="hidden sm:flex justify-between px-4">
          <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
          <div class="flex mb-4">
            <div class="h-4 w-4 bg-baby bg-cover bg-center"><?php echo get_avatar( $author ); ?></div>
            <div class="text-xs"><?php the_author(); ?></div>
          </div>
        </div>
        <!-- /PC版 -->

        <!-- SP版 -->
        <div class="sm:hidden mb-8">
          <div class="flex justify-between items-center mb-2">
            <div class="text-xs text-red-300 border border-black py-1 px-4">category</div>
            <div class="flex">
              <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
              <div class="text-xs">ハピラフMAGAZINE編集部</div>
            </div>
          </div>
          <div class="text-xs text-gray-300">2021.03.18</div>
        </div>
        <!-- /SP版 -->
      </div>

      <!-- 記事 -->
      <div class="col-start-2 col-end-9">
        <div class="text-xl sm:text-4xl border-b-4 border-black px-4 pb-2 mb-4"><?php the_title() ?></div>
        <div class="flex pl-4 mb-8">
          <div class="h-8 w-8 bg-twitter bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/twitter-icon.jpeg');"></div>
          <div class="h-8 w-8 bg-facebook bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/facebook-icon.png');"></div>
          <div class="h-8 w-8 bg-line bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/line-icon.png');"></div>
          <div class="h-8 w-8 bg-good bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/share-icon.png');"></div>
        </div>
        <div class="px-4 mb-32">
          <div class="h-56 sm:h-96 bg-coffee bg-cover bg-center mb-16">
            <?php the_post_thumbnail( 'large' ); ?>
          </div>
          <div class="hidden sm:block mb-32">
            <?php the_content(); ?>
          </div>
        </div>

        <!-- ライター -->
        <div class="text-xl font-bold sm:text-4xl border-b-4 border-black mb-8">WRITER</div>
        <div class="flex mb-20">
          <div class="w-5/6 pl-4">
            <div class="font-bold mb-2"><?php the_author(); ?></div>
            <div class="text-xs">誰かの「好き」が、ほかの誰かの「好き」を応援するようなメディアになりたいです。</div>
          </div>
          <div class="h-24 w-24 bg-baby bg-cover bg-center"><?php echo get_avatar( $author ); ?></div>
        </div>
        <!-- /ライター -->

        <!-- PC版 -->
        <div class="hidden sm:block">
          <!-- 関連記事 -->
          <div class="text-4xl border-b-4 font-bold border-black mb-8">RELATED ARTICLES</div>
          <?php get_template_part( 'kanren' ); ?>
          <!-- /関連記事 -->
        </div>
        <!-- /PC版 -->

        <!-- SP版 -->
        <div class="sm:hidden">
          <!-- 関連記事 -->
          <div class="text-xl font-bold sm:text-4xl border-b-4 border-black mb-8">RELATED ARTICLES</div>
          <div class="grid grid-cols-2 gap-4 mb-20">
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-2/3 bg-white flex justify-center">
                  <div class="text-xs text-red-300 text-center pt-2 pb-2">category</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-2/3 bg-white flex justify-center">
                  <div class="text-xs text-red-300 text-center pt-2 pb-2">category</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-2/3 bg-white flex justify-center">
                  <div class="text-xs text-red-300 text-center pt-2 pb-2">category</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-2/3 bg-white flex justify-center">
                  <div class="text-xs text-red-300 text-center pt-2 pb-2">category</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
          </div>
          <!-- /関連記事 -->

          <!-- ランキング -->
          <div class="text-xl font-bold sm:text-4xl border-b-4 border-black mb-8">RANKING</div>
          <div class="grid grid-cols-2 gap-4 mb-20">
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-1/3 bg-black flex justify-center">
                  <div class="text-xs text-white text-center pt-2 pb-2">1</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-1/3 bg-black flex justify-center">
                  <div class="text-xs text-white text-center pt-2 pb-2">2</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-1/3 bg-black flex justify-center">
                  <div class="text-xs text-white text-center pt-2 pb-2">3</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-1/3 bg-black flex justify-center">
                  <div class="text-xs text-white text-center pt-2 pb-2">4</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
            <a href="/" class="mb-6">
              <div class="h-40 bg-flower bg-cover bg-center">
                <div class="w-1/3 bg-black flex justify-center">
                  <div class="text-xs text-white text-center pt-2 pb-2">5</div>
                </div>
              </div>
              <div class="h-20 pt-4">タイトルタイトルタイトルタイトル</div>
              <div class="text-xs text-gray-300">2021.03.18</div>
              <div class="flex">
                <div class="h-4 w-4 bg-baby bg-cover bg-center"></div>
                <div class="text-xs text-gray-300 ml-2">user</div>
              </div>
            </a>
          </div>
          <!-- /ランキング -->
        </div>
        <!-- /SP版 -->
      </div>
      <!-- /記事 -->

      <?php get_sidebar( 'type2' ); ?>

    </div>
    <!-- /メインコンテンツ -->

		<?php get_footer(); ?>