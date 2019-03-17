<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'kamk');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xNRB I#~z6QbjOJ,$Y{Prv(HP1=v:p~kh7%A9ttcQ%{|pLE&RnU>AFtRIe!`N7yj');
define('SECURE_AUTH_KEY',  'FZ|~PR-i@yf:>*g[f9PJ+C!,XkF8>|=]DN)TRHTGCco@p[xlL{`ANdN4NXbF4r7|');
define('LOGGED_IN_KEY',    'x(*|k&%q$8bVWCbck~pkA_Z4555xA=tHp>0nSr|P?-5nulku{(~B&WuRkc+^h!.(');
define('NONCE_KEY',        'l%`=&{7|)lA=gv7j f[M5D2%YmrEX@kPxvp,IzzWF9B2%,!X;/hZ~PPfY69T8VYD');
define('AUTH_SALT',        '9=%}_GM&ih-T2lum)APTfzpK<pLiQfCs`N;s}^#r0R<a(te5SkmS~:=c MAZaEy!');
define('SECURE_AUTH_SALT', 'qe{:zoztL~LX8z.]nP1u7x4y0&t&o+J_~Yl()d)Cq5/X62+x/@oaX> ))N^!fezK');
define('LOGGED_IN_SALT',   '>6Ao&izv%NRmq`z^.-M`]AU6N<`%X3N+) [`]i%h>[{d5MNIN@CT67mlns,kiDL;');
define('NONCE_SALT',       'bxB9vR45QD6C-q@a`*$;rcbK8t.oz_=4vNl?X3P i@a@%O/)PtUByCHl<(*O&EJ`');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
