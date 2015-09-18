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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Gi:xJA.pJh7SY;T*{m|bSm+CdI;t5C DS70vKSrNnv_w@3,FY +}FK9n81V0>vZC');
define('SECURE_AUTH_KEY',  'ls^TRsuLxevq#wDhC)(UDhJc% Wc.l}8x|;.:+)c8]nCv1_!sNG$LCy^>I|uG&o~');
define('LOGGED_IN_KEY',    '}?9&GC/%aM!lM&R9`_E/pUZHO#X3IU5-6s+@GJVVJJEBrvlL/m/!xwaL>eRP$kMK');
define('NONCE_KEY',        '@poFw+%-uNT,peg-Ud_1`*n|+`^qW3vsvg/6zoa%v8T;5*<c6|^g>t2c@^2188YX');
define('AUTH_SALT',        'jBRH^E2t7]9j92e60&CH}CNj^N]Z`o4avGH4]-evcGRZ?<xz~%Lw;Uh%_D{Db?HU');
define('SECURE_AUTH_SALT', '[7;uk_h+$]9.7Y_|8B!Z.r2)jess,|7+]/-(~`m(_}JKfi5mK 3s$Ckmkp.|kkt}');
define('LOGGED_IN_SALT',   '?m:aCdIoJYLfFIF!R.U!-c6 X1(3,X}P~q+O09r{C+yDx%K^|X!w3AQ@^z,FmZ>i');
define('NONCE_SALT',       'Q&BPXvo:-A8fd<<6d=)RJVN&;*jXBSbS-9%L|-ubQ}g==-,J~Ctt%j#h,DAcmYYc');

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
