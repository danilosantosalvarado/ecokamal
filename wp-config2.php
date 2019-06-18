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
define('DB_NAME', 'ecokamal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'master');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '`{o/{(m%}*py`DI<Wi+/st6N 0@E8N9,_VQNVCvkXl6qB-uuYG7  G3AuRH,XJ)g');
define('SECURE_AUTH_KEY',  'JtG)nj[VxwYdanC#g45J/akY)4YZlsgFQ)6b huIkpb0MD+a&i+7`0*{7X<CA:HB');
define('LOGGED_IN_KEY',    'Ayn!G+Bz-|Ic|aK 13rQIk~os]Zhntj#3hUE*BW]Dc$;LyBy|5qy9/_YPs:XpzHu');
define('NONCE_KEY',        '-l+#m;+dmce0e72`yKX@G|nhBdFm)rAX]3S6Z0G#wfcce@w/d0BO/XTrkFyV@yom');
define('AUTH_SALT',        'b]h=iyw?W-D3TZ;qajW{;Gq[1;IT1*r{7gR%?scXeM`V6[+y<s+bJ*jBzR {}-N8');
define('SECURE_AUTH_SALT', 'R6<]+%etG2-:p<Lz.59pkD*26|5|=ev]~-:1rE}!P-y[oj7-+O7RXj;h~SB $z:-');
define('LOGGED_IN_SALT',   'u+w#vd(i%_bkv|9l#yhny1,%`:&b T+z-@8P!,YAcbB Cn)cV}!=mj3WX$Gy h W');
define('NONCE_SALT',       '|Kh5i8Mo-Y.w2Xa!QT,5YAmk@WZ~#A ng*i9fU{@[RO)GaCy65W;P>odG!:=.`6a');

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
