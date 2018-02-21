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
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'o>U3)Y#U$qszh^Z%VqS8S=Vf.:v|`4v2{cD73{{cZ#x_=n =?mdIvO*yV#F|*jvV');
define('SECURE_AUTH_KEY',  '-EC>D0`5%iLAMW1Cwco=%~kTl E?!loR17n|h=9tiJlQau;l?M6_|#j3S]}s>C+0');
define('LOGGED_IN_KEY',    't*T:r+ElaeG(1(nOf`~%%h )nMs/|4,5_Z@9g/rp|{}Iq~C:ZufH~R3,z:cSxNK;');
define('NONCE_KEY',        '&r>;[eu9#?k:!?ZMx]2g$btGc|A PFf&fjF^c65gZ#7<n:T3<&HxOX5>Gkdk,J:z');
define('AUTH_SALT',        'K0w/m5UmY$$e=CLp^ZoyZ0b<EWzE-|m/|X-kfw&GOGZ~dF6GN,UAoM>_),.$+68G');
define('SECURE_AUTH_SALT', 'm5CZMgq^D~-D8 5Oa8*Ez.uZf!7}JeGn71(%X|~R.!g90zZ7IRj;C_1:Z.tulr,e');
define('LOGGED_IN_SALT',   'nF!>|pyi3dJDNv~x/U5MIBl}#*z;9^`&GA1owa;$9ejD6|s4s,uBK`#8Ocb2b>ig');
define('NONCE_SALT',       'L}1{p65mdF36Kco]]vxE?ABqcqP^hPd6u=s4Teh1,IKPXT.T=cB?S(01%@[h$TZM');

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
