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
define( 'AUTH_KEY',         'wz<;(&OksQDyd(rI(uWqNSF,!>5x>?M)CgBA!;7J2nI1O0M18@o2ddXf.3T `NhG' );
define( 'SECURE_AUTH_KEY',  'Ses-kEf.3h=/u%[Nq2v2L&(8HBQRWw:-^rV^k``cwVarMCX:*&|W=X7A%+Sa% 2C' );
define( 'LOGGED_IN_KEY',    'f+RT1Z5Hb&LRCYoGKIG3bf9-lEOS?@$^}*#:R[ncxW9|T0w}SL_A<f+D>%&3cGM`' );
define( 'NONCE_KEY',        'esBR!}`ke0R5bfM[,|~Ai9T~;0D1kDS`]>_Eg1M,=W>W{`P:sP=qsDl92WNE<mf#' );
define( 'AUTH_SALT',        'f9FV$4y]?Uy;},>TS;UvPrgKMb=+1^7a&XB2%I/mc R-boeA!N?jOA)8o:}HY#kJ' );
define( 'SECURE_AUTH_SALT', '-wZZnA1PPE;iZ}Cr2IgIjQ[p,uI=m*qjT9u,M5WFX^G0<N0Zti5xvrX#<&_<8J.&' );
define( 'LOGGED_IN_SALT',   'il=3yj;?*D~:)gJ P|^XDE.`*Lkl]u9ZKEA[.p[}>*{e1X#j3Ji1i+a{!}HW@9-(' );
define( 'NONCE_SALT',       '&&]0!13Yz/,{cdp Qt-^&TS#XVhPD.+L>Rv`k;R&ih7!Rn1K)+gd+tW#[~&(R1dM' );

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
