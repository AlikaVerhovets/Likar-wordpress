.<?php $reviews_section_h_1 = get_post_meta($post->ID, 'reviews_section_h_1', true ) ? get_post_meta($post->ID, 'reviews_section_h_1', true ) : ''; ?>
<?php $reviews_section_h_2 = get_post_meta($post->ID, 'reviews_section_h_2', true ) ? get_post_meta($post->ID, 'reviews_section_h_2', true ) : ''; ?>
<?php $review = get_post_meta( $post->ID, 'review', true );  ?>
<?php $review_button_link = get_post_meta($post->ID, 'review_button_link', true ) ? get_post_meta($post->ID, 'review_button_link', true ) : ''; ?>
<?php $review_button_text = get_post_meta($post->ID, 'review_button_text', true ) ? get_post_meta($post->ID, 'review_button_text', true ) : ''; ?>

<section id="reviews">
  <div class="reviews-section">
    <div class="margin-top-bottom-50">
      <h5 class="reviews-section-header-h"><?php echo $reviews_section_h_1; ?></h5>
      <h2 class="reviews-section-header-h"><?php echo $reviews_section_h_2; ?></h2>
    </div>
    <div class="reviews-slider-item">
      <div class="reviews-slider-block">
        <?php if ($review) : ?>
        <?php foreach ($review as $review_item) :  ?>
        <?php  $review_name = $review_item['review_name'] ? $review_item['review_name'] : '';  ?>
        <?php  $review_address = $review_item['review_address'] ? $review_item['review_address'] : '';  ?>
        <?php  $review_p = $review_item['review_p'] ? $review_item['review_p'] : '';  ?>
        <div class="review">
          <div class="review-container">
            <span class="review-name"><?php echo $review_name; ?></span>
            <address class="review-address"><?php echo $review_address; ?></address>
            <div class="review-section-details">
                <p class="review-section-details-p"><?php echo $review_p; ?></p>
                <div class="review-summary pointer"><?php pll_e('Details'); ?> ﹀</div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>
    <a class="review-section-button-body-wrap" href="<?php echo $review_button_link; ?>">
      <button type="button" class="container-button-body empty-button-body pointer">
        <span class="button-text">
        <?php echo $review_button_text; ?>
        </span>
      </button>
    </a>
  </div>
</section>