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
$url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

/** The name of the database for WordPress */
define('DB_NAME', trim($url['path'], '/'));

/** MySQL database username */
define('DB_USER', $url['user']);

/** MySQL database password */
define('DB_PASSWORD', $url['pass']);

/** MySQL hostname */
define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

// define('AUTH_KEY',         '6]jNP1|Xi7#-LSF*ds*[V.v>+r|[o8LsBjU)-a9gsIkb..#8gOxh/4f)e@F((4Xr');
// define('SECURE_AUTH_KEY',  'n=@Q6k|bHb#%uNp94E0)=L+~bKocMvxuJ2f(-ozzcE`.st`zV*AXV[xXaD`G%+Ch');
// define('LOGGED_IN_KEY',    '/*IX:iETJQa(vZ#m/7u* BfL@$[{hjd`[fRt;^8|}!)fvn:!(8p` !)8-(ck&A6L');
// define('NONCE_KEY',        'yj]AyMFI/!y:I9L8:914W |x26?H7vi~f, {yKarCzC.<Tq`+7v,=aeOat-AV(DD');
// define('AUTH_SALT',        ')0NlHLUZ+e- +#|e7kz3]GQ(DO4a8(`Dfe)P/$0;neeJ+z~ns~6ax bvL~2{99aH');
// define('SECURE_AUTH_SALT', '2==qT9-|$: -qAC&t,^-S1O;>_}yD}%^k$eR~g0LZI2b5lqmvjP]dr$3oA/3-^|h');
// define('LOGGED_IN_SALT',   '2fQ`6<7+,IqMT9id a]tR&3.):krt(HV!Pfh-nvYo3q]zL`CRO0lGB/j1_efbpBe');
// define('NONCE_SALT',       'cmT-%zt3rr.k,A7MzK+,_<;}Fsyb6O,nq*T3^(8?H&f9]l6VCm+CwwUduAgzQ8t;');

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
