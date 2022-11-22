$('.pll-parent-menu-item.menu-item').click(function(){
  ($('.sub-menu').is(":hidden")) ? $('.sub-menu').show() : $('.sub-menu').hide();
})

// Navigation

$('.menu-button').click(function (e){
  e.preventDefault();
  $('.nav-mobile').removeClass('opacity');
  $('.mobile-search').removeClass('no-display');
  $('body').addClass('no-scroll');
})

$('.menu-button-close').click(function (e){
  e.preventDefault();
  $('.nav-mobile').addClass('opacity');
  $('.mobile-search').addClass('no-display');
  $('body').removeClass('no-scroll');
})

$('.nav-main').click(function (){
  $('.nav-mobile').addClass('opacity');
  $('body').removeClass('no-scroll');
})


// Sliders

$(document).ready(function(){

  $('.main-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.reviews-slider-block').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
    ]
});

});

// FAQ section

$(document).ready(function(){
  $(".faq-summary").click(function(){
    $(".faq-section-details-p").slideUp("slow");
    $(this).find("~ .faq-section-details-p").stop().slideToggle("slow");
  });
});

$(document).ready(function(){
  $(".faq-summary").click(function(){
    $(this).toggleClass('faq-summary-open');
    $('.faq-summary').not($(this)).removeClass('faq-summary-open');
  });
});

$('#faqFace').hide();
$('#faqBrest').hide();
$('#faqCosmetology').hide();

$('#faqBodyButton').click(function() {
  $('#faqBody').show();
  $('#faqFace').hide();
  $('#faqBrest').hide();
  $('#faqCosmetology').hide();
  $(this).toggleClass('faq-section-button-open');
  $('.faq-section-buttons').find(".faq-section-button-body").not(this).removeClass('faq-section-button-open');
  
});

$('#faqFaceButton').click(function() {
  $('#faqBody').hide();
  $('#faqFace').show();
  $('#faqBrest').hide();
  $('#faqCosmetology').hide();
  $(this).toggleClass('faq-section-button-open');
  $('.faq-section-buttons').find(".faq-section-button-body").not(this).removeClass('faq-section-button-open');
  
});

$('#faqBrestButton').click(function() {
  $('#faqBody').hide();
  $('#faqFace').hide();
  $('#faqBrest').show();
  $('#faqCosmetology').hide();
  $(this).toggleClass('faq-section-button-open');
  $('.faq-section-buttons').find(".faq-section-button-body").not(this).removeClass('faq-section-button-open');
  
});

$('#faqCosmetologyButton').click(function() {
  $('#faqBody').hide();
  $('#faqFace').hide();
  $('#faqBrest').hide();
  $('#faqCosmetology').show();
  $(this).toggleClass('faq-section-button-open');
  $('.faq-section-buttons').find(".faq-section-button-body").not(this).removeClass('faq-section-button-open');
});

// Review 

$('.review-section-details').toggleClass('hidden');

$('.review-summary').click(function() {

  $(this).parent().toggleClass('full');
  $(this).parent().toggleClass('hidden');

  if ($('html').is(':lang(uk)')) {
    $(this).html($(this).text() == 'Згорнути ︿' ? 'Детальніше ﹀' : 'Згорнути ︿');
  } else if ($('html').is(':lang(en)')) {
    $(this).html($(this).text() == 'Less ︿' ? 'More ﹀' : 'Less ︿');
  }
});

$('.review-section-details-p').each(function(k,v){
  if ($(v).text().length < 200) {
    $(v).next().hide();
  }
});

// Services mobile nav

$('.s-nav-mobile-h').click(function(){
  $('.s-nav-mobile-container').toggleClass('st0');
  $('.s-nav-dropdown-mob').toggleClass('st0');
  $('.s-nav-dropname').toggleClass('st0');
  $('.s-nav-vector-top').toggleClass('s-nav-vector-top-open');
})

