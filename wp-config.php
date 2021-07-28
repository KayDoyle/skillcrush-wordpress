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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Pct?fOK)+/joik,q N5+Lg}SC5{h+,DR#iOZ4vXe4z06ncre00[L,a|c>V}d{3!=' );
define( 'SECURE_AUTH_KEY',  'C38VFVYX))Kx8r)$)voLgn9U|aI&#5mMk)c)LNZLjOov~bR.veFl!}K3vMGY.2v=' );
define( 'LOGGED_IN_KEY',    't3T_imMP9Lrp_U+NO6K|MuMfgX7K}xYb#aA@5q}*WdT$1l8N=A3J]{=fC[$nmz69' );
define( 'NONCE_KEY',        '#S`QYw7flBgRR(Ti<%9sq$[[x1;@GOpm4+PH% Rf0UAR,)@h27;P:1T*4(u:_+_p' );
define( 'AUTH_SALT',        '#S^=6FNv#-^Jy?:Kd<C]QivIyj@l6,bK*>LI&xU l7+Q[HL9&X%?Enm1a4iS%ufB' );
define( 'SECURE_AUTH_SALT', 'u4PeW-u09jeJBlfnb9Vo&|G3WT}[#wk0x<}5a~<}[OH}9TDj_Fg6{<k?Qg90P?w+' );
define( 'LOGGED_IN_SALT',   '0u,dj`kJ*]PRaH4K;;A$idJ=.g.lYL&Lj:R1={W*{c?t-E9^:Q1jdqWbyiU3wjNz' );
define( 'NONCE_SALT',       'FoI?-^x]/!K4f@g_wF2#~CrzJ`uSaX2ql=p*KnbR&J5/ct6$-3pwxeIua4!:Su(y' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
