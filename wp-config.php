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
define( 'DB_NAME', 'catalog-an' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<lksY)YL/K,F.F6M!]jv&tEdx,#vK,P9wT%YcntT|AAzM&~wa{oE7;V(M^u/]!6J' );
define( 'SECURE_AUTH_KEY',  'VW cpsB2.MbZ/zP>P^DR8Vcg%qEWn[0/7p_0`&o7(^YE*OE!EDn=w:lXq*{LTtPf' );
define( 'LOGGED_IN_KEY',    '?&b4WykV0gC6^_$m,)$:Yn)_aZkvm&Ol^- :6{KN3]X_Qq3_Kg*rJW-NR4y:}c,l' );
define( 'NONCE_KEY',        '9O%z*nI6&otf98] s:{6 o{z_[AH=N+tOOJF*[GCUWR|6-esZ()Lzn=:/72Fni;T' );
define( 'AUTH_SALT',        '`J2LK*w g{cLHj$(T{8xw,Zcp5*XQ]kBpQtjT<~^+~9Cwhovz<}^W!22AqH#ny9*' );
define( 'SECURE_AUTH_SALT', 'Q&qvI`MAMKFSf{%?Vbjy^I}M4D%Ks}(N)/4Bu1yAq_`XnSNhR?V%&|7:i XX+orA' );
define( 'LOGGED_IN_SALT',   '(bA`ni0if%&nM>l2S^?onS`k=x@;X96m:Jv,0>{N1RaxAel#>,P{t2dtGIpJF}Zk' );
define( 'NONCE_SALT',       'G}l:#RQ6#?:qb=+RPHfTCFmM]TTQP8.)@T=?QOY+7#zOhJ./Jk{>q0T3ER] 4Iq|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
