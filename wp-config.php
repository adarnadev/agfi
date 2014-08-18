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
define('DB_NAME', 'cdb_ccc2576493');

/** MySQL database username */
define('DB_USER', 'b6d514195b526c');

/** MySQL database password */
define('DB_PASSWORD', 'fefb59a4');

/** MySQL hostname */
define('DB_HOST', 'ap-cdbr-azure-southeast-a.cloudapp.net');

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
define('AUTH_KEY',         'X`<RmRbx-&SEh/1S.~El}L69Ukiy1jwgWs*NCu{4;`Y7Ptj.i||=hH*6wS3 DgDd');
define('SECURE_AUTH_KEY',  'jKSA7s|#m7[|JH@[HCvNnvZf9<s9B`s2g$0.!u6s7dv V6sMw*Id!b_LrC1{K+Av');
define('LOGGED_IN_KEY',    'cl`]?d}55(+HuuscHC-;H#uVO}3}UaJ~M490N2CsX,|/r:vp<hV|P9H,vzh-z($#');
define('NONCE_KEY',        'tMJspQDSYYw;-O7x!&t`oWh:wCo/vb]2}Rz+-N(&s<!+:5H[@:dxDE{A[SuX9e3S');
define('AUTH_SALT',        'iX+qw/>ms)-u+`|=DqBVsh.#$&gJ+([DCSgvugc:lEgI8Q^C|I3jQ~^:2$-GcJBY');
define('SECURE_AUTH_SALT', 'zZ/9s|u{1bO<y3.8b0x?iTOt4>-ywRH0i&FOwet>X6zpV_]q]9@$&9,`5eQUY{@(');
define('LOGGED_IN_SALT',   'n[LZo_|2GGW(,6<OKe(m58X2~Srb0VqkPfqOu1iC@-+6V}f+%8t0lQ-wlz+vn<61');
define('NONCE_SALT',       '4AgR^3he2Arb|uYr{m kQ6r4-C?-><IRXZWxM@d9:D-;6<yde1z1r(L$FTD 8}wg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpAF_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
