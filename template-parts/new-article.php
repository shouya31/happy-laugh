<div class="grid-span-1 lg:col-start-2 lg:col-end-8 flex flex-col pl-16">
  <div class="font-serif w-11/12 text-5xl font-bold border-b-4 border-black pl-1 pb-5 mb-8">
    NEW
  </div>

<?php if ( have_posts() ) : ?>
  <?php
    $args = array( "posts_per_page" => 12, );
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

  <a href="<?php the_permalink(); ?>" class="effect_bg w-full flex mb-12" style="border-radius: 20px;">
    <div class="h-56 w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>); border-radius: 20px">
      <div class="w-1/2 bg-white text-xs text-center pt-2 pb-2" style="border-radius:20px 0px 20px 0px;">
        <?php
          $categories = get_the_category( $post->ID );
          $parent_cat = get_category($categories[0]->category_parent);
          if ( $parent_cat->name ) {
            echo $parent_cat->name;
          } else {
            echo $categories[0]->name;
          }
        ?>
      </div>
    </div>
    <div class="h-56 w-2/3 py-1" style="padding: 20px;">
      <div class="flex justify-between mb-1">
        <div class="text-xs text-gray-300"><?php echo get_the_date('Y/m/d'); ?></div>
        <div class="flex">
          <div class="h-4 w-4"><?php echo get_avatar( $author ); ?></div>
          <div class="text-xs text-gray-300 ml-2"><?php the_author(); ?></div>
        </div>
      </div>
      <div class="text-xl mb-3"><?php the_title(); ?></div>
      <div class="h-16 text-sm text-gray-400"><?php the_excerpt(); ?></div>
    </div>
  </a>
  <?php
    endforeach;
    wp_reset_postdata();
  ?>
  <div class="hidden lg:block w-full lg:w-11/12 lg:flex justify-center items-center mt-8">
    <div class="rounded-full h-16 w-60 flex justify-center items-center border-2 border-gray-900">
      <a href="/new" class="text-1xl text-center font-verdana">
        READ MORE
      </a>
    </div>
  </div>
<?php else : ?>
    <!-- ?????????1????????????????????????????????????????????? -->
<?php endif; ?>
</div>
