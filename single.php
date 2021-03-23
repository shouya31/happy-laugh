<?php get_header(); ?>

<?php
  $author = get_userdata($post->post_author);
  $author_img = get_avatar($author);
  $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
  if(preg_match($imgtag, $author_img, $imgurl)){
    $authorimg = home_url().$imgurl[2];
  }
  // サムネイルのURL取得ロジック
  $thumbnail_id = get_post_thumbnail_id();
  $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
?>


  <!-- メインコンテンツ -->
	<div class="sm:grid sm:grid-cols-12 px-4 sm:p-0 mb-16 sm:mb-32">
      <div class="col-start-2 col-end-9 pt-2 sm:pt-8">
        <div class="text-xs text-gray-300 mb-4 sm:mb-16">
					<!--ぱんくず -->
          <div class="hidden sm:block col-start-2 col-end-9 pt-2 sm:pt-8">
            <div class="text-xs text-gray-300 pl-4 mb-4 sm:mb-16"><?php breadcrumbs(); ?></div>
          </div>
					<!--/ ぱんくず -->
        </div>
        <!-- PC版 -->
        <div class="hidden sm:flex justify-between px-4">
          <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
          <div class="flex mb-4">
            <div class="h-4 w-4 bg-baby bg-cover mr-3 bg-center"><?php echo get_avatar( $author->ID ); ?></div>
            <div class="text-xs">
              <?php
                $author = get_userdata($post->post_author);
                echo $author->display_name;
              ?>
            </div>
          </div>
        </div>
        <!-- /PC版 -->

        <!-- SP版 -->
        <div class="sm:hidden mb-8">
          <div class="flex justify-between items-center mb-2">
            <div class="text-xs text-gray-300">2021.03.18</div>
            <div class="flex">
              <div class="h-4 w-4 bg-baby mr-3 bg-cover bg-center"><?php echo get_avatar( $author->ID ); ?></div>
              <div class="text-xs">
                <?php
                  $author = get_userdata($post->post_author);
                  echo $author->display_name;
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /SP版 -->
      </div>

      <!-- 記事 -->
      <div class="col-start-2 col-end-9">
        <div class="text-3xl sm:text-4xl border-b-4 border-black px-4 pb-2 mb-4"><?php the_title() ?></div>
        <div class="flex pl-4 mb-8">
          <a rel="nofollow" onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode ?><?php echo $twitter_tag ?>&text=<?php echo $title_encode ?><?php echo $twitter_name ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;" class="h-8 w-8 bg-twitter bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/twitter-icon.jpeg');"></a>
          <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" target="_blank" rel="nofollow noopener" class="h-8 w-8 bg-facebook bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/facebook-icon.png');"></a>
          <a href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank" rel="nofollow noopener" class="h-8 w-8 bg-line bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/line-icon.png');"></a>
          <a data-pin-do="buttonPin" data-pin-custom="true" data-pin-tall="true" data-pin-round="true" href="https://www.pinterest.com/pin/create/button/?url=<?php echo $url_encode ?>&media=<?php st_og_image_attribute(); ?>&description=<?php st_og_description_attribute(); ?>" rel="nofollow" class="h-8 w-8 bg-good bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/share-icon.png');"></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        </div>
        <div class="px-4 mb-32">
          <div class="h-56 sm:h-96 bg-coffee bg-cover bg-center mb-16" style="background-image: url('<?php echo $eye_img[0] ?>');"></div>
          <div class="hidden sm:block mb-32">
            <?php the_content(); ?>
          </div>
          <div class="sm:hidden mb-32">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="flex pl-4 mb-8 justify-center">
          <a rel="nofollow" onclick="window.open('//twitter.com/intent/tweet?url=<?php echo $url_encode ?><?php echo $twitter_tag ?>&text=<?php echo $title_encode ?><?php echo $twitter_name ?>&tw_p=tweetbutton', '', 'width=500,height=450'); return false;" class="h-10 w-10 bg-twitter bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/twitter-icon.jpeg');"></a>
          <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" target="_blank" rel="nofollow noopener" class="h-10 w-10 bg-facebook bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/facebook-icon.png');"></a>
          <a href="//line.me/R/msg/text/?<?php echo $title_encode . '%0A' . $url_encode;?>" target="_blank" rel="nofollow noopener" class="h-10 w-10 bg-line bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/line-icon.png');"></a>
          <a data-pin-do="buttonPin" data-pin-custom="true" data-pin-tall="true" data-pin-round="true" href="https://www.pinterest.com/pin/create/button/?url=<?php echo $url_encode ?>&media=<?php st_og_image_attribute(); ?>&description=<?php st_og_description_attribute(); ?>" rel="nofollow" class="h-10 w-10 bg-good bg-cover bg-center mr-4" style="background-image: url('/wp-content/themes/affinger5/images/share-icon.png');"></a><script type="text/javascript" src="//b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        </div>

        <!-- ライター（PC） -->
        <div class="hidden sm:block">
          <div class="text-xl font-bold sm:text-4xl border-b-4 border-black mb-8">WRITER</div>
          <a href="<?php echo get_author_posts_url( $author->ID ); ?>" class="flex mb-20">
            <div class="w-5/6 pl-4">
              <div class="font-bold mb-2">
              <?php
                $author = get_userdata($post->post_author);
                echo $author->display_name;
              ?>
              </div>
              <div class="text-xs"><?php echo $author->user_description ?></div>
            </div>
            <div class="h-24 w-24 bg-baby bg-cover bg-center"><?php echo get_avatar( $author->ID ); ?></div>
          </a>
        </div>

        <!-- /ライター -->


        <!-- ライター（SP） -->
        <div class="sm:hidden">
          <div class="px-4 mb-16">
            <div class="text-lg font-bold border-b-4 border-black pl-2 mb-8">
              WRITER
            </div>
            <a href="<?php echo get_author_posts_url( $author->ID ); ?>" class="flex mb-20">
              <div class="h-24 w-24 bg-baby bg-cover bg-center"><?php echo get_avatar( $author->ID ); ?></div>
              <div class="w-5/6 pl-4">
                <div class="font-bold mb-2">
                  <?php
                    $author = get_userdata($post->post_author);
                    echo $author->display_name;
                  ?>
                </div>
                <div class="text-xs"><?php echo $author->user_description ?></div>
              </div>
            </a>
          </div>
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
        <div class="px-4 mb-16">
          <div class="text-lg font-bold border-b-4 border-black pl-2 mb-8">
            Related Articles
          </div>
              <!-- 関連記事 -->
              <?php get_template_part( 'kanren' ); ?>
          <!-- /関連記事 -->
        </div>


          <!-- ランキング -->
          <?php get_template_part( 'template-parts/mobile-ranking-article' ); //RANKING読み込み ?>
          <!-- /ランキング -->
        </div>
        <!-- カテゴリ一覧 -->
      <div class="sm:hidden">
        <?php get_template_part( 'template-parts/side-category' ); //CATEGORY一覧読み込み ?>
      </div>
      <!-- /カテゴリ一覧 -->
        <!-- /SP版 -->
      </div>
      <!-- /記事 -->

      <?php get_sidebar( 'type2' ); ?>

    </div>
    <!-- /メインコンテンツ -->

		<?php get_footer(); ?>