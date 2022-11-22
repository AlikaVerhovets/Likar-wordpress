<?php
// Register Custom Post Type
function custom_post_type_blog() {

	$labels = array(
		'name'                  => _x( 'Блог', 'Post Type General Name', 'test_doctor' ),
		'singular_name'         => _x( 'Новость', 'Post Type Singular Name', 'test_doctor' ),
		'menu_name'             => __( 'Блог', 'test_doctor' ),
		'add_new'               => __( 'Добавить Новость', 'test_doctor' ),
		'new_item'              => __( 'Новый Новость ', 'test_doctor' ),
		'edit_item'             => __( 'Редактирвать', 'test_doctor' ),
		'update_item'           => __( 'Обновить', 'test_doctor' ),
		'view_item'             => __( 'Просмотр', 'test_doctor' ),
		'view_items'            => __( 'Посмотреть все', 'test_doctor' ),

	);

	$rewrite = array(
		'slug'                  => 'blog',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);

	$args = array(
		'label'                 => __( '<Блог', 'test_doctor' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail',  'excerpt'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'blog',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'test_doctor_blog', $args );

}
add_action( 'init', 'custom_post_type_blog' ); ?>