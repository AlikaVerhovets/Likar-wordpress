<?php
/*
Template Name: Мой шаблон главной страницы
*/
?>

<?php $main_slider = get_post_meta( $post->ID, 'main_slider', true );  ?>

<?php $services_section_title_h4 = get_post_meta($post->ID, 'services_section_title_h4', true ) ? get_post_meta($post->ID, 'services_section_title_h4', true ) : ''; ?>
<?php $services_section_title_header_big = get_post_meta($post->ID, 'services_section_title_header_big', true ) ? get_post_meta($post->ID, 'services_section_title_header_big', true ) : ''; ?>
<?php $services_section_info_box = get_post_meta( $post->ID, 'services_section_info_box', true );  ?>

<?php $about_section_container_photo = get_post_meta($post->ID, 'about_section_container_photo', true ) ? get_post_meta($post->ID, 'about_section_container_photo', true ) : ''; ?>
<?php $about_section_container_annotation_text = get_post_meta($post->ID, 'about_section_container_annotation_text', true ) ? get_post_meta($post->ID, 'about_section_container_annotation_text', true ) : ''; ?>
<?php $about_section_container_header_small = get_post_meta($post->ID, 'about_section_container_header_small', true ) ? get_post_meta($post->ID, 'about_section_container_header_small', true ) : ''; ?>
<?php $about_section_container_h2 = get_post_meta($post->ID, 'about_section_container_h2', true ) ? get_post_meta($post->ID, 'about_section_container_h2', true ) : ''; ?>
<?php $about_section_container_description = get_post_meta($post->ID, 'about_section_container_description', true ) ? get_post_meta($post->ID, 'about_section_container_description', true ) : ''; ?>
<?php $about_section_container_circles_body = get_post_meta( $post->ID, 'about_section_container_circles_body', true );  ?>
<?php $about_section_container_list = get_post_meta( $post->ID, 'about_section_container_list', true );  ?>
<?php $about_section_container_button_body = get_post_meta( $post->ID, 'about_section_container_button_body', true );  ?>

<?php $benefits_section_header_small = get_post_meta($post->ID, 'benefits_section_header_small', true ) ? get_post_meta($post->ID, 'benefits_section_header_small', true ) : ''; ?>
<?php $benefits_section_header_big = get_post_meta($post->ID, 'benefits_section_header_big', true ) ? get_post_meta($post->ID, 'benefits_section_header_big', true ) : ''; ?>
<?php $benefits_section_container_box = get_post_meta( $post->ID, 'benefits_section_container_box', true );  ?>
<?php $benefits_section_button_body = get_post_meta($post->ID, 'benefits_section_button_body', true ) ? get_post_meta($post->ID, 'benefits_section_button_body', true ) : ''; ?>

<?php $map_link = get_post_meta($post->ID, 'map_link', true ) ? get_post_meta($post->ID, 'map_link', true ) : ''; ?>

<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>


<section id="main" class="main">
  <div>
    <div class="main-slider">
    <?php if ($main_slider) : ?>
    <?php foreach ($main_slider as $main_slider_item) :  ?>
    <?php  $main_block_background_img = $main_slider_item['main_block_background_img'] ? $main_slider_item['main_block_background_img'] : '';  ?>
    <?php  $main_block_text_h2 = $main_slider_item['main_block_text_h2'] ? $main_slider_item['main_block_text_h2'] : '';  ?>
    <?php  $main_block_text_p = $main_slider_item['main_block_text_p'] ? $main_slider_item['main_block_text_p'] : '';  ?>
    <?php  $main_block_button_body = $main_slider_item['main_block_button_body'] ? $main_slider_item['main_block_button_body'] : '';  ?>
    <?php  $main_slider_link = $main_slider_item['main_slider_link'] ? $main_slider_item['main_slider_link'] : '';  ?>
    
      <div class="main-slider-item">
        <div class="main-block">
          <div class='main-block-container'>
            <div class="main-block-text">
              <h2 class="h2-thin">
                <?php echo $main_block_text_h2; ?>
              </h2>
              <p class="main-block-text-p">
                <?php echo $main_block_text_p; ?>  
              </p>
            </div>
            <div class="main-block-button">
              <a href="<?php echo $main_slider_link; ?>">
              <button type="button" class="main-block-button-body empty-button-body pointer">
                <span class="main-block-button-text">
                  <?php echo $main_block_button_body; ?>
                </span>
              </button>
              </a>
            </div>
          </div>
        </div>
        <div class="main-block-background">
          <img class="main-block-background-img" src="<?php echo $main_block_background_img; ?>" />
        </div>
      </div>
    
    <?php endforeach; ?>
    <?php endif; ?>
    </div>

  </div>
