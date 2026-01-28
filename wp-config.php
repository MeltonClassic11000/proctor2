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
define( 'DB_NAME', 'proctor' );

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
define( 'AUTH_KEY',         '^q/|69e{517M|j)[6+Hk?s>/r>[NtqDwrA{dp<^3rv6^A5k*AfQp?|ml&(tv=W`O' );
define( 'SECURE_AUTH_KEY',  'Zr4.,OK]:b``ewdX^sB)t:R1[CF+C,H~`owA7%GBo,iVsM# O|QINXhNVGuy1S]j' );
define( 'LOGGED_IN_KEY',    '?rtG4uE%X9#t`taw(;%%fb.D:-/W,df-S@_TOdSuA8Ov^ <uPAQ`N|b14GLL2}^O' );
define( 'NONCE_KEY',        '>o`,.(XCxuB6R|oJ(xxKmErqS| dfKwW;&ooCC,pe~&M[M^ k8YEO&/$$A<v(pBb' );
define( 'AUTH_SALT',        'RE@*$^Q(= F&x&yY,Z#b3v+P6iKr|lOx!^]kPmO dmtz+*!.0#tv=vh=:i!wz>7w' );
define( 'SECURE_AUTH_SALT', 'HcZuz/ TjDi?*kMc%L|L)}{g(0NK[OA7~bvY:6!feuEwvD,KD=Zv*IQy^ZtMx->R' );
define( 'LOGGED_IN_SALT',   ';GR2#_E-Q2zhxaO3UUStSkE, iUK.(#L}MT,GJi1%sgs6(p#a-;R~..K[I,8Q`nh' );
define( 'NONCE_SALT',       'jXPI$8/__;Uecab:JXd 5C^/fT$o,mNoEP{uD.-U]#Mx^8MHqn@h?Qi/xI*vQ@OF' );

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
