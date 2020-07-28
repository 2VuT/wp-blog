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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r;$dts/<mlMG^i!3>-S8b3IhK7GflVLWlgIC60uyL`)vjSu}%Q~U_#HKbn7f3bwg' );
define( 'SECURE_AUTH_KEY',  ')<|uTXkQ;w!ue1}*9pKX~X6(-a >Uok_eS+j8Q/9I,lEP1a_Q+>)h)MN@(bhN9PF' );
define( 'LOGGED_IN_KEY',    'V&3{*g4%-g*dr.a$yK|zC}~Fui-#$$;V6{Bn510w}e$kZT%j`8h!]J77N}5?&P*!' );
define( 'NONCE_KEY',        ':T?jH!5wr~skqMO25r*N{Qn*5ZZujRXYCFuP7q3=S(~<xN0j:c-dvLc2b=@nJz@b' );
define( 'AUTH_SALT',        '!G3tR80?vLw]YOpy<(.rga87ilSeN 6SiFMZy9= eEYN*K=$92Uh1/z2u(nmAM1*' );
define( 'SECURE_AUTH_SALT', 'L/MyPeQdD cM0pf=~Vz1}dHq RMYZNQdw/l33Sto?xD_s%U/*+.#]D^09iFtAywE' );
define( 'LOGGED_IN_SALT',   ':8$}?.,BU>NV$>*D?wqTjv.2LS4;i.D{%#=e<g$:A4`8q(8#H%rm+[hHuF)V)Ls/' );
define( 'NONCE_SALT',       'jvV^|1:(4g}z}dFod~t^Yry~P!aBNBz?G?[qRtHqp2!B/-Prwm1k$l4wt7bX~T$]' );

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
