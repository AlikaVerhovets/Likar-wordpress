<?php

add_action( 'admin_init', 'custom_meta_boxes' );

function custom_meta_boxes() {

// Главная страница

$front_main = array(
  'id'          => 'setting_page',
  'title'       => __( 'Контент страницы', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
  'fields'      => array(


// Слайдер

array(
  'label'       => __( 'Слайдер', 'theme-text-domain' ),
  'id'          => 'slider',
  'type'        => 'tab'
),
array(
  'id'          => 'main_slider',
  'label'       => __( 'Элементы слайдера', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'main_block_background_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Заголовок', 'theme-text-domain' ),
    'id'          => 'main_block_text_h2',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'main_block_text_p',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Кнопка', 'theme-text-domain' ),
    'id'          => 'main_block_button_body',
    'type'        => 'text',
  ),
  array(
  'label'       => __( 'Ссылка', 'theme-text-domain' ),
  'id'          => 'main_slider_link',
  'type'        => 'upload',
  ),
 )
),

// Cервисы

array(
  'label'       => __( 'Наши услуги', 'theme-text-domain' ),
  'id'          => 'services_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'services_section_title_h4',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'services_section_title_header_big',
  'type'        => 'text',
),
array(
  'id'          => 'services_section_info_box',
  'label'       => __( 'Описание услуги', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'services_section_info_box_img_body',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Название', 'theme-text-domain' ),
    'id'          => 'services_section_info_text_header',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'services_section_info_text_info',
    'type'        => 'textarea',
  ),
 )
),

// Про доктора

array(
  'label'       => __( 'Про доктора', 'theme-text-domain' ),
  'id'          => 'advantages',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Фотография доктора', 'theme-text-domain' ),
  'id'          => 'about_section_container_photo',
  'type'        => 'upload',
),
array(
  'label'       => __( 'Цитата', 'theme-text-domain' ),
  'id'          => 'about_section_container_annotation_text',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'about_section_container_header_small',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'about_section_container_h2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Описание', 'theme-text-domain' ),
  'id'          => 'about_section_container_description',
  'type'        => 'textarea',
),
array(
  'id'          => 'about_section_container_circles_body',
  'label'       => __( 'Статистика', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Цифра', 'theme-text-domain' ),
    'id'          => 'about_section_container_circles_number',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Значение', 'theme-text-domain' ),
    'id'          => 'about_section_container_circles_des',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'about_section_container_circles_text',
    'type'        => 'textarea',
  ),
 )
),
array(
  'id'          => 'about_section_container_list',
  'label'       => __( 'Достижения', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'about_section_container_list_des',
    'type'        => 'textarea',
  ),
 )
),
array(
  'id'          => 'about_section_container_button_body',
  'label'       => __( 'Кнопки', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'about_section_container_button_text',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'about_section_button_link',
    'type'        => 'upload',
    ),
  array(
    'label'       => __( 'Дополнительный класс', 'theme-text-domain' ),
    'id'          => 'about_section_container_button_class',
    'type'        => 'text',
  ),
 )
),

// Бенефиты

