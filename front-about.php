<?php
/*
Template Name: О докторе
*/
?>

<?php $headerabout_1 = get_post_meta($post->ID, 'headerabout_1', true ) ? get_post_meta($post->ID, 'headerabout_1', true ) : ''; ?>
<?php $headerabout_2 = get_post_meta($post->ID, 'headerabout_2', true ) ? get_post_meta($post->ID, 'headerabout_2', true ) : ''; ?>

<?php $aboutdoc_img = get_post_meta($post->ID, 'aboutdoc_img', true ) ? get_post_meta($post->ID, 'aboutdoc_img', true ) : ''; ?>
<?php $aboutdoc_h_1 = get_post_meta($post->ID, 'aboutdoc_h_1', true ) ? get_post_meta($post->ID, 'aboutdoc_h_1', true ) : ''; ?>
<?php $aboutdoc_h_2 = get_post_meta($post->ID, 'aboutdoc_h_2', true ) ? get_post_meta($post->ID, 'aboutdoc_h_2', true ) : ''; ?>
<?php $aboutdoc_description = get_post_meta($post->ID, 'aboutdoc_description', true ) ? get_post_meta($post->ID, 'aboutdoc_description', true ) : ''; ?>
<?php $aboutdoc_achivments = get_post_meta( $post->ID, 'aboutdoc_achivments', true );  ?>
<?php $aboutdoc_button = get_post_meta($post->ID, 'aboutdoc_button', true ) ? get_post_meta($post->ID, 'aboutdoc_button', true ) : ''; ?>

<?php $whyme_h_1 = get_post_meta($post->ID, 'whyme_h_1', true ) ? get_post_meta($post->ID, 'whyme_h_1', true ) : ''; ?>
<?php $whyme_h_2 = get_post_meta($post->ID, 'whyme_h_2', true ) ? get_post_meta($post->ID, 'whyme_h_2', true ) : ''; ?>
<?php $whyme_circles = get_post_meta( $post->ID, 'whyme_circles', true );  ?>

<?php $education_h_1 = get_post_meta($post->ID, 'education_h_1', true ) ? get_post_meta($post->ID, 'education_h_1', true ) : ''; ?>
<?php $education_h_2 = get_post_meta($post->ID, 'education_h_2', true ) ? get_post_meta($post->ID, 'education_h_2', true ) : ''; ?>
<?php $education_quote_h = get_post_meta($post->ID, 'education_quote_h', true ) ? get_post_meta($post->ID, 'education_quote_h', true ) : ''; ?>
<?php $education_quote = get_post_meta($post->ID, 'education_quote', true ) ? get_post_meta($post->ID, 'education_quote', true ) : ''; ?>
<?php $education_list = get_post_meta( $post->ID, 'education_list', true );  ?>

<?php $learnings_h_1 = get_post_meta($post->ID, 'learnings_h_1', true ) ? get_post_meta($post->ID, 'learnings_h_1', true ) : ''; ?>
<?php $learnings_h_2 = get_post_meta($post->ID, 'learnings_h_2', true ) ? get_post_meta($post->ID, 'learnings_h_2', true ) : ''; ?>
<?php $learnings_quote_h = get_post_meta($post->ID, 'learnings_quote_h', true ) ? get_post_meta($post->ID, 'learnings_quote_h', true ) : ''; ?>
<?php $learnings_quote = get_post_meta($post->ID, 'learnings_quote', true ) ? get_post_meta($post->ID, 'learnings_quote', true ) : ''; ?>
<?php $learnings_list = get_post_meta($post->ID, 'learnings_list', true ) ? get_post_meta($post->ID, 'learnings_list', true ) : ''; ?>

<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>


<section id="headerabout">
  <div class="headerabout-section">
    <div class="headerabout-section-text">
      <div>
        <h2 class="headerabout-text"><?php echo $headerabout_1; ?></h2>
        <h4 class="headerabout-text"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>   
      </div>     
    </div>
  </div>
</section>


