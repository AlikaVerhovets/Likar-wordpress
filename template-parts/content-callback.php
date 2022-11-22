
<?php $form_section_header = get_post_meta($post->ID, 'form_section_header', true ) ? get_post_meta($post->ID, 'form_section_header', true ) : ''; ?>
<?php $form_section_p1 = get_post_meta($post->ID, 'form_section_p1', true ) ? get_post_meta($post->ID, 'form_section_p1', true ) : ''; ?>
<?php $form_section_p2 = get_post_meta($post->ID, 'form_section_p2', true ) ? get_post_meta($post->ID, 'form_section_p2', true ) : ''; ?>
<?php $form_section_messengers = get_post_meta( $post->ID, 'form_section_messengers', true );  ?>
<?php $form_section_input_1 = get_post_meta($post->ID, 'form_section_input_1', true ) ? get_post_meta($post->ID, 'form_section_input_1', true ) : ''; ?>
<?php $form_section_input_2 = get_post_meta($post->ID, 'form_section_input_2', true ) ? get_post_meta($post->ID, 'form_section_input_2', true ) : ''; ?>
<?php $form_section_button_body = get_post_meta($post->ID, 'form_section_button_body', true ) ? get_post_meta($post->ID, 'form_section_button_body', true ) : ''; ?>

<section id="form1">
  <div class="form-section">
    <div class="form-section-container">
      <div class="form-section-container-context">
        <h2 class="h2-thin"><?php echo $form_section_header; ?></h2>
        <p class="form-section-p"><?php echo $form_section_p1; ?></p>
        <div class="form-section-p-img">
          <p class="form-section-p"><?php echo $form_section_p2; ?></p>
          <div>
          <?php if ($form_section_messengers) : ?>
          <?php foreach ($form_section_messengers as $form_section_messengers_item) :  ?>
          <?php  $form_section_messengers_img = $form_section_messengers_item['form_section_messengers_img'] ? $form_section_messengers_item['form_section_messengers_img'] : '';  ?>
          <?php  $form_section_messengers_link = $form_section_messengers_item['form_section_messengers_link'] ? $form_section_messengers_item['form_section_messengers_link'] : '';  ?>
            <a href="<?php echo $form_section_messengers_link; ?>">
              <img src="<?php echo $form_section_messengers_img; ?>" alt="">
            </a>
          <?php endforeach; ?>
          <?php endif; ?>
          </div>
        </div>
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
              <input id="submitinput" class="submit container-button-body empty-button-body pointer button-text" value="<?php echo $form_section_button_body; ?>" type="submit" />
          </div>
        </form>
        <div id="note"></div> 
      </div>
    </div>
  </div>
</section>
