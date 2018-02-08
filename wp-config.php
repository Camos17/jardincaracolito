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

// define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'caracolitodb');
define('DB_NAME', 'heroku_a11a36e5824b3c3');

/** MySQL database username */
// define('DB_USER', 'root');
define('DB_USER', 'bd88e087a42eb8');

/** MySQL database password */
// define('DB_PASSWORD', '');
define('DB_PASSWORD', 'e77d18a9');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         ')of[q;{!X9HhVeF;.[U64x%|8 &sWdFLUW9Mw*c-O!h%s[n?D+_5H%62aXN);C!_');
define('SECURE_AUTH_KEY',  'D?^N$b!pEayq{?fECcC;6zi[TsvD9E~[X(,ZT!mQauF.}DSA;(cea)A(h: R4cH/');
define('LOGGED_IN_KEY',    'eFRbDD]ZUDY{L5)tTQABG26rVAsN1hRir`=[UPa?OV%B|AAoj7`3T~`!s:(bEZ5D');
define('NONCE_KEY',        'uiY,egr7US,/WQGvpRotz2qv`Bl8gX$60[8PS>q5ERo04U|:,_7oc@|&[BT`Ck[N');
define('AUTH_SALT',        'q)a+o91a~cU>Q6T?t@v$YfNc;jcElE,#1>l3j3.}>Hj~q0Z@?eS>!L&c{B{2<,g:');
define('SECURE_AUTH_SALT', '^y@S,agb)=A:wkXO*f4Glr4]SqmL)h<8.:l.ff<{YHN`.)jfcNk#D+yB>e4`6*8]');
define('LOGGED_IN_SALT',   'zzJ}V@${bC|xhjh1ohO(VZS>c}KcC!47!T7]&Ghb#yHA#v?^cN*x1;*c#o)f2[0!');
define('NONCE_SALT',       'CAf5>!/@<;YK,>@;@!v[JCUR$5kv,7oC.]0~,7e|Z&^WxxtGKEEzM=s9*Sd#RNRx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'carac_';

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
