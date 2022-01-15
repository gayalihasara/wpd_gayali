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
define( 'DB_NAME', 'wpd_gayali' );

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
define( 'AUTH_KEY',         'A`ao}VDZ(f[xvC3%y#XTUq8T_SmWCbrYF.:]&eVAyC<;pn=V~h>ImJ9%)>Jd$0yB' );
define( 'SECURE_AUTH_KEY',  '6penPD5Z%G<_<ODoBe0xPaNBCs-q&kqMPW[}W(7dXj6Ukm?W8uG&,A,!nL[s!K&s' );
define( 'LOGGED_IN_KEY',    '@/.L >vit&a9|qc^mawR!4f9ZV?H_14A=Gs*hF_iuEfhJ8rG{5-;a5BQ@`=n=*cq' );
define( 'NONCE_KEY',        'KDOepZ}W+ii[ SeZ}q~.~M[`K32gb2K]iWJ}!]#zNI)NG*YB-8U|D,3vWRNOuq!s' );
define( 'AUTH_SALT',        ')kS<SO,CwX>s[4@>g&Mjz4w+W_MTD~Czw3s> CWbs@#$QiM<u8opB=EEkobR`/J3' );
define( 'SECURE_AUTH_SALT', 'gU9#RrCDUw,8&FJWLSc1Qd:$O0[q(r[]foXRGbQ0.h-QWA^>dH8Ru={v 1dfUa=+' );
define( 'LOGGED_IN_SALT',   'Q!:&$wlWIjEKfF(g/#HG>Gk85O^W)%-3de>i+eB%KKhhYTIm?tc8[z).H:_l1NIT' );
define( 'NONCE_SALT',       'B]XRj=$<+m KmgJ@:Ye+M7J.Mnrp8Eft4y2g}YxrSKro Hl<_?@?%7k:D6HD6`+m' );

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
