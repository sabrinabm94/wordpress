<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** Database username */
define('DB_USER', '');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y0e:YUO8/^e5$Y`^hwib=Oc6*!nJ|N=eSDD6SXy}HMZB0{~-iQ[`<J=V>f?}|`?|');
define('SECURE_AUTH_KEY',  'dDLQ5U0R8/f,HEZ|VkmEE+iGt[CupF1L@qd2{cxrx9-LtEoLdZ7b%idxtq36oN_z');
define('LOGGED_IN_KEY',    'M]zF}4y2(a|lA<;2D2g,~V~wf){v(XI+?Zx,~eE)Ik* 32)d</o.HfX^Su2IN2!S');
define('NONCE_KEY',        '1eB3 jZWGP^}1,wL*aYS$NYHa#n$=YCsVZIob/OU-?P[Be2ycf-V`k)NkPiX$]Zw');
define('AUTH_SALT',        '{4lh>W)shMXl0U$Wv-}g<t^:$`Wtin`?*D+I^mH# aZ_Cza_=KOe:;!XTN8H+K#<');
define('SECURE_AUTH_SALT', 'TnMsr!t;*pN0IQ[Sk|W$0;FNV)-Uk!!+J!Jqy.*+;]4$}4!p1}.l?Y{]Xvl;Nc+>');
define('LOGGED_IN_SALT',   'ML`OYK0o+-W,eGTn{W@9K7~Y/##9uL{yp_oBRX0jo?I^-hWhCQ|<Ok}#)G19o3kq');
define('NONCE_SALT',       'PW__/X#DGg,|$X)__IdrIW%`}9f+n46m*|y61vxc4|c}qBlb&{kOY?YfL?sZYTMh');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
