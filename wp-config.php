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
define('AUTH_KEY',         'wj}5OAlq|*r:w} K)YG5kY9&ijWpvLYB%|i&,{C=!@pJ}Y~sRKk_4*`nb2:q07P8');
define('SECURE_AUTH_KEY',  '}Z7W*w>02>-Ocn6}RGr&GORE{kAAq&M;$D>TmY9?(C+ 2G:ca@cgsejN3m@3.2+U');
define('LOGGED_IN_KEY',    'IA%{k1|lJ2|kfv&G(8G%waD<YY7ryGWYlr/U9<VXa]vsxsBW%;?4UiFgi7^$zOBD');
define('NONCE_KEY',        'j?h08o@.N@-lA|MU4>V-P7euu4EM<*62;0ijOq9n[)!nCfwBM9lRh<PAJtHPyqwA');
define('AUTH_SALT',        'UtE+MWmO#2[`{^j]u!BoOVb@<?9Q$*m!vBr0L0;4[zA+Wq)2ZCG.y,4=AA._T_sD');
define('SECURE_AUTH_SALT', '$F)+ot6eX22Me2<*}D4K].~,nz-j:_.}*vcuNs:PY~Aq_h)db[k6EG.3+9XL~NRs');
define('LOGGED_IN_SALT',   'Xy`ih4} 8V9GQ=30ObjowsHj@U^P|NMNfE5Go$W<vz5LZI0{Nwv59XZj>k.}O&o7');
define('NONCE_SALT',       ' LZw|L}O>,683P8sN;u+oBp|nqN7{]1:W$B;N@UYH5ti*A_$YcB}#CDQoUp{a?qY');

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