$('.s-nav-dropname').click(function(){
  $('.s-nav-mobile-container').find(".s-nav-container").not($(this).next()).removeClass('s-nav-container-open');
  $('.s-nav-mobile-container').find(".s-nav-vector").not($(this).find(".s-nav-vector")).removeClass('s-nav-vector-top-open');

  $(this).next().toggleClass('s-nav-container-open');
  $(this).find(".s-nav-vector").toggleClass('s-nav-vector-top-open');

})

// GALERY

$('.galery-img-box').click(function(){
  $(this).next().removeClass('st0');
})

$('.galery-close').click(function(){
  $(this).parent().addClass('st0');
})


let step = 4; // Количество вывода на экран. Чтобы легко можно было поменять.
let imgs = document.querySelectorAll('#galery');

for( let i = 0; i < imgs.length; i++ ){
  let galery = imgs[i];
  let box = galery.querySelectorAll('.galery-unit');
  for( let j = 0; j < step; j++ ){//Для начала перебираем - показываем первые step пунктов.
    // Но только если такие существуют
    if( box[j] ){ box[j].classList.add('visible') }
  }
  
  let more = galery.querySelector('.more');
  more.addEventListener('click', function(){
    let visible = galery.querySelectorAll('.visible');
    let next = visible[visible.length-1].nextElementSibling;
    // Достали следующий элемент ПОСЛЕДНЕГО элемента visible. 
    //Предполагается, что никогда не будет добавлено полностью пустых ul.
    let it = 0;
    while( it < step ){
      if( next ){
        next.classList.add('visible');
        next = next.nextElementSibling;
        it++;
      } else {
        more.classList.add('st0')
        break; // Если следующего элемента не оказалось - выключаем цикл.
      }
    }
  });
}

// Blog & reviews

let posts = document.querySelectorAll('#blog');

for( let i = 0; i < posts.length; i++ ){
  let blog = posts[i];
  let post = blog.querySelectorAll('article');
  for( let j = 0; j < step; j++ ){//Для начала перебираем - показываем первые step пунктов.
    // Но только если такие существуют
    if( post[j] ){ post[j].classList.add('visible') }
  }
  
  let more = blog.querySelector('.more');
  more.addEventListener('click', function(){
    let visible = blog.querySelectorAll('.visible');
    let next = visible[visible.length-1].nextElementSibling;
    // Достали следующий элемент ПОСЛЕДНЕГО элемента visible. 
    //Предполагается, что никогда не будет добавлено полностью пустых ul.
    let it = 0;
    while( it < step ){
      if( next ){
        next.classList.add('visible');
        next = next.nextElementSibling;
        it++;
      } else {
        more.classList.add('st0')
        break; // Если следующего элемента не оказалось - выключаем цикл.
      }
    }
  });
}

// Pop-up

$('.popup-open').click(function(){
  $('#form-popup').removeClass('st0');
  $('body').addClass('no-scroll');
})

$('.popup-close').click(function(){
  $('#form-popup').addClass('st0');
  $('body').removeClass('no-scroll');
})

// Поиск

jQuery(document).ready(function ($) {
  const search_input = $('.search-form__input');
  const search_results = $('.ajax-search');

  search_input.keyup(function () {
      let search_value = $(this).val();

      if (search_value.length > 2) { // кол-во символов 
          $.ajax({
              url: '/wp-admin/admin-ajax.php',
              type: 'POST',
              data: {
                  'action': 'ajax_search', // functions.php 
                  'term': search_value
              },
              success: function (results) {
                  search_results.fadeIn(200).html(results);
              }
          });
      } else {
          search_results.fadeOut(200);
      }
  });

  // Закрытие поиска при клике вне его 
  $(document).mouseup(function (e) {
      if (
          (search_input.has(e.target).length === 0) &&
          (search_results.has(e.target).length === 0)
      ) {
          search_results.fadeOut(200);
      };
  });

  $('.ajax-search').mouseout(function () { 
    
  });
});
