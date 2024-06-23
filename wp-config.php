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
define( 'DB_NAME', 'constructionblog' );

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
define( 'AUTH_KEY',         'yY ItkZqcNnU$4rtDsgHE#Ok#STD[D.+qAL^DThZ(xBP8whmZF1@J$9!H?B$^CZi' );
define( 'SECURE_AUTH_KEY',  '}y*uH~Ki?ZPw@3BR*s)YaV.,Rnh2lP_!4hqW}|8Xg4Kv$uR0*RT.HhrpNE5rkU?J' );
define( 'LOGGED_IN_KEY',    'v]{Al.j5*]Nt8).sOJ;g&8Ng`QG/$Ccc-ACbt7/}aXv~4=iBvstc!5UkFH9g7UhS' );
define( 'NONCE_KEY',        '~x.k wcOtdN[*/,t,;*Hq9flY6R. vP|&XN{=BYd^)S8mJfIVxFMHk$0/*GN5xQD' );
define( 'AUTH_SALT',        'HEbd5^apvurQC=<-W!al#dO^]4nhbIHAefa;83Zor2k$o-)Ks^{1aHy};810l)e<' );
define( 'SECURE_AUTH_SALT', 'Vr-s!rU7{Ewa^[bJ~@]N*LbeRnl+4!is<o)CE lZ({g/fE`wC!KMN$p@y/Y1%f[Z' );
define( 'LOGGED_IN_SALT',   'QqA:3Peme{X>M+I|:~eB98*VVm.}hk#,<C&Mv7&ZIp<yJR@yS1UnxqwL+]pKHvW0' );
define( 'NONCE_SALT',       'bZN`T)Uc@aJs{_gOILSg}0&d2ZzIe^QO$<[[gsK9P$qlo.E6y |lbD0NDk5Y4f;.' );

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
