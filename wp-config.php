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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UgsP9!5.]X(O+=Q+Td<G=Y2-W-!zH.).FPPJtCueYayL+-5^9|#b|,j^-@c^5]gy');
define('SECURE_AUTH_KEY',  'zH+Za}}SNU)l;PpdF24nghc$a**2S*CE[M]}-ntx6ehLxo+R3J|n}.ZX=d}8]a>C');
define('LOGGED_IN_KEY',    '7?1[ur:}V>y96tdfZ/BOmFjy.vteQ7/D!kYH _%!ZO[W*#Xr|`!){[1$cO5u(P(+');
define('NONCE_KEY',        'Fz4pZ64C8z|Vb]SoVEj|.D*sokR}jKX-[g` Ae?w^M_;Hyl?>C.b6+]m!Xi)s98F');
define('AUTH_SALT',        'RU{xe9YezH1b^|$LLw5X&]p CHZQScdIG$&f,HCvR4v+@PTEk7o5-_S;2vRf[q%+');
define('SECURE_AUTH_SALT', 'H1v!lvBtz`43rNSxHI?:20*  }6-jp!It6Qz,eno _+Qqs|jWB-gx:|hU2*lVHdC');
define('LOGGED_IN_SALT',   'W#vKe^YC>91RCGChS:i[Y<dPX:94:0iF@gVH?e(j:q7r[H*g1h ,9F--%Stxqz:a');
define('NONCE_SALT',       'Ym$UU_jIv&6xL@M@?g|{FXj #TZ9.mRcc>qY jP4]Gj`N]+m+5Hj^;aerSp|,S4d');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
