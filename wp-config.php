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
define( 'DB_NAME', 'thuchanh141022' );

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
define( 'AUTH_KEY',         '9AUBrC*R;}$|66tS5<S0dij25+]KUFsMdDl)IAA`7Q}]MDX`KSw`<FKgSYEdGQ+g' );
define( 'SECURE_AUTH_KEY',  'l8*lIq_`5y$4jj*/N?_423$+[Eo=5@CD&[WjrNoi>t}[lwc;rU|{D0Ih.fP@zZ%T' );
define( 'LOGGED_IN_KEY',    'eSzvRNI3^ZWPhnkI 4c7i Jvktd~Bkfh)evKknF4;{G%TTd7(+tln~6IaO UO)Jj' );
define( 'NONCE_KEY',        'tP8NC~6Fa0@iadjWNA!)wxD=cIJ$*PM>^R JE0C&wHcz0]bn^5.==c!rQZs ?X:f' );
define( 'AUTH_SALT',        'YJX00T*{6P8neMy7,pvzg?4Q+@lWn9RvRz2!qyp&^R(yzZ(IM3o}%NPW(IQd>vKk' );
define( 'SECURE_AUTH_SALT', 'p!$$*s}9[YQN>~b4)X^Sa^`F#t~[{%G/#zl:uK1!yUea3;2BU3U6%VB=5(tGoW{~' );
define( 'LOGGED_IN_SALT',   '6fFwu_qgi,3(hZyB/tc&tJQM>:%G&::[v3s_Hoqp7sbB2s%,#.nhHYosjr}*?Okp' );
define( 'NONCE_SALT',       'Fm-2oYvO4~{i+fCb@`{L[OD|BF^9puPhiYAWOk;U1{4,s60}=dwz9z_s8f]V/9/p' );

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

/* Multisite */ 

define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/ThucHanh_141022/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
