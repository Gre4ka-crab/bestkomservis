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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bestkomservis' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'p]wVW}TYhh><3[8biBBH!8L{#Ti}Ao{LT]?4_^tI5pwL%u|RNE%*Be8TNNMS$p22' );
define( 'SECURE_AUTH_KEY',  '%]LsU4o_Ps}%kDo-z*X~c@@ttUECaa+Do/8]O.sVqfGo}qR dIvLscj]qPN|Z$zN' );
define( 'LOGGED_IN_KEY',    '/)4.^cv(dSJ;al,Hq}s,#LOlTM{$~?$)lT]]q|`OZH $XiCP8>O9h5*4FimmHq(n' );
define( 'NONCE_KEY',        'C]-8%l*hNs{sKo0vyh7d eC-3uK<qtt0M1|{qBA/<{D(4yj`PkY0v+>BvPET6V_E' );
define( 'AUTH_SALT',        'qJm69s]Zn%YzYS{*5B@)<></l(fBlQ=+/xyM2]bEoFrV ZuP<iEd(HT63.nH!{$j' );
define( 'SECURE_AUTH_SALT', 'QV{PT-Sl=bPXjr/.|7CB@0#-uWT8a^WF$H`1z67D+NX-Rgli4?P ao(1[%H.SVFM' );
define( 'LOGGED_IN_SALT',   'n:ABfn@CIb5c0v+e_2PzvN<Bn;K/y3(<^9.y=7T8c9HEl#9u@Cm5$4t6&v%Rn_&q' );
define( 'NONCE_SALT',       '&]-7:=y4CoU2j+93e[&bJ,DaYW+>-hG5q3T*ZrU|hp{>&KSsK)MaVdxMZ>k~)*Cu' );

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