array(
  'label'       => __( 'Преимущества', 'theme-text-domain' ),
  'id'          => 'benefits',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'benefits_section_header_small',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'benefits_section_header_big',
  'type'        => 'text',
),
array(
  'id'          => 'benefits_section_container_box',
  'label'       => __( 'Описание преимущества', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'benefits_section_container_img_check',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Название', 'theme-text-domain' ),
    'id'          => 'benefits_section_container_text_header',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'benefits_section_container_text_paragraph',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'benefits_section_button_body',
  'type'        => 'text',
),

// Форма 1

array(
  'label'       => __( 'Форма обратной связи 1', 'theme-text-domain' ),
  'id'          => 'form_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form_section_button_body',
  'type'        => 'text',
),

// FAQ

array(
  'label'       => __( 'Вопросы-ответы', 'theme-text-domain' ),
  'id'          => 'FAQ',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'faq_section_header_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'faq_section_header_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Блок 1', 'theme-text-domain' ),
  'id'          => 'faq_section_button_1',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_1',
  'label'       => __( 'Вопросы блока 1', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_1',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_1',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Блок 2', 'theme-text-domain' ),
  'id'          => 'faq_section_button_2',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_2',
  'label'       => __( 'Вопросы блока 2', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_2',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_2',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Блок 3', 'theme-text-domain' ),
  'id'          => 'faq_section_button_3',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_3',
  'label'       => __( 'Вопросы блока 3', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_3',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_3',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Блок 4', 'theme-text-domain' ),
  'id'          => 'faq_section_button_4',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_4',
  'label'       => __( 'Вопросы блока 4', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_4',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_4',
    'type'        => 'textarea',
  ),
 )
),

// Отзывы

array(
  'label'       => __( 'Отзывы', 'theme-text-domain' ),
  'id'          => 'reviews',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_2',
  'type'        => 'text',
),
array(
  'id'          => 'review',
  'label'       => __( 'Отзыв', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Имя автора', 'theme-text-domain' ),
    'id'          => 'review_name',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Адресс', 'theme-text-domain' ),
    'id'          => 'review_address',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Текст отзыва', 'theme-text-domain' ),
    'id'          => 'review_p',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'review_button_text',
  'type'        => 'text',
),
array(
  'label'       => __( 'Ссылка кнопки', 'theme-text-domain' ),
  'id'          => 'review_button_link',
  'type'        => 'upload',
),

// Форма 2

array(
  'label'       => __( 'Форма обратной связи 2', 'theme-text-domain' ),
  'id'          => 'form2_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form2_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form2_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form2_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form2_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form2_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form2_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form2_section_button_body',
  'type'        => 'text',
),

// Карта

array(
  'label'       => __( 'Карта', 'theme-text-domain' ),
  'id'          => 'map',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Ссылка на карту', 'theme-text-domain' ),
  'id'          => 'map_link',
  'type'        => 'text',
),

// Popup форма

array(
  'label'       => __( 'Всплывающее окно', 'theme-text-domain' ),
  'id'          => 'popup',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form_section_header_popup',
  'type'        => 'text',
),

)
);

// Страница про доктора

$front_about = array(
'id'          => 'front_about_page',
  'title'       => __( 'Страница про доктора', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
'fields'      => array(

// Строка оглавление

array(
  'label'       => __( 'Строка оглавления', 'theme-text-domain' ),
  'id'          => 'headerabout',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'headerabout_1',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'headerabout_2',
  'type'        => 'text',
),

// Про доктора

array(
  'label'       => __( 'Про доктора', 'theme-text-domain' ),
  'id'          => 'aboutdoc',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Фото доктора', 'theme-text-domain' ),
  'id'          => 'aboutdoc_img', 
  'type'        => 'upload',
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'aboutdoc_h_1',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'aboutdoc_h_2',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Информация про доктора', 'theme-text-domain' ),
  'id'          => 'aboutdoc_description',
  'type'        => 'textarea',
  ),
array(
  'id'          => 'aboutdoc_achivments',
  'label'       => __( 'Достижения', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Достижение', 'theme-text-domain' ),
    'id'          => 'aboutdoc_achivment',
    'type'        => 'text',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'aboutdoc_button',
  'type'        => 'text',
),

// Почему я

array(
  'label'       => __( 'Почему я', 'theme-text-domain' ),
  'id'          => 'whyme',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'whyme_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'whyme_h_2',
  'type'        => 'text',
),
array(
  'id'          => 'whyme_circles',
  'label'       => __( 'Статистика', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Цифра', 'theme-text-domain' ),
    'id'          => 'whyme_circles_number',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Значение', 'theme-text-domain' ),
    'id'          => 'whyme_circles_des',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Описание', 'theme-text-domain' ),
    'id'          => 'whyme_circles_text',
    'type'        => 'textarea',
  ),
 )
),

// Образование

array(
  'label'       => __( 'Образование', 'theme-text-domain' ),
  'id'          => 'education',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'education_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'education_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Цитата: заголовок', 'theme-text-domain' ),
  'id'          => 'education_quote_h',
  'type'        => 'text',
),
array(
  'label'       => __( 'Цитата: текст', 'theme-text-domain' ),
  'id'          => 'education_quote',
  'type'        => 'text',
),
array(
  'id'          => 'education_list',
  'label'       => __( 'Список', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Картинка', 'theme-text-domain' ),
    'id'          => 'education_list_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Про образование', 'theme-text-domain' ),
    'id'          => 'education_list_text',
    'type'        => 'textarea',
  ),
 )
),

// Форма 1

array(
  'label'       => __( 'Форма обратной связи 1', 'theme-text-domain' ),
  'id'          => 'form_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form_section_button_body',
  'type'        => 'text',
),

// Дополнительное обучение

array(
  'label'       => __( 'Дополнительное обучение', 'theme-text-domain' ),
  'id'          => 'learnings',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'learnings_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'learnings_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Цитата: заголовок', 'theme-text-domain' ),
  'id'          => 'learnings_quote_h',
  'type'        => 'text',
),
array(
  'label'       => __( 'Цитата: текст', 'theme-text-domain' ),
  'id'          => 'learnings_quote',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Список пройденных тренингов', 'theme-text-domain' ),
  'id'          => 'learnings_list',
  'type'        => 'textarea',
),

// Отзывы

array(
  'label'       => __( 'Отзывы', 'theme-text-domain' ),
  'id'          => 'reviews',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_2',
  'type'        => 'text',
),
array(
  'id'          => 'review',
  'label'       => __( 'Отзыв', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Имя автора', 'theme-text-domain' ),
    'id'          => 'review_name',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Адресс', 'theme-text-domain' ),
    'id'          => 'review_address',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Текст отзыва', 'theme-text-domain' ),
    'id'          => 'review_p',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'review_button_text',
  'type'        => 'text',
),
array(
  'label'       => __( 'Ссылка кнопки', 'theme-text-domain' ),
  'id'          => 'review_button_link',
  'type'        => 'upload',
),

// Форма 2

array(
  'label'       => __( 'Форма обратной связи 2', 'theme-text-domain' ),
  'id'          => 'form2_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form2_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form2_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form2_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form2_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form2_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form2_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form2_section_button_body',
  'type'        => 'text',
),
),
);


// Страница с услугами

$front_services = array(
'id'          => 'front_services_page',
  'title'       => __( 'Страница про услуги', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
'fields'      => array(

// Название услуги

array(
  'label'       => __( 'Название услуги', 'theme-text-domain' ),
  'id'          => 'service_name',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'service_name_h_1',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'service_name_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Описание', 'theme-text-domain' ),
  'id'          => 'service_name_des',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'service_name_button', 
  'type'        => 'text',
),
array(
  'label'       => __( 'Изображение', 'theme-text-domain' ),
  'id'          => 'service_name_img', 
  'type'        => 'upload',
),

// Про процедуру (описание)

array(
  'label'       => __( 'Про процедуру (описание)', 'theme-text-domain' ),
  'id'          => 'aboutservice',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Изображение', 'theme-text-domain' ),
  'id'          => 'aboutservice_img', 
  'type'        => 'upload',
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'aboutservice_h_1',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'aboutservice_h_2',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Название процедуры', 'theme-text-domain' ),
  'id'          => 'aboutservice_name',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Описание процедуры 1', 'theme-text-domain' ),
  'id'          => 'aboutservice_dec_1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Описание процедуры 2', 'theme-text-domain' ),
  'id'          => 'aboutservice_dec_2',
  'type'        => 'textarea',
),

// Для чего нужна процедура

array(
  'label'       => __( 'Для чего нужна процедура', 'theme-text-domain' ),
  'id'          => 'servicefor',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'servicefor_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'servicefor_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Описание 1', 'theme-text-domain' ),
  'id'          => 'servicefor_des_1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Описание 2', 'theme-text-domain' ),
  'id'          => 'servicefor_des_2',
  'type'        => 'textarea',
),
array(
  'id'          => 'servicefor_reasons',
  'label'       => __( 'Список причин', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Причина', 'theme-text-domain' ),
    'id'          => 'servicefor_reason',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'servicefor_button', 
  'type'        => 'text',
),

// Как проводится процедура

array(
  'label'       => __( 'Как проводится процедура', 'theme-text-domain' ),
  'id'          => 'servicehow',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'servicehow_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'servicehow_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Подзаголовок', 'theme-text-domain' ),
  'id'          => 'servicehow_uh',
  'type'        => 'textarea',
),
array(
  'id'          => 'servicehow_list',
  'label'       => __( 'Список', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Пункт списка', 'theme-text-domain' ),
    'id'          => 'servicehow_li',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Описание', 'theme-text-domain' ),
  'id'          => 'servicehow_des',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Изображение', 'theme-text-domain' ),
  'id'          => 'servicehow_img', 
  'type'        => 'upload',
),

// Форма 1

array(
  'label'       => __( 'Форма обратной связи 1', 'theme-text-domain' ),
  'id'          => 'form_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form_section_button_body',
  'type'        => 'text',
),

// До и после

array(
  'label'       => __( 'До и после', 'theme-text-domain' ),
  'id'          => 'beforeafter',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'beforeafter_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'beforeafter_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Описание 1', 'theme-text-domain' ),
  'id'          => 'beforeafter_des_1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Подзаголовок', 'theme-text-domain' ),
  'id'          => 'beforeafter_uh',
  'type'        => 'textarea',
),
array(
  'id'          => 'beforeafter_recs',
  'label'       => __( 'Рекомендации', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Рекомендация', 'theme-text-domain' ),
    'id'          => 'beforeafter_rec',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Описание 2', 'theme-text-domain' ),
  'id'          => 'beforeafter_des_2',
  'type'        => 'textarea',
),
array(
  'id'          => 'beforeafter_imgs',
  'label'       => __( 'Изображения', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'beforeafter_img',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'beforeafter_button', 
  'type'        => 'text',
),
array(
  'label'       => __( 'Ссылка', 'theme-text-domain' ),
  'id'          => 'beforeafter_link', 
  'type'        => 'upload',
),


// Прайс

array(
  'label'       => __( 'Прайс', 'theme-text-domain' ),
  'id'          => 'price',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'price_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'price_h_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок таблицы 1', 'theme-text-domain' ),
  'id'          => 'price_table_h1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок таблицы 2', 'theme-text-domain' ),
  'id'          => 'price_table_h2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок таблицы 3', 'theme-text-domain' ),
  'id'          => 'price_table_h3',
  'type'        => 'text',
),
array(
  'id'          => 'price_table',
  'label'       => __( 'Строка таблицы', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Название операции', 'theme-text-domain' ),
    'id'          => 'price_procedure',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Сумма', 'theme-text-domain' ),
    'id'          => 'price_sum',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Кнопка', 'theme-text-domain' ),
    'id'          => 'price_button',
    'type'        => 'text',
  ),
 )
),

// FAQ

array(
  'label'       => __( 'Вопросы-ответы', 'theme-text-domain' ),
  'id'          => 'FAQ',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'faq_section_header_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'faq_section_header_2',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details',
  'label'       => __( 'Вопросы блока', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p',
    'type'        => 'textarea',
  ),
 )
),


// Отзывы

array(
  'label'       => __( 'Отзывы', 'theme-text-domain' ),
  'id'          => 'reviews',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'reviews_section_h_2',
  'type'        => 'text',
),
array(
  'id'          => 'review',
  'label'       => __( 'Отзыв', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Имя автора', 'theme-text-domain' ),
    'id'          => 'review_name',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Адресс', 'theme-text-domain' ),
    'id'          => 'review_address',
    'type'        => 'text',
  ),
  array(
    'label'       => __( 'Текст отзыва', 'theme-text-domain' ),
    'id'          => 'review_p',
    'type'        => 'textarea',
  ),
 )
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'review_button_text',
  'type'        => 'text',
),
array(
  'label'       => __( 'Ссылка кнопки', 'theme-text-domain' ),
  'id'          => 'review_button_link',
  'type'        => 'upload',
),

