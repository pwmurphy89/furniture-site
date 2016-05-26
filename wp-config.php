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
define('DB_NAME', 'furniture');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'F[:dYr#+ ;6VjMFJ~D:}cOSMXTv06&B87@L1-AikhY<<.7}7k0$gRk}L~j+1niHc');
define('SECURE_AUTH_KEY',  'egLM)e}uKwb*!AIw6%WJK Qw;@CL]u9KM$<>fh@:h@3/I1%+lcb ^e<C+oU658g7');
define('LOGGED_IN_KEY',    'Y_]%4<fe4:Ycbm@$k 7d]Tp1TqB7=|Bm 9Qq,A*Y|!}z4X|0LTVST2&@YdeJpBs?');
define('NONCE_KEY',        '7G6Ry1S6&R7iq+Z81hbBW/a=VrB{P 5izUXU*<}lg*OiT-Z:gNN#p6pKlev]zW T');
define('AUTH_SALT',        '+_%a$+o T:N$,JSUJ1cneQ@cQA}gXit[evvPK55cs5zgi4E&<wot(YT3B10IIW,q');
define('SECURE_AUTH_SALT', '#1W;$NpqtUtN&W+Mrne34J Vu_qC1N 5y+)&aK Ix-4DR69v;c)Wm{11s_ o,2Dl');
define('LOGGED_IN_SALT',   'j Py(bVO lz}/Jz&vJ:e} 6?{=9F6D^DXa.@[=-{Xi6YZvG6IZXsdKRP$krlsKg:');
define('NONCE_SALT',       '|Bh?1zoZ;#}IW4wi%B9e&&5LPXvsAM~j5%Q1-g1GJ5%l^WCFLpihI.A?{NIClcM$');

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
