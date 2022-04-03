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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marketingwriting_db' );

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
define( 'AUTH_KEY',         ',=Rg7;af MNF(#RNjGsS%/NDpQq;vO)t,c2-YAf>l$+vly1f8L(qMJGp(gA~|bqa' );
define( 'SECURE_AUTH_KEY',  'NXpWO3c77cKIA*:}i!G|#3/Lp5^$l^jnw*vbd4+Sz`LF3&[yA[hB=VLd*?T7qCG*' );
define( 'LOGGED_IN_KEY',    '6ei(~KV8mCeNu(g7#2M b!1!~b8x$!h>|CoSYmfU&m${O>o-oQe)P_LP4q1 8j9N' );
define( 'NONCE_KEY',        '~jt}|/39xZRJGnrjaWjYg%zs2bz;fc>[#9c4XlwL(%8~`>vG<[It29Ji< OkMu*,' );
define( 'AUTH_SALT',        '[bX+>JDuYfbiWlhcsV@>v6}: ;O3yH3Cy=Rik];?TzE,~gD-N[=/%T-eSaY*Afs.' );
define( 'SECURE_AUTH_SALT', 'q%AW3RI=;8m(O|j zdEXOUhD[,l*7H;jQ|4y(&tM[F]h#mtJ]aM|O(3+4;Dmy7E~' );
define( 'LOGGED_IN_SALT',   '[i)*tv-y@i?-#+/f$yw$c_v9h{T$pqbp&p6[gg]-S!YBBm)#h;[{,3@)%d|u{{tF' );
define( 'NONCE_SALT',       ':wNi0ifN?#L/HavVYrEASa~Kin-fXr2#WviVXPj~qMEeaF~!u@PyEYwP}wNtA*V!' );

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
