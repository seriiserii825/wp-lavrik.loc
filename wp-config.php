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
define('DB_NAME', 'wp-lavrik.loc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?,vt_;?:<;<[!bDc}&<I$W-8[7p9K.O&86>m5[#gIASEGm_|Z<VE4m:@my%~&uJN');
define('SECURE_AUTH_KEY',  'obB#(sJ7_V1h5Kl/Ao%+&?l]pGxC3uYpWTuM#N#fw91P:zA/?[*q;ioNyJH(q*9w');
define('LOGGED_IN_KEY',    'N%o( ^4nA$tyimKUlJ T:V59~),gOiv##=M^EsWgn{fNR[3(yDag)s^BYpoG0vv>');
define('NONCE_KEY',        'GD!cPOl5eU3F8ca5,eE(mlUgE|jO0^CLfPD]k5!6-v+,gkv&OG$vSNojf|dW/} {');
define('AUTH_SALT',        'ayJZrzMQKf%w4txJ?W~%Tm+KF#i3rOUx!iRbj1uXku8~;: / _gQxE*9(@FR6k]u');
define('SECURE_AUTH_SALT', 'IA:yk~.-wp;jrqCy4zm]5?<_7cGr?sY:JfC!x5ct@t2xid!PC$j1D@_86/aOPST)');
define('LOGGED_IN_SALT',   'QQ]H&+Hwgq`,phQgIs)Jc~H2Kz[K$0,pdR`cd+Sm/6(:f8dLGEmcu}f*]Nu(D+i9');
define('NONCE_SALT',       'R[o/G9-*t8`P_9s&c^<,& 3Wf^$+=lJMQ-EVnv71c|ktRO4qU9v%]Nz<z%)p80Pl');

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
