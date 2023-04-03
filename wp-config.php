<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugins' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z{r#hg[@*AX^orPTaozY+{9A@/G!/Ruemd )=3mYJ..s5Sb(=p76K*FYRjr_wY|.' );
define( 'SECURE_AUTH_KEY',  'F>-~{sRc4;TiR{Nc~Jak=x/837I$cE^/M#7r#8|`r)ga@SqCX6vqAB?kC*yo6;]4' );
define( 'LOGGED_IN_KEY',    '%a4_-2BnC~H<Bv.(UriF>WMTSXDX*}@3|Resk~J&*+BrSJjb~:j,-y/2jciRdQin' );
define( 'NONCE_KEY',        'Tayh@&7G Sd^?Ykfp2}v!A1k!,~f ^|CT^Wc$o44x,%/$o{h>(?P,.:;IXE74A*O' );
define( 'AUTH_SALT',        '<Z(6^p#NXWx/l6XsR{[s?_S/} v6Xgdj[faG7o(9P&(@]K62ZLQj3?NteGP<W;63' );
define( 'SECURE_AUTH_SALT', 'unns.scZiE;&OLGY-wcxfZ.=-n[:S6+4MRL0@1qD!t5G/hnK}V?vJq; _=ez-bJ@' );
define( 'LOGGED_IN_SALT',   'rw|$*RV?t:;uFM#-^buLx)mSc?c7Wqgi`@KF-c&GAeuM(=buCQ6__v5YHzfc5uYC' );
define( 'NONCE_SALT',       'd;U{pw-pVTq|NBL{Bx{?F )z>m}Oa8d9Rx@eTLItax*-PNaKr=fUk0JuB7M.[&m=' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
