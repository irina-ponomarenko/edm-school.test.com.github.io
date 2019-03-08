<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'host1661344-1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ixo~M*[+O]A6lQqK ;C$D~{%}aPKCC6>?`H%|yqB]AxNkO31+O2YMvrkP9ppABdd');
define('SECURE_AUTH_KEY',  '&`9m(*[N)=HE_C.78*!&|`UPbGy&%DDl1b[4l~3j&j{!e{O78shD7tb;6LpKs!z+');
define('LOGGED_IN_KEY',    'ZT]n:H6o@JcBWxw@MrkCzE{ohh*kuFs0(|z9<*HE^6O<#UU%078kCP><z T%kSpj');
define('NONCE_KEY',        'd)J]+URLGip|^}3 yeWg7,d}^-7LTn]Lv1L&wZFR-!6JgI0G}7f!Jf,w<a7ZNu+?');
define('AUTH_SALT',        'a7L3EtX6c#7%{Ky*4P]_)O$_)K@dSy$ .!c6eIBV%`:v|i+0n@d[Ou/-Hb+5/2!7');
define('SECURE_AUTH_SALT', '6aq_E+Pk:@i1 ?p#lE;D|iDpbQUppoD+d|X8(IYeX_Ku-9D%4[7,nbvK0DfF-S+w');
define('LOGGED_IN_SALT',   '?;M1d>lF]YG;t/Vf]p6Ek!<J{/KUPN0nW00@^1@``:h@1AV{FevfP^`One=W;2$4');
define('NONCE_SALT',       '[?:|T!y-+Fz{gGCqbKf_/z=|Fad3eR2w.n9^cAYk?3sC7Ta!Pbk3?m4MHo+LB5Gg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