</section>


<a href="#servicesid" class="main-section-button-down">
  <button type="button" class="main-section-button-down-body pointer">
    <img src="http://my-wp/wp-content/uploads/2021/10/Polygon-2.png" alt="Вниз">
  </button>
</a>



<section id="services">
  <div class="services-section" id="servicesid">
    <div class="services-section-title">
      <h4 class="services-section-title-h4">
      <?php echo $services_section_title_h4; ?>
      </h4>
      <h2 class="services-section-title-header-big">
      <?php echo $services_section_title_header_big; ?>
      </h2>
    </div>
    <div class="services-section-info">
    <?php if ($services_section_info_box) : ?>
    <?php foreach ($services_section_info_box as $services_section_info_box_item) :  ?>
    <?php  $services_section_info_box_img_body = $services_section_info_box_item['services_section_info_box_img_body'] ? $services_section_info_box_item['services_section_info_box_img_body'] : '';  ?>
    <?php  $services_section_info_text_header = $services_section_info_box_item['services_section_info_text_header'] ? $services_section_info_box_item['services_section_info_text_header'] : '';  ?>
    <?php  $services_section_info_text_info = $services_section_info_box_item['services_section_info_text_info'] ? $services_section_info_box_item['services_section_info_text_info'] : '';  ?>
      <div class="services-section-info-box">
        <div class="container-img">
          <img class="container-img-in" src="<?php echo $services_section_info_box_img_body; ?>">
          <img class="container-img-ellipse" src="http://my-wp/wp-content/uploads/2021/10/Ellipse-115.png" alt="Круглая рамка">
        </div>
        <div class="services-section-info-text">
          <h3>
          <?php echo $services_section_info_text_header; ?>
          </h3>
          <div class="services-section-info-text-info">
          <?php echo $services_section_info_text_info; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
  </div>
</section>



