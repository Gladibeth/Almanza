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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_almanza' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!oHb2U-#JMv%}EX/(lfOjzB(wK]7[Kq=ttNbYI&v~H`)O}%vM]s[B,rb@Ce&I;bO' );
define( 'SECURE_AUTH_KEY',  'Fl6hx.[),!]BVweD!JOlWW#[uCyea9.o[[2yWE88n*$xzLcIs{SB>ErUv(RUU]>A' );
define( 'LOGGED_IN_KEY',    'R:lN]/GGqq7(?gW%#-iZ67{O{b <L?fzK4|Hrvk QIH+rFIs9NIMP,n&0LcIBK3E' );
define( 'NONCE_KEY',        '^-FBV`,(,#uNz1k}W>2hnP(4x,vEh`<s7oFtc4omo}m8:m`+pPNl[Y{k=Il&A_9 ' );
define( 'AUTH_SALT',        'pj#o*H_c3gx)evS1%v9jKWw$eU9G>|&KW6^{ c{aHIxOc`dc7+!aJa#9amQh&ijh' );
define( 'SECURE_AUTH_SALT', 'B]lF_z>yv`Ye98vsmJ}$5ZB.3@6Xwsrc5#8X^})MMoa&0_,|(LMr3V:?_E!)9hiD' );
define( 'LOGGED_IN_SALT',   'nf9e_0J2iQ$Zm_~ 1fW0Q9M-!C}8GA%ULZIHHSh4~^>fN)IV8^_P<ZKeJz0*)LrE' );
define( 'NONCE_SALT',       ' _*HfIOkI0tKL*JVP8/C^Ei48w5@OVM31#?!kP=Z~v9Km98C4vb/)*ck(rFd^Iv*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
