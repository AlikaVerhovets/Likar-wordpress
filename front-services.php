<?php
/*
Template Name: Наши услуги
*/
?>

<?php $service_name_h_1 = get_post_meta($post->ID, 'service_name_h_1', true ) ? get_post_meta($post->ID, 'service_name_h_1', true ) : ''; ?>
<?php $service_name_h_2 = get_post_meta($post->ID, 'service_name_h_2', true ) ? get_post_meta($post->ID, 'service_name_h_2', true ) : ''; ?>
<?php $service_name_des = get_post_meta($post->ID, 'service_name_des', true ) ? get_post_meta($post->ID, 'service_name_des', true ) : ''; ?>
<?php $service_name_button = get_post_meta($post->ID, 'service_name_button', true ) ? get_post_meta($post->ID, 'service_name_button', true ) : ''; ?>
<?php $service_name_img = get_post_meta($post->ID, 'service_name_img', true ) ? get_post_meta($post->ID, 'service_name_img', true ) : ''; ?>

<?php $aboutservice_img = get_post_meta($post->ID, 'aboutservice_img', true ) ? get_post_meta($post->ID, 'aboutservice_img', true ) : ''; ?>
<?php $aboutservice_h_1 = get_post_meta($post->ID, 'aboutservice_h_1', true ) ? get_post_meta($post->ID, 'aboutservice_h_1', true ) : ''; ?>
<?php $aboutservice_h_2 = get_post_meta($post->ID, 'aboutservice_h_2', true ) ? get_post_meta($post->ID, 'aboutservice_h_2', true ) : ''; ?>
<?php $aboutservice_name = get_post_meta($post->ID, 'aboutservice_name', true ) ? get_post_meta($post->ID, 'aboutservice_name', true ) : ''; ?>
<?php $aboutservice_dec_1 = get_post_meta($post->ID, 'aboutservice_dec_1', true ) ? get_post_meta($post->ID, 'aboutservice_dec_1', true ) : ''; ?>
<?php $aboutservice_dec_2 = get_post_meta($post->ID, 'aboutservice_dec_2', true ) ? get_post_meta($post->ID, 'aboutservice_dec_2', true ) : ''; ?>

<?php $servicefor_h_1 = get_post_meta($post->ID, 'servicefor_h_1', true ) ? get_post_meta($post->ID, 'servicefor_h_1', true ) : ''; ?>
<?php $servicefor_h_2 = get_post_meta($post->ID, 'servicefor_h_2', true ) ? get_post_meta($post->ID, 'servicefor_h_2', true ) : ''; ?>
<?php $servicefor_des_1 = get_post_meta($post->ID, 'servicefor_des_1', true ) ? get_post_meta($post->ID, 'servicefor_des_1', true ) : ''; ?>
<?php $servicefor_des_2 = get_post_meta($post->ID, 'servicefor_des_2', true ) ? get_post_meta($post->ID, 'servicefor_des_2', true ) : ''; ?>
<?php $servicefor_reasons = get_post_meta( $post->ID, 'servicefor_reasons', true );  ?>
<?php $servicefor_button = get_post_meta($post->ID, 'servicefor_button', true ) ? get_post_meta($post->ID, 'servicefor_button', true ) : ''; ?>

<?php $servicehow_h_1 = get_post_meta($post->ID, 'servicehow_h_1', true ) ? get_post_meta($post->ID, 'servicehow_h_1', true ) : ''; ?>
<?php $servicehow_h_2 = get_post_meta($post->ID, 'servicehow_h_2', true ) ? get_post_meta($post->ID, 'servicehow_h_2', true ) : ''; ?>
<?php $servicehow_uh = get_post_meta($post->ID, 'servicehow_uh', true ) ? get_post_meta($post->ID, 'servicehow_uh', true ) : ''; ?>
<?php $servicehow_list = get_post_meta( $post->ID, 'servicehow_list', true );  ?>
<?php $servicehow_des = get_post_meta($post->ID, 'servicehow_des', true ) ? get_post_meta($post->ID, 'servicehow_des', true ) : ''; ?>
<?php $servicehow_img = get_post_meta($post->ID, 'servicehow_img', true ) ? get_post_meta($post->ID, 'servicehow_img', true ) : ''; ?>

