<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cread_calidad5db');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '*$1r&0Wdb@2oL%*');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FwxK)U3G;:GuB1-s~8~xQ|!66pxHuhg<^V5uz Rp|j?|Qu{>LsDk5rdit4:l,/ }');
define('SECURE_AUTH_KEY',  'PX/?{7Q;4>Qe!!DdjUbfe>NHlk/%vNs0aP;U>]g]FNW$4I8}P<|pP)?BnPI8i^5|');
define('LOGGED_IN_KEY',    '-s?0M4ul2ijNr7.(w.Rh0XN[x-&|lw|k*4GV)Z2305DJXrV6b^zNy( r&|eGSEQd');
define('NONCE_KEY',        '@z/a0+$CLsTKoUX$g;Nq{GWWQ*B-e,@2,UevIQ:=ZeX+ZBK_rI-o]T}ob35w)HKI');
define('AUTH_SALT',        '5W$[^y[L?iI G9(gZjvMlK |+npFk[J_c;%+T-;IFVn{UMI^P7Q7|r(CeG0PGtyJ');
define('SECURE_AUTH_SALT', '^!s<d)6d3AgH#XY;h`^.Y/Lsde#zl6o,b[L,ga|9.RbvDtl6GJx}Y:]KdVm|3&+7');
define('LOGGED_IN_SALT',   'c90C+]GMqTnE)~YzT5.n&RP&&GzJ+0F@U oLO(wO5Yv|ItSMZe!y,y/3mqnq)O(W');
define('NONCE_SALT',       'DHlRDf3<RK<97i64;Mn;Hf L|T?A48An8`~u3sGq+06 E`9<%-#2`*QU@=PR27d|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
