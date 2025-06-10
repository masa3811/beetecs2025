<!-- フッター -->
<footer id="footer">
  <div class="footer__box">
    <div id="hamburger">
      <div id="hamburger-nav">
        <div class="menu-cnt inner-1200">
          <ul class="menu">
            <li class="title">会社案内</li>
            <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>#company-overview">会社概要</a></li>
            <li><a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#company-philosophy">企業理念</a></li>
            <li><a href="<?php echo home_url('/business/'); ?>">事業案内</a></li>
            <li class="accordion-item">
              <div class="accordion-header">物流拠点</div>
              <div class="accordion-content"> 
                <p>宇部営業所</p> 
                <p>防府営業所</p>  
                <p>徳山営業所</p>  
                <p>下関営業所</p>  
              </div>
            </li>
          <li><a href="https://www.sanwa-co.jp/" target="_blank">株式会社三和</a></li>
          </ul>
          <ul class="menu">
            <li class="title">ニュース</li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>news">お知らせ</a></li>
          </ul>
          <ul class="menu">
            <li class="title">お問い合わせ</li>
            <li><a href="<?php echo esc_url(home_url('/contact/c-recruit')); ?>">採用に関するお問い合わせ</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/c-corporation')); ?>">法人様向けお問い合わせ</a></li>
          </ul>
          <ul class="menu">
            <li class="title">採用情報</li>
            <li><a href="<?php echo home_url('/recruit/'); ?>">リクルート</a></li>
          </ul>
        </div>
        <div class="link-cnt inner-1200"><a href="<?php echo esc_url( home_url( '/usersguide/' ) ); ?>">サイトについて</a><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a><a href="#">サイトマップ</a></div>
      </div>
    </div>
  </div>
  <p class="footer-copy txt-center">&copy; BEETECS　All rights reserved.</p>
  <div class="to-top"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/to-top.png" alt="トップに戻る"> </div>
</footer>
  

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?<?php echo date_i18n("YmdHis") ?>">
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php wp_footer(); ?>
</body>
</html>