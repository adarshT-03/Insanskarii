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
define( 'DB_NAME', 'insanskarii_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'zTTIq?&jFZeWOjFSp}YDxU uOMR6M=sctg6|,Eq@^3>nd?Am&wzwqMR1zTIWM(`o' );
define( 'SECURE_AUTH_KEY',  'N A{CF1&q@Gd46QWAfx QF4O.!naP|+H/h^C`]~ofu+DMl#[%}J837G;EVA7-Z5!' );
define( 'LOGGED_IN_KEY',    'y~{;;;>bUm?FfTBhPW6XZb.v7,}FMst]uZVP0ByQ~ka)y~D~FGx<C>=D*3o^m;BF' );
define( 'NONCE_KEY',        '-5)%ZC(+)Iy_?i!%.qUHu^[m/Erz+<}P|9W46rt`32K.%Y_[y$F2C?7drW>-ESrx' );
define( 'AUTH_SALT',        'MeNbQ8Q+I!}Hn/8No_w;#Iui]+jl<~ba1MQk>?dB]en!8ZNk7B:6;2]1k:zRc5e]' );
define( 'SECURE_AUTH_SALT', 'Zq_.*M1BW!E@(rBBplT4QM~.yB:I,=:=uo?[lyF:1gidDMXNwhZB-HLnK_4xz./]' );
define( 'LOGGED_IN_SALT',   'Ru.ziO42iw!STvX)I~:vHp{}@TlH-<ng)-nWs7-xNBr+`UAW:cIF/6m$GcQA>IcE' );
define( 'NONCE_SALT',       '$f37HFNCt;geJBUNb7BB5eax3[&B1H+KSb=Ach8;0/P`H&kt(V82MG h6(hlCA|4' );

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
