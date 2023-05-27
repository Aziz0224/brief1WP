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
define( 'DB_NAME', 'brief' );

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
define( 'AUTH_KEY',         'gDV#xG!!(2slpegeO|n1[x[LyaQE`G5c5Q1;,#F{2EKn6,Df,LdxCZ]XZrlQi2B2' );
define( 'SECURE_AUTH_KEY',  'm)1Bcobz;M_5(ynE h$x8M/2YFLsHa0.([0Ex7rE6C&X^iAwK~!y6O:[Uc?46#G(' );
define( 'LOGGED_IN_KEY',    '!Qmu+mZ2)AF{^o7! xb5YG @]VUv<BeG)}C_m!$,!Uk9c.`;Pf1HddR!@:gGjE|G' );
define( 'NONCE_KEY',        'CR~cFE&?S U4-m[/T)_<]IpK~V{.0M9mdNVxo%jdS[J6fnS+jVf,XT1k#x#^^}RR' );
define( 'AUTH_SALT',        'VYw7;jjaSI#1*G!]dk}|)9D8_ai(0f$Y#c.&>{*!Iz{D<_$x5Nt> Ji&8UF%,Ni[' );
define( 'SECURE_AUTH_SALT', 'o5ZHc8ldhK9>Bv0`LuI!H5+F0Zv69uUc$oVo:N}bch{a%;Gk!sTm3zzH*#ZVeN]C' );
define( 'LOGGED_IN_SALT',   'xlrbX<Z!so07>Tncp9ow&{;oFe3lotbrjZSQmZf:$k$`V&>i-&Jk%2(Db-F8eO*$' );
define( 'NONCE_SALT',       'g=0x1+D#(za<::n 9;Bki9Y<AEr@dUUnK}CU+qT,-.sCx.O wz2:CvC[ED-Fv}4*' );

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
