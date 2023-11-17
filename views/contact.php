<?php
// To call this page, in the browser type:
// http://localhost/about

include('config/lang.php');

$_meta_title = $_strings['contact'][$_lang]['page_title'];

include('config/header.php');
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="nmo-view contact bgbeige" data-parentpage="contact">
  <div class="nmo-view-wrap">
    <div class="nmo-view-cont">

      <div class="view-page-header nmo-header-pad-top">
        <div class="nmo-title-mini vtitle">
          <h2><?php print($_strings['contact'][$_lang]['breadcrumb']); ?></h2>
        </div>
      </div>

      <div class="view-page-content nmo-wrap1">
        <div class="view-page-content-wrap">
          <div class="contact-blks">

            <div class="contact-blk txt">
              <div class="page-title"><h1><?php print($_strings['contact'][$_lang]['page_title']); ?></h1></div>
              <div class="page-into"><?php print($_strings['contact'][$_lang]['page_intro']); ?></div>
              <div class="contact-info-list">
                <?php
                $_cinf_arr = $_strings['contact'][$_lang]['contact_info'];
                $_inf_list = '';
                foreach($_cinf_arr as $key => $_inf){
                  $_inf_list .= '<div class="cinf-row">
                                    <div class="inf-title"><span>'.$_inf['title'].'</span></div>
                                    <div class="inf-subtitle">'.$_inf['subtitle'].'</div>
                                    <div class="inf-email"><a href="mailto:'.$_inf['email'].'" target="_blank">'.$_inf['email'].'</a></div>
                                </div>';
                }
                print($_inf_list);
                ?>
              </div>
            </div>

            <div class="contact-blk cform">
              <div class="nmo-cform">
                <div class="nmo-cform-wrap">
                  <div class="success-send bgbeige">
                    <div class="success-send-wrap">
                      <div class="success-send-cont">
                        <p><?php print($_strings['contact'][$_lang]['success_send']); ?></p>
                        <div class="nmo-btn-wrap al-right">
                          <a class="nmo-btn" onclick="resetCForm();">
                            <span class="nmo-btn-txt"><?php print($_strings['contact'][$_lang]['success_resend']); ?></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form class="contact-form" method="POST" action="/submitcontactform">
                    <div class="input-wrap name">
                      <input name="fname" type="text" class="nmo-inp" placeholder="<?php print($_strings['contact'][$_lang]['fname']); ?>"/>
                      <span class="err"><?php print($_strings['contact'][$_lang]['fname_err']); ?></span>
                    </div>

                    <div class="input-wrap phone">
                      <input name="phone" type="phone" class="nmo-inp" placeholder="<?php print($_strings['contact'][$_lang]['phone']); ?>"/>
                      <span class="err"><?php print($_strings['contact'][$_lang]['phone_err']); ?></span>
                    </div>

                    <div class="input-wrap email">
                      <input name="email" type="email" class="nmo-inp" placeholder="<?php print($_strings['contact'][$_lang]['email']); ?>"/>
                      <span class="err"><?php print($_strings['contact'][$_lang]['email_err']); ?></span>
                    </div>

                    <div class="input-wrap request">
                      <?php
                      $_req_arr = $_strings['contact'][$_lang]['req_type_list'];
                      $_req_opts = '';
                      foreach($_req_arr as $key => $_req){
                        $_req_opts .= '<option value="'.$_req.'">'.$_req.'</option>';
                      }
                      ?>
                      <select name="reqtype" class="nmo-inp">
                        <option value=""><?php print($_strings['contact'][$_lang]['req_type']); ?></option>
                        <?php print($_req_opts); ?>
                      </select>
                      <span class="err"><?php print($_strings['contact'][$_lang]['req_err']); ?></span>
                    </div>

                    <div class="input-wrap message">
                      <textarea name="msg" class="nmo-inp" placeholder="<?php print($_strings['contact'][$_lang]['msg']); ?>"></textarea>
                      <span class="err"><?php print($_strings['contact'][$_lang]['msg_err']); ?></span>
                    </div>

                    <div class="input-wrap terms">
                      <label class="nmo-check"><?php print($_strings['contact'][$_lang]['terms']); ?>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                      <span class="err"><?php print($_strings['contact'][$_lang]['terms_err']); ?></span>
                    </div>

                    <div class="input-wrap recaptcha">
                      <div class="g-recaptcha" data-sitekey="6Le5aksoAAAAANLO7SS4Ihaj2vF7Mh0WtsqLTnLQ"></div>
                      <span class="err"><?php print($_strings['contact'][$_lang]['captcha_err']); ?></span>
                    </div>

                    <div class="submit-wrap nmo-btn-wrap al-left">
                      <button type="submit" class="nmo-btn submit-contact-form"><span class="nmo-btn-txt"><?php print($_strings['contact'][$_lang]['submit']); ?></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
include('config/footer.php');