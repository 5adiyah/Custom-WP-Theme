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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'd|N_iMs3[rmpQCVkJc(dA93|^8|,Vi=1Os9V;:a~{yl5n; ]PY;|d#s[bg[FY>*N' );
define( 'SECURE_AUTH_KEY',   'Q=^9@*v}Qa>kfw<^4n)ZUV`(A4V*~B0(V6 4IVq5p-:p{8_x%CaALPl?,ZI$bW`#' );
define( 'LOGGED_IN_KEY',     'b_jBH8G,<o1lu$x(~qP.pE)y.|z0s^qj!``9&;5XJzggQ<TIMsWK}|~;XH AqYMf' );
define( 'NONCE_KEY',         'uyjzPz~oKgEx&[qj%k8La`T@]iVZ,ZGEHVx@~BB1[1ZW|M{Dzg>QIXt88QJ8Mxu~' );
define( 'AUTH_SALT',         '0+!`u/v<d3w%t,kCw?>y4xjQ_C-FT|+H{+=hG9TW_ow=h*A-:)v EY4@ov,s8JvF' );
define( 'SECURE_AUTH_SALT',  '[u{EPnC3i$1_bfmbQ,6p5^T[~^3-K;~|JZ`S@]59=:c2Vem-]baCN[BzRH}L[WEM' );
define( 'LOGGED_IN_SALT',    'Rk3.Zy.Mtu*Xc#TLr}M>7D%WI`d+S92Cvqnhc%3+]w;ZjN42EO9>(wd0+Y%RVpcY' );
define( 'NONCE_SALT',        'P=xL7e&(ZR#`bnLF!xd!F+?MT^Az6Dhxg|N71FyMLRl|5s>;nxFW.[Oq5Y(xeCka' );
define( 'WP_CACHE_KEY_SALT', '3_[V~q5B ?p>6_KR II+a;M+CYH;#`Q(r~W5^?b<R2Wk/9aPtKggZh@Xs09gms]i' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
