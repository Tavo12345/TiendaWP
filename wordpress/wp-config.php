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
define('DB_NAME', 'Tienda_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'helios');

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
define('AUTH_KEY',         '*_ s:*;8Zb<WDyhr48|^%WR9>w;Jr_@/`czf2ZCyD}c0tXfaT<%KX$fP(Lr4W5_=');
define('SECURE_AUTH_KEY',  'xcD21} B(?u+*A(5(/!vJEvLeb_;MQGCadsl-Tu8.=cfL5]rBxY]vXH)hR/DQlFZ');
define('LOGGED_IN_KEY',    '@bxl=L9<8=~C4)%5HlhJH,(`PZ4>g3`iulLnd}5E-Ehb`r-6~Q%#C1VRB[vgqR3D');
define('NONCE_KEY',        'bH:a({h,4@ufK,;{C1Bm@]O]K<tc% `RKls@vXNaa]tshw[^Fao~-Lk]Yup3Rr#8');
define('AUTH_SALT',        '{;A6Ld[F^;):LUH+^=Kz);L+I2dmXY9,b>EjsXfan 9X_T$]em#t#mxv$1qC4X?$');
define('SECURE_AUTH_SALT', '5ARy*}pCz=NN<I:DB%EY0E 5?S%NoJ)G9vbmxC_{D,HD5ZwiJQek1{io]}C>Tkw~');
define('LOGGED_IN_SALT',   '^Gpp0%paB%`wQo#>1CsP9q?^Yo.dyjr5P[e,Gfk?l$8WQJ~Pe6^J]E_|vp&NLF@M');
define('NONCE_SALT',       '-aw}wnUh@$VgEm)gW%:e&JJU$Pc@4@LJrrpj9c+5o0Yif!mQtI$yvle+&fbLdo<z');

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

