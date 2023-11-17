<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_intv = $_strings['initiatives']['list'][0];

$_meta_title = $_intv[$_lang]['title'];
$_meta_dec = preg_replace('/[^A-Za-z0-9 ,.\-\x{0600}-\x{06FF}]/u', '', strip_tags($_intv[$_lang]['summary']));
$_meta_img = $_intv['image'];

include('config/header.php');
?>

<div class="nmo-view initiatives nopadd" data-parentpage="">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <section class="nmo-sec nmo-hero intv-hero bgbeige">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-hero-blks">
              <div class="nmo-hero-blk txts">
                <div class="nmo-title-mini vtitle">
                  <h2><?php print($_strings['initiatives']['common'][$_lang]['breadcrumb']); ?></h2>
                </div>
                <div class="page-title"><h1><?php print($_intv[$_lang]['title']); ?></h1></div>

              </div>
              <div class="nmo-hero-blk img">
                <img src="<?php print($_intv['image']); ?>"/>
              </div>
              <!--<div class="share-wrap mob">
                <div class="share-cta"><?php print($_strings['gen_sett'][$_lang]['share_cta']); ?></div>
                <div class="share-list">
                  <div id="demo" class="share-btns"></div>
                </div>
              </div>-->
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec min-sec intv-body nmo-wrap1">
        <div class="sec-wrap">
          <div class="sec-cont">
            <div class="share-wrap desk">
              <div class="share-cta"><?php print($_strings['gen_sett'][$_lang]['share_cta']); ?></div>
              <div class="share-list">
                <div id="demo" class="share-btns"></div>
              </div>
            </div>
            <?php print($_intv[$_lang]['ibody']); ?>
          </div>
        </div>
      </section>

    </div>
  </div>
</div>

<script>
  $('.share-btns').socialSharingPlugin({

    // url to share
    url: window.location.href,

    // page title
    title: '<?php print($_article_title); ?>',

    // page description
    description: '<?php print($_article_title); ?>',

    // image to share
    img: '<?php print($_article_img); ?>',

    // button classes
    btnClass: 'btn btn-light',

    // Array of social sharing links
    // ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin', 'reddit', 'stumbleupon', 'pocket', 'email', 'whatsapp']
    enable: ['facebook', 'twitter', 'whatsapp' ,'linkedin'],

    // enable responsive class
    responsive: false,

    // 'left' or 'right'
    mobilePosition: 'left',

    // copy message
    copyMessage: 'Copy to clipboard',

  });
</script>

<?php
include('config/footer.php');