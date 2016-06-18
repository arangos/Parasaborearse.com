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
define('DB_NAME', 'wordpress_12');

/** MySQL database username */
define('DB_USER', 'wordpress_e02');

/** MySQL database password */
define('DB_PASSWORD', 'MevR4i86_K');

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
define('AUTH_KEY',         'F^@ON1gfn9qYVBnrVsH%YlO#DkLm2Xp^I8iT4N2V!GIb@R!9SBsp%9OF^Jpyid*c');
define('SECURE_AUTH_KEY',  'qyFjp1SCxdXaEX^)2jsvupMv!k6dlgwrzvS(5j@e1VeEw4Btg0Un^)mdTrRQjUNX');
define('LOGGED_IN_KEY',    'xEQlVnA4QSdB@pWlQyBhmCCEQkNN5ptdOTc%j6gcF5F!YAkpoS)yJBkhXySa^XeN');
define('NONCE_KEY',        '7VZ7XyBXpEIUiLH3Ia9JkchcgpZgFIAphWo3cZBG8^qPnlsj*B0I8ex#Jye22a58');
define('AUTH_SALT',        '4Lv#VNm*C&NC@gr2YI0Ug)&y6rSaTlUiXmdYgJTqw0isHDXcJBJt^RVE6fzXulZm');
define('SECURE_AUTH_SALT', 'k3USU)A%hRb!al%YUG%bD34!b3rdZ6z1Mp@dB5w*4ZISIHdwEIx8sY)xp8DTMywd');
define('LOGGED_IN_SALT',   't7Y!a658VQuIxWAmF^ll8TcfhQaSYga!^EtADI%VfKP8(UeXBZaKLjIPH0OTspCl');
define('NONCE_SALT',       '8kM1ghX9CDPKy&HYydBZmb(cNDW@eY(IU(yynj8njplVPu)aEhp!trmJnss1g7JT');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Ck9779_';

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
define ('WPLANG', 'en_US');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
