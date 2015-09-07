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
define('DB_NAME', 'wp2');

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
define('AUTH_KEY',         '/NNZ3p=,x7@+n/)wr|<X~Ooj|;Gi[B|i`w_A5p*GSAWlola-0dK!e|Z2gOf$vy8!');
define('SECURE_AUTH_KEY',  '%O$XK]=@GSEX F%R8yq!T]RI]-T}y{e[>~<)VxO5uP4Xr~=DYn2E@cRvi|^~g*ER');
define('LOGGED_IN_KEY',    ']ECZBV69{yaFJZ8>-Z+diMdZ>V]9mWB-]2Q>C>}smbL#9T3+^+tf/}=]-,a#y`|[');
define('NONCE_KEY',        ';/m@L@A!SbG_n8lA|Q/:pB>_@Oh-;dK-dh}o`,+xZz7ZceTWBpXj.%H[U-hI_$>G');
define('AUTH_SALT',        '<LCaOn&pCtFF`Dx9x0)Kq`Vu1e2+nn=b E8TRr`|}>IIo-()V_|gpmzsl377MFJe');
define('SECURE_AUTH_SALT', '8IfUIf|BCs8{)9R. #4.t!qGYwML&2avy|-tqk+,f&)BX7b`css<,zOk0x_{Tqnp');
define('LOGGED_IN_SALT',   '-g@2|d ^R*>=)+B+l~xb/u|2%akT<!CY,Xl^*`#_^Jh?5kxfBUHDrTD}kBP}hWC ');
define('NONCE_SALT',       '+3Dum-w7$ zWY#_c_)c;b1[8tC2_EB99|m<|,Cd/&l^=+?|Z%u*]O|pJsO](Y+=Y');

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