<section id="aboutdoc">
    <div class="aboutdoc-section">
        <div class="aboutdoc-section-photo">
            <img class="about-section-container-photo" src="<?php echo $aboutdoc_img; ?>" alt="Фото доктора">
        </div>
        <div class="aboutdoc-section-right">
            <div class="aboutdoc-section-header">
              <h5><?php echo $aboutdoc_h_1; ?></h5>
              <h2 class="aboutdoc-h2">
              <?php echo $aboutdoc_h_2; ?>
              </h2>
            </div>
            <div class="aboutdoc-section-container-description">
            <?php echo $aboutdoc_description; ?>
            </div>
            <div class="aboutdoc-section-container-list-frame">
            <?php if ($aboutdoc_achivments) : ?>
            <?php foreach ($aboutdoc_achivments as $aboutdoc_achivments_item) :  ?>
            <?php  $aboutdoc_achivment = $aboutdoc_achivments_item['aboutdoc_achivment'] ? $aboutdoc_achivments_item['aboutdoc_achivment'] : '';  ?>
                <div class="about-section-container-list aboutdoc-section-list">
                    <img class="list-item" src="http://my-wp/wp-content/uploads/2021/10/галочка.png" alt="Галочка">
                    <?php echo $aboutdoc_achivment; ?>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
            </div>
            <div class="about-section-container-buttons">
                <button type="button" class="container-button-body empty-button-body pointer popup-open">
                    <span class="button-text">
                    <?php echo $aboutdoc_button; ?>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>


<section id="whyme">
    <div class="headerabout-section">
        <div class="headerabout-section-text">
          <div>
            <h2 class="headerabout-text"><?php echo $whyme_h_1; ?></h2>
            <h4 class="headerabout-text"><?php echo $whyme_h_2; ?></h4>
          </div>
        
          <div class="aboutdoc-section-container-circles">
            <?php if ($whyme_circles) : ?>
            <?php foreach ($whyme_circles as $whyme_circles_item) :  ?>
            <?php  $whyme_circles_number = $whyme_circles_item['whyme_circles_number'] ? $whyme_circles_item['whyme_circles_number'] : '';  ?>
            <?php  $whyme_circles_des = $whyme_circles_item['whyme_circles_des'] ? $whyme_circles_item['whyme_circles_des'] : '';  ?>
            <?php  $whyme_circles_text = $whyme_circles_item['whyme_circles_text'] ? $whyme_circles_item['whyme_circles_text'] : '';  ?>
              <div class="aboutdoc-section-container-circles-body">
                <span class="about-section-container-circles-number"><?php echo $whyme_circles_number; ?></span>
                <span class="about-section-container-circles-des"><?php echo $whyme_circles_des; ?></span>
                <span class="about-section-container-circles-text"><?php echo $whyme_circles_text; ?></span>
              </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
    </div>
</section>


<section id="education">
    <div class="education-section">
        <div class="margin-top-bottom-50">
            <h5><?php echo $education_h_1; ?></h5>
            <h2><?php echo $education_h_2; ?></h2>
        </div>
        <div class="education-section-container">
          <div class="section-left-quote">
              <div class="section-left-quote-container"></div>
              <span class="section-left-quote-name"><?php echo $education_quote_h; ?></span>
              <span class="section-left-quote-text"><?php echo $education_quote; ?></span>
          </div>
          <div class="education-section-right">
              <?php if ($education_list) : ?>
              <?php foreach ($education_list as $education_list_item) :  ?>
              <?php  $education_list_img = $education_list_item['education_list_img'] ? $education_list_item['education_list_img'] : '';  ?>
              <?php  $education_list_text = $education_list_item['education_list_text'] ? $education_list_item['education_list_text'] : '';  ?>
                  <div class="education-section-right-text">
                      <img class="text-img" src="<?php echo $education_list_img; ?>" alt="">
                      <?php echo $education_list_text; ?>
                  </div>
              <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/content', 'callback'); ?>


<section id="learnings">
    <div class="learnings-section">
        <div class="margin-top-bottom-50">
            <h5><?php echo $learnings_h_1; ?></h5>
            <h2><?php echo $learnings_h_2; ?></h2>
        </div>
        <div class="education-section-container">
          <div class="section-left-quote">
            <div class="section-left-quote-container"></div>
            <span class="section-left-quote-name"><?php echo $learnings_quote_h; ?></span>
            <span class="section-left-quote-text"><?php echo $learnings_quote; ?></span>
          </div>
          <div class="learnings-section-right"><?php echo $learnings_list; ?></div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/content', 'reviews'); ?>

<?php get_template_part('template-parts/content', 'callback2'); ?>

    
<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>