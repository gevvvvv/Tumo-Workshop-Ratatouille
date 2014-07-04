<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'IYn/-/AwF>y8|/ImDph).|s7y@LOXfRzw=Tc%#}xZ!F>1)[$=^@6f|:?G@}*4`cJ');
define('SECURE_AUTH_KEY',  'y,fd|Ro:I/vJI}#Y:Vl/5>wXbCz9${=L-I+rr1:hDc8}wRhMMX`=#ui1+8(:Z2Y/');
define('LOGGED_IN_KEY',    'uIL?Oz5-(T2l*Vicf9%SPdb>2&tHk?Mc:_,*2<8}8cNa|l{SXF2)C-rf{F0siH^0');
define('NONCE_KEY',        'yaie-[&E(Jp#~^qwQm/vx$x*|E:h|-oR7^a9agW|m,08;}%bBHt,/- Ns:{,2v>2');
define('AUTH_SALT',        'W(wJ9FczaEr,Fwf8m{po:|).G/8bGv%mdyFD:+h*7^+l~Y3|qX- +R`JarTjum3-');
define('SECURE_AUTH_SALT', '3U$&|~|O6l64hx^l&L+)(2C}KK}S8~Ry~2E(0q:-:a&~V]3@M/UD/>}R(}}*i|fw');
define('LOGGED_IN_SALT',   'b,:?v^donVZn2kUa mLULx9ya~yl]$zqH_spHH^kN)EL 3xfM:E%Y&M `[ (++|n');
define('NONCE_SALT',       '4iv VfW=5CJ|IR:R]7Y7=GJq^n!.EKz*wqGv^o[-|+7FyJe4S57(oF`F=5#jVGMB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
