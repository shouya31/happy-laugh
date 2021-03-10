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
  <a href="<?php the_permalink(); ?>" class="h-96 lg:h-64 w-11/12 flex flex-col lg:flex-row mb-8">
    <div class="lg:w-4/12 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
      <div class="w-2/5 bg-white flex justify-center">
        <div class="text-red-300 pt-2 pb-2">
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
    <div class="h-full flex flex-col lg:w-8/12 lg:ml-3">
      <div class="h-1/6 flex justify-between items-center mb-2">
        <time class="text-gray-300">
          <?php echo get_the_date('Y/m/d'); ?>
        </time>
        <div class="flex">
          <div class="h-8 w-8 bg-cover bg-center bg-no-repeat"><?php echo get_avatar( $author ); ?></div>
          <div class="text-gray-300 ml-4"><?php the_author(); ?></div>
        </div>
      </div>
      <div class="h-5/6 w-full">
        <div class="font-verdana h-2/5 w-full text-2xl pt-2 pb-2"s>
          <?php the_title(); ?>
        </div>
        <div class="font-verdana h-3/5 w-full break-words pt-2 pb-2"s>
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </a>
  <?php
    endforeach;
    wp_reset_postdata();
  ?>
<?php else : ?>
    <!-- 記事が1件も見つからなかったときの処理 -->
<?php endif; ?>