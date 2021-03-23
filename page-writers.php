<?php
/*
Template Name:ライター一覧
*/
$st_is_ex    = st_is_ver_ex();
$st_is_ex_af = st_is_ver_ex_af();
?>

<?php get_header(); ?>

<?php $users = get_users(array(
'orderby'=>ID,
'order'=>ASC,
));
?>

  <div class="sm:grid sm:grid-cols-12 px-4 sm:p-0 mb-24 sm:mb-32">
    <div  class="col-start-2 col-end-12">
      <div class="text-xs text-gray-300 pt-2 sm:pt-8 mb-4 sm:mb-16">Home > ライフスタイル > 瞑想・ヨガ</div>
      <div class="text-lg font-bold sm:text-4xl border-b-4 border-black p-2 mb-16 sm:mb-4">WRITER</div>

      <div class="grid grid-cols-2 sm:grid-cols-4 gap-8">
      <?php
        foreach($users as $user) {
        $uid = $user->ID;
        $avatar_img  = scrapeImage( get_wp_user_avatar( $uid ) );
        ?>
        <a href="<?php echo get_bloginfo("url") . '/?author=' . $uid ?>">
          <div class="h-40 sm:h-64 bg-baby bg-cover bg-center" style="background-image: url('<?php echo $avatar_img ;?>');"></div>
          <div class="py-2 text-2xl font-bold center"><?php echo $user->display_name ; ?></div>
          <div class="text-xs"><?php echo $user->user_description ?></div>
        </a>
      <?php } ?>
      </div>

    </div>
    <div class="col-start-3 col-end-11 border sm:border-2 border-black relative p-12 mt-32">
      <div class="text-xl sm:text-3xl text-center absolute inset-x-1/3 -top-4 sm:-top-5 bg-white">ライター募集</div>
      <div class="text-center mb-8">ハピラフMAGAZINEでは、ライターとしてメディアを一緒に盛り上げてくれる方を募集しています。</div>
      <div class="text-center">詳しくは <a>こちらのページ</a> をご確認ください。</div>
    </div>
  </div>
  <?php get_footer(); ?>