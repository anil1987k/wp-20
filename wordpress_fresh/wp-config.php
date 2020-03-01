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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_fresh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mind@123' );

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
define( 'AUTH_KEY',         '1[L[K-SH@|xXG:;kkX}V9f?{Z!z+aZ0Zcib]!QGS]G7*]]nr=xc?IH6iQq2%Zmoz' );
define( 'SECURE_AUTH_KEY',  '-5pR~B- Je6myzbF7voqr&`w3IQEg;Vb4Gy744?.%>*D4MD`)`q<L2!W%64[Hy<!' );
define( 'LOGGED_IN_KEY',    'i6h#@+!qiV.#=@AW?_@Zq:?98+tWW)D<>058_zO_]eCqi?gR@?|ZwW 48(g5OVj.' );
define( 'NONCE_KEY',        'rUfKit}EmFmEgS4!FRjY;yW<QX)z5nCj7,Q1t`L|<i.O+RK3R+n,&.i.xahGDv+)' );
define( 'AUTH_SALT',        'ryB>XU(1[Vg[pk(/:&`9t=uE !|F[Cgd@HJK$_gO4)29-F|ba[9e(qEupnc:Skds' );
define( 'SECURE_AUTH_SALT', 'P%Wk.DI5|2zu!@bBLX[%t_g6!>4/hmgM0%<z<(2iz!3pqXmFh!DT7Rts_:VyH(Yu' );
define( 'LOGGED_IN_SALT',   '<_{Dx${KtlxenPBbnc#/q>ZD]AzcMwi*:;wa/@ILBT:^E_u.AK?}a(Kf@/MT0JkH' );
define( 'NONCE_SALT',       'ifYMVxx.e =V,op8^cjJoq;f?w14xCYU<moscfuO_Cz`b#J&Q^6}9TO<[XS)#h`Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');

