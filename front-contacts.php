<?php
/*
Template Name: Контакты
*/
?>

<?php $contacts_title_big = get_post_meta($post->ID, 'contacts_title_big', true ) ? get_post_meta($post->ID, 'contacts_title_big', true ) : ''; ?>
<?php $map_contacts_link = get_post_meta($post->ID, 'map_contacts_link', true ) ? get_post_meta($post->ID, 'map_contacts_link', true ) : ''; ?>
<?php $contacts_phone_title = get_post_meta($post->ID, 'contacts_phone_title', true ) ? get_post_meta($post->ID, 'contacts_phone_title', true ) : ''; ?>
<?php $contacts_phone = get_post_meta($post->ID, 'contacts_phone', true ) ? get_post_meta($post->ID, 'contacts_phone', true ) : ''; ?>
<?php $contacts_adress_title = get_post_meta($post->ID, 'contacts_adress_title', true ) ? get_post_meta($post->ID, 'contacts_adress_title', true ) : ''; ?>
<?php $contacts_adress = get_post_meta($post->ID, 'contacts_adress', true ) ? get_post_meta($post->ID, 'contacts_adress', true ) : ''; ?>
<?php $contacts_email_title = get_post_meta($post->ID, 'contacts_email_title', true ) ? get_post_meta($post->ID, 'contacts_email_title', true ) : ''; ?>
<?php $contacts_email = get_post_meta($post->ID, 'contacts_email', true ) ? get_post_meta($post->ID, 'contacts_email', true ) : ''; ?>
<?php $contacts_form_title = get_post_meta($post->ID, 'contacts_form_title', true ) ? get_post_meta($post->ID, 'contacts_form_title', true ) : ''; ?>
<?php $form_contacts_section_input_1 = get_post_meta($post->ID, 'form_section_input_1', true ) ? get_post_meta($post->ID, 'form_section_input_1', true ) : ''; ?>
<?php $form_contacts_section_input_2 = get_post_meta($post->ID, 'form_section_input_2', true ) ? get_post_meta($post->ID, 'form_section_input_2', true ) : ''; ?>
<?php $form_contacts_section_button_body = get_post_meta($post->ID, 'form_section_button_body', true ) ? get_post_meta($post->ID, 'form_section_button_body', true ) : ''; ?>



<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>



<section id="headerContacts">
    <div class="headerabout-section">
        <div class="headerabout-section-text">
            <div>
                <h2 class="headerabout-text"><?php echo $contacts_title_big; ?></h2>
                <h4 class="headerabout-text"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>
            </div>          
        </div>
    </div>
</section>

<section id="contacts">
    <div class="contacts-section">
      <div class="map-section-contacts">
        <iframe src="<?php echo $map_contacts_link; ?>" width="100%" height="99%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="contacts-text">
        <div class="contacts-text-container">
          <span class="contacts-title"><?php echo $contacts_phone_title; ?></span>
          <div>
            <a class="contacts-info" href="tel:+380504419885"><?php echo $contacts_phone; ?></a>
          </div>
        </div>
        <div class="contacts-text-container">
          <span class="contacts-title"><?php echo $contacts_adress_title; ?></span>
          <div>
            <a class="contacts-info" href="https://maps.google.com/maps/dir//%D0%9E%D0%B1%D0%B5%D1%80%D1%96%D0%B3+%D0%B2%D1%83%D0%BB.+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3,+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+%C2%AB%D0%92%C2%BB+%D0%B2%D1%83%D0%BB.+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3,+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+%C2%AB%D0%93%C2%BB,+%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3%D0%92+%D0%9A%D0%B8%D1%97%D0%B2+03057/@50.458185,30.4585856,21z/data=!4m5!4m4!1m0!1m2!1m1!1s0x40d4cc2bc6881c2d:0x3dd9dc2b53a93f70"><?php echo $contacts_adress; ?></a>
          </div>
        </div>
        <div class="contacts-text-container">
          <span class="contacts-title"><?php echo $contacts_email_title; ?></span>
          <div>
            <a class="contacts-info" href="mailto:olgabaranskaya@gmail.com"><?php echo $contacts_email; ?></a>
          </div>
        </div>
        <div class="contacts-text-container">
          <h2><?php echo $contacts_form_title; ?></h2>
          <form class="form-section-feedbackform" id="contact" action="<?php bloginfo('template_url'); ?>/mail.php" method="post">
            <div class="form-section-feedback-box">
                <label class="form-section-input-title"><?php echo $form_section_input_1; ?></label>
                <input type="text"  name="name" placeholder="<?php pll_e('Name'); ?>" class="input" required>
            </div>
            <div class="form-section-feedback-box">
                <label class="form-section-input-title"><?php echo $form_section_input_2; ?></label>
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
                <input id="submitinput" class="submit container-button-body empty-button-body pointer button-text" value="<?php echo $form_contacts_section_button_body; ?>" type="submit" />
            </div>
          </form>
          <div id="note"></div> 
        </div>
      </div>
    </div>
</section>

<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>