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
define('DB_NAME', 'nexitia2');

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
define('AUTH_KEY',         'M&RZ~QDwE89P&(Lq<`ME)vY4v ^eRvWjuH{lyqfmO{QWSG)zMmbn^v!r|BkbEUn-');
define('SECURE_AUTH_KEY',  '|jqc.GXr0(6lPR?Sd:rDn:3+X1)TD)*jk1{qh<.1NkiechqQ,)fh||Yt3j*~iBbu');
define('LOGGED_IN_KEY',    'x@P3xh8K ,.$:D1meHDk6la0TY%[O+WytjOL|@%wkJOuplW:8.nYV+HXRkE@8t1W');
define('NONCE_KEY',        '|~~Y23#!nC[>J!8]^e{jDP0}.mEUM}?o@#5hkM$qmC^a:?)8;#<t^~/_D2hg;fUW');
define('AUTH_SALT',        'B[wuOYAt#>{*zFUiw?U+sVs,teREDjr9Nf)82$f)XIgf)d<f9XHIj0yI*i_l9hPx');
define('SECURE_AUTH_SALT', 'U3BYgnorAIiS8l!DfP :!YG_if_rd|vBUX(Ba}IZ=+%BX:[h~fp@.[+sp.NgZ;]{');
define('LOGGED_IN_SALT',   '=F`HHP(#eIxpPHZ*wg=z#E43`J_.d![5<<A,q2zyD#AVup2gtu{E9c(*YGB+9ll.');
define('NONCE_SALT',       'LsE9%<zJ8gDo_,I{X5a_0`@x$S95kc>r@<qQK49N-e4`z6i&i@{MaU[oE0a#fb[5');

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
