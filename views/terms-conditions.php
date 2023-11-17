<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');
include('config/header.php');
?>

<div class="nmo-view legal disclaimer" data-parentpage="legal">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">
      <div class="legal-content nmo-wrap1">
        <div class="legal-content-wrap">
          <div class="legal-title">
            <h1><?php print($_strings['legal']['terms'][$_lang]['title']) ?></h1>
          </div>  
          <div class="legal-txt">
            <?php print($_strings['legal']['terms'][$_lang]['content']) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('config/footer.php');