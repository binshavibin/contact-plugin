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
define('DB_NAME', 'ecom');

/** MySQL database username */
define('DB_USER', 'binsha');

/** MySQL database password */
define('DB_PASSWORD', 'Binsha@123');

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
define('AUTH_KEY',         'rx?%V?g_JLAX?F2Xjq.XxO!OD:ADP&W]{2$b:|<:jiI:T=5eOW[AsfF,C5T1L;CN');
define('SECURE_AUTH_KEY',  'p[ajfdBd%=_Dqdqb<Qgw>fT.MV lr*byk,If! wq7.aRR9wa`?=ZNE 0O:4=[6cZ');
define('LOGGED_IN_KEY',    '[|5B*jf;etPnp/w {yz^z9%V}H8oTn>v3M <>IG~*w4/4bwNHeT/f19;2GtV+O+[');
define('NONCE_KEY',        'wr5e@%#;rBw#fc L ?1Dj`Q04m3ZU13C2zLc<disS=3jk-;~(m>ZjwTFZ>{xe?ic');
define('AUTH_SALT',        'WQ:6()K~`u3R^1@.4o-[RsyJ~dCVB7.G:PUPe6o=:};$z0vDoGC$1EJ(t$Ub2_Vs');
define('SECURE_AUTH_SALT', '=:G?LW:]$sy,8c^@Wt=WW)y )>+X~%oOoe!j2s,OQ/2*M86U>]+(eBhnSw0C$B-}');
define('LOGGED_IN_SALT',   'w06tNcU2.1~_-Ghz%+|e}.zFZaA8DUhg{[58Ig,5y,`Drr=up6v3xy5:<@{b3pUB');
define('NONCE_SALT',       't;Yny$HBj~kbdnkG}Oq45(OF#MlOsyxQC_37#o~Z[N:cAe.<m#os$u#.M4zp`#_j');

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
