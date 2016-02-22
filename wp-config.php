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
define('DB_NAME', 'wp1');

/** MySQL database username */
define('DB_USER', 'george');

/** MySQL database password */
define('DB_PASSWORD', 'george');

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
define('AUTH_KEY',         ' b+wQx|xr%w5| [hQ2sy58JnLCtJU,~<433J^D>zd3-tk[Q-C1YM/M#Kc)WGfS^s');
define('SECURE_AUTH_KEY',  'VnSc.EdDSk#RzZIhT%q(G2E<S}01po,_1HU+A8)0CawAL6W@}/o2zt8YK/W3M<:;');
define('LOGGED_IN_KEY',    'SA`{(=*-V4| l +#+.JbYA0nN| X_70ESqW146.r.S.f)[3a+bR2@zc0*Gpjmus@');
define('NONCE_KEY',        'Z>iI2S7SpBy}u5)ao+gzTm~8OrB!QK&_lp}PhX8z;Gt|RN71S31P-JQ8]ur Li~%');
define('AUTH_SALT',        'Q}&kmY4BczM;V9!&NG*a1]TZVHVxebu#u&c<cOnU6(*!B7N=qrXutV9yR+JCLO#Q');
define('SECURE_AUTH_SALT', 'u-R{6GYaJj;a+wiZ*jGFPI0+k-Gq3-:h5DElq,;>I$0-(tY+?2C2|lVp|QEF$!bN');
define('LOGGED_IN_SALT',   '!Cs(OBC/.dy-%GoS{[Hmyz!@|t0o=rA--$H%S&5~4==fge]}Fn]DU>t;x1dW4O&Q');
define('NONCE_SALT',       '31@rsk%N7|| kP{0%p98}%?&U]zZq{7UU3vU7a5ZH2ed[BW_@cVSQ,D>5sP`Mr8r');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
