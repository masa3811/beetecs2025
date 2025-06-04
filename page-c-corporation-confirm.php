<?php
get_header();
?>

<main>

<section class="contact-step-sec">
<div class="contact-step-cnt inner-900">
  <div class="contact-txt">
  <p class="font-wb">法人様向けお問い合わせはこちらから</p>
  </div>
<div class="inner-800">
  <div class="contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_step2.png" alt=""></div>
<p>以下のフォームに必要事項をご記入の上、「送信する」を押してください</p>

  
  <?php echo do_shortcode('[contact-form-7 id="f7d1f6b" title="法人様向けお問い合わせ　確認"]'); ?>


 </div>
  </div>

</section>
</main>
<!--main end-->

<?php
get_footer();
?>