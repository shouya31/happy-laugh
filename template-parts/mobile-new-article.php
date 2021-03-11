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
  <div class="h-96 w-full flex flex-col items-center p-4" id="new">
    <div class="h-2/3 w-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
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
    <div class="h-2/12 w-full text-xl pt-2 pb-2"><?php the_title(); ?></div>
    <div class="h-3/12 w-full flex flex-col">
      <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
      <div class="w-full flex items-center">
        <div class="w-1/6 bg-contain bg-no-repeat bg-center bg-baby"><?php echo get_avatar( $author ); ?></div>
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