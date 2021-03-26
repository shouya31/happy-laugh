<nav class="cms-nav cms-nav-ranking">
    <ul>
<?php

    $custom_key = 'custom_popular_ranking';

$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
    $args = array(
        'category__in' => $category_ID,
        'posts_per_page'=>5,
        'meta_key'=>$custom_key,
        'orderby'=>'meta_value_num',
        'order'=>'DESC'
    );


    $my_query = new WP_Query($args);

    $ranking_counter = 0;

?>
<?php if( $my_query -> have_posts() ) :?>
<?php while($my_query -> have_posts()) : $my_query -> the_post();?>
<?php

    $category = get_the_category();
    $category_slug = $category[0]->slug;
    $category_name = $category[0]->cat_name;

    $thumbnail_id = get_post_thumbnail_id();
    $eye_img = wp_get_attachment_image_src($thumbnail_id,'medium');

    $popular_ranking_cnt = get_post_meta($post->ID, $custom_key, true);

    $ranking_counter++;

?>


        <li class="ranking-<?php echo $ranking_counter; ?>">
            <a href="<?php the_permalink();?>">
                <div class="cms-nav-img">
                    <img src="<?php echo $eye_img[0]; ?>" width="<?php echo $eye_img[1]; ?>" height="<?php echo $eye_img[2]; ?>" alt="<?php the_title(); ?>">
                </div>

                    <div class="cms-nav-tit"><?php the_title(); ?></div>
                    <div class="cms-nav-info clearfix">




                </div>
            </a>
        </li>



<?php endwhile;?>
<?php endif;?>
    </ul>
</nav>
