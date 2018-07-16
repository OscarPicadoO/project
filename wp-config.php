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
define('DB_NAME', 'project');

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
define('AUTH_KEY',         '~}`=QUr!j1S2gl `s7GIj*h,L%wx}aRDBF*f3:+yKC50?W+{D x_5E*EEJ9L]eQ_');
define('SECURE_AUTH_KEY',  'K!M~6#qy-@l6Ld?~H7`Qmt;YwP8(ou#r4Nd<9n:J!sG3uD|ZN*1+4rk_t5n2LhQ`');
define('LOGGED_IN_KEY',    'Y/aX:#=YHzAtw0f_o{3.9m.pM>_y7WyZOBJb6sDdn?w|Ad]U:V]fXSJonLf%H}.B');
define('NONCE_KEY',        'e+x8U%nUJ7_{%4*{l-+q1 JnJ;`~581;.bq^DRKOt+p#WbSb`$cOAT@tKs0M}@$b');
define('AUTH_SALT',        '*V:g@L}Ssr/~wmb}hF|^ *83c})[wK%e_z=W3eQ,KJ.dQ:{,zVSRQ[Pbq-7, ){f');
define('SECURE_AUTH_SALT', 'i|rMp;h&$cUvmX76,@^VU0.Sbtr06p,pD61rJr%^m(1tAy2u962{8)Ir)l;`0-Db');
define('LOGGED_IN_SALT',   'oqkL`GIE@vHHHn~_Mkf(8A:<A,`yE>hTIGDnA3;F;Uo}:f$!|h%e64c+R0x9F24X');
define('NONCE_SALT',       '$OLvzRa>^?0eS${Nsgwo9qh{Am?Jn)hg=K8&Tm:FGXtQ$?.+qLdCz0sbpb#I[:3k');

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
