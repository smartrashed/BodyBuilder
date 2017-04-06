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
define('DB_NAME', 'body-builder');

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
define('AUTH_KEY',         'fN_<$Ao]?_knk^xBl)C859m/CyHM`h +geE/XaIyQmNkah-@mXaNX<:<2HpJyO@I');
define('SECURE_AUTH_KEY',  '77L:h^jq]7UxA^Rh7i31[`0y[U(q^g%Dji&<xzbJsSLkb+n@mT0D*c3LQJ7HCWUP');
define('LOGGED_IN_KEY',    'rtbN wAQYK`6gT^}&W3i2DaZHmT2@RkHb kD(5M}!u!CjQ}Yp-ZD,X.Cmg-l{hH=');
define('NONCE_KEY',        ':9Qj|duV=jLEP]MF 5/mPNdfr^zasd|hadf[DKnF.Y!In @IaSo3C0S]AdT)#FzZ');
define('AUTH_SALT',        'I#;#Qx<D9W&v8 pT?1gZ[ }xT(T?@(vq! Wl,RJ|VgrTVrNRii+pQ;x2Jana  kl');
define('SECURE_AUTH_SALT', '>]=0,(`QH{WoaCSpoHZf?z}cOW/kYNOX44CM4G(hPU-NK*9C9j#q$5xmoq<DuQ`#');
define('LOGGED_IN_SALT',   'u)tV7i pit&K7]F/K(iX^nRTfVJkgaR1|}eLyU@1,^F:=a92O(+=Ql6.^/]cw^VL');
define('NONCE_SALT',       '}]GcCQ(8{ZwiwPwB@x^a7/%>m2 b:gt?}l.X+R_Df`xuhw:~7CHJw36jOFJ[e_G7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbody_';

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