<?php $beforeafter_h_1 = get_post_meta($post->ID, 'beforeafter_h_1', true ) ? get_post_meta($post->ID, 'beforeafter_h_1', true ) : ''; ?>
<?php $beforeafter_h_2 = get_post_meta($post->ID, 'beforeafter_h_2', true ) ? get_post_meta($post->ID, 'beforeafter_h_2', true ) : ''; ?>
<?php $beforeafter_des_1 = get_post_meta($post->ID, 'beforeafter_des_1', true ) ? get_post_meta($post->ID, 'beforeafter_des_1', true ) : ''; ?>
<?php $beforeafter_uh = get_post_meta($post->ID, 'beforeafter_uh', true ) ? get_post_meta($post->ID, 'beforeafter_uh', true ) : ''; ?>
<?php $beforeafter_recs = get_post_meta( $post->ID, 'beforeafter_recs', true );  ?>
<?php $beforeafter_des_2 = get_post_meta($post->ID, 'beforeafter_des_2', true ) ? get_post_meta($post->ID, 'beforeafter_des_2', true ) : ''; ?>
<?php $beforeafter_imgs = get_post_meta( $post->ID, 'beforeafter_imgs', true );  ?>
<?php $beforeafter_button = get_post_meta($post->ID, 'beforeafter_button', true ) ? get_post_meta($post->ID, 'beforeafter_button', true ) : ''; ?>
<?php $beforeafter_link = get_post_meta($post->ID, 'beforeafter_link', true ) ? get_post_meta($post->ID, 'beforeafter_link', true ) : ''; ?>

<?php $price_h_1 = get_post_meta($post->ID, 'price_h_1', true ) ? get_post_meta($post->ID, 'price_h_1', true ) : ''; ?>
<?php $price_h_2 = get_post_meta($post->ID, 'price_h_2', true ) ? get_post_meta($post->ID, 'price_h_2', true ) : ''; ?>
<?php $price_table_h1 = get_post_meta($post->ID, 'price_table_h1', true ) ? get_post_meta($post->ID, 'price_table_h1', true ) : ''; ?>
<?php $price_table_h2 = get_post_meta($post->ID, 'price_table_h2', true ) ? get_post_meta($post->ID, 'price_table_h2', true ) : ''; ?>
<?php $price_table_h3 = get_post_meta($post->ID, 'price_table_h3', true ) ? get_post_meta($post->ID, 'price_table_h3', true ) : ''; ?>
<?php $price_table = get_post_meta( $post->ID, 'price_table', true );  ?>

<?php $faq_section_header_1 = get_post_meta($post->ID, 'faq_section_header_1', true ) ? get_post_meta($post->ID, 'faq_section_header_1', true ) : ''; ?>
<?php $faq_section_header_2 = get_post_meta($post->ID, 'faq_section_header_2', true ) ? get_post_meta($post->ID, 'faq_section_header_2', true ) : ''; ?>
<?php $faq_details = get_post_meta( $post->ID, 'faq_details', true );  ?>

<?php 
if(pll_current_language() == 'uk'){
  get_header('uk');
} else if(pll_current_language() == 'en'){
  get_header('en');
}
?>


