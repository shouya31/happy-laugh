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
    <div class="h-96 w-full flex flex-col items-center p-4" id="new">
      <div class="h-2/3 w-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
        <div class="w-1/3 bg-black flex justify-center">
          <div class="text-xs text-white pt-2 pb-2"><?php echo $i; ?></div>
        </div>
      </div>
      <div class="h-2/12 w-full text-xl pt-2 pb-2"><?php the_title(); ?></div>
      <div class="h-3/12 w-full flex flex-col">
        <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
        <div class="w-full flex items-center">
          <div class="w-1/6 bg-contain bg-no-repeat bg-center bg-baby"><?php echo get_avatar( $author ); ?></div>
          <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
        </div>
      </div>
    </div>
  </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>