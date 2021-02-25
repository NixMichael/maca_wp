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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maca' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JVC1ioh#z?L4g|L60sFJ ENBssO8j:l$x;XU_fosoI)M:*?&C_C]}CX~+>^f8Bq*' );
define( 'SECURE_AUTH_KEY',  'RgmRFl0Iu.{k[o+|+ht:(5U2t3Azi!.[sQX/YI0YcQ&bZvrip2UitBb88U^v*.,-' );
define( 'LOGGED_IN_KEY',    'vj#R*+;V22Z@gZU]zu,71/v|/i|T|y%<LM]}x)S?O5Ekn[$(qh,]bUpXvD,#ipB8' );
define( 'NONCE_KEY',        'uCT@J)^BTm5@9QUX`)T1q0^.=+K/^c5<xja?&K1}@a/1L,t-D+9/.daOXk^#_D{/' );
define( 'AUTH_SALT',        '`bS(@cq4!&FS>s#| GB^. t+Bn]Bn9cP[MJGgPFVM g%pq<`]u35yRn;FtJeIJg5' );
define( 'SECURE_AUTH_SALT', '@+y*1 I@50GrC<<6?*Jz9V,_D((n._{V2C%)DAGOD%1)nJ$O*ihd:A5{-skN&O@c' );
define( 'LOGGED_IN_SALT',   'lQCG|UH8UhiX6&vpc:EY`EQMYh;QDD6s Zmn>tmeu~GzUEYL1&j9?,rGeyk,[Q]M' );
define( 'NONCE_SALT',       '/hD!4G65M*{ViYN; ^-gjqCuNnJjNKj/9hA*wi24,qb=*[hQCt#OESkQ3~F1+Ro`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
