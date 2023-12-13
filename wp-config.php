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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mastergrav_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1111' );

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
define( 'AUTH_KEY',         ':dT&w`{~toKj.+k,{WqQV;xX_Ng2Ec2S<t<H48qUyF$+!$gjPwyS4f4)3`UZ%+q^' );
define( 'SECURE_AUTH_KEY',  'T>ZTQU}P0^]Hm$|T-o~bs=ZBWJ(E#C=Kj}yyyWOnQCj1Y/0|kdakOgoa|m1^17}!' );
define( 'LOGGED_IN_KEY',    'b!476Vo*Q#1,^_?Ur}/_U,m)MSWTOdg-LI-)~`)oi7[8_ot;v<ZMRu2ucQA<m@Y*' );
define( 'NONCE_KEY',        '%bePksde=3w$Q%hg3l=vkFT.{Q/`5 %S<k}_)2Q]l63u#WWXJcW1J) I[Kskp^zm' );
define( 'AUTH_SALT',        'atj7?XD#a5$7A3NCZ6xuZuDCsV7;n1//kG~1T[%^=3H{v=cbLwNYy;ZH 5 V=A(~' );
define( 'SECURE_AUTH_SALT', 'GArCB)mK=z`6quE|dq[taP+ChVPHciu_0GT;?04g[oq6b~X,@(rMaG_1H&4f2|ne' );
define( 'LOGGED_IN_SALT',   '(,}@t^FB,C?/moE:Es6Or :RWM>MY`[%K$^:I!$)7U-#=;i$zTMK>V!SMUGC 8ou' );
define( 'NONCE_SALT',       '(*^4h.yZ!C65U# 5rVl~_&a6qn 86@Xc:p{7DbwN,,FG?{W]~vLJ(b_WnIT^-[4#' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
