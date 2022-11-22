
<?php $faq_section_header_1 = get_post_meta($post->ID, 'faq_section_header_1', true ) ? get_post_meta($post->ID, 'faq_section_header_1', true ) : ''; ?>
<?php $faq_section_header_2 = get_post_meta($post->ID, 'faq_section_header_2', true ) ? get_post_meta($post->ID, 'faq_section_header_2', true ) : ''; ?>
<?php $faq_section_button_1 = get_post_meta($post->ID, 'faq_section_button_1', true ) ? get_post_meta($post->ID, 'faq_section_button_1', true ) : ''; ?>
<?php $faq_section_button_2 = get_post_meta($post->ID, 'faq_section_button_2', true ) ? get_post_meta($post->ID, 'faq_section_button_2', true ) : ''; ?>
<?php $faq_section_button_3 = get_post_meta($post->ID, 'faq_section_button_3', true ) ? get_post_meta($post->ID, 'faq_section_button_3', true ) : ''; ?>
<?php $faq_section_button_4 = get_post_meta($post->ID, 'faq_section_button_4', true ) ? get_post_meta($post->ID, 'faq_section_button_4', true ) : ''; ?>
<?php $faq_details_1 = get_post_meta( $post->ID, 'faq_details_1', true );  ?>
<?php $faq_details_2 = get_post_meta( $post->ID, 'faq_details_2', true );  ?>
<?php $faq_details_3 = get_post_meta( $post->ID, 'faq_details_3', true );  ?>
<?php $faq_details_4 = get_post_meta( $post->ID, 'faq_details_4', true );  ?>

<section id="faq">
  <div class="faq-section">
    <div class="faq-section-container-header">
      <h5 class="faq-section-header"><?php echo $faq_section_header_1; ?></h5>
      <h2 class="faq-section-header"><?php echo $faq_section_header_2; ?></h2>
    </div>
    <div class="faq-section-container-wrap">
      <div class="faq-section-container">
        <div class="faq-section-buttons">
          <button id="faqBodyButton" class="faq-section-button-body empty-button-body2 pointer faq-section-button-open" type="button">
            <span class="faq-section-button-text"><?php echo $faq_section_button_1; ?></span>
          </button>
          <button id="faqFaceButton" class="faq-section-button-body empty-button-body2 pointer" type="button">
            <span class="faq-section-button-text"><?php echo $faq_section_button_2; ?></span>
          </button>
          <button id="faqBrestButton" class="faq-section-button-body empty-button-body2 pointer" type="button">
            <span class="faq-section-button-text"><?php echo $faq_section_button_3; ?></span>
          </button>
          <button id="faqCosmetologyButton" class="faq-section-button-body empty-button-body2 pointer" type="button">
            <span class="faq-section-button-text"><?php echo $faq_section_button_4; ?></span>
          </button>
        </div>
          <!-- Детали блока Тело -->            
        <div id="faqBody" class="faq-section-details pointer">
          <?php if ($faq_details_1) : ?>
          <?php foreach ($faq_details_1 as $faq_details_1_item) :  ?>
          <?php  $faq_summary_1 = $faq_details_1_item['faq_summary_1'] ? $faq_details_1_item['faq_summary_1'] : '';  ?>
          <?php  $faq_section_p_1 = $faq_details_1_item['faq_section_p_1'] ? $faq_details_1_item['faq_section_p_1'] : '';  ?>
          <div class="faq-details pointer">  
            <div class="faq-summary">
            <?php echo $faq_summary_1; ?>
            </div>
            <p class="faq-section-details-p">
            <?php echo $faq_section_p_1; ?>
            </p>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <!-- Детали блока Лицо -->
        <div id="faqFace" class="faq-section-details pointer">
          <?php if ($faq_details_2) : ?>
          <?php foreach ($faq_details_2 as $faq_details_2_item) :  ?>
          <?php  $faq_summary_2 = $faq_details_2_item['faq_summary_2'] ? $faq_details_2_item['faq_summary_2'] : '';  ?>
          <?php  $faq_section_p_2 = $faq_details_2_item['faq_section_p_2'] ? $faq_details_2_item['faq_section_p_2'] : '';  ?>
          <div class="faq-details pointer">  
            <div class="faq-summary">
            <?php echo $faq_summary_2; ?>
            </div>
            <p class="faq-section-details-p">
            <?php echo $faq_section_p_2; ?>
            </p>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <!-- Детали блока Грудь -->
        <div id="faqBrest" class="faq-section-details pointer">
          <?php if ($faq_details_3) : ?>
          <?php foreach ($faq_details_3 as $faq_details_3_item) :  ?>
          <?php  $faq_summary_3 = $faq_details_3_item['faq_summary_3'] ? $faq_details_3_item['faq_summary_3'] : '';  ?>
          <?php  $faq_section_p_3 = $faq_details_3_item['faq_section_p_3'] ? $faq_details_3_item['faq_section_p_3'] : '';  ?>
          <div class="faq-details pointer">  
            <div class="faq-summary">
            <?php echo $faq_summary_3; ?>
            </div>
            <p class="faq-section-details-p">
            <?php echo $faq_section_p_3; ?>
            </p>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <!-- Детали блока Косметология -->
        <div id="faqCosmetology" class="faq-section-details pointer">
          <?php if ($faq_details_4) : ?>
          <?php foreach ($faq_details_4 as $faq_details_4_item) :  ?>
          <?php  $faq_summary_4 = $faq_details_4_item['faq_summary_4'] ? $faq_details_4_item['faq_summary_4'] : '';  ?>
          <?php  $faq_section_p_4 = $faq_details_4_item['faq_section_p_4'] ? $faq_details_4_item['faq_section_p_4'] : '';  ?>
          <div class="faq-details pointer">  
            <div class="faq-summary">
            <?php echo $faq_summary_4; ?>
            </div>
            <p class="faq-section-details-p">
            <?php echo $faq_section_p_4; ?>
            </p>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>