<section id="navigation">
    <div class="s-nav-section desktop-w-1100">
        <div class="s-nav-dropdown">
            <div class="s-nav-dropname">
                <span><?php pll_e('Face'); ?></span>
                <div class="s-nav-vector">⟨</div>
            </div>
            <?php 
            if(pll_current_language() == 'uk'){
                wp_nav_menu(array
                ( 'menu' => 'menu-face-uk',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            } else if(pll_current_language() == 'en'){
                wp_nav_menu(array
                ( 'menu' => 'menu-face-en',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            }
            ?>
        </div>
        <div class="s-nav-dropdown">
            <div class="s-nav-dropname">
                <span><?php pll_e('Brest'); ?></span>
                <div class="s-nav-vector">⟨</div>
            </div>
            <?php 
            if(pll_current_language() == 'uk'){
                wp_nav_menu(array
                ( 'menu' => 'menu-brest-uk',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            } else if(pll_current_language() == 'en'){
                wp_nav_menu(array
                ( 'menu' => 'menu-brest-en',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            }
            ?>
        </div>
        <div class="s-nav-dropdown">
            <div class="s-nav-dropname">
                <span><?php pll_e('Body'); ?></span>
                <div class="s-nav-vector">⟨</div>
            </div>
            <?php 
            if(pll_current_language() == 'uk'){
                wp_nav_menu(array
                ( 'menu' => 'menu-body-uk',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            } else if(pll_current_language() == 'en'){
                wp_nav_menu(array
                ( 'menu' => 'menu-body-en',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            }
            ?>
        </div>
        <div class="s-nav-dropdown">
            <div class="s-nav-dropname">
                <span><?php pll_e('Cosmetic'); ?></span>
                <div class="s-nav-vector">⟨</div>
            </div>
            <?php 
            if(pll_current_language() == 'uk'){
                wp_nav_menu(array
                ( 'menu' => 'menu-cosmetology-uk',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            } else if(pll_current_language() == 'en'){
                wp_nav_menu(array
                ( 'menu' => 'menu-cosmetology-en',
                'menu_class' => 's-nav-dropdown-content',
                'container_class' => 's-nav-container'
                )
                );
            }
            ?>
        </div>
    </div>
    <div class="s-nav-section mobile">
        <div class="mobile-servises-list">
            <div class="s-nav-mobile-h">
                <?php pll_e('Services'); ?>
                <div class="s-nav-vector-top">⟨</div>
            </div>
            <div class="s-nav-mobile-container st0">
                <div class="s-nav-dropdown-mob st0">
                    <div class="s-nav-dropname st0">
                        <span><?php pll_e('Face'); ?></span>
                        <div class="s-nav-vector">⟨</div>
                    </div>
                    <?php 
                    if(pll_current_language() == 'uk'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-face-uk',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    } else if(pll_current_language() == 'en'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-face-en',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    }
                    ?>
                </div>
                <div class="s-nav-dropdown-mob st0">
                    <div class="s-nav-dropname st0">
                        <span><?php pll_e('Brest'); ?></span>
                        <div class="s-nav-vector">⟨</div>
                    </div>
                    <?php 
                    if(pll_current_language() == 'uk'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-brest-uk',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    } else if(pll_current_language() == 'en'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-brest-en',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    }
                    ?>
                </div>
                <div class="s-nav-dropdown-mob st0">
                    <div class="s-nav-dropname st0">
                        <span><?php pll_e('Body'); ?></span>
                        <div class="s-nav-vector">⟨</div>
                    </div>
                    <?php 
                    if(pll_current_language() == 'uk'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-body-uk',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    } else if(pll_current_language() == 'en'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-body-en',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    }
                    ?>
                </div>
                <div class="s-nav-dropdown-mob st0">
                    <div class="s-nav-dropname st0">
                        <span><?php pll_e('Cosmetic'); ?></span>
                        <div class="s-nav-vector">⟨</div>
                    </div>
                    <?php 
                    if(pll_current_language() == 'uk'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-cosmetology-uk',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    } else if(pll_current_language() == 'en'){
                        wp_nav_menu(array
                        ( 'menu' => 'menu-cosmetology-en',
                        'menu_class' => 's-nav-dropdown-content',
                        'container_class' => 's-nav-container'
                        )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="ryno">
    <div class="ryno-section">
        <div class="ryno-section-container">
            <div class="ryno-section-left">
                <div class="ryno-section-text">
                    <div class="margin-top-bottom-50">
                        <h5 class="ryno-section-text-white"><?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?></h4>
                        <h2 class="ryno-section-text-white"><?php echo $service_name_h_2; ?></h2>
                    </div>
                    <p class="ryno-section-text-p"><?php echo $service_name_des; ?>
                    </p>
                </div>
                <button type="button" class="header-price-button-body pointer margin-top-bottom-50 popup-open">
                    <span class="header-price-button-text"><?php echo $service_name_button; ?></span>
                </button>
            </div>
            <div class="ryno-section-right">
                <img class="img-services" src="<?php echo $service_name_img; ?>" alt="">
            </div>
        </div>
    </div>
</section>


<section id="rynowhat">
    <div class="rynowhat-section">
        <div class="ryno-section-container">
            <div class="ryno-section-right">
                <img class="img-services" src="<?php echo $aboutservice_img; ?>" alt="">
            </div>
            <div class="ryno-section-left">
                <div class="rynowhat-section-h">
                    <h4 class="rynowhat-section-h4"><?php echo $aboutservice_h_1; ?></h4>
                    <h2 class="rynowhat-section-h1"><?php echo $aboutservice_h_2; ?></h2>
                </div>
                <div>
                    <p class="rynowhat-section-text-p">
                        <span class="rynowhat-section-text-p-b"><?php echo $aboutservice_name; ?></span> 
                        <?php echo $aboutservice_dec_1; ?></p>
                    <p class="rynowhat-section-text-p"><?php echo $aboutservice_dec_2; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="rynofor">
    <div class="rynofor-section">
        <div class="rynofor-section-info">
            <div class="margin-top-bottom-50">
                <h5 class="ryno-h5"><?php echo $servicefor_h_1; ?></h5>
                <h2 class="ryno-h1"><?php echo $servicefor_h_2; ?></h2>
            </div>
            <div class="rynofor-text">
                <div class="rynofor-section-text-left">
                <?php echo $servicefor_des_1; ?>
                </div>
                <div class="rynofor-section-text-right">
                    <p class="ryhofor-section-text-p"><?php echo $servicefor_des_2; ?></p>
                    <ul>
                    <?php if ($servicefor_reasons) : ?>
                    <?php foreach ($servicefor_reasons as $servicefor_reasons_item) :  ?>
                    <?php  $servicefor_reason = $servicefor_reasons_item['servicefor_reason'] ? $servicefor_reasons_item['servicefor_reason'] : '';  ?>
                        <li><?php echo $servicefor_reason; ?></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
            <button type="button" class="container-button-body empty-button-body pointer margin-top-bottom-50 popup-open">
                <span class="button-text">
                <?php echo $servicefor_button; ?>
                </span>
            </button>
        </div>
    </div>
</section>


<section id="rynohow">
    <div class="rynohow-section">
        <div class="ryno-section-container">
            <div class="rynohow-section-text">
                <div class="margin-top-bottom-50">
                    <h5 class="ryno-h5"><?php echo $servicehow_h_1; ?></h5>
                    <h2 class="ryno-h1"><?php echo $servicehow_h_2; ?></h2>
                </div>
                <p class="rynohow-section-p"><?php echo $servicehow_uh; ?></p>
                <ul class="rynohow-section-ul">
                    <?php if ($servicehow_list) : ?>
                    <?php foreach ($servicehow_list as $servicehow_list_item) :  ?>
                    <?php  $servicehow_li = $servicehow_list_item['servicehow_li'] ? $servicehow_list_item['servicehow_li'] : '';  ?>
                        <li><?php echo $servicehow_li; ?></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <div class="rynohow-section-text-info margin-top-bottom-50"><?php echo $servicehow_des; ?></div>
            </div>
            <div class="ryno-section-right">
                <img class="img-services" src="<?php echo $servicehow_img; ?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/content', 'callback'); ?>


<section id="beforeafter">
    <div class="beforeafter-section">
        <div class="beforeafter-section-container">
            <div class="margin-top-bottom-50">
                <h5 class="ryno-h5"><?php echo $beforeafter_h_1; ?></h5>
                <h2 class="ryno-h1"><?php echo $beforeafter_h_2; ?></h2>
            </div>
            <div class="beforeafter-text">
                <div class="beforeafter-text-left">
                <?php echo $beforeafter_des_1; ?>
                </div>
                <div class="beforeafter-text-right">
                    <p class="beforeafter-text-right-h"><?php echo $beforeafter_uh; ?></p>
                    <?php if ($beforeafter_recs) : ?>
                    <?php foreach ($beforeafter_recs as $beforeafter_recs_item) :  ?>
                    <?php  $beforeafter_rec = $beforeafter_recs_item['beforeafter_rec'] ? $beforeafter_recs_item['beforeafter_rec'] : '';  ?>
                    <p><?php echo $beforeafter_rec; ?></p>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>  
            <div class="beforeafter-text-center">
            <?php echo $beforeafter_des_2; ?>
            </div>
            <div class="beforeafter-imgs">
                <?php if ($beforeafter_imgs) : ?>
                <?php foreach ($beforeafter_imgs as $beforeafter_imgs_item) :  ?>
                <?php  $beforeafter_img = $beforeafter_imgs_item['beforeafter_img'] ? $beforeafter_imgs_item['beforeafter_img'] : '';  ?>
                    <img class="img-beforeafter" src="<?php echo $beforeafter_img; ?>" alt="">
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php echo $beforeafter_link; ?>">
            <button type="button" class="container-button-body empty-button-body pointer margin-top-bottom-50">
                <span class="button-text">
                <?php echo $beforeafter_button; ?>
                </span>
            </button>
        </a>
    </div>
</section>


<section id="price">
    <div class="price-section">
        <div class="margin-top-bottom-50">
            <h5 class="ryno-h5 price-section-h5"><?php echo $price_h_1; ?></h5>
            <h2 class="ryno-h1 price-section-h1 "><?php echo $price_h_2; ?></h2>
        </div>
        <div class="price-table">
            <div>
                <div class="price-table-h">
                    <div class="price-table-h1"><?php echo $price_table_h1; ?></div>
                    <div class="price-table-h2"><?php echo $price_table_h2; ?></div>
                    <div class="price-table-h3"><?php echo $price_table_h3; ?> </div>
                </div>
                <?php if ($price_table) : ?>
                <?php foreach ($price_table as $price_table_item) :  ?>
                <?php  $price_procedure = $price_table_item['price_procedure'] ? $price_table_item['price_procedure'] : '';  ?>
                <?php  $price_sum = $price_table_item['price_sum'] ? $price_table_item['price_sum'] : '';  ?>
                <?php  $price_button = $price_table_item['price_button'] ? $price_table_item['price_button'] : '';  ?>
                    <div class="price-table-body">
                        <div class="price-table-h1 table-borders"><?php echo $price_procedure; ?></div>
                        <div class="price-table-h2 table-borders"><?php echo $price_sum; ?></div>
                        <button class="price-table-button-body pointer"><?php echo $price_button; ?></button>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section id="faq-services">
    <div class="faq-section">
        <div class="faq-section-container-header">
            <h5 class="faq-section-header"><?php echo $faq_section_header_1; ?></h5>
            <h2 class="faq-section-header"><?php echo $faq_section_header_2; ?></h2>
        </div>
        <div class="faq-section-container-wrap">
            <div class="faq-section-container">
                <div class="faq-section-details pointer">
                    <?php if ($faq_details) : ?>
                    <?php foreach ($faq_details as $faq_details_item) :  ?>
                    <?php  $faq_summary = $faq_details_item['faq_summary'] ? $faq_details_item['faq_summary'] : '';  ?>
                    <?php  $faq_section_p = $faq_details_item['faq_section_p'] ? $faq_details_item['faq_section_p'] : '';  ?>
                        <div class="faq-details pointer">  
                            <div class="faq-summary">
                            <?php echo $faq_summary; ?>
                            </div>
                            <p class="faq-section-details-p">
                            <?php echo $faq_section_p; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
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