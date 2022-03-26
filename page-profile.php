
    <?php get_header(); ?>
    <main>
        <section class="inner about-all">
            <div class="about-flex">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/SVG/about.svg")); ?>" alt="">
                <!-- <img src="<?php echo esc_url(get_theme_file_uri("/images/prof.jpg")); ?>" alt="" class="plof-img"> -->
            </div>
            <div class="about-plof">
                <h2>NAME</h2>
                <h3>福田翔也</h3>
                <p>fukuta shouya</p>
                <p>トライデントコンピュータ専門学校</p>
                <p>WebDesign学科１年</p>
                <h2>CONTACT</h2>
                <p>GMail</p>
                <p class="about-mail">shouyafukuta2@gmail.com</p>
                <p>Yahoo mail</p>
                <p class="about-mail">syobonmalk2@yahoo.so.jp</p>

            </div>
        </section>
    </main>
<!-- footer -->
<!-- //footer.phpをインクルード -->
<?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>