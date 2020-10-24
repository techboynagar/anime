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
define( 'DB_NAME', 'site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#CeUL_ke6LST~g{0AEi%qYn (EY]NF%BRD6(FNAf[y*grWz8hOCNx~q3Qz!9_7JP' );
define( 'SECURE_AUTH_KEY',  'NeC |!}#12Oa]:c+Jgym?8d?>_jg7 jqi^Q)?S)7$x%/(Z7lvXFD$k#]Lb+a]ZB$' );
define( 'LOGGED_IN_KEY',    'DM!DIQO9.{Jl`uKPs[EZv0L]Puknz- :7TW1[Bpq)7L3F9jGoGm!9Iz~[Y#I4X?D' );
define( 'NONCE_KEY',        'TD~A`;eVX4#mYU,[qB-.mL7 0`9eTv?d|w0xH)qZyUj&EqBeH6)ca)wP]>#<$ ]A' );
define( 'AUTH_SALT',        'v4)gW9Bo13F<#/1fC0|9C!`W{;7_v]-P$d#7^x%bZbhc44|H2ht!c8wHMLrQX,)~' );
define( 'SECURE_AUTH_SALT', '}eANFZF|)CW>wX S}Ms?}_.fM::`jdV9Fi#^@o@eirILp=t=B:BwkjZMkw#xN#/_' );
define( 'LOGGED_IN_SALT',   '8)fvV19;EI,m%})AS|*<~&)5b8)(zGo ]v+h7N#52]y-3fwoZtPbrYr3$8Z%c)0;' );
define( 'NONCE_SALT',       ';c8x_.{D]3%/?C#q? 6GAh0hH:3llP7r6*i8q21m2<P]QgqAk8(FR^4V#{!yf_zP' );

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
