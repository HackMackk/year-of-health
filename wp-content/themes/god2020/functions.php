<?php

/**
 * god2020 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package god2020
 */



add_action('wp_enqueue_scripts', 'stylethem');
add_action('wp_footer', 'scriptthem');
add_action('after_setup_theme', 'mymenu');
add_action( 'init', 'register_post_types');
add_action( 'init', 'create_taxonomy' );

function mymenu() {
	register_nav_menu( 'top', 'Основное меню' );
	// add_theme_support( 'post-thumbnails');
}
add_filter( 'excerpt_length', function(){
	return 50;
} );
function stylethem(){
	wp_enqueue_style('boot', get_template_directory_uri() . '/assets/bootstrap.css');	
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/style.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.css');
	wp_enqueue_style('slickth', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick-theme.css');
	wp_enqueue_style('font', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
   }
   
   
   function scriptthem(){
		wp_enqueue_script('bootj', get_template_directory_uri() . '/assets/jquery.js');	
		wp_enqueue_script('jq', get_template_directory_uri() . '/assets/migrate.js');	
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.min.js');
		wp_enqueue_script('slickj', get_template_directory_uri() . '/assets/main.js');	
		wp_enqueue_script('slider', get_template_directory_uri() . '/assets/bootstrap.js');	
   }

   

function register_post_types(){
	register_post_type('events', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'События', // основное название для типа записи
			'singular_name'      => 'Событие', // название для одной записи этого типа
			'add_new'            => 'Добавить событие', // для добавления новой записи
			'add_new_item'       => 'Добавление события', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование события', // для редактирования типа записи
			'new_item'           => 'Новое событие', // текст новой записи
			'view_item'          => 'Смотреть событие', // для просмотра записи этого типа.
			'search_items'       => 'Искать событие', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			// 'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'События', // название меню
		),
		'description'         => 'Создать новое событие',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		// 'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		// 'rest_base'           => true, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-calendar', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['taxo'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
} 



function create_taxonomy(){
		// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'taxo', [ 'post','events' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Муниципалитет',
			'singular_name'     => 'Муниципалитет',
			'search_items'      => 'Искать Муниципалитет',
			'all_items'         => 'Все Муниципалитет',
			'view_item '        => 'Смотреть Муниципалитет',
			'parent_item'       => 'Родительский Муниципалитет',
			'parent_item_colon' => 'Муниципалитет',
			'edit_item'         => 'Изменить Муниципалитет',
			'update_item'       => 'Обновить Муниципалитет',
			'add_new_item'      => 'Добавить новый Муниципалитет',
			'new_item_name'     => 'Новый Муниципалитет',
			'menu_name'         => 'Муниципалитет',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => true, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		// 'capabilities'          => array(),
		// 'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		// 'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		// 'show_in_rest'          => null, // добавить в REST API
		// 'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}

?>