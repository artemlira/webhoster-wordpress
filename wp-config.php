<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webhoster_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'o+EJ2WXMEIftH5G-86#v<yyhM%nM^#JtiN1%#-i6Xnw|vFU&Uq3EYBlnCC#2mVm~' );
define( 'SECURE_AUTH_KEY',  ',9?5<L`6;RTe-5_2=8tEl^2;.jPBiarbyKgX0I[U`IyQN=Y+R5-BDKT0|Z_`M[qH' );
define( 'LOGGED_IN_KEY',    '^yXVtMYS6<]FRQ7u;&PD@ T|BzBM;i]9lMBL/F=~i&ISG~A8Y26WTU)sxK<AkhX?' );
define( 'NONCE_KEY',        'CpYZT6Hv&uNf:ONSy;M~(q[7]b Mx3^SHiiiNeAet=(_DUBKQqj}wSP6k|y+c{Tg' );
define( 'AUTH_SALT',        '6f}:C@i%S@-!NIk#i7zCZUpa[uX.Yv@Kp,n1P Foj;sw2fi2BRfN1ESlFNnE ipK' );
define( 'SECURE_AUTH_SALT', 'R+>sq75yN:n#?imSN~hA)KeU>=ZWu)(+[]TjQ2o6GGEwWFMwifC1qgiIp^>_nkQK' );
define( 'LOGGED_IN_SALT',   '[V@v+VFp<#l7j6l.7!1Kqx_)<8VCTKIRORaZ@QgwK%H&YGdpw|=J/AGM~W9}3($N' );
define( 'NONCE_SALT',       '-(^;l<@=%Nl,iX!%fyj7g0.%xX+Qb7tjHNB,-DSKLN/$(uIj=tuPjg.}Zk,W&[|9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
