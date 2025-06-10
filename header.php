<?php
$des="ビーテクスは、建設現場に不可欠な建材を「必要なときに、必要な場所へ、確実に」お届けする建材物流の専門企業です。多種多様な建材の取り扱いから、最適な在庫管
理、スピーディーな配送まで一貫してサポートいたします。"
; ?>

<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="robots" content="none">
	<meta name="keywords" content="ビーテクス、山口県、建材物流、建築資材配送、建設業向け物流、建設現場運送、ラストワンマイル、建材物流マネジメント、ワンストッサービス、現場直送、三和">
	<meta name="description" content="<?php echo $des; ?>">
	<meta property="og:type" content="website">
	<meta property="og:title"
		content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
	<meta property="og:description" content="<?php echo $des; ?>">
	<meta property="og:site_name"
		content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:image"
		content="<?php echo get_template_directory_uri(); ?>/assets/img/fb.jpg">
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title"
		content="<?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?> | <?php echo $des; ?>">
	<meta name="twitter:description" content="<?php echo $des; ?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/business.css?<?php echo date_i18n("YmdHis") ?>">
  	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?<?php echo date_i18n("YmdHis") ?>">
  	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css?<?php echo date_i18n("YmdHis") ?>">
  	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/config.css?<?php echo date_i18n("YmdHis") ?>">
  	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css?<?php echo date_i18n("YmdHis") ?>">
  	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/office.css?<?php echo date_i18n("YmdHis") ?>">
    	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/others.css?<?php echo date_i18n("YmdHis") ?>">
      	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/recruit.css?<?php echo date_i18n("YmdHis") ?>">
        	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date_i18n("YmdHis") ?>">
  
	<?php wp_head(); ?>
  
	<link rel="stylesheet"
		href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo date_i18n("YmdHis") ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0J43FWT03M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0J43FWT03M');
</script>
  
</head>
  
<body id="top">
<header id="header">

  <div class="wrap">
    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="ロゴ"></a> </div>
    <nav id="global-nav">
      <ul id="menu">
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/company/">会社案内</a></li>
        <li><a href="<?php echo home_url(); ?>/business/">事業案内</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>news">ニュース</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="recruit"><a href="<?php echo home_url(); ?>/recruit/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit_icon.png" alt="" class="" /></a></div>
    
    <!-- ハンバーガー -->
    <div id="hamburger">
      <div class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ham-open.png" alt="ハンバーガーアイコン" class="hamburger-icon open" /> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ham-close.png" alt="ハンバーガーアイコン" class="hamburger-icon close" /> </div>
      <div id="hamburger-nav">
        <div class="menu-cnt inner-1200">
          <ul class="menu">
            <li class="title">会社案内</li>
            <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>#company-overview">会社概要</a></li>
            <li><a href="<?php echo esc_url( home_url( '/business/' ) ); ?>#company-philosophy">企業理念</a></li>
            <li><a href="<?php echo home_url('/business/'); ?>">事業案内</a></li>
            <li class="accordion-item">
              <div class="accordion-header">活動拠点</div>
              <div class="accordion-content"> 
                <p>小郡営業所</p> 
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
</header>
  