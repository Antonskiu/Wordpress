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
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dJ);l$AvXa~0+C|RESMGyx35-8GRK!@Jg nQQ4s0zzWz!:tN/;2`AuH^ZgKaD-VC' );
define( 'SECURE_AUTH_KEY',  '4./iLt%-gjmQJc!cX]ZBVOHhwwhW@$osqF>?X-2DN^3+y/]Sc68(YtnrE!2yNr[F' );
define( 'LOGGED_IN_KEY',    'c@:v-;nWh_o=]z`7n+5#oFiVI^)e3&Zi7INeilt.!gri:CEg8rGP8AS`f3_I9y#6' );
define( 'NONCE_KEY',        'Y2paAzSS[gBkvogS^_}Qwf(x8}TO1yr8r#~t_,fYqLiFfdSV|j<Sow=b*cA[](yr' );
define( 'AUTH_SALT',        'qz I)o=$s?iqG#VA$~-?e!hHv*b0cP0<4Yk~Byj1vgnuO2X}@ITy1@t#S/O3oSLl' );
define( 'SECURE_AUTH_SALT', 's_Wn-6_9,&ir-=VR/-R6b9g-Tk<>OCnk>w`CH`]-glv6M5+(_d7kov|`s:#d*PBH' );
define( 'LOGGED_IN_SALT',   'jFbgRb;# xymxg1SVPH4O*&3(c#^a;!RY-=]>y-?g/Pb,7%-rnt>p]yHzQG%)&;<' );
define( 'NONCE_SALT',       'ygsJm`<)xmI7.8|[Z<uE5z2.B` ed@^=3DUZrQ3*hz,).kuX)}r6G`[+a`cvgpim' );

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
