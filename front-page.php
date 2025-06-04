
<?php
get_header();
?>


<section class="mv">
  <div class="mv-img">
  <picture>
  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv_img-sp.jpg" alt="メインビジュアル画像">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/mv_img-pc.jpg" alt="トップ画像">
</picture>
   </div>
  
  <div class="mv-cnt">
    <h1 class="font-wb">ビーテクスが建設現場の</h1>
    <p class="font-wb">ラストワンマイルを変える。</p>
  </div>
</section>
      <div class="header__breadcrumb-wrap pc-block" style="visibility: hidden;">
    <div class="header__breadcrumb">TOP　＞　〇〇〇〇</div>
    </div>


<!-- ニュース -->
<section class="news">
  <div class="inner-1000">
    <div class="section-ttl">
      <p class="fz-40 font-wb">ニュース</p>
    </div>
  </div>
  <div class="news-wrap inner-800">
    <div class="content-area"> 
      <?php
      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
      );
      $news_query = new WP_Query($args);

      if ( $news_query->have_posts() ) :
        while ( $news_query->have_posts() ) : $news_query->the_post();
          // 投稿日を取得（例：2025.05.26）
          $date = get_the_date('Y.m.d');
          // カテゴリー取得（最初のカテゴリ名）
          $categories = get_the_category();
          $category_name = !empty($categories) ? esc_html($categories[0]->name) : '';
          // 投稿タイトルの抜粋
          $excerpt = get_the_excerpt();
      ?>
      <a class="news-cnt" href="<?php the_permalink(); ?>">
        <div class="news-item">
          <div class="news-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/link_arrow-1.png" alt="アイコン">
          </div>
          <div class="news-text">
            <p class="news-th"><?php echo $date ?></p>
            <p class="news-td"><?php echo wp_strip_all_tags( mb_strimwidth( $excerpt, 0, 70, '…' ) ); ?></p>
          </div>
        </div>
      </a>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
      <p>ニュース記事がありません。</p>
      <?php endif; ?>
    </div>
  </div>
  <!-- .content-area END -->
  <div class="btn-cnt"> <a href="<?php echo esc_url(home_url('/')); ?>news" class="btn-01">ニュースの一覧を見る</a> </div>
</section>

<section class="company">
  <div class="inner-1000">
    <div class="section-ttl">
      <p class="fz-40 font-wb">会社案内</p>
    </div>
  </div>
  <div class="company-cnt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_img-pc.jpg" alt="">
    <h2 class="font-wb txt-center">建材物流のプロフェッショナルとして、<br class="sp">確かな品質と迅速な配送を。</h2>
  </div>
  <div class="desc-cnt">
    <p class="desc inner-700 lh2">ビーテクスは<br>
      建設現場に不可欠な建材を「必要なときに、必要な場所へ、確実に」お届けする建材物流の専門企業です。
多種多様な建材の取り扱いから、最適な在庫管理、スピーディーな配送まで一貫してサポートいたします。
培ってきた物流ノウハウとネットワークを活かし、建設現場の工程管理をスムーズに改善。
また、安全・品質管理にも徹底的にこだわり、安心してお任せいただけるパートナーであることを目指しています。
</p>
  </div>
  <div class="detail-cnt">
    <div class="detail-item-01">
      <div class="item-01">
        <div class="item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_img-1.png" alt=""> </div>
        <div class="item-txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_ttl-1.png" alt="">
          <p class="font-wb lh1_135">無駄なくタイミングの良い<br>
            プロの物流サービス。</p>
          </div>
      </div>
    </div>
    <div class="detail-item-02">
      <div class="item-02">
        <div class="item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_img-2.png" alt=""> </div>
        <div class="item-txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_ttl-2.png" alt="">
          <p class="font-wb lh1_135">運送、設置、施工を<br>
            ワンストップで。</p>
          </div>
      </div>
    </div>
  </div>
  <div class="btn-cnt"> <a href="<?php echo home_url('/business/'); ?>" class="btn-01">事業案内を見る</a> </div>
</section>
<section class="recruit">
  <div class="recruit-cnt">
    <div class="recruit-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_bnr.jpg" alt="">
      <div class="section-ttl inner-1000">
        <p class="fz-40 font-wb">採用情報</p>
      </div>
    </div>
    <div class="recruit-lead">
      <h2 class="font-wb txt-center">ラストワンマイルを実現する人材を募集しています。</h2>
      <p class="txt-center">ビーテクスとともに自身と家族と社会のためのラストワンマイルを実現する仲間を募集します。</p>
      <p class="txt-center">詳細はこちらから</p>
      <div class="btn-cnt"> <a href="<?php echo home_url('/recruit/'); ?>" class="btn-03">採用情報を詳しく見る</a> </div>
    </div>
  </div>
</section>
  
<section class="contact">
  <div class="contact-cnt">
    <div class="contact-item-01">
      <a href="tel:0839768181" class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_tel.png" alt=""> </a>
    </div>
    <div class="contact-item-02">
      <a href="<?php echo home_url('/contact/'); ?>" class="contact-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact_mail.png" alt=""> </a>
    </div>
  </div>
</section>
  
<section class="banner inner-1350">
  <div class="banner-cnt"> <a href="https://www.sanwa-co.jp" class="banner-item" target="_blank"> <img class="banner-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company_bnr.jpg" alt="">
    <div class="arrow-cnt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/link_arrow-2.png" alt="">
      <p class="fz-20 font-wb">株式会社三和</p>
    </div>
    </a> <a href="<?php echo home_url('/recruit/'); ?>" class="banner-item"> <img class="banner-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_bnr.jpg" alt="">
    <div class="arrow-cnt"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/link_arrow-1.png" alt="">
      <p class="fz-20 font-wb">採用情報</p>
    </div>
    </a> </div>
</section>

<?php
get_footer();
?>  