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
define('DB_NAME', 'univdata');

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
define('AUTH_KEY',         '7RG#O{7W[H/ln+hIAZCbv]jgs]nW|LbNoOu/>Y!gjoi>(iE9ZH/N(vAbJ+G@Anw8');
define('SECURE_AUTH_KEY',  'lQu=yu%]W8#8]XK~Jz{vYbuZvcCmw_wGk$9sCg1S;(HwJZOfh4+hMsE#tU0iu(c:');
define('LOGGED_IN_KEY',    '<|N/TEb7%.{Szza*b;~xz5_93XSa/q|(w>v7eboRYcn0% E2RViFC./+dmA]X&8v');
define('NONCE_KEY',        'wM)<C040t;9BTkDV6/$DY6O[>063f2ET)n/f.dX<{=ExF8PY1qr&~.r89U0!VS+J');
define('AUTH_SALT',        '2z <5+*j?_[-e8At/M$]XQz]V5CZ_]_bo8HAMiXRF%G*lIH?z>=O[74B,6r5{ZCy');
define('SECURE_AUTH_SALT', ':R?4xp,2B=T?F;v$-O!^:[$.9+AxW.{ZcYjBMprz7DFr-`f%AwI:,9pE^*Nh,?X_');
define('LOGGED_IN_SALT',   'R6vHX~wObpt8x%|odK +;<|Ec=xhHa<c/d9BFLI]YnzknDP`_Zl1`]B{a(t>K;Ty');
define('NONCE_SALT',       '{Y_wqV.v<xC`DwSXw%bX<.*iA88o>%>P$mN=c(Had37V)gUi+a ESB5_4ad9g28(');

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
