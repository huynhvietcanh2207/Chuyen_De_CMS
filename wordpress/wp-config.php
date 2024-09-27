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
define( 'DB_NAME', 'cd_cms' );

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
define( 'AUTH_KEY',         '[^M)!<l1%/l)- e:aGzJ /V@;X+(x1l5.%i1qc+F;U<{[OmYKP^MXb3~I<cIOaX%' );
define( 'SECURE_AUTH_KEY',  '%~Q$.5a~WuVeMreXEzDWb{;V58$I%|7,2dIt9JAg><R{,l,IQ5:x`NOD`h3$pKs^' );
define( 'LOGGED_IN_KEY',    'IZ|_sZDeJV!M$+Cq]IdW)m;8$w%;NR(KAo|:Kg`)lzx8wn*O`mC$S[H[=Oa6=<%F' );
define( 'NONCE_KEY',        '9eX8C5.g8}x8CJP``+U#6|S7nUPp<mNR~|xV369[`Qs? i?K6C7Y2AA=II]4#1yI' );
define( 'AUTH_SALT',        'aHX N<Bs*vYV7]%=3l<})vrfjdN2,q?{3#..w80#Sl)9xaB;5,grOJ6/6D{%tkk1' );
define( 'SECURE_AUTH_SALT', 'KvZkO)y-q(SO`6=v7:uY{.#:c3P^|YFAk`pW0)R(*/HA{][stiRAo>wBYE.%- rX' );
define( 'LOGGED_IN_SALT',   'Cb yAB;y~&@D<,:no.Y<=s,GCuw?tFc<b<{`=H-Z.^iO_SYu#H.LyU@TN5Cw{Yb0' );
define( 'NONCE_SALT',       'l},* {Ir.-wu=<l8!ZxeQYehH=lu,RWtc}OvLG>34Xn3]sl!2~uz{bOI.#;h8&AC' );

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
