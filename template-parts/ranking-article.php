<div class="grid-span-2 w-full lg:col-start-8 lg:col-end-11 lg:flex lg:flex-col lg:justify-self-center pl-24">
  <div class="h-14 lg:w-9/12 flex items-center justify-center lg:justify-start border-l border-b border-gray-300 lg:border-none lg:bg-black mb-8">
    <div class="text-2xl lg:text-4xl lg:font-light lg:text-white lg:ml-4 font-oswald">
      RANKING
    </div>
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
    <div class="h-full w-1/4 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-1/3 bg-black flex justify-center">
        <div class="text-xs text-white pt-2 pb-2"><?php echo $i; ?></div>
      </div>
    </div>
    <div class="h-full w-3/4 text-xl break-words pl-8 font-verdana"><?php the_title(); ?></div>
  </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>