<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['chairman'][$_lang]['title'];
$_meta_dec = preg_replace('/[^A-Za-z0-9 ,.\-\x{0600}-\x{06FF}]/u', '', strip_tags($_strings['chairman'][$_lang]['meta_desc']));

include('config/header.php');    
?>

<div class="nmo-view chairman bgbeige" data-parentpage="about">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <div class="view-page-header nmo-header-pad-top">
        <div class="nmo-title-mini vtitle">
          <h2><?php print($_strings['about'][$_lang]['short_title']); ?></h2>
        </div>
      </div>

      <div class="view-page-content nmo-wrap1">
        <div class="view-page-content-wrap">
          <div class="chm-blks">
          <div class="chm-title mob"><h1><?php print($_strings['chairman'][$_lang]['title_temp']); ?></h1></div>
            <div class="chm-blk img">
              <img src="<?php print($_strings['chairman']['chm_img']); ?>"/>
            </div>
            <div class="chm-blk txts">
              <div class="chm-title desk"><h1><?php print($_strings['chairman'][$_lang]['title_temp']); ?></h1></div>
              <div class="chm-body"><?php print($_strings['chairman'][$_lang]['desc']); ?></div>
              <div class="chm-sign"><?php print($_strings['chairman'][$_lang]['sign_temp']); ?></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include('config/footer.php');