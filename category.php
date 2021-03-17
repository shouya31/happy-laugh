<?php get_header(); ?>

<?php
$the_cat_id        = get_queried_object_id();
$is_thumbnal_under = (bool) st_get_term_meta( $the_cat_id, 'thumbnail_under' );
$has_thumbnail     = st_has_term_thumbnail();
?>
<div id="content" class="clearfix">
  <div id="contentInner">
		<main>
      <article>
				<!--ぱんくず -->
				<div id="breadcrumb">
					<ol itemscope itemtype="http://schema.org/BreadcrumbList">
						<li
							itemprop="itemListElement"
							itemscope
							itemtype="http://schema.org/ListItem"
						>
							<a href="<?php echo home_url(); ?>" itemprop="item">
								<span itemprop="name">
									<?php echo esc_html( $GLOBALS["stdata141"] ); ?>
								</span>
							</a>
							>
							<meta itemprop="position" content="1" />
						</li>

						<?php
							$catid = $the_cat_id;
							if( !$catid ){
							$cat_now = get_the_category();
							$cat_now = $cat_now[0];
							$catid  = $cat_now->cat_ID;
							}
						?>
							<?php $allcats = array( $catid ); ?>
							<?php
							while ( !$catid == 0 ) {
								$mycat = get_category( $catid );
								$catid = $mycat->parent;
								array_push( $allcats, $catid );
							}
							array_pop( $allcats );
							$allcats = array_reverse( $allcats );
							?>

							<?php
							$i = 2;
							foreach ( $allcats as $catid ): ?>
									<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( get_category_link( $catid ) ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt;
										<meta itemprop="position" content="<?php echo $i; ?>" />
									</li>
							<?php  $i++; ?>
							<?php endforeach; ?>
					</ol>
				</div>
				<!--/ ぱんくず -->

        <?php
					$now_category = get_query_var('cat');
					$args = array(
											'include' => array($now_category),
					);
					$tag_all = get_terms("category", $args);
					$cat_data = get_option('cat_'.$now_category);

					if(trim($cat_data['listdelete']) === ''){ 	//一覧を表示する場合　?>

						<div class="grid grid-cols-11">
							<div class="col-start-2 col-end-8 pl-14">
								<div class="post">
									<?php if(trim($cat_data['st_cattitle']) !== ''){ ?>
										<div class="text-4xl border-b-4 border-black entry-title"><?php echo esc_html($cat_data['st_cattitle']) ?></div>
									<?php }else{ ?>
										<div class="w-11/12 text-4xl border-b-4 border-black pl-2 pb-4"><?php single_cat_title(); ?></div>
									<?php } ?>

									<?php if ( is_active_sidebar( 21 ) ) { ?>
										<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 21 ) ) : else : //カテゴリページ上一括ウィジェット ?>
										<?php endif; ?>
									<?php } ?>

									<?php if(!is_paged()){ ?>
										<div id="nocopy" <?php st_text_copyck(); ?>>
										<?php if ( $is_thumbnal_under && $has_thumbnail ): // サムネイル ?>
											<?php get_template_part( 'st-category-eyecatch' ); ?>
										<?php endif; ?>

											<div class="entry-content">
												<?php echo apply_filters('the_content',category_description()); //コンテンツを表示 ?>
											</div>
										</div>
										<?php get_template_part( 'popular-thumbnail' ); //任意のエントリ ?>
									<?php } ?>
								</div><!-- /post -->
								<?php get_template_part( 'itiran' ); //投稿一覧読み込み ?>
								<?php get_template_part( 'st-pagenavi' ); //ページナビ読み込み ?>

							<?php } ?>
						</div>
						<div class="col-start-9 col-end-12 pl-6 pr-16">
							<?php get_sidebar(); ?>
						</div>
					</div>
      </article>
		</main>
  </div>
  <!-- /#contentInner -->
</div>
<!--/#content -->
<?php get_footer(); ?>
