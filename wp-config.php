<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_spvcshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'T,@C]bqY;e^fLfAa/([%=YOFGky^mR5*/{^M(UgZ p+a3Z^Jq;z9dHX-v!)g7N/K' );
define( 'SECURE_AUTH_KEY',  'mAXgV{ILaz{$AekSL0upr<)0`Pav;2Hp6!,-6_~NykV4*~u2YL@ZN6m4Go2#Im5j' );
define( 'LOGGED_IN_KEY',    'tHwltOgl|97R|nxV.Yd]R[:+Xw=tLJEFnQ<Tn($zVv5r`@mWNuZWl6-t+io%h-}|' );
define( 'NONCE_KEY',        '!,oBp;}Im/Z`)wXqKsFQKR=Oiq-G+0TI<r$mrd9bZu0UfY59;uXS=n1+s(Lf:=*r' );
define( 'AUTH_SALT',        '{3P|H6Kj#][P/{I09A,TL,QmlMXTGCfr{-PrP0y}@J<<A}NKl8`[9NoP~hC<~J})' );
define( 'SECURE_AUTH_SALT', '}-dUEC~No!iV6ZJWQ:;?~#L/?y/z_lFxa%ki=J,yxhoA.*MNP)#L$A,y*5#4)G2p' );
define( 'LOGGED_IN_SALT',   'L2nO8d&J= Wyou_7!TtVL+-$TH8U5U(?{@kb0+?G>`I9T]v>^dt- BA-*CTV<g0E' );
define( 'NONCE_SALT',       '57Tw[9iFUoTIk-[%jB[lHuAY}X)i9x@ba(z3%dQ/rqH^yvozRkAlN+WpH+&4jV>j' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
