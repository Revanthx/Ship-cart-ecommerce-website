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
define( 'DB_NAME', 'Ship Cart' );

/** Database username */
define( 'DB_USER', 'Ship Cart' );

/** Database password */
define( 'DB_PASSWORD', 'CotfD_ZYGVRlXg1.' );

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
define( 'AUTH_KEY',         'c[<+mAE3V U}OlbzhFD!o~O2am<G}Cy3)s9Bh^f~,pR}7jttRt#002-~5#lxG3h]' );
define( 'SECURE_AUTH_KEY',  '%}<@#E oPgP/9TxV<&0r+L8uLDBWz]N9Vi>U{X/5Q#S?<3m+XOX>}&j;&DL~ug&{' );
define( 'LOGGED_IN_KEY',    'A|y:mJarP0:[uzgD41V7|I,-d(-n7>1SvVFjEi]bzht~n6{t/k*xp~:BKsG}&[gR' );
define( 'NONCE_KEY',        'c;<ztAP52P1SREz?reLA<P(;/SK RoG;<Hh0*24$a& ~x|?3rqO^/llK0!mjW$ZL' );
define( 'AUTH_SALT',        '~N&A[YvZl<J`sKwln.[Mm:`w4T.[7(p9jQl-_4-RX{vb_>(QYzW[D&D$:uI%4uIc' );
define( 'SECURE_AUTH_SALT', '%I6oHdxC)z!*t]HlGM8((XQCFU9>#^Zn]RZFqB8@z@=v$4^j*d)y.=mLf;>B5HX@' );
define( 'LOGGED_IN_SALT',   '.GSGPEy6k/ LeLREAtld6kM695eGAvt8P lafh%@#9W UF&_R@2RdJaSwd6tUH2T' );
define( 'NONCE_SALT',       'B-RxyS]2tCj*Qw@ f7$UCnRUFb%/aF1M.w#b}Kyi&+<WP<ZF_c9$eQ/Ea3<rTZn%' );

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
