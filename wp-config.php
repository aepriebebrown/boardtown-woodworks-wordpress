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
define('DB_NAME', 'boardtown-woodworks');

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
define('AUTH_KEY',         ']+cgr#G`D8.X9!ZzM9$PVSM;2hnXZUoRb*z8._K>#Io6dp:Pm{0M,i)I|=/WP:M8');
define('SECURE_AUTH_KEY',  'O(}lyYk$(gj1^nV0,UB[*-rp+}1@cNY$&^,oq54zbU[joVH;,{odLv=kHWCn{f>8');
define('LOGGED_IN_KEY',    'Ho1:g=X,!Ytk]mq)3zw[[oO9CcNL&XtEKjL^S8P[U,oZLP,Kd:`*N(iSP+^I7*vk');
define('NONCE_KEY',        'NuA:cRLTqxf>bXub+3d QJzCC24r=f1&V0_cq>= ,w-Uh7IZm:H`eC}7|rp4D=;U');
define('AUTH_SALT',        'fzo,Xp%n1LZ>QE-hlHlYx2&S8.#HS^%Ntb?ZlR*ZR+0@#a{Dt^m+ssKj{PIQ%JBf');
define('SECURE_AUTH_SALT', '-PNNNl9Q~{>T+.iC,OKlk.]$6byN=N[yGwC,/Y|Hj1%Xd@cf9.^E4.CH4>2On} N');
define('LOGGED_IN_SALT',   'LF+ U,W$,Z^-KD&H-1A#&$yTn4=`=2`UiSyZJpr0VU;3htavb}Wd$:EqJ`*E$7r^');
define('NONCE_SALT',       's cX?qSBlxkGE{X-veCV,Ex/53B)mZx{<]DiA#pG`;Juz^W&p?^WW9T&??31J_0m');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
