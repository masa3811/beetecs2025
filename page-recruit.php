<?php
get_header();
?>

<main>

<section class="kv">
  <div class="kv-img"> 
  <picture>
  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/kv_recruit-sp.jpg" alt="メインビジュアル画像">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/kv_recruit-pc.jpg" alt="トップ画像">
  </picture>
  </div>
  <div class="kv-cnt">
    <p class="font-wb">採用情報</p>
    <h1 class="font-wb">ラストワンマイルをその手で</h1>
  </div>
</section>
      <div class="header__breadcrumb-wrap pc-block" style="visibility: hidden;">
    <div class="header__breadcrumb">TOP　＞　〇〇〇〇</div>
    </div>
<section class="recruit-sec">
  <div class="recruit-sec-cnt inner-1350">
    <h2 class="font-wb txt-left lh1_135">自身と家族と社会のために<br>ラストワンマイルを実現する仲間を募集します。</h2>
    <div class="recruit-sec-lead inner-1200">
      <div class="recruit-sec-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/recruit_center_img-pc.png" alt=""></div>
      <p class="recruit-sec-txt txt-left">私たちビーテクスは<br>
        住宅関連資材メーカーや、住宅設備機器メーカー、取引商社等からの運送需要に応えるとともに、従来の事業範囲に止まらず、設備機器の施工という、新たなマーケットの開拓とそのニーズに対応し、得意先が望む最適なソリューションをワンストップで提供しています。<br>
        ラストワンマイルをその手で実現する人材を募集しています。</p>
    </div>
  </div>
  <div class="recruit-bnr-cnt">
    <h3 class="txt-center">採用はこちらから</h3>
    <div class="recruit-bnr-item inner-800"> <a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/mynav_bnr-2026.png" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/mynav_bnr-2027.png" alt=""></a> </div>
  </div>
</section>
</main>
<!--main end-->

<?php
get_footer();
?>