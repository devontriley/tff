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
	define('DB_NAME', 'tff');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'D{4Oh6801Y1b2rvhfC`AV{M96PN4@Jvj~F3I<Z)|#i7(D$ L+,Ol ,Y%3|iI*PYO');
define('SECURE_AUTH_KEY',  ')pzTm0>Xg*J<S_|T{R:ZXo04=YKVHRW~c2^Wa$^/SJ-e;v+VQu| td$$YN5G-/%I');
define('LOGGED_IN_KEY',    'Xa$@fc5B[f4zkJf/}^H%N//Rl:y@-Y%g0q-CQ7B9GT7J8r0hFd0fx^M%dp@)0$*[');
define('NONCE_KEY',        'iL[:/zV+{.b2`Q-b2..;Do=44?q^To.A<Dn;cyMtWSl][.@<4v vdLI1:]@GD9^X');
define('AUTH_SALT',        '^pH_Rp<Qp4rdHsAxa24$[?j[HO@!:r49M3Vpif1X(Q$-h|R.wE++Y;07{bpg9HC[');
define('SECURE_AUTH_SALT', '9{YQg*g^?~+Zm~88Q:3etx@-v^@CHJ$C8a+;B{0RK0/,gLu{Z-ca~`f3Qv(h#iQu');
define('LOGGED_IN_SALT',   'I6ObGE*3-CG0GjVT>H,9k2kc &x.SLehR-Rs!@oEGSrI;j Cu/U>^JGzrz4)Vn+j');
define('NONCE_SALT',       'iLqNInU0-F$CQnW.@l.n m FyzT6.=IYVAQj;y5C=p|MKf2S;ZFsy-y~4>S|EVWa');

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
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
