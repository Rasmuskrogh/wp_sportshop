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
define( 'DB_NAME', 'wp_inlamning2' );

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
define( 'AUTH_KEY',         'EFlw@|r91mMtC<~5ZV(}5e7??w2Py(]=Tw!gH*bT7zBMH-uP-<%;UQ:5/f6Z>.1(' );
define( 'SECURE_AUTH_KEY',  'gxhgQSu idj9^yRWowZ[tN`#&.MD/;V)V ua~+5/IA9y8m(FsKxY<5:ygW$=;Yl;' );
define( 'LOGGED_IN_KEY',    'QMF?qy6jTVa~SF_}R{6=>]w@mtItKk@<H?CA2x$J[jsfOUsqc4ZG*1Qdm]dY/YKE' );
define( 'NONCE_KEY',        'y)V7}4^)Fx0;P2CM}Vj__=pm,)_cFu2ct.ZSq2+iG(//y>fo0 ks:1$`M^}so-$l' );
define( 'AUTH_SALT',        '[6#FO1R6b;s(!P(uo+qv!TCCct<b/-jZA*5G)L~e _~jcQkPt1nGwqU[j@D}_6|E' );
define( 'SECURE_AUTH_SALT', '{?]3#7F L1?IVW}z^sP^P3E ]oS^uVUMz!1Z6Y:+!R;bg+:=/ojr$%T4xk)rgh%(' );
define( 'LOGGED_IN_SALT',   'kODvr@sD1ej69)<|.N^29^IA]4PH#;ues>#A]KYo8jo`;!p= $Dz=FrN#yuKQtcA' );
define( 'NONCE_SALT',       'oM6;_ozI:v0Oa}n5ct3z|#vF<8yd(Qh0&DJ4~oCyPzTo9*qt?#)S.Bv~.aBa`X5d' );

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
