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
define('DB_NAME', 'db_giga');

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
define('AUTH_KEY',         '-n#uL)(U3pa6Qiof{78HoB@ce/jVFVK*j(r;wuY-3H{;+&gs%O>icG[6*^%_;VG7');
define('SECURE_AUTH_KEY',  'F!b-e9l_6aLOY6!K;SX<){Yk&j*~~VyujS(z-S!#-CdlWCR_b4}TL#=l[bRMG%at');
define('LOGGED_IN_KEY',    '1gH`e:=Ur^XPa(xsD.b@e#^!;AJG=1Dm ~b(G|9=hs67n9U-A&De6#&2Y|eACsc=');
define('NONCE_KEY',        'Bl+uqB|_au;rOO;qAzN7g)TNuh<:D/<4BV!@9fRtI`BPTLk&Zfh$W$31}jYunrX>');
define('AUTH_SALT',        'eN5I#5K-ktF~RYQZjxJlA38CpEU}!?=SH@3Z%56nTqV?7;#L=9&o%#.-fh#D1g([');
define('SECURE_AUTH_SALT', '(;_hx?+``&T3j~[Y8gZ}],d5WR w-(:sRPg(S)-/EM%QC-[Hp{m2f1|v>`%bFI){');
define('LOGGED_IN_SALT',   'YC0?u.(mDaqLJ~Uo`|td/8ySoPPeHD8@atL@sZh>yZa+Wz]PJTEcCojL]G$MM>KF');
define('NONCE_SALT',       '~;FF&q&A ?^Y<5J-y@-DUY]Hs/x_yVd8E|dMOmT=z*v@9Eef@oA7*GQ]Zi=J**7+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gap_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
