<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['news']['common'][$_lang]['page_title'];
$_meta_img = $_strings['news']['news_hero'];

include('config/header.php');
?>

<div class="nmo-view media-center nopadd" data-parentpage="mediacenter">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <section class="nmo-sec nmo-hero bgbeige">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="nmo-hero-blks">
              <div class="nmo-hero-blk txts">
                <div class="nmo-title-mini vtitle">
                  <h2><?php print($_strings['menu'][$_lang]['media_center']); ?></h2>
                </div>
                <div class="page-title"><h1><?php print($_strings['news']['common'][$_lang]['page_title']); ?></h1></div>
              </div>
              <!--<div class="nmo-hero-blk img">
                <img src="<?php print($_strings['news']['news_hero']); ?>"/>
              </div>-->
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec mc-featured mcv2">
        <div class="sec-wrap">
          <div class="sec-cont">
            <?php
            //$_article_slug = $_strings['news_slugs'][$key];
            $_farticles = $_strings['news']['articles'];
            $_farticles_list = '';
            $_farticlesCount = count($_farticles);
            if($_farticlesCount % 3 > 0){
              $_not_three = 'not-three';
            } else {
              $_not_three = '';
            }
            $maxLoop = $_farticlesCount - 1;

            $_articles_dom = '';
            ?>
            <div class="mc-featured <?php print($_not_three); ?>">
              <div class="articles-row mc-featured-blks">
                <?php
                for ($x = 0; $x < 3; $x++) {
                  echo '<div class="mc-f-article">
                            <div class="mc-featured-bg" style="background-image:url('.$_farticles[$x]['main_img'].');"></div>
                            <div class="mc-featured-img"><img src="'.$_farticles[$x]['main_img'].'"/></div>
                            <div class="mc-featured-txts">
                              <div class="mc-featured-title">'.$_farticles[$x][$_lang]['title_feature'].'</div>
                            </div>
                            <a class="mc-feat-link" href="'.$_url_lang.'news/'.$_farticles[$x]['slug'].'"></a>
                          </div>';
                }
                ?>
              </div>
            </div>
            
            <div class="fnews-list nmo-wrap1">
              <div class="fnews-list-wrap">
                <div class="fnews-list-cont">
                  <?php
                  $_farticles_list = '';
                  for ($y = 3; $y < $_farticlesCount; $y++) {
                    $_fa_title = $_farticles[$y][$_lang]['title_feature'];
                    $_fa_summary = $_farticles[$y][$_lang]['summary'];
                    $_fa_date = $_farticles[$y][$_lang]['date'];
                    $_fa_thumb = $_farticles[$y]['thumb_img'];
                    $_article_slug = $_farticles[$y]['slug'];

                    $_farticles_list .= '<div class="farticle-blk">
                                            <div class="farticle-blk-wrap bgbeige clickable">
                                              <div class="farticle-blk-cont">
                                                <a class="farticel-link" href="'.$_url_lang.'news/'.$_article_slug.'"></a>
                                                <div class="farticle-thumb"><img src="'.$_fa_thumb.'"/></div>
                                                <div class="farticle-txts">
                                                  <div class="farticle-date">'.$_fa_date.'</div>
                                                  <div class="farticle-title">'.$_fa_title.'</div>
                                                  <div class="farticle-summ">'.$_fa_summary.'</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                  }
                  print($_farticles_list);
                ?>
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