 <?php get_header(); ?>
    <main>
        <section class="inner ">
            <div class="contact-flex">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/SVG/contact.svg")); ?>" alt="">

            </div>
            <div class="contact">
                 <h2> CONTACT</h2>
                <p>このblogについての意見や感想などございましたら下記のお問い合わせフォームまでご連絡ください。</p>
                <div class="contact-anime">

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6iW0xhm9eaRRPQzL2-h_nj8Lo05A4LqVwv8WKLM6Z_dPINw/viewform?embedded=true">
                <p class="contact-p">お問い合わせフォーム</p></a>

</div>
            </div>
        </section>
    </main>
<!-- footer -->
<!-- //footer.phpをインクルード -->
<?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>