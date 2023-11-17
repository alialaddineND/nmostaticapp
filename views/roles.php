<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['roles'][$_lang]['meta_title'];
$_meta_dec = preg_replace('/[^A-Za-z0-9 ,.\-\x{0600}-\x{06FF}]/u', '', strip_tags($_strings['roles'][$_lang]['meta_desc']));

include('config/header.php');

$_roles_arr = $_strings['roles'][$_lang]['roles_list'];

$_roles_list = '';
foreach($_roles_arr as $key => $_role){
  $_roles_list .= '<div class="role-row">
                      <div class="role-row-wrap">
                        <span class="row-icn">
                          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_1_2451)">
                          <path d="M11.46 15.3034L16.7633 10.0001L11.46 4.69678" stroke="#263326" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M16.4982 10.2653H4.83092" stroke="#263326" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_1_2451">
                          <rect width="12" height="16" fill="white" transform="translate(11.8135 0.100586) rotate(45)"/>
                          </clipPath>
                          </defs>
                          </svg>
                        </span>
                        <span class="row-txt">'.$_role.'</span>
                      </div>
                    </div>';
}
?>

<div class="nmo-view roles" data-parentpage="about">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <div class="view-page-header nmo-header-pad-top">
        <div class="nmo-title-mini vtitle">
          <h2><?php print($_strings['about'][$_lang]['short_title']); ?></h2>
        </div>
      </div>

      <div class="view-page-content min-page nmo-wrap1">
        <div class="view-page-content-wrap">
          <div class="view-page-title"><h1><?php print($_strings['roles'][$_lang]['title']); ?></h1></div>
          <div class="roles-intro">
            <div class="roles-intro-wrap"><?php print($_strings['roles'][$_lang]['intro']); ?></div>
          </div>
          <div class="roles-list">
            <div class="roles-list-wrap">
              <?php print($_roles_list); ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include('config/footer.php');