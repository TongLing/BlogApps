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
define('DB_NAME', 'TONGLING');

/** MySQL database username */
define('DB_USER', 'tl545716730');

/** MySQL database password */
define('DB_PASSWORD', 'MHXYtl9461');

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
define('AUTH_KEY',         '@D;8Zc6-x=mW+L49=mv*{y89x1/i6z|v2!6M@3axaj?)[>{DM-S!2=}X: |NOlNg');
define('SECURE_AUTH_KEY',  '*bc|_=}+`JQ|OTT|T(-%)u3l;qVnM@EiJeKsVAet>PP?<shi5D-+D7Jpp>`Xo-=d');
define('LOGGED_IN_KEY',    'tdzV8n3Ej})cf#<YQ$w$J!pP+YS6#qgU`= 3QQ#}%L+g^A+h#!_nNJwfj+7d/L,=');
define('NONCE_KEY',        'D8||v{i||AuPW({UIhQ(^XQgg|SuG7KPH3nb:Z#z~NLK^gyWPoIppr%-ku$dZ&3m');
define('AUTH_SALT',        'tlpJ0;)>_Jb%jQXxqrUc`F`z0e+AC]lY9S^.r&1E^t)sNoU11VaGFpm}GBSx&K<-');
define('SECURE_AUTH_SALT', '+@L8D$Z`8q2[Mw`OS+X+dH|f2vG2Y+Am)*Am&+yaNA~K-g0!%t1bxi0]DX%hxnOV');
define('LOGGED_IN_SALT',   '!f-#L8y-R~pbnrd`;a_|a1iv?ZN$}RHokz1$%4,|bnJ*^r|RbSlU&|38m.[@wL}*');
define('NONCE_SALT',       '-H;PkR|/RP) 5w&,yuv0sF$Uh$Ni)BaEc/xmG-7]`&~/;9r)gy`]cx.f-QxUm]9+');

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
