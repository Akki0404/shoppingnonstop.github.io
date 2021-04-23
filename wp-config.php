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
define( 'DB_NAME', 'sell' );

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
define( 'AUTH_KEY',         'JENSdY1;zQN)qHg@Wc>]coaf,MMz[}2:  [9B4kv@FgJ%^=?B`{+WVIkZ4Qb7G-]' );
define( 'SECURE_AUTH_KEY',  'd/z*%CP=Z+>qwm$wz8Lp#obK#|t}2ptqX:+5@[w[z~Nkdl<.erx!4l#zxF1%uN5r' );
define( 'LOGGED_IN_KEY',    '@YT/D,q(on-mf1FH+`v>=|$]Ch&~&2XV|JN|HDW:6z#U: *T1=y9e~(Z9t,FeYV,' );
define( 'NONCE_KEY',        'D:1hSzGBtOO.-S%ER>e^bV7hAB^g4tc2%n5I/kP6`8a}S+jWH`8p<(.X}JC*Mj`{' );
define( 'AUTH_SALT',        'R<x|D._83{>Hw~3%kL#zkC<9Zi!SFh9vWy.b^ah=e]C0:mrmZOjBp$x5,Zc>2;.J' );
define( 'SECURE_AUTH_SALT', 'J|u-IZCGw8pH^IcMP%cnj5A|h9uHqx5d4#9WAO+&fo*KY>ds.pfl>@Q&M$[y(Vf>' );
define( 'LOGGED_IN_SALT',   'X|Mep7kAKS)d,n7mU*V*Ut^|(v+0?eIUj+NGOg3A-6rk+/|5vrpL{0pMYDT&rCBm' );
define( 'NONCE_SALT',       'o2>e{_t_q(0]Qh3;~Nms7Ad@l|=ZLOElIeLdefW9+J<K.<{(Xz4,u`8S6buR%_C)' );

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
