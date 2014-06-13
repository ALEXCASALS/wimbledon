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
// define('DB_NAME', 'db529972539');
define('DB_NAME', 'dotaccesories');

/** MySQL database username */
define('DB_USER', 'dbo529972539');

/** MySQL database password */
define('DB_PASSWORD', 'Hi37@jMe');

/** MySQL hostname */
define('DB_HOST', 'db529972539.db.1and1.com:3306');

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
define('AUTH_KEY',         'NnfFLHTkfMmYo3In4MrE@WgubF^v8Yf*Ql*qeKRfCz0JPcC8lu5$&nZMDU)VHi0w');
define('SECURE_AUTH_KEY',  'dR^)!1fy2KD9DATjBB*eYDHwwAcXzhb3YmZgR9C3b$jeN*68cJqNwBGlmUFHiCLA');
define('LOGGED_IN_KEY',    'bKL(cq3O)B@kjSvqS8YO^dxK$QunhLS7a^r#VO2zY5oL6kDQSK$BP@upeakkg!(f');
define('NONCE_KEY',        '%5LiTXBVJYB3U8@Mp)TlNsxbBr2(xVY@oxB(DPFxRH*tUmVP@Qnoy@IE^QHdA2zS');
define('AUTH_SALT',        '0Nt%19TViibm)6$kCP^xREwaUJFnueNrdnxRvwXqX7tzXAUZuccppCh$8SLv0Van');
define('SECURE_AUTH_SALT', 'g^RdDgKqL4LPtwkGuJjZbwnBwdHeonS7MBWAtoLib3GL$mS1xzAM75J67C^G^nLV');
define('LOGGED_IN_SALT',   'prNSnu9BWU$YwEviJr(7WUj4*XSe^N8Fno)m6HQ^2K(mxOaqNmNPj2AtOFBWx)CU');
define('NONCE_SALT',       'UR6d)^6U7@bISfYMV%NNSJrpP2FspO4zl3#!3n!TQfP2U@BbHAOf9#Cs4NStKN%o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wearthedot';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Disable the Plugin and Theme Editor.
 *
 * Occasionally you may wish to disable the plugin or theme editor to prevent
 * overzealous users from being able to edit sensitive files and potentially crash the site.
 * Disabling these also provides an additional layer of security if a hacker
 * gains access to a well-privileged user account.
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
