<?php
$des="。
"
; ?>

<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no">
	<meta name="robots" content="none">
	<meta name="keywords" content="">
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

<body id="top">
<header id="header">

  <div class="wrap">
    <div class="logo"> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="ロゴ"></a> </div>
    <nav id="global-nav">
      <ul id="menu">
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/company/">会社案内</a></li>
        <li><a href="<?php echo home_url(); ?>/business/">事業案内</a></li>
        <li><a href="<?php echo home_url(); ?>/archive/">ニュース</a></li>
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
            <li class="title"><a href="company.php">会社案内</a></li>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">企業理念</a></li>
            <li class="accordion-item">
              <div class="accordion-header">事業案内 </div>
              <div class="accordion-content"> <a href="business.html">事業案内1</a> <a href="#">事業案内2</a> </div>
            </li>
            <li class="accordion-item">
              <p class="accordion-header">営業所</p>
              <div class="accordion-content"> <a href="office.html">営業所一覧</a> <a href="#">営業所1</a> </div>
            </li>
            <li><a href="#">株式会社三和</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="#">ニュース</a></li>
            <li><a href="#">お知らせ</a></li>
            <li><a href="#">リクルート</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="contact.php">お問い合わせ</a></li>
            <li><a href="#">採用に関するお問い合わせ</a></li>
            <li><a href="#">法人様向けお問い合わせ</a></li>
            <li><a href="#">一般向けお問い合わせ</a></li>
          </ul>
          <ul class="menu">
            <li class="title"><a href="recruit.php">採用情報</a></li>
            <li><a href="#">リクルート動画</a></li>
          </ul>
        </div>
        <div class="link-cnt inner-1200"><a href="#">サイトについて</a><a href="#">プライバシーポリシー</a><a href="#">サイトマップ</a></div>
      </div>
    </div>
  </div>
</header>
  