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
define( 'DB_NAME', 'digitd05_law' );

/** MySQL database username */
define( 'DB_USER', 'digitd05_learn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'learn@123' );

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
define( 'AUTH_KEY',         'n-Pmv2RF|vaSSe/x+[}c#}cRr(s?`f4Y#(:X9oq2)f, H0F,4m9bL3KBA~{PWXro' );
define( 'SECURE_AUTH_KEY',  '7[B-%s=zqnkx8><b8eGU{i4q!%?PES`Zie,)]#2N#lC&SSXeJE}*QLKTjztmL[MT' );
define( 'LOGGED_IN_KEY',    'HP?.9X$Bog-6Ut6}M7wPl2g*!Duz.dGVM>E*#_5FM_[,,ms$;igH?:<Tf8dZzZ(Z' );
define( 'NONCE_KEY',        '<n_[|rqguoW!Al60_OS({}]V6#Hju(>hMR{t|^7l{q&T>Lo>iy*Xt5yw:$73A<vb' );
define( 'AUTH_SALT',        '7IOVj%5kvZRr^SPN_v27Pr;c:a/Ef/m)S*f`:+VgRECQ$7U#MO`e[M9QG5X?]XK$' );
define( 'SECURE_AUTH_SALT', '`8BRX)aqh.:Hvfc,v$;XcJ?Ze&){B,y@]F^ZsLV&0Zj4TP]+8IVS3$33T#*Jzs?8' );
define( 'LOGGED_IN_SALT',   '4r)-?yj3[x1Lj8c({1w9)N-pAgQI?WS3JQ^p5C(@6peEoy!jO#rxUQwD5$}T;ex)' );
define( 'NONCE_SALT',       'j|xG-)VT8V)h/?:ei*4QZiBmfv2E<Fqn6X@c0C<-9j$_kmR$H9T}.Jwg.7?H^Jdr' );

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

//define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