// Форма 2

array(
  'label'       => __( 'Форма обратной связи 2', 'theme-text-domain' ),
  'id'          => 'form2_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок', 'theme-text-domain' ),
  'id'          => 'form2_section_header',
  'type'        => 'text',
),
array(
  'label'       => __( 'Текст 1', 'theme-text-domain' ),
  'id'          => 'form2_section_p1',
  'type'        => 'textarea',
),
array(
  'label'       => __( 'Текст 2', 'theme-text-domain' ),
  'id'          => 'form2_section_p2',
  'type'        => 'textarea',
),
array(
  'id'          => 'form2_section_messengers',
  'label'       => __( 'Ссылка на мессенджер', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Ссылка', 'theme-text-domain' ),
    'id'          => 'form2_section_messengers_link',
    'type'        => 'upload',
  ),
 )
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form2_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form2_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form2_section_button_body',
  'type'        => 'text',
),
),
);
 
//  Страница галереи

$front_galery = array(
  'id'          => 'front_galery',
  'title'       => __( 'Галерея', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
'fields'      => array(


// Строка оглавление

array(
  'label'       => __( 'Строка оглавления', 'theme-text-domain' ),
  'id'          => 'headergalery',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 1', 'theme-text-domain' ),
  'id'          => 'galery_title_h4',
  'type'        => 'text',
  ),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'galery_title_big',
  'type'        => 'text',
),

// Галерея

array(
  'label'       => __( 'Галерея', 'theme-text-domain' ),
  'id'          => 'galery_section',
  'type'        => 'tab'
),
array(
  'id'          => 'galery',
  'label'       => __( 'Изображения', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Изображение', 'theme-text-domain' ),
    'id'          => 'galery_img',
    'type'        => 'upload',
  ),
  array(
    'label'       => __( 'Изображение полноэкранное', 'theme-text-domain' ),
    'id'          => 'galery_link',
    'type'        => 'upload',
  ),
 )
),

)
);

