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
define( 'DB_NAME', 'gz_2020' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'f13Xc1gH0zT{2-U!c&RmTv+5QMVP<:ny4)J~USBPo5:?~(pC]@oi]}=Uy#. )MMg' );
define( 'SECURE_AUTH_KEY',  'xDs9~O9#=*jyGZ/68I(6gVmUc9VasuEk+!`8[S#Tk;@J5d{!Ls^+M}I|K[b={NKd' );
define( 'LOGGED_IN_KEY',    'iZ|F(*34zi1HDQx1L)G6i>dSG9[rEvJ&C{.m:qGP4..;9vPHl1Z^tl502j[PD8[V' );
define( 'NONCE_KEY',        'Vf+ek3-@%k)@y:NR_AD:obs`)!2QHlz%<v)-_iQ_w%vk||5&&G/p|Hx4gE70k9H+' );
define( 'AUTH_SALT',        'N{ x0Z`%E(:(L^}U :c?^B0O M#B1Q3PZgz5Vt/PAsbER2>GRRhf2x]ez_=hv2#q' );
define( 'SECURE_AUTH_SALT', '>@ny2hLgU6 vWZ1xzJIN>I51![iiLhu({m1$F^?X]|$U(FzB42%h=Hk822sI:mK9' );
define( 'LOGGED_IN_SALT',   'b*hGiZKNO#.7H8!Czg&]7rMM[u!/Rg+Joh]3f7*,H3b0=uAe8PjO*R$`OXks.B5r' );
define( 'NONCE_SALT',       ' >?%*DcvV982zt#?r@)Mj1Bn35~zs/W?g&+32LW*0!HDJKmMXbV>/`YtIwz4;5[8' );

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
