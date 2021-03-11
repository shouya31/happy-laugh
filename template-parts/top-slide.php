<div class="mainvisual">
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <?php
        $tag_posts = get_posts(array(
            'post_type' => 'post', // 投稿タイプ
            'tag'    => 'おすすめ', // タグをスラッグで指定する場合
            'posts_per_page' => 5, // 表示件数
            'orderby' => 'date', // 表示順の基準
            'order' => 'ASC' // 昇順・降順
        ));
        global $post;
        if($tag_posts): foreach($tag_posts as $post): setup_postdata($post);
        $i++
      ?>
        <a
          href="<?php the_permalink(); ?>"
          class="swiper-slide h-560 w-3/5 bg-cover bg-no-repeat bg-center"
          style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);"
        >
          <div class="w-1/6 flex justify-center bg-white">
            <div class="text-red-300 pt-2 pb-2 font-verdana">
              CAFE
            </div>
          </div>
          <div class="h-560 w-full flex flex-col justify-center items-center">
            <div class="w-4/5 text-white text-4xl text-center mb-4 font-verdana">
              <?php the_title(); ?>
            </div>
            <div class="w-full flex justify-center relative">
              <div class="absolute right-2/3 text-white">2021.03.01</div>
              <div class="flex">
                <div class="h-8 w-8 bg-contain bg-no-repeat bg-baby"></div>
                <div class="text-white ml-4">User</div>
              </div>
            </div>
          </div>
        </a>
      <?php endforeach; endif; wp_reset_postdata(); ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>