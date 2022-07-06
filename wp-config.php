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
define( 'DB_NAME', 'cesbst' );

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
define( 'AUTH_KEY',         '8,Y]OuE8HR5qbg0lh47k=.eHx:Vhbii}2EqMTad0-oXjEjECb+k>vg3dlBXrfV/@' );
define( 'SECURE_AUTH_KEY',  ';h55*6;.Ry5)>rMs0Q;=w;!/W=I0EK95Fj@G H&Bl?2)J^8IC/?R.Q)sd;%*IGB7' );
define( 'LOGGED_IN_KEY',    '^zjOm1|=,A_z=Wi*3<GVcZ6?3m-O:dZ7W[S)6S5XKJTL?M/OXmj!SQ{pD(Ic8Zys' );
define( 'NONCE_KEY',        ']:/j7NI_?s7I=wpeI-_b9w6))XHvnn?9Cfq|etg(R]-R4Vk$iE9Sff?Ml)@&!](|' );
define( 'AUTH_SALT',        '-)pXn&OLOt|z$BX8mHW)Cyh;X24Np.(/*Jm[((XAvYVkL]myM+>vgeOg!%FZ!en7' );
define( 'SECURE_AUTH_SALT', 'EU7UIvGo{AYK(f ,..c1h:&N$py{<=-FPF;#uIm5`P/x3.:/od:COCO>532pnL5a' );
define( 'LOGGED_IN_SALT',   '[JxU[U,9!BR&HBRO3yn-m&)C+uRak{^4PM#{Y`=IoKv{`*1{~JNDgS/*l$/+=gX&' );
define( 'NONCE_SALT',       'dLdAm_HRk FwM]pri]-7tkc^oBJ6,4)$v)lC6NAo3z<`@1Yw]dO?xFuL eG<(xyX' );

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
