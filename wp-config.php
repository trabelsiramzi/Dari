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
define( 'DB_NAME', 'gestion_immob' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mlV8!|mPIE3Me8~XxYsRn|>[QnHLz)ktIpW-ZdGwT%iuLB0~HU]Q gq(Xq1bBZco' );
define( 'SECURE_AUTH_KEY',  '@{=OiDzen&3FZGG~3+g^QDHN,wuoa7N,^|+y=APbEV9X1XpUub]7f,{~./FFZR}4' );
define( 'LOGGED_IN_KEY',    'T8vGMRRF2%7_xFSDq]L>x;RFGsL^*SaeX^[ 5W`dv9zOd1mh iX?:mC#I<EXY}nZ' );
define( 'NONCE_KEY',        '0/R5O:os*#?r,7cL^N7ffB<5L6Y,-op^TcR%|*H`/6)H]mbZ!ua#V&#B/i(z6)uD' );
define( 'AUTH_SALT',        'X-(3,H@h}4!W14_js?;zCi=fmTZd(f7o8z3BQHr_N/i>*V,rt*+C:%CG?#Du|7R;' );
define( 'SECURE_AUTH_SALT', '}fXsw4:s0|P(8Xk3[%<w(32[E&.=^nC},&fd}#oa8FsB}_9dYexINeBr@AP3|<Y#' );
define( 'LOGGED_IN_SALT',   '$v^x=~()V$hrg`6<O=dtSSlt|j$#VzZ*O{^{QC^&J%ik@Go8A9hs3[.qO%bRLJc~' );
define( 'NONCE_SALT',       'UPA!;4Z&%cmuHHlJw.bj.9o$iFH#(o6<,T{/]V/NS&LO,E!xJ@Z/D&!}*FKm*Ph(' );

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
