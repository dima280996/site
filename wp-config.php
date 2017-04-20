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
define('DB_NAME', 'my');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'ykRp<[n7-Q5233gnJTNLfK/tR,*|xm9eS{8CD_%nfdMc3shJ+/@-`]7?+(5[VaLr');
define('SECURE_AUTH_KEY',  'noHN/X~5xv(o2x|i%+fQ?mKVufT^(2&-Q2}X0Umf)}JH/{rq`&P%_ apD=5_x]Y|');
define('LOGGED_IN_KEY',    'amv?)}G`+v|D({F?L7QTj-w{wB?$GZHn)6W+p/+aY}ROKzR,UwXeJ@qY+p4%(jI]');
define('NONCE_KEY',        'Gt#hs`x3?;aR2w,ly-iQ6=HHUbZfzXXZy9Z9|FP{e[{4TVzSv#8d~:CPg!~7>f8|');
define('AUTH_SALT',        ';ft2aBl<4r?qh~bo b*sMPD-M%=rYUT&JX+Cq7Z:Eagx22+#kprgHC3Ai1:sr} P');
define('SECURE_AUTH_SALT', 'C]MH{W)ObvmlML+;K~vSj*Sd5F-}n6KYvJ[=Ba5{MCpA6C(?F~@/|w~1GCCd@it,');
define('LOGGED_IN_SALT',   'P+{<,K)d~J_:f! jP(]L1rihd7fJymM-Yvj+4ycMJ.J%e3x>4R-xhZ[3xB1HcY=`');
define('NONCE_SALT',       'Rkl1_++Mu4V|p,a!A|[.lcS>-,c.`a9d6S9?)`me<@l+.rH5%L!q>XVk:.K|_zxg');

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
