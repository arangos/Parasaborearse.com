<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_9f');

/** MySQL database username */
define('DB_USER', 'wordpress_354');

/** MySQL database password */
define('DB_PASSWORD', 'Catherinriano1');

/** MySQL hostname */
define('DB_HOST', '50.62.209.196:3306');

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
define('AUTH_KEY',         'VPU*0fgM8VKKt%HXl&iH2sf)r#sew!T1FlfptuxotEXMP*bz&A!5eHe0ei)&TuB!');
define('SECURE_AUTH_KEY',  'QrpLm9pmTwl8IyW6vum@AjQTCvGlb&ZjWrOLCYxz6IfLrIiiDwW8gddFEAzLPc5q');
define('LOGGED_IN_KEY',    '&3Pv0q86DX^XDMSXFT57!ph5GEb8lfMlrBw8CMAiwb(tz7IU#ic1EQzZ)q9S9sr5');
define('NONCE_KEY',        '(oTU4d6SOThiexC9fajPZU623n7%wzKaG3xmz7nResco(31cplqdTItPehnOmrtE');
define('AUTH_SALT',        'V8nxR&HGzZk^3IZNasvaGUjAsQ5GUe2jAyV(^kV&DEblQeK5zGW1PC5j^uz6@Rj@');
define('SECURE_AUTH_SALT', 'WdTkNuqoFWiR3tAULL7gwMkiNE0tfBGQzkjs0wVc09zlreJqIK80L!d#XArhQSW%');
define('LOGGED_IN_SALT',   '&@Je#CmoR0YsNhw6C9!eKW7yMUrhma(!MDuNxP7wGB!OnY73ZtdXF5ZWbdgGgnfg');
define('NONCE_SALT',       'lq&XLv!EW5wIH9kU1d0aA%MSr*K2!)jFCFa26LOb3P8av#B#lGNJuobLUAoJwI!c');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DhG3kxz6Gl_';

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

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'es_ES');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
