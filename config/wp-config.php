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
define('DB_NAME', 'creativeproductions');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '-2<1as4z0n{QkLm%?-d}WPI}W-#O%F|]H@F]eK<wFO>`?0[a+y/]N TY%g/w(4{Q');
define('SECURE_AUTH_KEY',  '(-#BF{!(acgWOVBzOtZ(>4|W4a-=|TF>}abWfMys5K}d+>>H${AE[j);:Fs<oG/E');
define('LOGGED_IN_KEY',    '?RO-_KO#d=]U)G=++~^&K|B+z`5p1<IT4kr*`0Z-82Tw$^;.Y[ZrSS)ZjTy[EG>[');
define('NONCE_KEY',        'B.!QZ+Y-o_,w)_$K#Q}:sy`=l`[<R*v}CCX4LqHk/|h4#<+}WclE,j96!ex0,!9I');
define('AUTH_SALT',        'WW-bU9#O~STlb3r)r-_.iWS8(BV1+nyBPL w]Qp*U-7)-F2rr--i(94!8)i^L[W9');
define('SECURE_AUTH_SALT', '9^IgUan&$h+K]v@|e> N=SL<fNFgf]=ERLZs-2XEg|ly=j5|A.V!3@~-csyzs5_!');
define('LOGGED_IN_SALT',   'K^9bCp,bi{`R515~42lf&l(7r[1,`w__yQ2l$v%%N8b)zh3*{__dIyN WxLx!hZ:');
define('NONCE_SALT',       'W^2I}[5_]`xj29i1!?fO`X$<`<g4c)de)~%%rYUF6^B^gmMPUW9VUw`jofy^h</N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpg_';

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
