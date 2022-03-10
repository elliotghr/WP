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
define( 'DB_NAME', 'dogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'UD<!e6DM*x1p:AN_U-am!^ ]8d=]S5=s{BBGPjwB>Uc;5lmO+8Ib+?z9hGqat,!,');
	define('SECURE_AUTH_KEY',  'cn|(}Z5CY>Pxv8{#c:kb5+N>+2n*>e3Q|YSOw~S|_g1}i2<TequbQfvH93IVX4[)');
	define('LOGGED_IN_KEY',    '!<vrVKCxoe(J+ki`j|MMh1kRn-Wwjy+R.ytFKLZPAZq]|) oVsHMSE@Oz*9+%OT8');
	define('NONCE_KEY',        'Z=W4wHxOi@tl%+s=zv1kC,ycH+q~]b6P27&#l/k.QqHBrCjTx$h|[%P+P)vus|$|');
	define('AUTH_SALT',        'qZwXju)8nH.:;N9%#gN2sCJb$=;<V2X0.6u8Z+F tFz>vp%cU&HKvRDK#:z1C{h5');
	define('SECURE_AUTH_SALT', 'n`Nf[+[v}TJ8o&[Zx#mY[La=t*?! YVh[}JSf#kz&*q{OI3bb5>Be5Ptyr :(]^!');
	define('LOGGED_IN_SALT',   'q&ji!cRo:Q^gWI)zO9kEkI)<&!l:vV j&75X*c@kHK7,+oM[ASF6?/-+Z2tXj++L');
	define('NONCE_SALT',       '0*!(e4>2X/L@^r{b2$/5X-)m/<e|h2Yqij+hW`TEsFAL/ .BaJ<Gt5FzQ%iw?ETm');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'guau';

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
