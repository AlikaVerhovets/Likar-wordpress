<?php
/*
Template Name: Галерея
*/
?>


<?php $galery_title_h4 = get_post_meta($post->ID, 'galery_title_h4', true ) ? get_post_meta($post->ID, 'galery_title_h4', true ) : ''; ?>
<?php $galery_title_big = get_post_meta($post->ID, 'galery_title_big', true ) ? get_post_meta($post->ID, 'galery_title_big', true ) : ''; ?>

<?php $galery = get_post_meta( $post->ID, 'galery', true );  ?>

<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>



<section id="headergalery">
  <div class="headerabout-section">
    <div class="headerabout-section-text">
      <div>
        <h2 class="headerabout-text"><?php echo $galery_title_h4; ?></h1>
        <h4 class="headerabout-text"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>
      </div>          
    </div>
  </div>
</section>


<section id="galery">
  <div class="galery">
    <?php if ($galery) : ?>
    <?php foreach ($galery as $galery_item) :  ?>
    <?php  $galery_img = $galery_item['galery_img'] ? $galery_item['galery_img'] : '';  ?>
    <?php  $galery_link = $galery_item['galery_link'] ? $galery_item['galery_link'] : '';  ?>
    <div class="galery-unit">
      <div class="galery-img-box">
        <div class="galery-img-back">
          <img class="galery-img pointer" src="<?php echo $galery_img; ?>" alt="">
        </div>
      </div>
      <div class="galery-img-full-back st0">
        <div class="galery-close pointer">x</div>
        <div class="galery-img-full-container">
          <img class="galery-img-full" src="<?php echo $galery_link; ?>" alt="">
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <button class="more container-button-body empty-button-body pointer">
    <span class="button-text"><?php pll_e('More'); ?>
    </span>
  </button>
  
</section>

<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>