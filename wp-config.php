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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#L)?k_schi~.Oh{-:{2nYN*t}[q_Kj.:b5:k #rGm6v#tXIK2W{<+tJ%+0);1(rt' );
define( 'SECURE_AUTH_KEY',  '0$z>-qAkFu>dFbl}7:Z@L.w+ .6VEK$nuJs42tZ}bYtOba52NSJJHQ&*??i.Csl%' );
define( 'LOGGED_IN_KEY',    '9ku3*Q]VD:QnFxB{QJgFlA=hJ|D]Q)uVgMT1O-59M[7Ite:vcG[_@6MBL^{4g),^' );
define( 'NONCE_KEY',        'n+e_hxM+d8j-S+;8y8jQ:n`duW4|[b[FV=G8IkL=kx1WsWK:K2<Ng|rPHR1dONK~' );
define( 'AUTH_SALT',        'hTO$M$ZG?MO_[9_sIqZ|LonC0]oLII2X@zkGQ6ffW1&Lmk>E|iJqZ SFomnJ3:PD' );
define( 'SECURE_AUTH_SALT', 'v{U,I79Z;9w*F6prU3y97l0YO&)k=dS At_=b5+aCQdfe_i8$|lb}|TSDvX9>jst' );
define( 'LOGGED_IN_SALT',   'g8x_iqViScP^aQRX*Nueh=25*u6jG79&@a6xjyyZQ/bWJ8%ukq5K@EC[d{-dYN/q' );
define( 'NONCE_SALT',       'm?=fq2bY)dXR4mW+LjaQ1{KptK,/%@U|C=s,z&9TDKD=$vy.BfzC.Gn82/}?.}zJ' );

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
