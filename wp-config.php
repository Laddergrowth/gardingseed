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
define( 'DB_NAME', 'gardingseeds_db' );

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
define( 'AUTH_KEY',         '5?:TCOp}^wIQOJ*T1PGniR@;62^iCy|^qS*d)D3/QY=K6|V+*?1|H6DU.Eg?!,nF' );
define( 'SECURE_AUTH_KEY',  'rz0YCiUFl3Hta~c45h|R8Z}xfsyUC`-L?&7kLv(cug+NHO`hzK(s8%-b2rimHeJP' );
define( 'LOGGED_IN_KEY',    '&Sy 4>}S&5-L7qOy9&g->PlakOW!4`6N6PUQo~x;er~Y9{Btw{{<q3}^Nd1m(MeL' );
define( 'NONCE_KEY',        '`{6.;%OH{KQsciSL-|*_XeFZawY s~|2e7=}7q|4<R2TSePyJS B1%Dwh;zHb(u ' );
define( 'AUTH_SALT',        'd--jsxd-}#F_b7C@pB[V$Yz-{i]<$;=g$HEu6#}:^OUBm4ZtLZ-A*_z[<^mOSO.i' );
define( 'SECURE_AUTH_SALT', 'HA3IN{4^S <K.ofE!GeaYRho&#!Hi$zs.!~}C9TRYQ;+XLWF}QSg`~rgJt4%vr+o' );
define( 'LOGGED_IN_SALT',   'M@`BBEMH_$:tP9tkmfd;hOJ||4bAuu|x.7MC>U!n4Q.-1tOMPJ(*c)@e0y^PWP#S' );
define( 'NONCE_SALT',       'm^%O d>3Pw?e*CG?-*rAi.7*:|Ebiq/1lW+W?|e92&vxvOO?_a~5heampvkhnrLY' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
