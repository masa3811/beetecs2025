<!-- フッター -->
<footer id="footer">
  <div class="footer__box">
     <div id="hamburger">
      <div id="hamburger-nav">
        <div class="menu-cnt inner-1200">
          <ul class="menu">
            <li class="title"><a href="#">会社案内</a></li>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">企業理念</a></li>
            <li class="accordion-item">
              <div class="accordion-header">事業案内 </div>
              <div class="accordion-content"> <a href="#">事業案内1</a> <a href="#">事業案内2</a> </div>
            </li>
            <li class="accordion-item">
              <div class="accordion-header"> 営業所</div>
              <div class="accordion-content"> <a href="#">営業所1</a> <a href="#">営業所2</a> </div>
            </li>
            <li><a href="#">株式会社三和</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="#">ニュース</a></li>
            <li><a href="#">お知らせ</a></li>
            <li><a href="#">リクルート</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="#">お問い合わせ</a></li>
            <li><a href="#">採用に関するお問い合わせ</a></li>
            <li><a href="#">法人様向けお問い合わせ</a></li>
            <li><a href="#">一般向けお問い合わせ</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="#">採用情報</a></li>
            <li><a href="#">リクルート動画</a></li>
          </ul>
        </div>
        <div class="link-cnt inner-1200"><a href="#">サイトについて</a><a href="#">プライバシーポリシー</a><br class="sp"><a href="#">サイトマップ</a></div>
      </div>
    </div>
     </div>
    <p class="footer-copy txt-center">&copy; ©BEETECS　All rights reserved.</p>
  <div class="to-top">
  <img src="assets/img/common/to-top.png" alt="トップに戻る">
</div>
  
</footer>
  

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?<?php echo date_i18n("YmdHis") ?>">
</script>
<?php wp_footer(); ?>
</body>
</html>