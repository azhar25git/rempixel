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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '_7(|p&9G3oxhzh] /GOgdms~4)^RMx![;`=JM_jG! U3)m;ELzT%/P1Tj7-pqgZJ');
define('SECURE_AUTH_KEY',  'onw#;+C9uAWpx%Bk_vceLDDww[mf&hI:;O0<iqf.<i/I..7lC M[tRHT=^qmDwT+');
define('LOGGED_IN_KEY',    ']K|ncZ1Me`!h eGAU6Jzxa2{IzA:=#s&&pM0/!D^mG*/7j$x^W4<~JX%o}_J=32H');
define('NONCE_KEY',        'W|41WtO0!x72GxC#Lb)snU1bc`0V;vw2z:YL}Md!BC7d&%E{t2ZGO0)z:+Z$m-_z');
define('AUTH_SALT',        'S51RX&LK9v`,JR=nH@:ct?L8xF<Pu,-$^C~`deleMQ$,T.C$9},fmaduGb@P<5{r');
define('SECURE_AUTH_SALT', '4#V&_%q|NL*gb{xzgj>0@a12F,PF.]HYas5)/!^5}];4&VN:m*{8N5#J~rY<O2iE');
define('LOGGED_IN_SALT',   'q,KgsKDak~zNI@ih~H,fRHjT^^~RpZ@4j|dnwTqXqkXcvany!QIy>ny+YFl05DnO');
define('NONCE_SALT',       'B:[&X0woGUm)ck$O$qGo3N9>]!kHCO[iG-* sxn*4Em+&65B=ACD~5|khHZN3M-E');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

