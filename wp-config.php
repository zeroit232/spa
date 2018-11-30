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
define('DB_NAME', 'spa');

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
define('AUTH_KEY',         'Em8L#5T~et6oVqUsK7Y8VM>pIV>!jy4^*3X*mPhE/-#%gnPpwS4N37i:2C9l$k#?');
define('SECURE_AUTH_KEY',  'xsP-O0p*6w?w8%[+*-7F2laZ,VIlYo=%Rb>9[ ?<se$B~UHZXnc0ZX#DY:Oer5Ht');
define('LOGGED_IN_KEY',    '@h:J)3BywmP~?RDN0Q[LyP2l:7:bht+ox=H$B2)x}(GRus%^_SW.Ww]j9v4*fI=7');
define('NONCE_KEY',        '36RJA#f%?3HJ9)!>(93mg5|Z}#tIj.Xsl8{jKKNpyoL%FG}j9{>@bg~7P_(i._zj');
define('AUTH_SALT',        'MF~thKS3HPXVB*jU)^%s&p,?gmCHyDywUKIN3#cRTph1s8 ~I(q.[?J:1{vkw/_m');
define('SECURE_AUTH_SALT', '?vK`Av5XWG!t8Z9&0|5CbLL}I[00w^v~+YTvQ2K^,z7Q&&FB>V8>JdJ|)D7/-gV!');
define('LOGGED_IN_SALT',   '_x]*Mw0CqjsY)J%w$RA`8NQ%Ah3DrMH}~ NN;eVtGjq =!,LAh2A}1Sc$3=}X!tz');
define('NONCE_SALT',       '-Sx&Kb<&Nin%VZ*Eap*hzt|aY}hS$#jLax)(9Aj~sO;nE]`;?P|W7@9XKA|`di%E');

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
