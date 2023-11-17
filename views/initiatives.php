<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['initiatives']['common'][$_lang]['fini_title'];

include('config/header.php');

$_intv_arr = $_strings['initiatives']['list'];

$_intv_list = '';
foreach($_intv_arr as $key => $_intv){
  $_intv_list .= '<div class="intv-row">
                    <div class="intv-row-wrap">
                      <a class="intv-link" href="'.$_url_lang.'initiatives/climate-ambassadors"></a>
                      <div class="intv-row-blks">
                        <div class="intv-thumb"><div class="overlay"></div><img src="'.$_intv['thumb'].'"/></div>
                        <div class="intv-txts">
                          <div class="intv-title">'.$_intv[$_lang]['title'].'</div>
                        </div>
                      </div>
                    </div>
                  </div>';
                  //<div class="intv-summ">'.$_intv[$_lang]['summary'].'</div>
}
?>

<div class="nmo-view initiatives" data-parentpage="">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <div class="view-page-header nmo-header-pad-top">
        <div class="nmo-title-mini vtitle">
          <h1><?php print($_strings['initiatives']['common'][$_lang]['breadcrumb']); ?></h1>
        </div>
      </div>

      <div class="view-page-content nmo-wrap1">
        <div class="view-page-content-wrap">
          
          <div class="initv-list">
            <div class="initv-list-wrap">
              <?php print($_intv_list); ?>
            </div>
          </div>
          
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include('config/footer.php');