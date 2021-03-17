<div class="mb-24">
  <div class="h-12 w-full mb-8 text-3xl text-white font-bold py-2 pl-4 bg-black">
    RANKING
  </div>


    <ul class="side_menu">
      <?php
      $i = 0;
        setPostViews(get_the_ID());
        query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=10&order=DESC');
        while(have_posts()) : the_post();
        $i++;
      ?>

    <li>
      <a href="<?php the_permalink(); ?>" class="h-24 w-full flex mb-6">
        <div class="h-full w-1/3 bg-cover bg-center bg-no-repeat" style="background-image: url(<?php the_post_thumbnail_url( 'large' ); ?>);">
          <div class="w-1/3 bg-black flex justify-center">
            <div class="text-xs text-white pt-2 pb-2"><?php echo $i; ?></div>
          </div>
        </div>
        <div class="h-full w-2/3 text-sm break-words pl-8 font-verdana">
          <div class="flex mb-1">
            <div class="ranking-category text-xs border border-black rounded-full p-1">コスメ</div>
          </div>
          <?php
            if(mb_strlen($post->post_title)>30):
              $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
            else:
              echo $post->post_title;
            endif;
          ?>
        </div>

      </a>
    </li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); wp_reset_query(); ?>
  </ul>
</div>