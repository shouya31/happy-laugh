<div class="px-4 mb-16">
  <div class="text-lg font-bold border-b-4 border-black pl-2 mb-8">
    RANKING
  </div>

  <?php
    $i = 0;
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
  <a href="<?php the_permalink(); ?>" class="h-24 w-full flex px-4 mb-6">
    <div class="w-1/3 bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-1/3 text-xs text-white text-center bg-black py-1"><?php echo $i; ?></div>
    </div>
    <div class="w-2/3 flex flex-col pl-6">
      <!-- 仮置のカテゴリ表示 -->
      <div class="flex">
        <div class="text-xs rounded-full border border-black p-1">category</div>
        <div class="text-xs rounded-full border border-black p-1">category</div>
      </div>
      <!-- /仮置のカテゴリ表示 -->
      <div class="text-sm"><?php the_title(); ?></div>
    </div>
  </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>