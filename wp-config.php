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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '#*avcR6h}p,os_:VlCL%.+9TS6K])3j6vVrH3aU$Gs?[8{.eMRWL}&=zi5k%21gn');
define('SECURE_AUTH_KEY',  'h~` rT)#w?.1/+.wL[gdvF<}$ubK0TN2bqU&u/?Aj!s=Z9u@`6ZN:*Y:2E+{wdvD');
define('LOGGED_IN_KEY',    ' -`!kg1&{}BD*JG|O8G3R-D~TTd/qi5X$)0qP|E$HtjHH^/A9BjM2^uS[j,7kejn');
define('NONCE_KEY',        '|7i8oj8-WSbab4m9N bF}efB7$FF12ZTw:>;]JXT.B)yKlkJFm>%_b$u%vxVeXa ');
define('AUTH_SALT',        'j`v=aT-B5EJ]6h7):0(<B$q{ENN`MSVABu.&JcU]ah!qNP57;QV($sjW5UNwK*1D');
define('SECURE_AUTH_SALT', 'o;eG>?N[$N,!^hKx#MSx:gaj`4hal$3L.(8XAmk3AyH1Zle0V5#_.WtyGg5I|,}$');
define('LOGGED_IN_SALT',   '[}>ec$c@]mnm5y}n)[rXZN37%0_pnH{&u=|o$^3+zOF~Qrom(x~Ct9BW9*h]?FHK');
define('NONCE_SALT',       'c5X&l(|KO?XwmeHkS#?scr+^GQxDc4Xy$c6hoh/W3(+u_oA={re?.hHuu7_9(}[w');

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
