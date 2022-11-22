<div id="form-popup" class="st0">
  <div class="popup-container">
  <div class="popup-close-container">
    <div class="popup-close pointer">X</div>
  </div>
  <div class="form-section">
    <div class="form-section-container">
      <div class="form-section-container-context">
        <h2 class="h2-thin"><?php pll_e('Form_header'); ?></h2>
        <p class="form-section-p"><?php pll_e('Form_p1'); ?></p>
        <div class="form-section-p-img">
          <p class="form-section-p"><?php pll_e('Form_p2'); ?></p>
          <div>
            <a href="<?php pll_e('Form_link_viber'); ?>">
              <img src="http://my-wp/wp-content/uploads/2021/10/icons8-viber-240-1.png" alt="">
            </a>
            <a href="<?php pll_e('Form_link_telegram'); ?>">
              <img src="http://my-wp/wp-content/uploads/2021/10/icons8-телеграмма-app-96-1.png" alt="">
            </a>
            <a href="<?php pll_e('Form_link_whatsup'); ?>">
              <img src="http://my-wp/wp-content/uploads/2021/10/icons8-whatsapp-160-1-1.png" alt="">
            </a>
          </div>
        </div>
        <form class="form-section-feedbackform" id="contact" action="<?php bloginfo('template_url'); ?>/mail.php" method="post">
          <div class="form-section-feedback-box">
              <label class="form-section-input-title"><?php pll_e('Form_name'); ?></label>
              <input type="text"  name="name" placeholder="<?php pll_e('Name'); ?>" class="input" required>
          </div>
          <div class="form-section-feedback-box">
              <label class="form-section-input-title"><?php pll_e('Form_phone'); ?></label>
              <input type="text" name="tel" class="input phone-mask" required>
              <script type="text/javascript">
                $.jMaskGlobals = {translation: {
                    'n': {pattern: /\d/},
                  }
                  
                };
                $('.phone-mask').mask('+380 (nn) nnn-nn-nn').val('+380');
              </script>
          </div>
          <div class="form-section-feedback-box">
              <input id="submitinput" class="submit container-button-body empty-button-body pointer button-text" value="<?php pll_e('Form_button'); ?>" type="submit" />
          </div>
        </form>
        <div id="note"></div> 
      </div>
    </div>
  </div></div>
</div>
