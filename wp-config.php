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
define( 'DB_NAME', 'wp_wccourse' );

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
define( 'AUTH_KEY',         'f- v Hp[aK+on==Fzyv}0^6~,u~x$P8~VZ8,QBJ/YJk>t2~];3oBPH5laL_*~cOF' );
define( 'SECURE_AUTH_KEY',  'ia5%<J<t:}1D| L0S f7YplwYTx]1bPwwUH%9}:r[-/asQGfwtgkM.;Y= D8k&y&' );
define( 'LOGGED_IN_KEY',    '-OV40;#U^E24*S?b?Pr$OF:9Nw:>;e]{a+#>XnQ^4:dtg)NTjPyoy_y(#2sBOLo)' );
define( 'NONCE_KEY',        ',W::O_wNKA_LM~ c-T=N+?H5]@ChoV3-Rxv7GS1b%lAtS;V$~KHX^U2lYg{l0pDt' );
define( 'AUTH_SALT',        '~TX?cy&vTb2:_.hrn]]Gg.)]HU>X@~yP+g+0KYj<=Q$p*<}PNX[k(p!dV@Y.TA,a' );
define( 'SECURE_AUTH_SALT', 'Z~4x_*}ei&p(^eI5lV2.H+w1aCRHWNSj:Lp9Vrt-{WDT0Yf&q$3G&:p!,L%,Qeis' );
define( 'LOGGED_IN_SALT',   '}$jPO@1Rx:Y=i7XrZ4jSC=o%hEmUm-%}`Nq2CK^h6+#{;4T%1]%$zsEc!sC^oyKJ' );
define( 'NONCE_SALT',       '{ixBn+7{e=NLRh_<YZYx#<.iNHOE1Wg0/=,oI S1S]KH;s}TBSPaQkW8[dO* `W3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wccourse';

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
