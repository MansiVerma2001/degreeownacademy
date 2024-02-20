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
define( 'DB_NAME', 'degreeownacademy_db' );

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
define( 'AUTH_KEY',         'QsuX)rRZlp.4;+8w-}[O-cHR@Yv?{lDx!{gt>Tn{#.9>liYLnP+`Thy$;`&2nXeP' );
define( 'SECURE_AUTH_KEY',  '6#{w)*5oOu5=y}lif7Ui9c`)XaXO*UODAn_<!}twINTJlr1mI1TN.[Y!?a6*F0,A' );
define( 'LOGGED_IN_KEY',    'z4UODY0.bTpj:#6[6z^xrGK/O$f^-4P7YzQCcuu.mk~U,&T8$]n{f=nW@fDb~r[i' );
define( 'NONCE_KEY',        'y>GE2?9a~y:*$6:H!3&c@8giD6Tamp}cC%k:+DnhJeF[Va#`KY}Z^eSGiV@kdOh^' );
define( 'AUTH_SALT',        'brZ&#%6,Kr{3J-{YC=aLyA?YV:!D(j=/d]tNl2~*jfb.XPiWyK>GP|w6: jM*IXg' );
define( 'SECURE_AUTH_SALT', 'spq*nUM3oO6+|()9+#g/c_yJ@M1v>[3WQre}MH(7*Qk:%EE&LNy2l~>TJ{UqBN|!' );
define( 'LOGGED_IN_SALT',   '{Rxp0zWC]p*]88%`^fW60O<.nyc{fEw3?H)./aWJbO/jQ2.w&1]6/z})EWBb-xm)' );
define( 'NONCE_SALT',       '[a`6/]C+:W|Z>};dGooWfTZMD5V1*uuxsT`e?Hl!#-d}HPjYxy9pvW=wGz)H34<d' );

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
