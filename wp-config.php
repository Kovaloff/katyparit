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
define('DB_NAME', 'kathy');

/** MySQL database username */
define('DB_USER', 'artem');

/** MySQL database password */
define('DB_PASSWORD', 'argo222');

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
define('AUTH_KEY',         ',+u T6/0@H5b5+I4$g8Naff-FR1}1u4kw4ahM3{W`HW26MJvfT]M>LGqKz-MI,A8');
define('SECURE_AUTH_KEY',  '`oak+GZG=eb~?&RP2^;s&Vh9DOB@ ,f.z-!kGMvQ&dl-T.d.#]1y$+&mW]:>#G|$');
define('LOGGED_IN_KEY',    'b~kt(x8O|[JpqAHnYfibHy#NrC:?K}*+dgPE!W|;0@GPf1]7O-|l@<pp}.7nY#}H');
define('NONCE_KEY',        'F `^C_&Vp(Ko80}0 ,hRXs=jlg^]PskF:O-z(,0)txoc$@^594n]9~^(CEC*zRR^');
define('AUTH_SALT',        'cZXzFM@k{)(v#DXrh4O>U|f.t;1hwFg_U%O893Q@Jdwkr@J94iw2]fP5y&F,Dgh]');
define('SECURE_AUTH_SALT', ']6DH|bV2uVCAD9O6k~3hZ-ZvcL;|?djmA(=IzHlJkZ8?DTiTlhX7$X#-#w`>^b^+');
define('LOGGED_IN_SALT',   '`vHae_JuBme77SeP(QK<xnc7F=]J=;0P-1v&g74Rx$36,(GQFoI-f1!16in oAO2');
define('NONCE_SALT',       'sz|!u4THt`b8Uy@TF4D[?1{>RikU:SgFvN|>0|Dn1|q E&6fD|]l%V]o lJ-NqX$');

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
