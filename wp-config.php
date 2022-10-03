<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'x5%W{2pSoS:j;40NakY_3NBDvX7+=l6$E9M1dJIZNR+NCm[}XG/n`]3[raN Y[G<');
define('SECURE_AUTH_KEY',  '^ao#X YPul!s[SA>}<S@ H+,u6,. A8/!TQ1)mNPP{NqjiWORyAHU454WO:G~e#{');
define('LOGGED_IN_KEY',    'khKNq5Vw^:&HE^,3x]FOOwUv6_vlZM(50fj/|.R^F9-%I0>,2L+Xv?M(+GNr],nQ');
define('NONCE_KEY',        '$1F)$lJw;;|c.*=i( WH_Q<F$~+8uyp`[m R-g&=e(Rs@Wp{/{+a`8WV, 9;oAsC');
define('AUTH_SALT',        '/xSg~AWGEk-H$p[UB}eh;=Ek[r[NG@~!<aoySW18fard|UE~Sfu)dj0?Rz+jR<I!');
define('SECURE_AUTH_SALT', '*A5y[Ct0GB@b9SF6KI]V<Y>}:`7i/-+7zr:dh0ZS]f~r<:[<0$Zv~;ThkccF8m]-');
define('LOGGED_IN_SALT',   '>_|8oiKQjGy5Od2 pi![2Gl4+`X@wGZz+|*S|U!dRKSU8g-|><nr_* w8;J.aPY:');
define('NONCE_SALT',       '2{U SxfJm>{9sl(@R(EnrkaCV0yB^KF[J%=tBDpY7K3!]<V:(s_8qAkKIiqFJ)Ej');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
