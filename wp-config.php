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
define('DB_NAME', 'empower-mt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-aObUS`~j7%K[y:1O=s|;Iy)-y!DPVq,ShAEJ-#qFUryt-{&bofN7674N>UK:+*)');
define('SECURE_AUTH_KEY',  'P+w!g/<{Wy:[|/samlM~{gWp@ bG_@2pXN{Nh1*kNhc(;>C+A Dt=.PSzt~W$085');
define('LOGGED_IN_KEY',    '+Zut.C8%1[Jpt;[AHK_ucny4z{Un<bZt3}oE#8/Re)0%#j^^oH|;Cz2qPb7F;o-I');
define('NONCE_KEY',        '6CCzdc@bg,ycXX#.fE)O3hlj-4s>X1+yBfKs%u v!)eC^&jF/|^ig5hO/qQn2| -');
define('AUTH_SALT',        'eP4$$0 Yc&{-2l|Q5elP!)?9JL 4iEE&JVx[}5C2C/Kw{7c0<iLWtk6W`G7(_ybG');
define('SECURE_AUTH_SALT', '<R8GhfyN@{TZ|U 6#Dm3B$}%Msby+wLQch77jeIWejqANSra/Ptz2sRcq]jh?-q@');
define('LOGGED_IN_SALT',   '^.-x3|{G-7c[ph6`9btJp*J }tZ?jI<$0d28=H_O@:;D E6{TYV{/RA)|pbj+.c;');
define('NONCE_SALT',       '4 f]?YZX-~F|Rz!}qz=D6NO6=_kx`Z+*CVB7E^wU,h%bnD@)<?[R0[P.>Blm~YcQ');

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
