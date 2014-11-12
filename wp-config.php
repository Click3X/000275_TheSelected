<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'selected');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%yw=rV?bJix/HT6>nu3,%j-#3Q> |!8eOqn+!^SFh~K|C;kVC)x&1_Y%=B@?A|V%');
define('SECURE_AUTH_KEY',  'Wb$J3K72#Bs=^I}:m`F|+(:QlQI%5~7Dl0eY=^#+rBWax=){ Fd>e2Ch,1J+Z{x-');
define('LOGGED_IN_KEY',    'UI9dzNeZdca-|w{)Lrscj4~dfNw%<+AdX>[x/:O-!<ql85CUWDa,<LiN;AKHmhl2');
define('NONCE_KEY',        'gyRw/^R9p:@fDE{sm)HZll&N|xEFO)VR9{Ay-ma7swOB|5$5g<_6DUFCS9G>O]dr');
define('AUTH_SALT',        'k-!AfsY.+!X|h?xBG,=0w|!<y_x%{d@pz+6wEjo9+$bPM9U4Ot-P?(x4^Os6DV4{');
define('SECURE_AUTH_SALT', 'pvoCp^QPP[c%TB)OxuBub)U`jz&}lAC/4QFLp{c+|(9tR6N5ULY`You-h-4IpYaC');
define('LOGGED_IN_SALT',   '7CAlPa_r5`B0<0+[$ib Z{ILHOM5!-3B[JS-Il;@!xPr=g`GFx$w>{N|%,>FX|s[');
define('NONCE_SALT',       'V4E9-A [Ra-8Su()8k=|RQ{iTe*j-Cjn22YwBo_&Ej)_6m~Y5)#s;x_U)Zy<k%nv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
