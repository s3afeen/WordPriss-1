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
define( 'DB_NAME', 'zaidqqq' );

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
define( 'AUTH_KEY',         'y2`1]P/7!,+UDU3-y=eY$3se*35).H2yL=3T6~(6&D hniUV!04NK;:s(ybG>4_M' );
define( 'SECURE_AUTH_KEY',  'iR*3%mV.<?]VC-Lca6h|*@MOTH1*Q&W6N0_iJIH>lntw{HC:+a+-hBHM7I~[ZAVA' );
define( 'LOGGED_IN_KEY',    '}{,IlSX7{FBzm=:$5)(L&}Hal~5lTSV{tWa,ZK:kJ%<ETHJ?ljk|Qj3}wl`+jMpi' );
define( 'NONCE_KEY',        'wsn!M[Mk`UX{P|ZsdPw{BH;K5Sdm2I8~UoZ3y?0fs(^#5rm76M]f&cDmkiQ}m*yO' );
define( 'AUTH_SALT',        'O{J/kXjw1cXvfZnf o6/OlT6Mx@X1,byB}B:(GLb>mG2%tXMbz)9mWU$=RThBYOj' );
define( 'SECURE_AUTH_SALT', '0C lNt,AoB**E&Q!S`d(k@lWcO!6~~zf&{KABs5?MAQD`$8#N0XtjhrpjC5v1Eb;' );
define( 'LOGGED_IN_SALT',   '^t8Ff0 +6hocMZ4<6a6RoKxDyQ]_G=GltQX/&Ir42^rDry.z5t&xW2M:-k<T_k[w' );
define( 'NONCE_SALT',       'oe^} SvT|F|=qO[[>,YM<aup=vq]{8h@{u8[YjP~c>>;JOvRd>Y4Ljt/o41[8 2P' );

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
