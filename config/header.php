<?php
//include('config/lang.php');

$_pver = rand(99,99999);

if($_meta_title != ''){
  $_h_meta_title = $_meta_title;
} else {
  $_h_meta_title = $_strings['gen_sett'][$_lang]['meta_title'];
}

if($_meta_dec != ''){
  $_h_meta_dec = $_meta_dec;
} else {
  $_h_meta_dec = $_strings['gen_sett'][$_lang]['meta_desc'];
}

if($_meta_img != ''){
  $_h_meta_img = siteURL().$_meta_img;
} else {
  $_h_meta_img = siteURL().$_strings['gen_sett'][$_lang]['meta_img'];
}

$_current_page_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


//print($_meta_title.'<br>'.$_meta_dec.'<br>'.$_meta_img.'<br>'.$_current_page_url);

$_sp_page = '';
?>
<!doctype html>
<html>
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M6S9T4HN');</script>
        <!-- End Google Tag Manager -->

        <meta charset="UTF-8">
        <title>National Media Office</title>
        <link rel="shortcut icon" href="/favicon.png" type="image/png" />
        <meta name="description" content="<?php print($_h_meta_dec); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta property="og:url" content="<?php print($_current_page_url); ?>" />
        <meta property="og:title" content="<?php print($_h_meta_title); ?>" />
        <meta property="og:description" content="<?php print($_h_meta_dec); ?>" />
        <meta property="og:image" content="<?php print($_h_meta_img); ?>" />
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="/css/socialSharing.css" />
        <link href="/css/style.css?<?php print($_pver); ?>" rel="stylesheet">
        <?php if($_lang == 'ar'){ ?>
          <link href="/css/style-rtl.css?<?php print($_pver); ?>" rel="stylesheet">
        <?php } ?>
        <link href="/css/responsive.css?<?php print($_pver); ?>" rel="stylesheet">
        <?php if($_lang == 'ar'){ ?>
          <link href="/css/responsive-rtl.css?<?php print($_pver); ?>" rel="stylesheet">
        <?php } ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <script src="/js/socialSharing.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.8/jquery.viewportchecker.min.js" integrity="sha512-FRX6MYITclzDyyMmSQLgZoZTfE+GLzAQpjs15adVZMY6AqhsrBLx8UZwp4FoqrrRFWY9TiaPwja7EY5fk309vw==" crossorigin="anonymous"></script>-->
    </head>

    <body>

      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6S9T4HN"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      <header class="nmo-sttc-header">
        <div class="header-wrap">
          <div class="header-cont">
            <div class="header-elems">
              
              <div class="header-elem logo">
                <a class="nmo-logo" href="<?php print($_url_lang); ?>">
                  <img src="<?php print($_strings['gen_sett'][$_lang]['logo']); ?>"/>
                </a>
              </div>

              <div class="header-elem nmo-menu">
                <ul>
                  <li><a class="about" href="<?php print($_url_lang); ?>about"><?php print($_strings['menu'][$_lang]['about']); ?></a></li>
                  <li><a class="theuae" href="<?php print($_url_lang); ?>the-uae"><?php print($_strings['menu'][$_lang]['the_uae']); ?></a></li>
                  <li><a class="mediacenter" href="<?php print($_url_lang); ?>media-center"><?php print($_strings['menu'][$_lang]['media_center']); ?></a></li>
                  <li><a class="contact" href="<?php print($_url_lang); ?>contact"><?php print($_strings['menu'][$_lang]['contact']); ?></a></li>
                </ul>
                <div class="header-elem nmo-langsel mob">
                  <ul>
                    <li class="en"><a href="<?php print($_lang_redirect); ?>">English</a></li>
                    <li class="ar"><a href="<?php print($_lang_redirect); ?>">العربية</a></li>
                  </ul>
                </div>
              </div>

              <div class="header-elem nmo-langsel desk">
                <ul>
                  <li class="en"><a href="<?php print($_lang_redirect); ?>">English</a></li>
                  <li class="ar"><a href="<?php print($_lang_redirect); ?>">العربية</a></li>
                </ul>
              </div>

              <div class="header-elem burger_menu">
                <a class="mobile_menu_cta" onclick="openMenu();">
                  <span></span>
                  <!--<span></span>
                  <span></span>-->
                  <span></span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </header>

        <div class="nmo-sttc-page">
            <div class="nmo-sttc-page-wrap">
                <div class="nmo-sttc-page-cont">