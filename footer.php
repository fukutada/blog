    <footer>
        <div class="footer-in">
        <?php
  // メインメニューを表示
  if ( has_nav_menu( 'footer-menu' )){
  $footerMenu = array(
  'theme_location' => 'footer-menu',
  'menu_id' => 'footer-menu',
  'menu_class' => 'navigate group',
  'container' => false,
  'link_before' => '<span>',
  'link_after' => '</span>',
  'depth' => 0,
  );
  wp_nav_menu( $footerMenu );
  };
?>
<div class="footer-category">
<!-- フッターウィジェット（footer-widget）の追加 -->
<?php if ( is_active_sidebar('footer-widget') ) : ?>
  <?php dynamic_sidebar('footer-widget'); ?>
<?php endif; ?>
</div>
</div>
        <p>@2021 fukuta</p>
    </footer>