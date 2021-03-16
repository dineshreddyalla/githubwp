<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'githubwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ytVSXYPUphwbhlYK' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b9%hT(UXIGWPJtm`;_X;rim/{bN)>7X_bf#.1A.`H~+g1 kiKrhiuYVIfr[qUq5{' );
define( 'SECURE_AUTH_KEY',  ' 8OVFOX!2%bCU={1.qtWU!x7Cd;{A!;0H6>4PH.4]T :ifk@n-a#{dawG6@OM)>z' );
define( 'LOGGED_IN_KEY',    'uk0->@T[0#9#4ApxKm_g>b8e ot v|${CENYvz,/C9BkOeaPth|tYH)I?=]T_rO0' );
define( 'NONCE_KEY',        '5pk@L!PYP)Xn><`E.}pY26WAFt^GT%?NcKhd2vZm@PPHa&q.$Wc<>MfO?*e^EnM~' );
define( 'AUTH_SALT',        'A9J(/$<kkR7SuaYPT[zqa#vivu(jLVE{soY_i5(P[(F&0Cg%Up*osC;D?aoMpI|#' );
define( 'SECURE_AUTH_SALT', '@%1D;U,YsnhM7 fy|aM@W8IN9pGDLxdptzta*Md#kF7>/Gi[-I@rl_~&sP^oPO(K' );
define( 'LOGGED_IN_SALT',   'x1uS=^xru7x`S qzumL.GbL9p<1Kg~RrE2c}0b;Bf5[-a2x&Y7ar!BJFkrv[Z}`3' );
define( 'NONCE_SALT',       '/pVZi Z5A8Yx!tcCV+gm)jXf,ya(o7MA?#$uOCYJ%(fW%$b{;]+bSXGS-u&?uhp/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
