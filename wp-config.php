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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '}pjJo aCV?9Jv][(Gs/av%z)I7e:/ o.8ENrK)?vF]oJ{R~H~!!$Xu=z;r.Cv~qw' );
define( 'SECURE_AUTH_KEY',  'OOtTlRr.X$C>1c7U-D`_tLN#,pJ6Yd/tbz^-2Q!7jw~C54N,+YdgBC;P&R`,<5Vo' );
define( 'LOGGED_IN_KEY',    '7$M$rY;w9FMAgz7kEgg$G(qOP.ByUiO0ml`sh6tY=M0b]E`@6sKIP[y?6U<{M2z~' );
define( 'NONCE_KEY',        'pEYZKbJr<dfhTVsK6$nAeL7h6E=`ZWUSLqi5F6VmJjeN>Em.D_Jvas^5{[75aV<%' );
define( 'AUTH_SALT',        'Le0-4&.r!/q_@O$j`Uw<r(3qL%YPI-]NI_jV9[W*.O,v}gp|Wz[1!+bl}{N*^iE3' );
define( 'SECURE_AUTH_SALT', 'i4L|Xx.NwDt|,l,E/KaeE7Y)uJM=Grq*@%wAzKIlh*SQEyIlrU^c#,2wVhaK*FDJ' );
define( 'LOGGED_IN_SALT',   '~atXX$.Hl!(Kw }UYScEX-J@jZ!G|ulV`EKOo.h)FR(P1//K+3+&%Ty3AZMmsDi}' );
define( 'NONCE_SALT',       'C-eiqW(1!65VQW7P}(!]oX424Skcht!AzXB`:QpZ%c^BXS![yDV9L^`bIzk#_}Oc' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
