<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '37920320' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tHQ~>~DOJ }Ylod^VF]Jv ^xP]}A-LK7}y*Y*F 6ls.!^83@bmD+>x)c8kRf}5@z' );
define( 'SECURE_AUTH_KEY',  '#ACT0k1C% -5Ix,} *$.(_j#wW1IC-|.ChuFT)*dC=W5z)$H;WQyU:B&43fwm*qD' );
define( 'LOGGED_IN_KEY',    '[cJcs~r;Jz#FQ2{rg>$-UN0fC0:va(D!|/(?b?_IfL:BF:a+h*Tze<C:77WzVIfZ' );
define( 'NONCE_KEY',        '-MmI7_<)vc6Q21{.N g*&}al!Dt29s3geb,fgYxjh(#-D]Ck*#u5v#@sm7X:t-a(' );
define( 'AUTH_SALT',        '+Scz/02L 1A(YkiILr%1IA>qvR/mT+R)~?o UNg8kbtFoAdm.rWu65h.*^~>Rv~k' );
define( 'SECURE_AUTH_SALT', 'W{Y|S#0K(H_v&gXqTs}Q+wg-9mBgCa7$f1ao/.vic>(># x7THfZxw[JRbKTW$(5' );
define( 'LOGGED_IN_SALT',   'T<M3=|w5wPxAqcv.p}<DlDb&zw@K9`d)X[@M?6rdfhE61|U/~.-TLp?<,_ w};S8' );
define( 'NONCE_SALT',       '&pLvtk5WtBI;iMx>Me.d::#e~n{S~L+83 &C=V(1&suxQ_%qF|n7^+wfTB;wdtz:' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
