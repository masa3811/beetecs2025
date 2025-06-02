<?php
get_header();
?>

<main>

<section class="contact-step-sec">
<div class="contact-step-cnt inner-900">
  <div class="contact-txt">
  <p class="font-wb">採用情報についてのお問い合わせをご希望の場合はこちらから</p>
  </div>
<div class="inner-800">
  <div class="contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_step1.png" alt=""></div>
<p>以下のフォームに必要事項をご記入の上、「入力内容を確認する」を押してください</p>

  
  <?php echo do_shortcode('[contact-form-7 id="44ba1ee" title="採用に関するお問い合わせ"]'); ?>


 </div>
  </div>

</section>
</main>
<!--main end-->

<?php
get_footer();
?>