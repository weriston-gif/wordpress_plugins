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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alves@123' );

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
define( 'AUTH_KEY',         'Q`FhGo*KTGrvXpqlGD{ikeYADR.WbG3n?[(QD/1&PvFW{sKV-f)3`;(,nSBe7#&E' );
define( 'SECURE_AUTH_KEY',  'HyL=8,4gdb4Lh <r:}n *#LbHfQP8OpPxXGJ*u;u[}{(UdarNoDxi/-U@F/#P|!#' );
define( 'LOGGED_IN_KEY',    'o5rS;BU-A{1&ySj9^m>h,5_]9br?]D)sC!(#)PxPqM5Kw=enwE/9SC#F=v>2tBY6' );
define( 'NONCE_KEY',        'meM4%H$Ml<uf-<,2xxfs|-$S/l?X Tt}dahoIB`Vr@=*!ERp.YXRvtKLs+q3X8zH' );
define( 'AUTH_SALT',        '~Mq.T}2_j:&6!<nXc>2$iT&pY3O:Q%3?o>c{j$xf`T?,Z[j^%>3c#GX.d>{q%$0g' );
define( 'SECURE_AUTH_SALT', 'V?G{SiA32R}wv.&7E5rfg~Wz,[kWfA(^wo))*xw8.aEqX8J-l{MWP|^Efk[F w]q' );
define( 'LOGGED_IN_SALT',   'yP;M&9F|IqB;*Uj8{8)#%=Wh[8$poF&MUPG]EyuRLE%D~MfL-Hq7{M8E7-hI3Is[' );
define( 'NONCE_SALT',       '@n}-.XCjT+0x6{T%P;XzaIHS#|rut&(UBo(_sk z].Kjs4&MhGs@Y;eY>yC<6i00' );

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
