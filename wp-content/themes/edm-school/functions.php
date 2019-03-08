<?php

/**
*загружаемые стили и скрипты
**/

function load_style_script(){

	// wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.js');
	wp_enqueue_script('bundlet', get_template_directory_uri() . '/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('bootstrap-4.2.1-dist', get_template_directory_uri() . '/bootstrap-4.2.1-dist/js/bootstrap.min.js');
	wp_enqueue_script('maskedinpu', get_template_directory_uri() . '/js/jquery.maskedinput.js');
	wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
	wp_enqueue_script('vertical', get_template_directory_uri() . '/js/vertical.news.slider.js');
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js');
	// wp_enqueue_script('pult', get_template_directory_uri() . '/js/pult.js');
	wp_enqueue_script('youtube', '//www.youtube.com/player_api');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
	
    wp_enqueue_style('font-awesome-4.7.0',  get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.css');
	wp_enqueue_style('bootstrap-4.2.1',  get_template_directory_uri() . '/bootstrap-4.2.1-dist/css/bootstrap.min.css');
	wp_enqueue_style('flexslider',  get_template_directory_uri() . '/styles/flexslider.css');
	wp_enqueue_style('vertical',  get_template_directory_uri() . '/styles/vertical.news.slider.css');
	wp_enqueue_style('owl-carousel',  get_template_directory_uri() . '/styles/owl.carousel.css');
	wp_enqueue_style('owl-theme',  get_template_directory_uri() . '/styles/owl.theme.default.css');
	wp_enqueue_style('other-style',  get_template_directory_uri() . '/styles/other-style.css');
	wp_enqueue_style('style',  get_template_directory_uri() . '/styles/style.css');
	wp_enqueue_style('media-style',  get_template_directory_uri() . '/media.css');

}

/**
*загружаем стили и скрипты
**/

add_action('wp_enqueue_scripts', 'load_style_script' );



/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function edmschool_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'edmschool_content_width', 840 );
}
add_action( 'after_setup_theme', 'edmschool_content_width', 0 );

function register_post_types(){
	register_post_type('images-logo', array(
		'labels' => array(
			'name' => 'Изображения логотипов',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));

	register_post_type('contatc-header', array(
		'labels' => array(
			'name' => 'Контакты в хедере',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));

		register_post_type('contatc-form', array(
		'labels' => array(
			'name' => 'Форма обратной связи',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('contatc-section-1', array(
		'labels' => array(
			'name' => 'Информация в секции 1',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));

		register_post_type('list-about-course', array(
		'labels' => array(
			'name' => 'Списки блоков что входит в курс',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));

		register_post_type('list-for-whom-course', array(
		'labels' => array(
			'name' => 'Списки блоков для кого подходит этот курс',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('questions', array(
		'labels' => array(
			'name' => 'Блок - задайте вопрос',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('learn', array(
		'labels' => array(
			'name' => 'Блок - почему у нас круто учится',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('Oour-course', array(
		'labels' => array(
			'name' => 'Блок - НАШИ КУРСЫ - список диджеев слайдера',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('block-our-course', array(
		'labels' => array(
			'name' => 'Блок - НАШИ КУРСЫ - большие контент блоки',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('social-list', array(
		'labels' => array(
			'name' => 'Социальные кнопки',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('contact-form1', array(
		'labels' => array(
			'name' => 'Контактная форма-1',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('contact-form2', array(
		'labels' => array(
			'name' => 'Контактная форма-2',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('small-teachers', array(
		'labels' => array(
			'name' => 'Миниатюры блока - Преподаватели',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('large-teachers', array(
		'labels' => array(
			'name' => 'Блок - информация о преподавателях',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('post-otzivi', array(
		'labels' => array(
			'name' => 'Блок - текстовые отзывы учеников',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('post-iframe', array(
		'labels' => array(
			'name' => 'Блок - видео отзывы iframe',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('post-img-galery', array(
		'labels' => array(
			'name' => 'Блок - с картинками логотипов',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
			register_post_type('post-big-video', array(
		'labels' => array(
			'name' => 'Блок - с большим видео с ютуба',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
		register_post_type('media_block', array(
		'labels' => array(
			'name' => 'Блок - с работами учеников',
		),
		'public' => true,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'excerpt'),
		'show_ui' => true // показывать интерфейс в админке
	));
}	

add_action('init', 'register_post_types');

add_theme_support( 'post-thumbnails' ); 


function my_cpt_post_types( $post_types ) {
    $post_types[] = 'content';
     $post_types[] = 'content-list-name';
     $post_types[] = 'content-production';
    $post_types[] = 'content2';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );


if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"), false, '3.3.1');
        wp_enqueue_script('jquery');
}

/**
*меню
**/
register_nav_menu( 'top', 'menu' );

/**
*сайдбар
**/

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */
$args = array(
	'name'          => __( 'Сайдбар', 'text-domain' ),
	'id'            => 'sidebar-id',
	'description'   => '',
	'class'         => 'langs-list',
);

register_sidebar( $args );


//Кнопки в редакторе
if( !function_exists('my_buttons') ){ function my_buttons()
{ ?>
<script type="text/javascript">
QTags.addButton( 'Red', 'Red', '<span class="red">', '</span>' );
QTags.addButton( 'Yellow', 'Yellow', '<span class="yellow">', '</span>' );
QTags.addButton( 'Green', 'Green', '<span class="green">', '</span>' );
QTags.addButton( 'span-info', 'span-info', '<span class="span-info">', '</span>' );
QTags.addButton( 'list-coures-all', 'list-coures-all', '<ul class="list-coures-all">', '</ul>' );
QTags.addButton( 'list-coures', 'list-coures', '<ol class="list-coures">', '</ol>' );
</script>
<?php }
add_action('admin_print_footer_scripts', 'my_buttons');
}

?>