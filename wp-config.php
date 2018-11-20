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
define('DB_NAME', 'asrc_webdesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X$=jF+Z8f8Qe{X~A<).9xbYPSN~1OW9yEy0m%e*OPb_($^1=Pqr[r?q)W/02c:-Y');
define('SECURE_AUTH_KEY',  'OtQ()8|}=@2RafW*)$;=4ACU-b?f<L j8AKbcgwLQ.|ay>~0Lohn3!lC,HswXA7{');
define('LOGGED_IN_KEY',    'dOfM/pMnGhb?/ 3~M789nRJT=f|(V0GBDQTc%!s7Cd>Q>N+bqn[4:(Jy(#cj ~4Q');
define('NONCE_KEY',        'Wp%_UAo8gp;>$O(Qn8^jkQBbtC~V]1: XVtT~A|&7&fNB]{YP,ogD@K<5T8e6$>A');
define('AUTH_SALT',        '2v|z;Q836~-oDKX?hh0d7sE|H2&6+mg22`wp/$zDrK]I/QWOyIP%#Wf0FoG`W4z|');
define('SECURE_AUTH_SALT', '/gZ;1_$L[#4zb7b/ua?jLN<|lEZ9/5@kU!I6vj0G0p<0{A.UZXmU#o:}E-2VNT:k');
define('LOGGED_IN_SALT',   'z%#W_7k4gIb6WF;r}p@CW%c0IACd!V2@,i}2GnMqynJp aI*IeA~5$$P6iZ)sy&<');
define('NONCE_SALT',       '.3$*I52#$z)lAfy~W{Yu7&J.uQf tS_^`0he9XnB/pJe$r1-0.@xw[HziyxH-$+0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
/*define('WP_DEBUG', false);*/
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
