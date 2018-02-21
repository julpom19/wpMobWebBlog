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
define('DB_NAME', 'wp_db');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hbsZbJNZ_R1mh 5Khn9cS|8vU~>6]C-+XdDg;p_5m~-CT*wr[+4|.q(gLsn.%3;U');
define('SECURE_AUTH_KEY',  ')L -vMQ[%.f9mp e,m08LwxHi+]a LaL`RA +4pER%S(*]2-7WcJ7z ~Y9LV:JBq');
define('LOGGED_IN_KEY',    ';d| -V^QN+1}/VPrWK)=;BU#$YO7IZ9QBCGX8-5-$tN:7P7l7DzBcP1;!~r>p6=S');
define('NONCE_KEY',        '>t^<_h`1+Tg(O!VtlXyWA{9Yn>;+@mcVnuh$>8LK{Z7H00<Bs~PlX|SWDZ/~-eo>');
define('AUTH_SALT',        'r.+4;: ku -0F)aG>lqlc][Yc23}]wr6Dn+ykV6UQ-SfcbtbF-!:yDj^/bx|?0Gm');
define('SECURE_AUTH_SALT', 'y^[<c.oL3L8p!+#t`A!vF;q)8iFPhoml2+k)9L.?F+C,6|{0aO(+[!QUa2a8U+V,');
define('LOGGED_IN_SALT',   'i$:^y+)QWNO<Kp^3FW)[|%7tKE%n(g:II]~P8W1YIBw;{1<2YEMkwayjOkvFe;v.');
define('NONCE_SALT',       '%s/Hh_&2+0$YjeoX0CA61PF(z)Yhg DA`~|w.i^iUR&dSj,^]<<sRy}dZ[+L%mxV');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
