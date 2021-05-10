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
define( 'DB_NAME', 'insanskarii_bd' );

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
define( 'AUTH_KEY',         '^*b%Nh_m4C~z}yZym!gm=(=ZDF}t*z%n%5/!udV@Y$fzpj3xEK,IdIsXE6`V-I~I' );
define( 'SECURE_AUTH_KEY',  '/XdfE<SaM^4W?kmq+K6>!@BW5Ix$hz)-ecQ%FLmR_y/|lwfp@V-2XxfJ{v-&>h9J' );
define( 'LOGGED_IN_KEY',    'zXR2,84?q``AkG*2F$}$}C*MXOzIgi/@NTA$GoZ;epAyJERNbN>c:}S1 7*RtGe|' );
define( 'NONCE_KEY',        'kp}4tli0pNR]5+eBI##%@z%l]L(b0[.mm^z.oc;](V2}U=^f#f@:J)Fa[>?B`6qq' );
define( 'AUTH_SALT',        'BzO4-v{_%RqzN0uR#[>W#f;z<Uuihb;0nYRzwql[;cm mHk~yG<..~hNjaKV,tvR' );
define( 'SECURE_AUTH_SALT', 'G,AosQ]6qAn^$KssN(06c`Ly Fqx:G9I6<&~uHv#xwO^]0}6*NvE@-&8mZ<d8l7`' );
define( 'LOGGED_IN_SALT',   'borE8fNnsy#lwn#P=/9N-_+GbXAF(MA!VlUymC-%.s~gsrMh#h_e.z8M&r{($xaf' );
define( 'NONCE_SALT',       'XW09=k$@&q8}k+I6(tC|s4&N5l^!^-41Yqy_#xMN_U0,NxenmW2Ke7*Qs%.}Px79' );

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
