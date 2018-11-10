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
define('DB_NAME', '{{ database_name }}');

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
define('AUTH_KEY',         "{{ '19`n)5UID,8d](4gtE?*.Wb 29.3E^`vk~/,g#oGY4i(yJPj<E3M}z8RGg/AFY)R' }}");
define('SECURE_AUTH_KEY',  "{{ ',pim7YA~g/&6$0+)IKqG GF2Ey~@W{3_ei|tYD.W`[*D{NB$%DN{Tp18}LX>[21)' }}");
define('LOGGED_IN_KEY',    "{{ 'bGnix.0uS?SDH8^4!wtRh7Y[Q{%3Jr~9K_#o~3R+:j)*i4c}#+#d=+oj4x%}|3Zg' }}");
define('NONCE_KEY',        "{{ 'T/5>]o8!@J #db~wQm6Q ,#A$;ts|3w~,_;8mUB5]if_2?sn#1h=F89EBt=%,)ec' }}");
define('AUTH_SALT',        "{{ '!Q::?.x/#8E-$sa&/4Cs`k`xZ|9gR{yrj+9UlN~,?Rf9+j~/t{l<FlvxVJlD4U&1' }}");
define('SECURE_AUTH_SALT', "{{ ' -in0nMLmFemz6C(Ep1=EH`jx99L~D#kk22qY_<qZht6(Xtb/6SHN N/aKXJ5S25' }}");
define('LOGGED_IN_SALT',   "{{ '#I`C~I$)of_.>{j 9FVP|jzIFn8S/SbTMT5wHw]V~:k<w||EYDF$#*DIS9+Wtk@4' }}");
define('NONCE_SALT',       "{{ 'DU/?AL6P+=*7q!67Zj!I#y#lyA^)AD4GfGurFuL[q0jQ5%p:)MMD(^)QaL?e|PD]' }}");

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