//  Страница вопросов-ответов

$front_faq = array(
  'id'          => 'front_faq',
  'title'       => __( 'Вопросы-Ответы', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
'fields'      => array(


array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'faq_section_header_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Блок 1', 'theme-text-domain' ),
  'id'          => 'faq_section_button_1',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_1',
  'label'       => __( 'Вопросы блока 1', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_1',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_1',
    'type'        => 'textarea',
  ),
  )
),
array(
  'label'       => __( 'Блок 2', 'theme-text-domain' ),
  'id'          => 'faq_section_button_2',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_2',
  'label'       => __( 'Вопросы блока 2', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_2',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_2',
    'type'        => 'textarea',
  ),
  )
),
array(
  'label'       => __( 'Блок 3', 'theme-text-domain' ),
  'id'          => 'faq_section_button_3',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_3',
  'label'       => __( 'Вопросы блока 3', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_3',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_3',
    'type'        => 'textarea',
  ),
  )
),
array(
  'label'       => __( 'Блок 4', 'theme-text-domain' ),
  'id'          => 'faq_section_button_4',
  'type'        => 'text',
),
array(
  'id'          => 'faq_details_4',
  'label'       => __( 'Вопросы блока 4', 'theme-text-domain' ), 
  'type'        => 'list-item',
  'settings'    => array(
  array(
    'label'       => __( 'Вопрос', 'theme-text-domain' ),
    'id'          => 'faq_summary_4',
    'type'        => 'textarea',
  ),
  array(
    'label'       => __( 'Ответ', 'theme-text-domain' ),
    'id'          => 'faq_section_p_4',
    'type'        => 'textarea',
  ),
  )
),

)
);
 

