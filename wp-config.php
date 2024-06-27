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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerceone-wp-db' );

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
define( 'AUTH_KEY',         'h?kt+UD;Vq_qEO9|pmKs&s[cYppv`ZIKd{ULGq[+GV+vMD2>l?u8UJkZbO<(6zQM' );
define( 'SECURE_AUTH_KEY',  'cl$KvHNAGFbk/@o~9UN{K$r(tAI6zQGy@.q;HN:u_0@(cQy4{`})3^0y5]$9I:fZ' );
define( 'LOGGED_IN_KEY',    'E*91)G4vk9A->q!+vce0 ru.p{uv-o.p2_-*Qhw[(Pv_m4;.j<k7AoOVxaA(o.AG' );
define( 'NONCE_KEY',        'L<gzOFax`B6NeP/Oe= 0V,~hHYx@8R+[$jCG<dE]/t3,R/-|LUu(UWwtbmJVqz>2' );
define( 'AUTH_SALT',        'xr.ZSk-)1%iIV(o~oNg0`t$K$?].>IcM{^.qfNfcUf@%<izO;{FNSdIT^Rlt8a]|' );
define( 'SECURE_AUTH_SALT', '5mf`e-2mE>,g%#^r?58?Z.xMWYnNuKBB4UFYb?E_e7uuU/q{tZ[!/h g+26cD/DI' );
define( 'LOGGED_IN_SALT',   'yojrOyC]#_,ZcN4g5Qrt*sk}~Klmi8g3kqVL0M]aEcrrS|Ye3eR@@*U-2cTzDCs-' );
define( 'NONCE_SALT',       'nvBT-ZvcP;VUAPYe8- $(u:g+GW1,&O=9quK7iurfXsj<MZwXZ<zjC|p3<y=@3$r' );

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
