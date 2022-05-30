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
define('AUTH_KEY',         'f%+xV|]mFx-%:3*xQ.BZY^5T BpXL3>QoO`vnU78CV]vfcvwqD,?x.9`I!!@veD2');
define('SECURE_AUTH_KEY',  '.fA;=cz.MTMf{D2)hqqjR,gS MU=aFH.~yELY=axLNK+1M87X=T8=.|X~^X|IG{;');
define('LOGGED_IN_KEY',    '@E~BEJ$8&~xzVKa/,eVy{y+HV3bub&<dVA@I-tag79Rpw*#+PwE++!^CwDo|8u}%');
define('NONCE_KEY',        '%{e-2-8|D8ya$d-|zSXI@pC~r|Xc|dF{NT-PNh7@<@#1:+4H~v8.XIR<<;rZBYD4');
define('AUTH_SALT',        '==3j9$fN[8je=@{;UFd?O4X-`~z|HOMa9b 8M8L[13tU+ebQLG)h3gF?>naWmF1Y');
define('SECURE_AUTH_SALT', '!KNVL;/+%h3SL$x6B~:p-T6$`s{A@<+SdOxX[ue(,k[Stm3OLm)UsngXxt|.zE*]');
define('LOGGED_IN_SALT',   'd+XtVOZ/B p|~n9:CY1 {3S=}+Vx0R]jAtLxW_|M=qzHr1rL:sk1tm?e<=a9-yBc');
define('NONCE_SALT',       'n6|?P[3-PA:3W&|S]B[hxmoq;v#2G}^%Wy<ZLv9{+v_G+~7|$#_Y^wkpz|Qh`y)i');

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
