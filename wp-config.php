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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '.+B7Us+S!`Cd` sFJLx-Mc_D`T8FPI_Id;u`zs,uL&$w)|Wy,/Q#_ycO[vl74>2[');
define('SECURE_AUTH_KEY',  '2+h}]GzNNQt#??9wPF[N!;>5V(;4&t]Nh5p r/sKInvq~i((N>v32TjK|A(;f[wX');
define('LOGGED_IN_KEY',    ' YG|.OAKu&FEG1%~avq&tT-4<:5xv(/<8^+@A%wwQFQ$e&|r(dR.~yWA=ae_-7-:');
define('NONCE_KEY',        'F)(<W::/[(e:9`tdC#hEm!M4=xfj>AQ !N`5F-)m2o?jI3+RW!W1Zl4T]:IJX.WG');
define('AUTH_SALT',        '`51_a!E~9U:{QX%Z8L)X9=vn`}FhS>-D+v>Qr->qUA6kb<Ii1&(CV{!W0-I0+y(@');
define('SECURE_AUTH_SALT', 'vI~$4+Ef.bhz!SVdN&27zu8dgrSb~.e=dZ<YD[2U}+(: DhCyYGP|-cV2In/vPZq');
define('LOGGED_IN_SALT',   'L-5D+,A|P7FFW ivg})JG~Jr&1)-!Ysa_OF! +Z%FFyJoh6<kb(+z]A>5):KCZB~');
define('NONCE_SALT',       'njPi/._3Z:u3K!E4*8-ySF[k2T6!]pn320Bo4/Ki^c|oFpz6W[+;yghNn!|:o@ [');

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
