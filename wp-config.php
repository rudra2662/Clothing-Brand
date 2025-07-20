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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '5R&Cl+(/)Hv0IZ~a~ZYBFvwD3nBd$#)yW PvwFMcFdf3~DaZv]*<QHBsw?f*&lX{' );
define( 'SECURE_AUTH_KEY',  'mULdPtK/gHOAkLv=%U81PKh-&*r>DJZ_ubIbfso}!Y_-+ummx#]B9^)Ac4` x1DS' );
define( 'LOGGED_IN_KEY',    'APp=n1#~{S,S:.hq2y6#vR=`vM-p@XC,9]v~HqdOCdMj{)pXNiE}0LQ!{uOA-hJ2' );
define( 'NONCE_KEY',        'zW[s=mz+_3&0 zd]]T JLbf|wq}McF,awI3..4,e7.`xI!2G@l_Ni<_@@{kW3Z{S' );
define( 'AUTH_SALT',        'o;Zl%Y!{K*qw}eV5*-kK/e]_i9@}];X,Q(mX$:*HHy&L3B8hz|*M|}iigr@l#_#x' );
define( 'SECURE_AUTH_SALT', 'D`oQooDUGZxZ0H;VsZ@{XPiLx7K($b:YoHlUYTq8ZIc0TNHxTWC}N_M9P9iN-&[h' );
define( 'LOGGED_IN_SALT',   'Il9xI{`^;*<(.>&Iu9>k5i<=>})|vsi?5BMl!`E>{+%Az6^^/?H4<xbn~NRn6FGL' );
define( 'NONCE_SALT',       'lB_RM*ET,W5P)ySx<Nkf=p +m<UllJTYb2HDGZ?4(w0z`}hTU -y?4Q2bnmWur)k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
