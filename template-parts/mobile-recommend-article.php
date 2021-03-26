<?php
  $tag_posts = get_posts(array(
      'post_type' => 'post', // 投稿タイプ
      'tag'    => 'おすすめ', // タグをスラッグで指定する場合
      'posts_per_page' => 4, // 表示件数
      'orderby' => 'date', // 表示順の基準
      'order' => 'ASC' // 昇順・降順
  ));
  global $post;
  if($tag_posts): foreach($tag_posts as $post): setup_postdata($post);
  $author = get_the_author_meta('id');
?>

<a href="<?php the_permalink(); ?>" class="effect_bg  mb-6 mt-6">
  <div class="h-36 w-full flex">
    <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);"></div>
    <div class="h-full w-2/3 text-sm break-words font-verdana p-3">
      <div class="w-full flex justify-between">
        <div class="text-xs mb-3 text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
        <div class="flex">
          <div class="h-4 w-4 bg-cover bg-no-repeat bg-center"><?php echo get_avatar( $author ); ?></div>
          <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
        </div>
      </div>
      <?php
        if(mb_strlen($post->post_title)>30):
          $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
        else:
          echo $post->post_title;
        endif;
      ?>
      <div class="flex mb-2 mt-2">
        <div class="ranking-category text-xs border border-black rounded-full p-1">
          <?php
            $postcat = get_the_category();
            echo $postcat[0]->name;
          ?>
        </div>
      </div>
    </div>
  </div>
</a>

<?php endforeach; endif; wp_reset_postdata(); ?>
