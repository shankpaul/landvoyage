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
define('DB_NAME', 'landvoyagetours');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '=Um0,YiCTR_F./k|k4zLed#C0:eM|{.0_afyc=P7!Q$(Uahai3Y9-M # >9gMoOS');
define('SECURE_AUTH_KEY',  '/f|{N>`OIkw&RV`GW:6] l  eop(hrnBfqG#f3JL;e.,GW*pDUYDhDZ=$?#a[ux=');
define('LOGGED_IN_KEY',    '3I.U2_Yo*y_?lrMcs92(~OfC_Hv#V<f$8{k[gSKKC4qE&:^uY8wp Xy|P)~-;#hm');
define('NONCE_KEY',        'F1pu#?5{r~,lC:`VTii<H# o4B[~0=Z><!=xoY(GuK-#n`f#uJ$S]rM)Rr!mR<^=');
define('AUTH_SALT',        '+{NScjXRNFy3P2j+?W([ vk)xC=?fVN[Dfdh*dTMMq-elt3&6&&E1>^ISbXu?b*v');
define('SECURE_AUTH_SALT', 'kCnB>Y1sYg9khQRuP6XTanZD++$Dp(8[v.H|i` ZRlut3QE?PNFb/Bw7j9sQz,94');
define('LOGGED_IN_SALT',   'AC?M69ytkUYzqO[[#A#Ki#}URUC9UZcYt*4++X!$f@$Pk>K0-9WCIj.:18b5y8/i');
define('NONCE_SALT',       'ep!{@Bv}r o_S*AJ/0l tJC?}+YhL`2dA1# N&j@pt}%Sv1`{osnW4{;*>PvN5PU');

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
