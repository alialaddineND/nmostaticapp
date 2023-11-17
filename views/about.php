<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['about'][$_lang]['meta_title'];
$_meta_dec = preg_replace('/[^A-Za-z0-9 ,.\-\x{0600}-\x{06FF}]/u', '', strip_tags($_strings['about'][$_lang]['meta_desc']));

include('config/header.php');
?>

<div class="nmo-view about nopadd" data-parentpage="about">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <section class="nmo-sec nmo-hero bgbeige">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-hero-blks">
              <div class="nmo-hero-blk txts nmo-header-pad-top">
                <div class="nmo-title-mini vtitle">
                  <h2><?php print($_strings['about'][$_lang]['short_title']); ?></h2>
                </div>
                <div class="page-title"><h1><?php print($_strings['about'][$_lang]['title']); ?></h1></div>
              </div>
              <!--<div class="nmo-hero-blk img">
                <img src="<?php print($_strings['about']['hero_img']); ?>"/>
              </div>-->
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec abt-inf">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-imgtxt-comp">
              <div class="nmo-imgtxt-blks">
                <div class="nmo-imgtxt-blk img">
                  <img src="<?php print($_strings['about']['abt_img']); ?>"/>
                </div>
                <div class="nmo-imgtxt-blk txts">
                  <div class="abt-inf-title"><?php print($_strings['about'][$_lang]['abt_sec_title']); ?></div>
                  <div class="abt-inf-txt"><?php print($_strings['about'][$_lang]['abt_inf']); ?></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec abt-shotrcuts">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-imgtxt-comp">        
              <div class="abt-shortcuts nmo-imgtxt-blks">
                <div class="nmo-imgtxt-blk abt-shortcut chm">
                  <div class="abt-shortcut-cont">
                    <a class="shrct-link" href="<?php print($_url_lang); ?>chairman"></a>
                    <div class="abt-shortcut-wrap">
                      <div class="shrct-img"><img src="<?php print($_strings['about']['ch_thumb']); ?>"/></div>
                      <div class="shrct-txt"><?php print($_strings['about'][$_lang]['ch_cta_temp']); ?></div>
                    </div>
                  </div>
                </div>
                <div class="nmo-imgtxt-blk abt-shortcut roles nmo-imgtxt-blks">
                  <div class="abt-shortcut-cont">
                    <a class="shrct-link" href="<?php print($_url_lang); ?>roles"></a>
                    <div class="abt-shortcut-wrap">
                      <div class="shrct-img"><img src="<?php print($_strings['about']['roles_thumb']); ?>"/></div>
                      <div class="shrct-txt"><?php print($_strings['about'][$_lang]['roles_cta']); ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <?php include('initiatives_component.php'); ?>

    </div>
  </div>
</div>

<?php
include('config/footer.php');
?>