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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs458115_wp1' );

/** Database username */
define( 'DB_USER', 'xs458115_wp1' );

/** Database password */
define( 'DB_PASSWORD', '9yqdx1futy' );

/** Database hostname */
define( 'DB_HOST', 'mysql12004.xserver.jp' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '@1eG7PMR(Q^yP]3-9@2=:7Vdb.H6.U}+}#b:;j0r}dbU`@ZH,cK&7w{Nc5PR/SWn' );
define( 'SECURE_AUTH_KEY',  '%M?6;j1<6t*7e5W=4weLI[[C=G6:rYn7fu7{G={mm1TYjnB=m)N?lN2sXG7)6Q#>' );
define( 'LOGGED_IN_KEY',    'g*:=M=SPR`xhDAK5&3K5wcRew}%S+L77>Nf[d:,cY&`P(7}.j`uJFuUDAr$ re:J' );
define( 'NONCE_KEY',        '&g3;{:I=&0yn/?CRpZ->v038.XbM=){AVC{5SW^,*Fe?=UgdOT< 5D9,Ui-NrFzF' );
define( 'AUTH_SALT',        '4x*y0W/K`z]B[cbPFQ686_2ipK&K|X;>a8a7WWQ@Ngrl)5N!/o2d}%ly^;FEbFnx' );
define( 'SECURE_AUTH_SALT', 'km,1G}6w,x}hl[BVCP!s5p0RM2ocS!J rlC~f)pP0Phb(.&lGY,Bq:6xfDM<`[Zp' );
define( 'LOGGED_IN_SALT',   'v^|iLx+ quc!J05Kd0vRkcSd(8vGBruH/v3o4D;!Sw#PlHN%QjGEFcgvahO+y;Q,' );
define( 'NONCE_SALT',       ';QA`/8OucOrQu{)4|Ko?WCk$fiSap{BZjl:Fdq% feGvxq-@F^?3Pe&V@p$cY7l.' );

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
