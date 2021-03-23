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
          class="swiper-slide w-3/5 bg-cover bg-no-repeat bg-center flex items-end"
          style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);"
        >
          <div class="w-full bg-black bg-opacity-75 p-6" style="border-radius: 0px 0px 24px 24px;" >
            <div class="text-white mb-4"><?php the_title(); ?></div>
            <div class="flex">
              <div class="text-sm text-white border-2 border-white rounded-full p-2">
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              </div>
            </div>
          </div>
        </a>
      <?php endforeach; endif; wp_reset_postdata(); ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>