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
define('DB_NAME', 'Test');

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
define('AUTH_KEY',         '9(P1*_4`-.8!F?~r]uby]/!zki~Ghf9:F3PWBY}.ZH,WNTM(j4#n9QGb6Y.|=-4)');
define('SECURE_AUTH_KEY',  '*h<T&WT_w9dv%?=s?n?~c2INP$m/aF,YZ*[i- Pr@aTnl#lNtgtt604?J8olx~oZ');
define('LOGGED_IN_KEY',    'R*~Wb>(X4):Am#dO8O,E^b^>I_ua`aRB1kV^ue[FP4t`MI70pcs;r,niET+C%:Kb');
define('NONCE_KEY',        'v;O.q$Q;`TrHJQDQaRBIW<4&0+@Hwn9DhU:}AVJdH[ YO}WS.s% if9rTG!#PO< ');
define('AUTH_SALT',        '~$5yc{v/mZR}rjyVxQG4?]%(H6GXOj_?*#g_c;ZRC}ucD9`F43yIK@ <5<!)S->0');
define('SECURE_AUTH_SALT', '@`4<.!l4Vfj._-z7;sij%x3fcJ~3]S[F3HVeM0QIz?&){?nNvSakxfXX[x2XKRK$');
define('LOGGED_IN_SALT',   '?;p$3t.0N_#q UnMq:&6ZUgQ,ob<xd3Zck?K9h)ZZVr8/.[)e%xm]9YCog^otWhc');
define('NONCE_SALT',       'p)zeNi{gH1VBbzW[uJy{*$CRZkE/c#l<N}jx=j;POta1o*Xn[HVVIi6!:7X+LV,b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_caleg';

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
