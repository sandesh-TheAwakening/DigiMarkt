<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

// define('DB_NAME', 'gaiq');

/** MySQL database username */
// define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', '');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'gaiq');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xumc:GY7(/:A@L[BT$z&{U]q_[~HV`oq%fr/[%da$TND=Xg<p W/,,U).j35:J|1');
define('SECURE_AUTH_KEY',  'J1YMUJw|9enrVda!q[J>K]mllkGg-hzX~,sYe2{>shXjFzo{t]]1IXL%shR-:& w');
define('LOGGED_IN_KEY',    ':%*%vt(t7UuW@+?HSt#rS~AyU 9<59G,yG,;j7@,$}^Gl:LLoH,I<1=#rz_6[}YC');
define('NONCE_KEY',        'rzz8VkRP2|{Oj}5~O8y<<k!*G[{|R%glyy0@>9Goj.=dQ{4,B|Mpv)oCG0>nZcYz');
define('AUTH_SALT',        ']8%S4LK!lFaJ?`GgI#]-JqI`Ks8^O48jVj,n6<ZWU7?2[m]4fM;vDRH)+WRf 2gg');
define('SECURE_AUTH_SALT', '/]nND9ziyFk m|l3D%kxdKek[zoR1nvnp!:R*|8uix?a9~{q3 #)2IP}>Xi=lo N');
define('LOGGED_IN_SALT',   '(E;+ @u+1bJ0x!x1V/[*!kW>cK%0/Yl6A(TfO;>nJADiHmB,uyp:rnUBS/go! aJ');
define('NONCE_SALT',       'Az{dvJ>4@>J ;Iiwtiy>*zg~evjiY2z/l|5YcM$sM@ dIW$-^AAx?vT~3FY]XwbR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_GAIQ';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
