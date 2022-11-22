<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <meta
      name="keywords"
      content=""
    />
    <meta
      name="description"
      content=""
    />
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/libs/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/libs/jquery.mask.min.js"></script>
</head>
<body>
  <header>
    <div class="header">
    <address class="header-adress">
      <img src="<?php bloginfo('template_directory') ?>/img/icons8-геозона-100 8.svg" alt="Отметка на карте">
      Kyiv, Zoologichna str., 3b
    </address>
    <div class="header-mail">
      <img src="<?php bloginfo('template_directory') ?>/img/icons8-сообщение-с-заливкой-100 8.svg" alt="Конверт">
      <!-- <a href="mailto:olgabaranskaya@gmail.com"> -->
        olgabaranskaya@gmail.com
      <!-- </a> -->
    </div>
    <div class="header-phone">
      <img src="<?php bloginfo('template_directory') ?>/img/icons8-телефон-100 1.svg" alt="Телефонная трубка">
      <!-- <a href="tel:(050) 441 98 85"> -->
        (050) 441 98 85
      <!-- </a> -->
    </div>
    
    <?php pll_the_languages(array
    ( 'menu' => 'menu-lang',
    'dropdown' => 1,
    'menu_class' => 'header-language' 
    )
    ); ?>

    <div class="desktop-w-1300">
    <?php get_search_form(); ?>
    </div>
    
    <div class="header-price-button popup-open">
      <button type="button" class="header-price-button-body">
        <span class="header-price-button-text">Check price</span>
      </button>
    </div>
    </div>
    <nav class="desktop-w-1300">
    
    <?php wp_nav_menu(array
    ( 'menu' => 'menu-main-nav-en',
    'menu_class' => 'nav-main pointer' 
    )
    ); ?>

    </nav>
    <div class="nav-cover mobile">
      <img class="menu-button pointer" src="http://my-wp/wp-content/uploads/2022/10/burger.png" alt="">
      <nav class="nav-mobile opacity">
        <div class="menu">
          <div class="menu-nav">
            <div class="mobile-search-cover">
              <div class="mobile-search no-display">
              <?php get_search_form(); ?>
              </div>
            <img class="menu-button-close pointer" src="http://my-wp/wp-content/uploads/2022/10/burger.png" alt="">   
            </div>
            <?php wp_nav_menu(array
            ( 'menu' => 'menu-main-nav-en',
            'menu_class' => 'nav-main pointer' 
            )
            ); ?>
          </div>

        </div>
      </nav>
    </div>
  </header>

  
<?php get_template_part('template-parts/content', 'callback-popup'); ?>
