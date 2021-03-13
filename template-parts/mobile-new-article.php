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
  <div class="w-full flex flex-col items-center px-4 pt-6">
    <div class="h-36 w-full bg-cover bg-center" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-3/5 text-xs text-red-300 text-center py-2 bg-white">
        <?php if (!is_category() && has_category()): ?>
          <?php
            $postcat = get_the_category();
            echo $postcat[0]->name;
          ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="h-20 w-full text-sm pt-4"><?php the_title(); ?></div>
    <div class="w-full flex flex-col">
      <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
      <div class="w-full flex items-center">
        <div class="h-4 w-4 bg-cover bg-no-repeat bg-center"><?php echo get_avatar( $author ); ?></div>
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