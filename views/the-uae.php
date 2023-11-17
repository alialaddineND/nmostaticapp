<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['the_uae'][$_lang]['meta_title'];
$_meta_dec = $_strings['the_uae'][$_lang]['meta_desc'];
$_meta_img = $_strings['the_uae']['hero_img'];

include('config/header.php');
?>

<div class="nmo-view theuae nopadd" data-parentpage="theuae">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <section class="nmo-sec nmo-hero bgbeige">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-hero-blks">
              <div class="nmo-hero-blk txts">
                <div class="nmo-title-mini vtitle">
                  <h2><?php print($_strings['the_uae'][$_lang]['breadcrumb']); ?></h2>
                </div>
                <div class="page-title"><h1><?php print($_strings['the_uae'][$_lang]['title']); ?></h1></div>
              </div>
              <div class="nmo-hero-blk img">
                <img src="<?php print($_strings['the_uae']['hero_img']); ?>"/>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec theuae-inf abt-inf">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-imgtxt-comp">
              <div class="nmo-imgtxt-blks">
                <div class="nmo-imgtxt-blk img">
                  <img src="<?php print($_strings['the_uae']['inf_img']); ?>"/>
                </div>
                <div class="nmo-imgtxt-blk txts read-more-cotainer">
                  <!--<div class="abt-inf-txt read-more-summary"><?php print($_strings['the_uae'][$_lang]['summary']); ?></div>
                  <div class="abt-inf-txt read-more-txt"><?php print($_strings['the_uae'][$_lang]['desc']); ?></div>
                  <div class="nmo-read-more-wrap rmore">
                    <a class="nmo-read-more rmore" onclick="nmoReadMore(this);">
                      <span class="txt"><?php print($_strings['the_uae'][$_lang]['read_more']); ?></span>
                      <span class="icn"><svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 7.13695L5.99854 12L11 7.13695M6.01238 11.801L6.01238 1" stroke="#263326" stroke-width="1.34393" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></span>
                    </a>
                  </div>
                  <div class="nmo-read-more-wrap rless">
                    <a class="nmo-read-more rless" onclick="nmoReadLess(this);">
                      <span class="txt"><?php print($_strings['the_uae'][$_lang]['read_less']); ?></span>
                      <span class="icn"><svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1 7.13695L5.99854 12L11 7.13695M6.01238 11.801L6.01238 1" stroke="#263326" stroke-width="1.34393" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg></span>
                    </a>
                  </div>-->
                  <div>
                    <div class="abt-inf-txt"><?php print($_strings['the_uae'][$_lang]['desc']); ?></div>
                    <div class="nmo-btn-wrap al-left">
                      <a class="nmo-btn" target="_blank" href="<?php print($_strings['the_uae'][$_lang]['exlink']); ?>">
                        <span class="nmo-btn-txt"><?php print($_strings['the_uae'][$_lang]['read_more']); ?></span>
                        <span class="nmo-btn-icn">
                          <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.5H13M13 0.5V12.5M13 0.5L1 12.5" stroke="white"></path>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>
</div>

<?php
include('config/footer.php');
?>