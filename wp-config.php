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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'A2HW;ki4X8X|,g(i)mS+|+Vop-8T^ ,j9*-l%8Vhr<Y+Y/]}fi[QQ6C]j+u[Yq<8' );
define( 'SECURE_AUTH_KEY',  '`%@|pGQt6.;A[Iu1Q5} +B<4)<5+^: i_/6yux->Z/kmWF {jpkb$h;42aC7=u[-' );
define( 'LOGGED_IN_KEY',    'rR_@MqAl.XYE`3h&j_6H%HG!}SolgJPYgS##{P6P4vr.kH!v|AVKJTKG<PgWV8L`' );
define( 'NONCE_KEY',        'B^Vbllmimxa}Iu p*j#GKAJL4I?L@3V.AS+oMEyEb@<m>a3Ob4JScgo62pN<{)J^' );
define( 'AUTH_SALT',        '+Y IXxHK)r@aX_@qs+SZsIEb@xL2UL*#Ig,kX@}-6^gAh$GnB^j^I&#2,dkF9eK>' );
define( 'SECURE_AUTH_SALT', 's}LqJHI)Vwm{hNqXy80$fnaVlpfgWkXZs!E5*:s=5raryzrzo*F_A@k1YD.(=<]5' );
define( 'LOGGED_IN_SALT',   'PmkEnV3r/*cHuvrA1z*sNR4q:JZtH+s,,SzcG%yTlsG^@iTrky!#j$zCVKV&LcwH' );
define( 'NONCE_SALT',       'Vh)c$~ZQJc5jQ5_BZBJy)803ccq9n3LY3:E3h-bo5x6jH!6)RS^_l4JRQ:UFnu&p' );

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
