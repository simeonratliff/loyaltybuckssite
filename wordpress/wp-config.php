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
define('DB_NAME', 'loyalty_bucks');

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
define('AUTH_KEY',         't%fg<jb8C-~ohgqd!TGK`EZnm+CnY;yxR+hYh0`t+pgS ]o$E7SXg-yb&!I}Lqb|');
define('SECURE_AUTH_KEY',  'v}aU9AB&j3#xwi4/C7QTzRi*m/[<4YayF]$6X%O:NTd|}$h6gJ+UXlVM%s22MQFh');
define('LOGGED_IN_KEY',    'qt?%;M_{6mLAI[^0W_0(1NKBl:n(M#+G/6^B*8bpK8[nu6:[Q_l*hm);;M9w4uv ');
define('NONCE_KEY',        'IrBX`m>fbFY(]2howi++g0NNfeY?S~b&=k6C@cjK{<W/;r`i.xDu]8Pb|P?I%D#E');
define('AUTH_SALT',        '0&W#slim9}i/&Z[S_L1d%|2;w?`5M4*(UpDjS#LSQnd~-,Gj]Pv%7d94L48~.W{o');
define('SECURE_AUTH_SALT', 'MBW9%-4Sn${[e^D_I9M|7!O06yvS,B$-0t/,~D%kBI#3Y%?qSdc:P{7o%Yw9ZyJi');
define('LOGGED_IN_SALT',   'fIX[01vD~Pa-e`kCy>$TPc&![o>M1E*wPZIc/Vm[^7?31<lA`*5Vr+Gg=+0d.z;Y');
define('NONCE_SALT',       '|&2s7;G(<NF|JAVgN]~Tt?`|%gG4&9Lp`[*tz;(~-L)r8t~GL j@e>ViFtC)6$,|');

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