//  Страница контактов

$front_contacts = array(
  'id'          => 'front_contacts',
  'title'       => __( 'Контакты', 'theme-text-domain' ),
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
'fields'      => array(


// Строка оглавление

array(
  'label'       => __( 'Строка оглавления', 'theme-text-domain' ),
  'id'          => 'headercontacts',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Заголовок 2', 'theme-text-domain' ),
  'id'          => 'contacts_title_big',
  'type'        => 'text',
),


// Карта

array(
  'label'       => __( 'Карта', 'theme-text-domain' ),
  'id'          => 'map_contacts',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Ссылка на карту', 'theme-text-domain' ),
  'id'          => 'map_contacts_link',
  'type'        => 'text',
),

// Контакты

array(
  'label'       => __( 'Контакты', 'theme-text-domain' ),
  'id'          => 'contacts_section',
  'type'        => 'tab'
),
array(
  'label'       => __( 'Название поля для телефона', 'theme-text-domain' ),
  'id'          => 'contacts_phone_title',
  'type'        => 'text',
),
array(
  'label'       => __( 'Телефон', 'theme-text-domain' ),
  'id'          => 'contacts_phone',
  'type'        => 'text',
),
array(
  'label'       => __( 'Название поля для адреса', 'theme-text-domain' ),
  'id'          => 'contacts_adress_title',
  'type'        => 'text',
),
array(
  'label'       => __( 'Адрес', 'theme-text-domain' ),
  'id'          => 'contacts_adress',
  'type'        => 'text',
),
array(
  'label'       => __( 'Название поля для почты', 'theme-text-domain' ),
  'id'          => 'contacts_email_title',
  'type'        => 'text',
),
array(
  'label'       => __( 'Почта', 'theme-text-domain' ),
  'id'          => 'contacts_email',
  'type'        => 'text',
),
array(
  'label'       => __( 'Заголовок формы', 'theme-text-domain' ),
  'id'          => 'contacts_form_title',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 1', 'theme-text-domain' ),
  'id'          => 'form_contacts_section_input_1',
  'type'        => 'text',
),
array(
  'label'       => __( 'Данные для ввода 2', 'theme-text-domain' ),
  'id'          => 'form_contacts_section_input_2',
  'type'        => 'text',
),
array(
  'label'       => __( 'Кнопка', 'theme-text-domain' ),
  'id'          => 'form_contacts_section_button_body',
  'type'        => 'text',
),

)
);




if ( function_exists( 'ot_register_meta_box' ) ) 
  $post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
if ( $template_file == 'front-main.php' ){
  ot_register_meta_box( $front_main );
}
if ( $template_file == 'front-about.php' ){
  ot_register_meta_box( $front_about );
}
if ( $template_file == 'front-services.php' ){
  ot_register_meta_box( $front_services );
}
if ( $template_file == 'front-galery.php' ){
  ot_register_meta_box( $front_galery );
}
if ( $template_file == 'front-faq.php' ){
  ot_register_meta_box( $front_faq );
}
if ( $template_file == 'front-contacts.php' ){
  ot_register_meta_box( $front_contacts );
}

}