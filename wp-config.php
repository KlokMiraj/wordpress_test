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
define('DB_NAME', 'wp_test');

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
define('AUTH_KEY',         'o T2NRn0PF?T4HR54jYpVG9uq>@QH3O-u73Od(T1J-0&a +sR%d>DFw,<@`|QKD^');
define('SECURE_AUTH_KEY',  'x$*G[A(aY0$79.R&p^J1)iOrH>aZhVlw]ks31!awu`Jh^u*wB>Fl}=$e.2XM6!wa');
define('LOGGED_IN_KEY',    'OKE&KkbrU8K3A^DFNhzd~q==GW[,o0^@,g+6)iS1#)#G+tkV_sH~ _yk/p`ix8#r');
define('NONCE_KEY',        'E4gajkM5s~q`YftB>Z);TptAW(K>Q@I--]BBh7;NvqI]iUTNqzxt)(|0FT@-*cJl');
define('AUTH_SALT',        '?3x8[:}B_P)+f;y0L6!@PpB9%T11Joceu-H$g/T%i47J7vJW-(jt?&*zD2;;bzgs');
define('SECURE_AUTH_SALT', 'x{w@dg}_v@$e;ZDx==Y5bt>p2.e%.W-iOT03}RB&/M2yn6d4^$R$)~r_ZR-Bb2be');
define('LOGGED_IN_SALT',   'aDfhM:gbB4R<zgwGg7O!iQ9`gBSrrR6R#v51Qn0H i/Dx17,YZs3SR.:A(0 SQY3');
define('NONCE_SALT',       'z[;>~Olt]GUaA|D$oE=p8Fnj2WnTd_Zl9mkmKaf CY<ZT[.BYlFg:=wPs=WWV=n9');

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
