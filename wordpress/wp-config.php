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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2>ahN-]i=524ccu(Zs>P^<=`Y=->vsAb#Ziy*JRi=CuDAyo>Rb Yf{WL2.(%fs%K' );
define( 'SECURE_AUTH_KEY',  'm26?=Dxl5$7OxTDk:STUmgUm!u!?^mP~YaJH&/nzDIXVtpGWaU5i9e#MgTamYN}Y' );
define( 'LOGGED_IN_KEY',    'Z oHA+/==441Ck]_ NS?r8@Ic;.,wPH~b}}Hz/E`2LYtW=GF53zb|9xOVfnS&Tnl' );
define( 'NONCE_KEY',        'A)iK|OzY$OLRT(nG~0i[;Zl^ hv 9?kIN+%3t.gdLt sEf}Eh8+/{}#,?;n#ph`/' );
define( 'AUTH_SALT',        '_nZ)@Ab(;,BS;bl}o<r!{`[-6L#:tX*>3M`s 8z%$cE:)_NfSt;S/yaz0N;CW,[r' );
define( 'SECURE_AUTH_SALT', '.OQp`g4M[,;AS.]*y2h`W8H_H X~?|v.pJQHFpd&jpU.y[ZVL?jqj]}|o:{$.`uj' );
define( 'LOGGED_IN_SALT',   'Vj2&g5skK|kazMLypK&.+Zb%#Z]~k?%EfT#*!-p]v+1}5~c~y?$t,g5+F0VNGZ#v' );
define( 'NONCE_SALT',       'lE$<&g2gcjb6-kU!BfT_)6p4y ]/?E(<&d?S8Ps{w$o.G9j5qW:yo,lvk^0Kg[Dj' );

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
