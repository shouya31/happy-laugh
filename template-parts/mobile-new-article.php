<?php if ( have_posts() ) : ?>
  <?php
    $args = array( "posts_per_page" => 8, );
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
  <div class="h-72 w-full flex flex-col items-center p-4">
    <div class="h-5/6 w-full bg-cover bg-center bg-flower">
      <div class="w-3/5 flex justify-center bg-white">
        <div class="text-xs text-red-300 pt-2 pb-2">
          <?php if (!is_category() && has_category()): ?>
            <span class="cat-data">
              <?php
                $postcat = get_the_category();
                echo $postcat[0]->name;
              ?>
            </span>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="h-2/6 w-full text-xl pt-2 pb-2"><?php the_title(); ?></div>
    <div class="h-1/6 w-full flex flex-col">
      <div class="w-full text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
      <div class="w-full flex items-center">
        <div class="h-full w-1/6 bg-contain bg-no-repeat bg-center bg-baby"><?php echo get_avatar( $author ); ?></div>
        <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
      </div>
    </div>
  </div>
  <?php
    endforeach;
    wp_reset_postdata();
  ?>
<?php else : ?>
    <!-- 記事が1件も見つからなかったときの処理 -->
<?php endif; ?>