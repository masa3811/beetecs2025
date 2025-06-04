<?php
get_header();
?>

<main>
<!-- kv -->
<section class="kv">
  
<picture>
<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/contact/kv_contact-sp.jpg" alt="メインビジュアル画像">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/kv_contact-pc.jpg" alt="トップ画像">
</picture>
    
  </div>
  <div class="kv-cnt">
    <div class="header__breadcrumb-wrap pc-block" style="visibility: hidden;">
      <div class="header__breadcrumb">2025.00.00　|　リクルート</div>
    </div>
    
    
    <p class="font-wb">お問い合わせ</p>
    
    <div class="phone-cnt txt-left inner-900">
    <p class="bk-box">電話でのお問い合わせ</p>
    <div class="phone-number"> 
    <a href="tel:0839768181"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/phone-number.png" alt=""></a>
    </div>
     </div>
     </div>
  </div>
</section>
<section class="contact-sec">
<div class="contact-sec-cnt">
  <div class="contact-txt inner-900">
  <p class="bk-box">メールフォームでのお問い合わせ</p>
  <p>入力項目が異なりますので、いずれかをお選び下さい。</p>
  </div>

  
<div class="contact-bnr inner-800"> 
<div class="bnr-item"> 
<a href="<?php echo esc_url(home_url('/contact/c-recruit')); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_recruit.png" alt="">
</a>
<p>採用情報についてのお問い合わせを<br>ご希望の場合はこちらから</p>
</div>
<div class="bnr-item">
<a href="<?php echo esc_url(home_url('/contact/c-corporation')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_corporation.png" alt="">
</a>
<p>お取引についてのお問い合わせをご希望の<br>法人様はこちらから</p>
</div>

  
</div>
 
</div>

</section>

</main>
<!--main end-->

<?php
get_footer();
?>