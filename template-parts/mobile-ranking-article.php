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
  <a href="<?php the_permalink(); ?>" class="w-full flex flex-col items-center px-4 pt-6">
    <div class="h-36 w-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-3/5 text-xs text-white text=center py-4 bg-black"><?php echo $i; ?></div>
    </div>
    <div class="h-20 w-full text-sm pt-4"><?php the_title(); ?></div>
    <div class="w-full flex flex-col">
      <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
      <div class="w-full flex items-center">
        <div class="h-4 w-4 bg-cover bg-no-repeat bg-center"><?php echo get_avatar( $author ); ?></div>
        <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
      </div>
    </div>
  </a>
  <?php endforeach; endif; wp_reset_postdata(); ?>
</div>