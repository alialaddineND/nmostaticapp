<?php
// To call this page, in the browser type:
// http://localhost/

include('config/lang.php');
include('config/header.php');

$_sp_page = 'home';
?>

<div class="nmo-view home home-view" data-parentpage="home">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <section class="nmo-sec hbanner" style="background-image: url(<?php print($_strings['news']['articles'][0]['main_img']); ?>);">
        <div class="sec-wrap">
          <div class="sec-cont">
            <a class="hero-featured-news-cta" href="<?php print($_url_lang.'news/'.$_strings['news']['articles'][0]['slug']); ?>">
              <div class="hero-featured-news">
                <div class="hfn-wrap nmo-wrap1">
                  <div class="home-flex-blks">
                    <div class="flxblk left">
                      <div class="hfn-cont">
                        <h1><?php print($_strings['news']['articles'][0][$_lang]['title_hfeature']); ?></h1>
                      </div>
                    </div>
                    <div class="flxblk right">&nbsp;</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>

      <section class="nmo-sec about bgbeige">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="abt-featured nmo-wrap1">
              <div class="abt-featured-blks home-flex-blks">
                <div class="abt-feat-txts flxblk left">
                  <div class="nmo-title-mini">
                    <h2><?php print($_strings['about'][$_lang]['short_title']); ?></h2>
                  </div>
                  <div class="abt-feat-title"><?php print($_strings['about'][$_lang]['feature_title']); ?></div>
                  <div class="abt-feat-txt"><?php print($_strings['about'][$_lang]['summary']); ?></div>
                </div>
                <div class="abt-feat-btn flxblk right">
                  <div class="nmo-btn-wrap al-right">
                    <a class="nmo-btn" href="<?php print($_url_lang); ?>about">
                      <span class="nmo-btn-txt"><?php print($_strings['gen_sett'][$_lang]['learn_btn']); ?></span>
                      <span class="nmo-btn-icn">
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 0.5H13M13 0.5V12.5M13 0.5L1 12.5" stroke="white"/>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </dvi>

          </div>
        </div>
      </section>

      <?php include('fnews_component_home.php'); ?>

      <?php include('initiatives_component.php'); ?>

    </div>
  </div>
</div>

<?php
include('config/footer.php');
?>