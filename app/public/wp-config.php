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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '}XT;XE8iBlm9ncgI*mw?9`_?@K)Y41z?{a,%mCTM[b&F:lQW8TFrB23W+tQcq1X)' );
define( 'SECURE_AUTH_KEY',   'f6TKD1M@tV[VxYLNdOhCp&Q,.,IDq9A>X|D#KiVt%(+y C8a>+/f[bm-{QEVn{uH' );
define( 'LOGGED_IN_KEY',     'k?=i|n>Be1P 5a<|MuMT,AJx)!UVL&`D#$gKiFKl<%*3Wyn75nk}kP+^(aU*u2]Z' );
define( 'NONCE_KEY',         'V^S<ITLuAh?A);ax*#GjZc<Gnk Brspb^14Gk0t,h%Osqe%>rQ8$2-XY`@9DB!{G' );
define( 'AUTH_SALT',         '=(!^Ag :P+XqIBO,y/s5h3g&z}9Xd4^yv&OCr/F1~jVT}vY|_~W$GSH:6ua5?:1v' );
define( 'SECURE_AUTH_SALT',  'wYwUX&rM4d.RJl]jh. 6DNWHG]e|lq2%xn~^MUQpGA!y+,URK6YaL;xt;`tB+f)(' );
define( 'LOGGED_IN_SALT',    'GX!7<_/:dfDA:h]0(XFY,~t@=b-rDgj<:~.9}N`A!XbC`Lg&XsZ!4bU9Z%~DM )o' );
define( 'NONCE_SALT',        '4D`sAIw.M_ 7F[;od~%}3.L.2i!i0sZ7cjMy7{Y[kQr]~89X{j,|e:+q(ySW/rIM' );
define( 'WP_CACHE_KEY_SALT', 'cMI+x|F(polr5iWf/Y1[bPkjobjQ-$AxX$&}@&/7?I}cW`iC_z-,2 G4e)GWm7Mz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
