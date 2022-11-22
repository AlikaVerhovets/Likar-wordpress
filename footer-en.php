
<footer>
  <div class="footer-up">
    <div class="footer-up-left">
      <div class="footer-up-left-text">
        More than 3000 surgical interventions. Over 2000 non-surgical anti-aging procedures. Quality and beauty guarantee.
      </div>
    </div>
    <div class="footer-up-containers">
      <h4 class="footer-h">Categories</h4>
      <?php wp_nav_menu(array
      ( 'menu' => 'menu-footer-category-en',
      'menu_class' => 'footer-text-p' 
      )
      ); ?>
    </div>
    <div class="footer-up-containers">
      <h4 class="footer-h"> Services</h4>
      <?php wp_nav_menu(array
      ( 'menu' => 'menu-footer-servises-en',
      'menu_class' => 'footer-text-p' 
      )
      ); ?>
    </div>
    <div class="footer-up-containers">
      <h4 class="footer-h">Contacts</h4>
      <div class="footer-text-p footer-contacts">
        <div>
          <img  src="<?php bloginfo('template_directory') ?>/img/Vector.svg" alt="Локация">
          Kyiv, Zoologichna str., 3b
        </div>
        <div class="pointer">
          <img  src="<?php bloginfo('template_directory') ?>/img/Почта.svg" alt="Письмо">
          <a href="mailto:olgabaranskaya@gmail.com">olgabaranskaya@gmail.com</a>
        </div>
        <div class="pointer">
          <img  src="<?php bloginfo('template_directory') ?>/img/Vector (1).svg" alt="Телефон">
          <a href="tel:+380504419885">(050) 441 98 85</a>
        </div>
      </div>
      <div class="footer-button pointer">
      <a href="https://maps.google.com/maps/dir//%D0%9E%D0%B1%D0%B5%D1%80%D1%96%D0%B3+%D0%B2%D1%83%D0%BB.+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3,+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+%C2%AB%D0%92%C2%BB+%D0%B2%D1%83%D0%BB.+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3,+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+%C2%AB%D0%93%C2%BB,+%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%97%D0%BE%D0%BE%D0%BB%D0%BE%D0%B3%D1%96%D1%87%D0%BD%D0%B0,+3%D0%92+%D0%9A%D0%B8%D1%97%D0%B2+03057/@50.458185,30.4585856,21z/data=!4m5!4m4!1m0!1m2!1m1!1s0x40d4cc2bc6881c2d:0x3dd9dc2b53a93f70">  
        <button type="button" class="footer-button-body empty-button-footer">
          <span>Get directions</span>
        </button>
      </a>
      </div>
    </div>
  </div>
  <div class="footer-down">
    <div class="footer-down-container">
      <div>
        Baranskaya 2020 © All rights reserved
      </div>
      <div class="footer-down-imgs">
        <img  src="<?php bloginfo('template_directory') ?>/img/telegram.svg" alt="telegram">
        <img  src="<?php bloginfo('template_directory') ?>/img/Инста.svg" alt="instagram">
        <img  src="<?php bloginfo('template_directory') ?>/img/Фейсбук.svg" alt="Fb">
        <img  src="<?php bloginfo('template_directory') ?>/img/ютуб.svg" alt="YouTube">
        <img  src="<?php bloginfo('template_directory') ?>/img/Вайбер.svg" alt="Viber">
        <img  src="<?php bloginfo('template_directory') ?>/img/Ватсап.svg" alt="WhatsApp">
      </div>
    </div>
  </div>
  </footer>


  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/libs/jquery.js"></script>

  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/slick/slick.min.js"></script>

  <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/feedback.js"></script>

</body>
</html>