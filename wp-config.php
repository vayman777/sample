<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '1277-22_79212' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1277-22_79212' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '167ffdb718fdbce8942b' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AVBen8,|T79liJ4TZ4b%,;cb|qSkPI^!dK.e/>Y_arBn*>ihu<<A8R` hCK85!uS' );
define( 'SECURE_AUTH_KEY',  'hB17PZsD~k>^(-CGReeX!wwnkZyy7x#T-oYcHt[_g3*deYT(}6)>J1Nn4OZsWAtq' );
define( 'LOGGED_IN_KEY',    'pO;}KOlaM +n*}@/xjlCyb=C}y)i#7+(0v?!8|uI?>IpTfNZGnHgt6sJ*CUGSf-;' );
define( 'NONCE_KEY',        'v/Jf8a_eSsyi/<bol9#+-_L0J&}C{>nhOz/QXy1|,!K4|z-1#iW)@.AZ{%Q7Y`JS' );
define( 'AUTH_SALT',        'K~hiauQwf+??CH }H@XcvMpw%Xkj@b&X0bh{`h0RA;QsfHe3>q`Z${PaFFr}{jYz' );
define( 'SECURE_AUTH_SALT', 'z]9iyLt%{J:GYpa4y|3g%Y-hV}{h;i[%OYf/}0]=U1do<AOwi17USBUE8APa;[1+' );
define( 'LOGGED_IN_SALT',   'opq<8Yl5~u9}k}e)[6QB2`3|bdB hvbECeF^6VUsoB[WoXJM&NDXP]L*LNu[W7LM' );
define( 'NONCE_SALT',       'wo=`EdK]yP[b;8e.J5t*xtuozt+1,@fB^^F+_#H+]-&T}fT@3ico1xNh,1,KFZ5y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'pRzxP_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';