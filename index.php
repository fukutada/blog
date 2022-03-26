    <!-- header -->
<!-- //header.phpをインクルード -->
<?php get_header(); ?>

    <main>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/SVG/news.svg")); ?>" alt="news" class="entry-img">
        <section class="titles inner">

            <!-- <h2 class="archive-title"><?php the_archive_title(); ?></h2> -->
            <?php if (have_posts()): //もし1件以上記事があったら ?>
<?php while (have_posts()): //記事がある間は繰り返す
the_post(); //次の記事のデータをセットする?>
<!--1記事め開始-->
            <article class=" into1">
                <a href="<?php the_permalink(); ?>" class="into">
                    <div class="into-box">
                <div class="into-img">
                <!-- アイキャッチ -->
                <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
<?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
<?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
<?php endif; ?>

</div>

                        <h2><?php
if ( mb_strlen( $post->post_title, 'UTF-8' ) > 50 ) {
  $title = mb_substr( $post->post_title, 0, 30, 'UTF-8' );
  echo $title . '…';
} else {
  echo $post->post_title;
}
?></h2>
</div>
    <p class="time"><?php the_time('F jS, Y'); ?></p>
</a>
            </article>
            <!--1記事め終了-->
<?php endwhile; //ループ終了 ?>
<?php else: //もし、表示すべき記事がなかったら?>
<p>まだ記事はありません。</p>
<?php endif; //条件分岐終了 ?>

        </section>
        <section class="under inner">
            <div class="under-flex">
                 <?php if (have_posts()): //もし1件以上記事があったら ?>
<?php while (have_posts()): //記事がある間は繰り返す
the_post(); //次の記事のデータをセットする?>
<!--1記事め開始-->
        <article class="into-more ">
            <a href="<?php the_permalink(); ?>">
            <div class="more-flex">
        <!-- アイキャッチ -->
            <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
<?php the_post_thumbnail('large',['alt'=>'サムネイル画像']); ?>
<?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
<?php endif; ?>
                    <h2><?php
if ( mb_strlen( $post->post_title, 'UTF-8' ) > 50 ) {
  $title = mb_substr( $post->post_title, 0, 30, 'UTF-8' );
  echo $title . '…';
} else {
  echo $post->post_title;
}
?></h2>
                        </div>
                        <p class="time"><?php the_time('F jS, Y'); ?></p>
                    </a>
                </article>
                <!--1記事め終了-->
<?php endwhile; //ループ終了 ?>
<?php else: //もし、表示すべき記事がなかったら?>
<p>まだ記事はありません。</p>
<?php endif; //条件分岐終了 ?>

            </div>

            <!-- sidebar -->
<!-- //sidebar.phpをインクルード -->
<?php get_sidebar(); ?>

        </section>
        <div class="move2">
<!--ページネーション開始-->
  <?php the_posts_pagination(); ?>
<!--ページネーション終了-->

        </div>
    </main>
<!-- footer -->
<!-- //footer.phpをインクルード -->
<?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>