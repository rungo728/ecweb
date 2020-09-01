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
define( 'DB_NAME', 'ecweb' );

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
define( 'AUTH_KEY',         'yqHT7%h@SQSPw.SbQq]CV_Ojy!1;>eJ;Ueo91He?vzmBJFdk|m,?>DL98c[Zt=,0' );
define( 'SECURE_AUTH_KEY',  '^EOtB4:K/aOq9m&JNy1h<l6![5`b}_evrv4Pu4c8_~Ppu/e>ouy=5U8dp`VJS$Le' );
define( 'LOGGED_IN_KEY',    'K0%Iuy(`(VU0%fnk;JXH(zw{#qQf3N0l^A^TBH31P%R?2`hU5q3YeUSsF;c!{ch-' );
define( 'NONCE_KEY',        'kiew.JAc%@KWUVQ2Wt1^pD=*bHg`[1UGds94t;f>R}m&5t_q]j}g@D=<s^GD(}w$' );
define( 'AUTH_SALT',        '6R{Igt4I`*en*{#$f-Brk*WNt*5.D zsxqIlhh`!B|B!-RXr#kB +bLU=Xb2@e}&' );
define( 'SECURE_AUTH_SALT', 'y~Z|1tXfFN&DcbJf(C6fV~$*L%o.6$ZHgn.?IUK3IEv,E~-t7]:z-/Rq%XfYxkz_' );
define( 'LOGGED_IN_SALT',   ']W0G5Qe[*4BN1]p4l^)h8,/ST*+N8.~P6Tq=d~[$iB}0!tro-PeeZ:C7*r@*]Uu$' );
define( 'NONCE_SALT',       'K^UiQM(2b5&fYH+e.~6s%Pof!|I1vQ$8*d~(KB>DvB;nMn6o;3RKe`<g6(:5,Wib' );

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
