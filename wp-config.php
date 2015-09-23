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
define('DB_NAME', 'lesson6');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$cdxvT-=+D|<,pr1yx-o0j&#9kW>`3w5k>PMRqr(9CnyP+T8-to46P-<GhGk?y@z');
define('SECURE_AUTH_KEY',  'v1!#]68HXMJ(WZ_QC}J*{#9p$TAeNxNC}Pr>F`-0F_15QPt`Z(l}c}fFF{-I..,]');
define('LOGGED_IN_KEY',    'UqL3d^;zcokGh lRL#vDZY=gBH|+5;h~NQ;759*K}-Kt-4F~jr*vHj+|r*X!-@}:');
define('NONCE_KEY',        '5k%=08+LH,N3XxAEavd*^RXc#$@No9@um:5bJ]ftP(hSS6`K2Pcbd#{k8!eu]J5r');
define('AUTH_SALT',        'Nf%vn/s>Dnu9@xv<XT>.rhI +CI/RT`A]nxhk$j+rtF``SqUL^3)3ylB,%-2+U2b');
define('SECURE_AUTH_SALT', 'K)l8}A@M`#Y:tp]kFF+!+GI!ZV ^yj@|Z!T x!<3iC-1e+dN+ |L6|+#T)AdiH$<');
define('LOGGED_IN_SALT',   '<>=d,-.Sa$@IWXKeU1:-M(wB(Ni<Tto-WT]9,SR&/X |]Sa0FKSgeJ,|nIg`7x9D');
define('NONCE_SALT',       ';N_)+#Y`i%gP<i{M%IJ-;Ql,9-uO@N9#&>|e--zLo9hh5WJjAqP3TG8G&i{J<sg;');

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
