<div class="mb-16 ">
  <div class="text-lg font-bold border-b-4 border-black pl-2 mb-8">
    RANKING
  </div>


<?php
  $i = 0;
  setPostViews(get_the_ID());
  query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC');
  while(have_posts()) : the_post();
  $author = get_the_author_meta('id');
  $i++;
?>


  <a href="<?php the_permalink(); ?>" class="effect_bg mb-6 mt-6">
    <div class="effect_bg h-32 w-full flex mb-6 mt-6">
      <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
        <div class="w-1/3 bg-black flex justify-center">
          <div class="text-xs text-white pt-2 pb-2"><?php echo $i; ?></div>
        </div>
      </div>
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
      </div>
    </div>
  </a>


  <?php endwhile; ?>
  <?php wp_reset_postdata(); wp_reset_query(); ?>

</div>