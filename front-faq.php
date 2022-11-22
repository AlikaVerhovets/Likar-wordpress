<?php
/*
Template Name: Вопросы-ответы
*/
?>

<?php $faq_section_header_2 = get_post_meta($post->ID, 'faq_section_header_2', true ) ? get_post_meta($post->ID, 'faq_section_header_2', true ) : ''; ?>

<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>



<section id="headerFaqPage">
  <div class="headerabout-section">
    <div class="headerabout-section-text">
      <div>
        <h2 class="headerabout-text"><?php echo $faq_section_header_2; ?></h2>
        <h4 class="headerabout-text"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>
      </div>          
    </div>
  </div>
</section>

<?php get_template_part('template-parts/content', 'faqFull'); ?>

<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>