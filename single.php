
    <?php get_header(); ?>
    <main>
        <section class="inner">
<div class="entry-nav">
                <?php if (have_posts() ): ?>
                    <!-- 前後のナビゲーション開始-->
<?php
the_post_navigation( array(
  'prev_text' => '前の記事 %title',
  'next_text' => '次の記事 %title',
) );
?>
<!-- 前後のナビゲーション終了 -->
                </div>

<div class="move-sin">

<!-- もし、記事が1件以上あったら-->
<?php while (have_posts()):the_post(); ?>
<!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）-->
<article <?php post_class("entry"); ?>> <!-- 特別なclassを付随させる -->
<div class="entry-title-all">
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></h2>
  <!-- 記事のタイトル -->
  <div class="entry-meta">
    <ul>
      <li><?php the_time('F jS, Y ');?> <!-- 記事の投稿日 --></li>
      <span class="meta-sep">&bull;</span>
      <li class="entry-category"><?php the_category( ',' ); ?> <!-- 記事のカテゴリー --></li>
      <span class="meta-sep">&bull;</span>
      <li><?php the_author(); ?> <!-- 記事の投稿者 --></li>
    </ul>
  </div>
                </div>
<div class="entry-flex">
  <div class="entry-content">
    <div class="entry-eye">
    <!-- アイキャッチ -->
                <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
<?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
<?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
<?php endif; ?>
</div>
    <?php the_content( ); ?><!-- 記事の内容 -->
    <div class="entry-footer"> <span class="comments-link"><a href="#">1件のコメント</a></span>
    <?php the_tags( '<span class="tag-links">', ', ', '</span>' ); ?>
    <!-- 記事のタグコンマ「,」で区切る -->
  </div>
  </div>

<div class="sub-sinse">
                                <!-- sidebar -->
<!-- //sidebar.phpをインクルード -->
<?php get_sidebar(); ?>
</div>
</div>

</article>
<?php endwhile; ?>
<!-- 繰り返し終了 -->

<?php endif; ?>
<!-- if文終了。-->

            </div>
            <div class="article-sub">
                <h3>関連記事</h3>
                <div class="article-sub-in">
                    <div class="art-flex">
                        <div class="entry-related">
<?php if( has_category() ) : //表示中の投稿に登録されているカテゴリがある場合のみ下記実行 ?>
<?php
//表示中の投稿に登録されているカテゴリID（term_id）を全て取得
$categories = get_the_category();
$cat_term_ids = array();
foreach($categories as $category){
	$cat_term_ids[] = $category->term_id; //cat_ID でも同じ
}

//関連記事取得用クエリパラメーター
$args = array(
	'post_type' => 'post',	//投稿を指定 （固定ページの場合は 'page'）
	'posts_per_page' => '4',	//取得する件数
	'ignore_sticky_posts' => true,	//「トップに固定」した投稿は除く
	'post__not_in' => array( $post->ID ),	//除外する投稿（本記事）
	'category__in' => $cat_term_ids,	//対象となるカテゴリID（配列）
	'orderby' => 'rand'	//表示順をランダムにしてい（日付順の場合は 'date'）
	);
$the_query = new WP_Query( $args );	//クエリ実行
?>

<?php if( $the_query->post_count > 0 ) : //該当する投稿が１件以上あったら下記出力 ?>
<aside class="relPostWrap">
	<ul>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="title"><?php echo wp_trim_words(get_the_title(), 30, "…", "UTF-8"); ?></div>
			</a></li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</ul>
</aside>
<?php endif; // end of "if( $the_query->post_count > 0 )" ?>
<?php endif; // end of "if( has_category() )" ?>
                    </div>
                </div>
            </div>
</div>
            <div class="comment">
                <h3>Comment</h3>
                <!-- コメント開始 -->
<section class="comments">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
            </div>

            <div class="move-link">
                    <!-- 前後のナビゲーション開始-->
<?php
the_post_navigation( array(
  'prev_text' => '前の記事',
  'next_text' => '次の記事',
) );
?>
<!-- 前後のナビゲーション終了 -->
            </div>

        </section>
    </main>
<!-- footer -->
<!-- //footer.phpをインクルード -->
<?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>