<?php
if($_sp_page == 'news-inner'){
  $_padd_class = 'nmo-wrap1';
  $_max_class = 'nmo-max';
  $_title_mini_class = 'vtitle';
} else {
  $_padd_class = 'nmo-wrap2';
  $_max_class = '';
  $_title_mini_class = '';
}
?>

      <section class="nmo-sec news <?php print($_max_class); ?>">
        <div class="sec-wrap">
          <div class="sec-cont">

            <div class="fnews-header <?php print($_padd_class); ?>">
              <div class="home-flex-blks">
                <div class="flxblk left">
                  <div class="nmo-title-mini <?php print($_title_mini_class); ?>">
                    <h2><?php print($_strings['news']['common'][$_lang]['fnews_title']); ?></h2>
                  </div>
                </div>
                <div class="flxblk right">
                  <div class="nmo-btn-wrap al-right">
                    <a class="nmo-btn" href="<?php print($_url_lang); ?>media-center">
                      <span class="nmo-btn-txt"><?php print($_strings['gen_sett'][$_lang]['view_news']); ?></span>
                      <span class="nmo-btn-icn">
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1 0.5H13M13 0.5V12.5M13 0.5L1 12.5" stroke="white"/>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="fnews-list <?php print($_padd_class); ?>">
              <div class="fnews-list-wrap">
                <div class="fnews-list-cont">

                  <?php

                  foreach ($_strings['news']['articles'] as $index => $iarticle) {
                    if ($iarticle['slug'] === $nid) {
                        $_artic_arr_id = $index;
                        break; // Stop the loop once you find a match
                    }
                  }

                  /*if(isset($nid)){
                    $_artic_arr_id = array_search($nid, $_strings['news']['articles']);
                  } else {
                    $_artic_arr_id = 'showall';
                  }*/
                  
                  $_farticles = $_strings['news']['articles'];
                  $_farticles_list = '';
                  $_art_count = 0;
                  unset($_farticles[$_artic_arr_id]);
                  shuffle($_farticles);
                  foreach($_farticles as $key => $_article){

                    //print($_artic_arr_id.' - '.$key.'<br>');

                    //if($key != $_artic_arr_id){
                      $_fa_title = $_article[$_lang]['title_feature'];
                      $_fa_summary = $_article[$_lang]['summary'];
                      $_fa_date = $_article[$_lang]['date'];
                      $_fa_thumb = $_article['thumb_img'];
                      $_article_slug = $_article['slug'];

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
                      $_art_count++;
                    //}
                    if($_art_count == 3){ break; }
                    
                  }

                  print($_farticles_list);
                  ?>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>