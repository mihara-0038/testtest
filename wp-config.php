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
define( 'DB_NAME', 'wp01db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uyE{s=#4}Dl_X19FUK`IaF#v+5X6H5>BURQ8&b]VCwPq<bL5vmcG~`hR#ggEr=WY' );
define( 'SECURE_AUTH_KEY',  'Si?&8 I]zoLbyCl%80{hyEvPFc1n9{@TOaAS+kYHv+#whp9$`)G%<^-ZOH(UI|W!' );
define( 'LOGGED_IN_KEY',    'gb,KOFAMW[d,xYZ)X_+#VnQj2KD=mTu913E_yWCQo~(_R-QDV=!axgnO0(0^=wi,' );
define( 'NONCE_KEY',        '8B5fK:@?2Xa}5z!7&X9#e_Vy5B+{4#svuc5z(i2_Ar%~V4(mR1p-zPB,t1`m(84z' );
define( 'AUTH_SALT',        '@1Cu-CpL0Ktl7l%I@j<yP*1v4@O>>N`Xt{#<@q$rrW7-U3z0-lGzf.QSI%o&w$@w' );
define( 'SECURE_AUTH_SALT', ',W={[H(t8YXmTPmhRS]J+9F$rP+z$0:+j,eZU{uO=5Ueg_foRO6<SPlAWB8uK`?f' );
define( 'LOGGED_IN_SALT',   'uLDOeh_@Xo=yp/f!JU01W-=5m&:6-76&]uM^*l62ou}NfC6|49pcz<$0KfM_m*),' );
define( 'NONCE_SALT',       '<~<M}wFMReq?_~_fz.g|1jMo[h,BNIE(jzDo|/R$ps{$O,:5g|cQRe4~,:]WJnzc' );

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
