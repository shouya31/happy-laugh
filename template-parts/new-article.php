<?php if ( have_posts() ) : ?>
  <?php
    $args = array( "posts_per_page" => 7, );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?>

  <?php
    $author = get_the_author_meta('id');
    $author_img = get_avatar($author);
    $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
    if(preg_match($imgtag, $author_img, $imgurl)){
      $authorimg = home_url().$imgurl[2];
    }
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
    <div class="h-56 w-2/3 py-1 pl-8">
      <div class="flex mb-1">
        <div class="text-xs border-2 border-black rounded-full p-1">カテゴリー</div>
        <div class="text-xs border-2 border-black rounded-full p-1">カテゴリー</div>
      </div>
      <div class="flex justify-between mb-1">
        <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
        <div class="flex">
          <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
          <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
        </div>
      </div>
      <div class="h-24 text-2xl mb-1"><?php the_title(); ?></div>
      <div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
    </div>
  </a>
  <?php
    endforeach;
    wp_reset_postdata();
  ?>
<?php else : ?>
    <!-- 記事が1件も見つからなかったときの処理 -->
<?php endif; ?>