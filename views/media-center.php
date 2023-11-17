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
              <div class="nmo-hero-blk img">
                <img src="<?php print($_strings['news']['news_hero']); ?>"/>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section class="nmo-sec mc-featured">
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
            <div class="mc-ini mc-featured <?php print($_not_three); ?>">
              <?php
              
              /*foreach($_farticles as $key => $_article){
                $_a_img = $_article['main_img'];
                $_a_title = $_article[$_lang]['title_feature'];
                $_a_slug = $_url_lang.'news/'.$_strings['news_slugs'][$key];

                if($key == 0){
                  echo '<div class="articles-row">';
                } else if($key %3 == 0){
                  echo '</div><div class="articles-row">';
                } else if($key == $maxLoop){
                  echo '</div>';
                }
              }*/
              $articleChunks = array_chunk($_farticles, 3);

              foreach ($articleChunks as $chunk) {
                echo '<div class="articles-row mc-featured-blks">';
                
                foreach ($chunk as $key => $_article) {
                    echo '<div class="mc-f-article">
                            <div class="mc-featured-bg" style="background-image:url('.$_article['main_img'].');"></div>
                            <div class="mc-featured-img"><img src="'.$_article['main_img'].'"/></div>
                            <div class="mc-featured-txts">
                              <div class="mc-featured-title">'.$_article[$_lang]['title_feature'].'</div>
                            </div>
                            <a class="mc-feat-link" href="'.$_url_lang.'news/'.$_article['slug'].'"></a>
                          </div>';
                }
                
                echo '</div>';
              }

              /*$remainingArticles = count($_farticles) % 3;
              if ($remainingArticles > 0) {
                  echo '<div class="articles-row">';
                  for ($i = 0; $i < $remainingArticles; $i++) {
                      echo '<div class="mc-f-article">' . $_farticles[count($_farticles) - $remainingArticles + $i][$_lang]['title_feature'] . '</div>';
                  }
                  echo '</div>';
              }*/
              ?>
            </div>

            <!--<div class="mc-featured">
              <div class="mc-featured-blks">
                <div class="mc-featured-blk left">
                  <div class="mc-f-article">
                    <div class="mc-featured-img"><img src="< ?php print($_strings['news']['articles'][2]['main_img']); ?>"/></div>
                    <div class="mc-featured-txts">
                      <div class="mc-featured-title">< ?php print($_strings['news']['articles'][2][$_lang]['title_feature']); ?></div>
                    </div>
                    <a class="mc-feat-link" href="< ?php print($_url_lang.'news/'.$_strings['news_slugs'][2]); ?>"></a>
                  </div>
                </div>
                <div class="mc-featured-blk right">
                  <div class="mc-f-article">
                    <div class="mc-featured-bg" style="background-image:url(< ?php print($_strings['news']['articles'][0]['thumb_img']); ?>);"></div>
                    <div class="mc-featured-img"><img src="< ?php print($_strings['news']['articles'][0]['thumb_img']); ?>"/></div>
                    <div class="mc-featured-txts">
                      <div class="mc-featured-title">< ?php print($_strings['news']['articles'][0][$_lang]['title_feature']); ?></div>
                    </div>
                    <a class="mc-feat-link" href="< ?php print($_url_lang.'news/'.$_strings['news_slugs'][0]); ?>"></a>
                  </div>
                  <div class="mc-f-article">
                    <div class="mc-featured-bg" style="background-image:url(< ?php print($_strings['news']['articles'][1]['thumb_img']); ?>);"></div>
                    <div class="mc-featured-img"><img src="< ?php print($_strings['news']['articles'][1]['thumb_img']); ?>"/></div>
                    <div class="mc-featured-txts">
                      <div class="mc-featured-title">< ?php print($_strings['news']['articles'][1][$_lang]['title_feature']); ?></div>
                    </div>
                    <a class="mc-feat-link" href="< ?php print($_url_lang.'news/'.$_strings['news_slugs'][1]); ?>"></a>
                  </div>
                </div>
              </div>
            </div>-->

          </div>
        </div>
      </section>

    </div>
  </div>
</div>

<?php
include('config/footer.php');
?>