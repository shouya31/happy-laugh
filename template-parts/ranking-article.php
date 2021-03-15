<div class="mb-24">
  <div class="h-12 w-full mb-8 text-3xl text-white font-verdana py-2 pl-4 bg-black">
    RANKING
  </div>

  <?php
    $i = 0;
    $tag_posts = get_posts(array(
        'post_type' => 'post', // 投稿タイプ
        'tag'    => 'おすすめ', // タグをスラッグで指定する場合
        'posts_per_page' => 10, // 表示件数
        'orderby' => 'date', // 表示順の基準
        'order' => 'ASC' // 昇順・降順
    ));
    global $post;
    if($tag_posts): foreach($tag_posts as $post): setup_postdata($post);
    $i++
  ?>
  <a href="<?php the_permalink(); ?>" class="h-24 w-full flex mb-6">
    <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-1/3 bg-black flex justify-center">
        <div class="text-xs text-white pt-2 pb-2"><?php echo $i; ?></div>
      </div>
    </div>
    <div class="h-full w-2/3 text-sm break-words pl-8 font-verdana">
      <div class="flex mb-1">
        <div class="text-xs border-2 border-black rounded-full p-1">category</div>
        <div class="text-xs border-2 border-black rounded-full p-1">category</div>
      </div>
      <?php the_title(); ?>
    </div>
  </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>