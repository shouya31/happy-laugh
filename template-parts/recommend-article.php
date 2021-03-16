<div class="grid-span-1 col-start-2 col-end-8 flex flex-col pl-16">
  <div class="w-11/12 text-5xl font-verdana border-b-4 border-black pl-1 pb-5 mb-8">
    RECOMMEND
  </div>

  <?php
    $i = 0;
    $tag_posts = get_posts(array(
        'post_type' => 'post', // 投稿タイプ
        'tag'    => 'おすすめ', // タグをスラッグで指定する場合
        'posts_per_page' => 4, // 表示件数
        'orderby' => 'date', // 表示順の基準
        'order' => 'ASC' // 昇順・降順
    ));
    global $post;
    if($tag_posts): foreach($tag_posts as $post): setup_postdata($post);
    $i++
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
        <div class="h-56 w-2/3 pt-4 pl-8 pb-4">
          <div class="flex justify-between mb-2">
            <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
            <div class="flex">
              <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
              <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
            </div>
          </div>
          <div class="h-2/6 text-2xl mb-2"><?php the_title(); ?></div>
          <div class="h-3/6 text-sm text-gray-400 leading-8"><?php the_excerpt(); ?></div>
        </div>
      </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>