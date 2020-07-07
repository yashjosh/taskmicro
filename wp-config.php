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
define( 'DB_NAME', 'wp_taskmicro' );

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
define( 'AUTH_KEY',         'THKcRLUObS5~Frq;8#Gm4~WojgAU|[Dg~ku4uC{f~Q_WE]185JRGGl(l$w];+x|U' );
define( 'SECURE_AUTH_KEY',  ' x)W`}VKo>`BKq:gCY!E>!SZ=7#XbXtH#Sx*5s1+1p5(];J<K z<7.AhurO}4.Vt' );
define( 'LOGGED_IN_KEY',    'UMMe##93l^;L0J@STjHU3)uST&?Nu^L] m-qiPR.K0W>MhbXg87qwW5_]IIO _JD' );
define( 'NONCE_KEY',        'WZ/g-h}n,x+2cvcSG0xr.oWF$4TilD_0qKZ}H3-Ew$[/v>u|WRE}nZ0jw/TpY./<' );
define( 'AUTH_SALT',        'ffJg?|KptmlF.`RSmP:hTNg?^p0*q$* LUmx<;D WG$1GRMD~rkTA4{:(Dl(On$e' );
define( 'SECURE_AUTH_SALT', 'HA>7n 0y0iexH2)G~q<O3mp;|IX.ezk&^}pWl`e@7,7%0sh9m(v^41`m}G?6}(jO' );
define( 'LOGGED_IN_SALT',   'oYm9%6+}n%OzWtW$~MDwOK`9x9urO7ClDQk6`kZ>jkp}-9$^^K-=12#DL4H@2AGX' );
define( 'NONCE_SALT',       'Ard;8Xn({HxK0S&jM3>Y(++{gjY04&/A&b:CqcVJeK=}1.64b;jNaL[~l7xSKZJ8' );

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
