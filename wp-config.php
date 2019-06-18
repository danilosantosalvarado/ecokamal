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
define('AUTH_KEY',         'n3s2Pj# (q(GazEPr_hxG_8TTJJz Asa-tb^1c%; VKz#}rsFq{H_)gbb]Kr)g4!');
define('SECURE_AUTH_KEY',  'y:=}e6dxWsN+ai!~N(J,6;a?uUGx#==1@m@2<b(:;wd3fW5fvR&_4_NsEuzLC;LJ');
define('LOGGED_IN_KEY',    'Adbk=V[37GImF#T>vE(3Sz~ok`_-fc~mZtnOe~bj?afo*zVnhx1xHq-OkN{FjbV.');
define('NONCE_KEY',        'z[@y/1Y>qGKnD^i1pXR$T,!i]$0~{Aqnn]U|~Bqw3~rz[B6@5NmZo)pF?T}/U0:t');
define('AUTH_SALT',        '/V$8Ze(53w7Hx[K#GPx50t1s,Lrb%>Gn8f5/zAuCk:HenW2>WmyZiSlUlJpN&n4P');
define('SECURE_AUTH_SALT', 'OVdLXDS{Hb3%`N>=oH,/8Di)0[(^OG;%,)r,7k.;HTquryLA0JKDulp7oJnHU4.7');
define('LOGGED_IN_SALT',   'joi]SgJ%.GE+T/gp?M@xU2[^]|3 k*(rz:ibQR1;^(co,R,$l-Tj[~yL$VriNq_M');
define('NONCE_SALT',       '1hO2(;jgG.sZJJ(i=Hb:^`d`bk[#%G5xwM#JfP])*SPBUnTj-}daJy`}WSFbmVVn');

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