<section id="about">
  <div class="about-section">
    <div class="about-section-container">
      <div>
        <img class="about-section-container-photo" src="<?php echo $about_section_container_photo; ?>" />
        <div class="about-section-container-annotation">
          <div class='about-section-container-annotation-text'>
            <?php echo $about_section_container_annotation_text; ?>
          </div>
        </div>
      </div>
      <div class="about-section-container-right">
        <h5>
        <?php echo $about_section_container_header_small; ?>
        </h5>
        <div class="about-section-container-big">
          <div class="about-section-container-h2">
          <?php echo $about_section_container_h2; ?>
          </div>
        </div>
        <div>
          <div class="about-section-container-description">
          <?php echo $about_section_container_description; ?>
          </div>
        </div>
        <div class="about-section-container-circles">
          <?php if ($about_section_container_circles_body) : ?>
          <?php foreach ($about_section_container_circles_body as $about_section_container_circles_body_item) :  ?>
          <?php  $about_section_container_circles_number = $about_section_container_circles_body_item['about_section_container_circles_number'] ? $about_section_container_circles_body_item['about_section_container_circles_number'] : '';  ?>
          <?php  $about_section_container_circles_des = $about_section_container_circles_body_item['about_section_container_circles_des'] ? $about_section_container_circles_body_item['about_section_container_circles_des'] : '';  ?>
          <?php  $about_section_container_circles_text = $about_section_container_circles_body_item['about_section_container_circles_text'] ? $about_section_container_circles_body_item['about_section_container_circles_text'] : '';  ?>
            <div class="about-section-container-circles-body">
              <div>
                <span class="about-section-container-circles-number">
                <?php echo $about_section_container_circles_number; ?>
                </span>
                <span class="about-section-container-circles-des">
                <?php echo $about_section_container_circles_des; ?>
                </span>
              </div>
              <span class="about-section-container-circles-text">
              <?php echo $about_section_container_circles_text; ?>
              </span>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div>
          <?php if ($about_section_container_list) : ?>
          <?php foreach ($about_section_container_list as $about_section_container_list_item) :  ?>
          <?php  $about_section_container_list_des = $about_section_container_list_item['about_section_container_list_des'] ? $about_section_container_list_item['about_section_container_list_des'] : '';  ?>
            <div class="about-section-container-list">
              <img class="list-item" src="http://my-wp/wp-content/uploads/2021/10/icons8-галочка-100-2.png" alt="Галочка">
              <?php echo $about_section_container_list_des; ?>
            </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="about-section-container-buttons">
        <?php if ($about_section_container_button_body) : ?>
          <?php foreach ($about_section_container_button_body as $about_section_container_button_body_item) :  ?>
          <?php  $about_section_button_link = $about_section_container_button_body_item['about_section_button_link'] ? $about_section_container_button_body_item['about_section_button_link'] : '';  ?>
          <?php  $about_section_container_button_text = $about_section_container_button_body_item['about_section_container_button_text'] ? $about_section_container_button_body_item['about_section_container_button_text'] : '';  ?>
          <?php  $about_section_container_button_class = $about_section_container_button_body_item['about_section_container_button_class'] ? $about_section_container_button_body_item['about_section_container_button_class'] : '';  ?>
            <a href="<?php echo $about_section_button_link; ?>">
            <button type="button" class="container-button-body empty-button-body pointer <?php echo $about_section_container_button_class; ?>">
              <span class="button-text">
              <?php echo $about_section_container_button_text; ?>
              </span>
            </button>
            </a>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="benefits">
  <div class="benefits-section">
    <div class="benefits-section-header">
      <h5 class="benefits-section-header-small">
      <?php echo $benefits_section_header_small; ?>
      </h5>
      <h2 class="benefits-section-header-big">
      <?php echo $benefits_section_header_big; ?>
      </h2>
    </div>
    <div class="benefits-section-container">  
      <?php if ($benefits_section_container_box) : ?>
      <?php foreach ($benefits_section_container_box as $benefits_section_container_box_item) :  ?>
      <?php  $benefits_section_container_img_check = $benefits_section_container_box_item['benefits_section_container_img_check'] ? $benefits_section_container_box_item['benefits_section_container_img_check'] : '';  ?>
      <?php  $benefits_section_container_text_header = $benefits_section_container_box_item['benefits_section_container_text_header'] ? $benefits_section_container_box_item['benefits_section_container_text_header'] : '';  ?>
      <?php  $benefits_section_container_text_paragraph = $benefits_section_container_box_item['benefits_section_container_text_paragraph'] ? $benefits_section_container_box_item['benefits_section_container_text_paragraph'] : '';  ?>
        <div class="benefits-section-container-box">
          <div class="container-img">
            <img class="container-img-in" src="<?php echo $benefits_section_container_img_check; ?>">
            <img class="container-img-ellipse" src="http://my-wp/wp-content/uploads/2021/10/Ellipse-115.png" alt="Круглая рамка">
          </div>
          <div>
            <h3>
              <?php echo $benefits_section_container_text_header; ?>
            </h3>
            <p class="benefits-section-container-text-paragraph">
              <?php echo $benefits_section_container_text_paragraph; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="benefits-section-button">
      <button type="button" class="container-button-body empty-button-body pointer popup-open">
        <span class="button-text">
        <?php echo $benefits_section_button_body; ?>
        </span>
      </button>
    </div>
  </div>
</section>


<?php get_template_part('template-parts/content', 'callback'); ?>

<?php get_template_part('template-parts/content', 'faqFull'); ?>

<?php get_template_part('template-parts/content', 'reviews'); ?>

<?php get_template_part('template-parts/content', 'callback2'); ?>



<section id="map">
  <div class="map-section">
  <iframe src="<?php echo $map_link; ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php 
if(pll_current_language() == 'uk'){
  get_footer('uk');
} else if(pll_current_language() == 'en'){
  get_footer('en');
}
?>