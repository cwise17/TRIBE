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
define('DB_NAME', 'tribe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '<EV6y,2b0ROTo@Y4[]ya)~-E6?+0L8#Z(roZj.)K3J#ZL}snj7%,+AFsG0[uS/h7');
define('SECURE_AUTH_KEY',  'M-+[;Phk{Ht92f6>(p0$u?@<z+kKvKR^O(+`;H7LGn-;C@oTgtm{.m[2iFPwo[Lz');
define('LOGGED_IN_KEY',    'ps,FYul`O_yMe cK^>z<:H8VR2:wu>*wPoVu58>A0qv8k/+8xO/f@pY-,AS3n~=^');
define('NONCE_KEY',        'IO}$s1}6-+dP[(T~4C+_>AY9&6M9IOm>;S|i~>9s^MRFgSaZve>Wjf(2oz]8}nyu');
define('AUTH_SALT',        '#C^z;mLg8,YAO`te?ZRenb#Tf%di.aOT$Z]PTdU/sM7i$U~4% fyMP.hi#%rbwyJ');
define('SECURE_AUTH_SALT', 'oJFsRVl]2garn|OKy7Wq?)S~}E8wa:)E)NWo05j~J8 yV1[I@No-!N;hD@g:1{KS');
define('LOGGED_IN_SALT',   '3P}j^l$>{[!;_B6HaV5|s%7W/.mZ-(B=:7t,RJ4aasbZj^<B3U^rvKO/moUKXUIH');
define('NONCE_SALT',       '?y@gEe%yyzu<e/!Y) g`fG}Pld.4m1sr~6i0<WoOs_um@Al9Ty2#U.?9Sn5Mj<uu');

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
