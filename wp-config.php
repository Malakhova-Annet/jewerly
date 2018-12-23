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
define('DB_NAME', 'jewelry_dev');

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
define('AUTH_KEY',         'Vf+v36mUeP(dl547JEV[_vFMV|sp~jgd&lAB9|Y5Yp69$&4r]0iy`gRLp7)OmA*K');
define('SECURE_AUTH_KEY',  'PuYCdk|kr{@YPee]ULaRXX<?D[<,;E9o495Q/k@7*EuTxvEEx*5U^6l FHYBpHvh');
define('LOGGED_IN_KEY',    'M*h!{7xQu-$e8~qPlb-,D@;U=7xY!aV=GO$;!%G5=g:dvGAviwK|R?PO g5ELOE;');
define('NONCE_KEY',        '-N?7=h8D_`>2>^qAP2]+z3D8)X3+=Mi8Jh{|$J*OO.x#a?JD%KgZCBIXPD9J,?&*');
define('AUTH_SALT',        ' A3T(;N,p6?|ft=6G|R/U`s7$Xfc^I??pK*G8[RV)=01v[1;a(VuC6S `1`Z2X+;');
define('SECURE_AUTH_SALT', 'pALyuP~!G;zcd0a-W<)vQ@s=1L9(gKoi,|1fS~sl$MOqstwe7=a=&PIH+AwmIE#y');
define('LOGGED_IN_SALT',   '%bn,<.eWZQ`gY7&GTi.l+VG|2:U^ENh;T@M`d1Y&1uwy [YDxv*xnxmctG,ZVw0a');
define('NONCE_SALT',       '. x<)1L>EL5qLSnekXjjobd&+OVK;R5x0r/O{IK{NXQzHl>lt~^we_^% vQiF?/u');

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
