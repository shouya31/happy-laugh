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
      <div class="hidden sm:block col-start-3 col-end-11 px-16">
        <div class="text-3xl lg:text-4xl font-black tracking-widest center mb-10">最新記事 一覧</div>
      </div>

      <div class="hidden sm:block col-start-2 col-end-8 grid-span-1 lg:col-start-2 lg:col-end-8 flex flex-col pl-16">
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

        <a href="<?php the_permalink(); ?>" class="effect_bg w-full flex mb-12" style="border-radius: 20px;">
          <div class="h-56 w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>); border-radius: 20px 0px 0px 20px;">
            <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2">
              <?php if (!is_category() && has_category()): ?>
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              <?php endif; ?>
              </div>
          </div>
          <div class="h-56 w-2/3" style="padding: 20px;">
            <div class="flex justify-between mb-1">
              <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
              <div class="flex">
                <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
                <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
              </div>
            </div>
            <div class="text-xl mb-3"><?php the_title(); ?></div>
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

      <div class="sm:hidden mb-8">
        <div class="text-2xl lg:text-4xl font-black tracking-widest center m-5">最新記事一覧</div>
        <div class="mb-24">
          <div class="text-3xl font-bold border-b-4 border-black pl-2 mb-8">
            New
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

          <a href="<?php the_permalink(); ?>" class="h-24 w-full flex mb-6">
            <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
              <div class="w-3/5 text-center p-1 bg-white" style="font-size: 5px;">
                <?php if (!is_category() && has_category()): ?>
                  <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                  ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="h-full w-2/3 text-sm break-words pl-8 font-verdana">
              <div class="flex mb-1">
                <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
              </div>
              <?php
                if(mb_strlen($post->post_title)>30):
                  $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
                else:
                  echo $post->post_title;
                endif;
              ?>
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
      </div>



      <!-- ランキング -->
      <div class="sm:hidden mt-16">
      <?php get_template_part( 'template-parts/mobile-ranking-article' ); //RANKING読み込み ?>
      </div>

      <!-- カテゴリ一覧 -->
      <div class="sm:hidden">
        <?php get_template_part( 'template-parts/side-category' ); //CATEGORY一覧読み込み ?>
      </div>

      <!-- サイドバー -->
				<?php get_sidebar( 'type2' )  ?>
    </div>
    <!-- /メインコンテンツ -->
<?php get_footer(); ?>