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
define( 'DB_NAME', 'qn9n8ox7ywdb29g2' );

/** MySQL database username */
define( 'DB_USER', 'rcnlw78ijf2aef2a' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd9lrwhxqe59j21fv' );

/** MySQL hostname */
define( 'DB_HOST', 'dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '}<tEyAAF r}f:~+Aa7Ia4UFnkC(kDXndeS(/xh;f+lP,U|{,,Be$olyZi(F(Fu+c' );
define( 'SECURE_AUTH_KEY',  ',q>% JtDLB}.b=WoM[`wYk!=Z9CD*i1+Gw `7;^,DYZKZ~OQ7G1r+luR/ompM uO' );
define( 'LOGGED_IN_KEY',    'HE:j;]XDW|% mO=|7yTkm~H3.3u^e- i[vax;_|=~8go@[TOQ&oR8GUDU^&RpQI+' );
define( 'NONCE_KEY',        'H@jFJr}U$!^rd{M8r@/,-|eQH-8TM<*)rO<5)*gq`.!*B-+mmxS,l~plzt[ATB8L' );
define( 'AUTH_SALT',        ']SMGRHAG~XT/JXUc,5O{|DRjDm&r}ztQ48kLLt{RE_]6w;q)OYn_.V)HC?-g3~DC' );
define( 'SECURE_AUTH_SALT', 'ow*x0F,*{TXzrj,t`V75P_x*&geN1~N#C*.zs~E[3C6;3y;52XJLY70>=a(YF]sf' );
define( 'LOGGED_IN_SALT',   'b}me!z@<Qo).zz->oBy[ q<$|Ztav.[>4a8D5LrwjqVfJRNZ^)54rEx1J;=$z2zn' );
define( 'NONCE_SALT',       'W2dN^[|dC}r<ZC1wD@=KBC/jx%O97K0 l,Z#<=PTzuX+SK`G_pm-;gCrb2,Uh;sv' );

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
