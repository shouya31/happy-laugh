<div class="grid-span-1 col-start-2 col-end-8 flex flex-col pl-16">
  <div class="w-11/12 text-5xl font-verdana border-b-4 border-black pl-1 pb-5 mb-8">
    RECOMMEND
  </div>

  <?php if ( have_posts() ) : ?>
    <?php
      $args = array( "posts_per_page" => 4, );
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
        <div class="h-56 w-2/3 pt-4 pl-8 pb-4">
          <div class="flex justify-between mb-2">
            <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
            <div class="flex">
              <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
              <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
            </div>
          </div>
          <div class="h-2/6 text-2xl mb-2"><?php the_title(); ?></div>
          <div class="h-3/6 text-sm text-gray-400 leading-8"><?php the_excerpt(); ?></div>
        </div>
      </a>
    <?php
      endforeach;
      wp_reset_postdata();
    ?>
  <?php else : ?>
      <!-- 記事が1件も見つからなかったときの処理 -->
  <?php endif; ?>
</div>