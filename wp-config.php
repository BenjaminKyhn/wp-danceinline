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
define( 'DB_NAME', 'danceinline' );

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
define( 'AUTH_KEY',         'Q.v]oe_dq qf%(GuF 3kFro!0Ym/ lQPa1(Oe)jco&tK_^io4F5El)7n[CZwIxxg' );
define( 'SECURE_AUTH_KEY',  '.o%!_0AVh]2+J%3FRSEUG*e{xx=k~=2c`6Si>!bvU!QEoSZsT(u[NEtI n1T;Ani' );
define( 'LOGGED_IN_KEY',    'fwi2JpusI RII@42#W&Zz9>C0`n}Hf^a1B_<{g{q6E*a[JEdMkl(2ZMwZEbrD,PE' );
define( 'NONCE_KEY',        'e>t]|NqNLwe1k3MaT#x_j1?^I7tY72p+ sXcD:L~T;NV~:TEi+V(`ImUC#S8L@12' );
define( 'AUTH_SALT',        '*!FO&R%W|gG75qM&-uvLK<$f4g_$qA$&d+6`2k|/;t G;P |^=__D(O~ #KhIj6y' );
define( 'SECURE_AUTH_SALT', 'O/AP1VH{)ouc<4oknBJN !.:,pwXfsrOM2ZCQqJ?OtbU0j[{r|QWnylke6awhPki' );
define( 'LOGGED_IN_SALT',   'aM0T`b!Dr85|1Psu2S2[NE[I<_kwuC0MB5/PB@7)q_^*PVTXCAZfJ-#GjX1O4_1o' );
define( 'NONCE_SALT',       'ma=a/aiVw,YF))V<n=3y:Z _OiUt~WZby|KQtn 6[(P0z[LvQ1KhCiV6:P%Q6GmJ' );

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
