<?php
// Register Custom Post Type
function custom_post_type_review() {

	$labels = array(
		'name'                  => 'Відгуки',
		'singular_name'         => 'Відгук',
		'menu_name'             => 'Відгуки',
		'add_new'               => 'Добавить отзыв',
		'new_item'              => 'Новый отзыв',
		'edit_item'             => 'Изменить',
		'update_item'           => 'Обновить',
		'view_item'             => 'Посмотреть',
		'view_items'            => 'Посмотреть все',
	);
	$rewrite = array(
		'slug'                  => 'review',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Відгуки',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'review',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'test_doctor_review', $args );

}
add_action( 'init', 'custom_post_type_review', 0 );